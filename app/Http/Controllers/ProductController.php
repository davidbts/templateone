<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Image;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Subcomment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('details');
    }

    public function crear()
    {
        $user = Auth::user();
        $nacimiento = Carbon::parse($user->dateOfBirth);
        $edad = Carbon::createFromDate($nacimiento->year, $nacimiento->month, $nacimiento->day)->age;

        if ($edad > 17) {

            $categories = DB::table('categories')->orderBy('id', 'asc')->get();
            $sizes = DB::table('sizes')->orderBy('id', 'asc')->get();
            $statuses = DB::table('statuses')->orderBy('id', 'asc')->get();


            return view('products.subir-venta', [
                'categories' => $categories,
                'sizes' => $sizes,
                'statuses' => $statuses,
            ]);
        } else return redirect()->route('home.index')->with(['menor' => 'Lo sentimos, debes de ser mayor de edad para comprar o vender']);
    }

    public function createSubcategories($category_id)
    {
        $subcategories = DB::table('subcategories')
            ->where('category_id', $category_id)
            ->orderBy('id', 'asc')
            ->get();

        $cadena = '<select name="subcategory_id" id="subcategory_id" onchange="llenarElementos()">
                        <option>Subcategoría</option>';

        foreach ($subcategories as $subcategory) {
            $cadena = $cadena . '<option value=' . $subcategory->id . '>' . $subcategory->name . '</option>';
            $cadena = $cadena . '<br>';
        }

        echo $cadena . "</select>";
    }

    public function createElements($subcategory_id)
    {
        $elements = DB::table('elements')
            ->where('subcategory_id', $subcategory_id)
            ->orderBy('id', 'asc')
            ->get();

        $cadena = '<select name="element_id" id="element_id">
                        <option>Elemento</option>';

        foreach ($elements as $element) {
            $cadena = $cadena . '<option value=' . $element->id . '>' . $element->name . '</option>';
            $cadena = $cadena . '<br>';
        }

        echo $cadena . "</select>";
    }

    // -----------------------------------------------------------------------------------------------------------

    public function save(Request $request)
    {

        $user = Auth::user();
        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');
        $original_price = $request->input('original_price');
        $size_id = $request->input('size_id');
        $color = $request->input('color');
        $status_id = $request->input('status_id');
        $category_id = $request->input('category_id');
        $subcategory_id = $request->input('subcategory_id');
        $element_id = $request->input('element_id');
        $brand = $request->input('brand');
        $image1 =  $request->file('image1');
        $image2 =  $request->file('image2');
        $image3 =  $request->file('image3');
        $image4 =  $request->file('image4');
        $image5 =  $request->file('image5');

        $validate = $this->validate($request, [
            'name' => ['string', 'required'],
            'description' => ['string', 'required'],
            'price' => ['numeric', 'required'],
            'original_price' => ['numeric', 'required'],
        ]);

        $product = new Product();
        $product->name = $name;
        $product->description = $description;
        $product->price = $price;
        $product->original_price = $original_price;
        $product->size_id = $size_id;
        $product->color_id = $color;
        $product->status_id = $status_id;
        $product->category_id = $category_id;
        $product->subcategory_id = $subcategory_id;
        $product->element_id = $element_id;
        $product->brand_id = $brand;
        $product->user_id = $user->id;
        $product->discount = 0;
        $product->existence = 1;
        $product->save();

        for ($i = 1; $i < 6; $i++) {
            $image = new Image();
            $image->user_id = $user->id;
            $image->product_id = $product->id;

            if ("$" . "image$i") {
                $image1_path_name = Str::random(10) . ${'image' . $i}->getClientOriginalName();
                Storage::disk('products')->put($image1_path_name, File::get(${'image' . $i}));
                $image->image_path = $image1_path_name;
            }

            $image->save();
        }


        return redirect()->route('product.ready');
    }

    public function ready()
    {
        return view('products.prenda-lista');
    }

    public function details($product_id)
    {
        $subcategories = DB::table('subcategories')
            ->join('images', 'subcategories.id', '=', 'images.subcategory_id')
            ->orderByRaw('rand()')
            ->limit(12)
            ->get();

        $product = DB::table('products')
            ->where('products.id', $product_id)
            ->join('sizes', 'sizes.id', '=', 'products.size_id')
            ->join('statuses', 'statuses.id', '=', 'products.status_id')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->select(
                'products.*',
                'sizes.name as sizename',
                'statuses.name as statusname',
                'categories.name as categoryname',
            )
            ->first();

        $comments = DB::table('comments')
            ->where('comments.product_id', $product_id)
            ->join('users', 'comments.user_id', '=', 'users.id')
            ->join('products', 'comments.product_id', '=', 'products.id')
            ->select(
                'comments.*',
                'users.id as uid',
                'users.nickname as uname',
                'products.user_id as udueño',
            )
            ->get();

        $subcomments = Subcomment::select([
            'subcomments.*',
            'users.id as uid',
            'users.nickname as uname'
        ])
            ->join('users', 'subcomments.user_id', '=', 'users.id')
            ->get();

        $images = Image::where('product_id', $product_id)->get();

        $likes = DB::table('likes')->get();

        if ($product) {
            return view('products.producto', [
                'product' => $product,
                'subcategories' => $subcategories,
                'comments' => $comments,
                'subcomments' => $subcomments,
                'images' => $images,
                'likes' => $likes,
            ]);
        } else return redirect()->route('home.index');
    }

    public function buy($id)
    {
        $user = Auth::user();
        $nacimiento = Carbon::parse($user->dateOfBirth);
        $edad = Carbon::createFromDate($nacimiento->year, $nacimiento->month, $nacimiento->day)->age;

        if ($edad > 17) {
            $user = Auth::user();
            $product = DB::table('products')->where('id', $id)->first();
            $delivery = Delivery::firstWhere('user_id', $user->id);

            if ($product->existence != 0) {
                return view('products.envio', [
                    'product' => $product,
                    'user' => $user,
                    'delivery' => $delivery,
                ]);
            } else return redirect()->route('home.index');
        } else return redirect()->route('home.index')->with(['menor' => 'Lo sentimos, debes de ser mayor de edad para comprar o vender']);
    }

    public function purchases(Request $request)
    {
        $user = Auth::user();
        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $street = $request->input('street');
        $outdoorNumber = $request->input('outdoorNumber');
        $interiorNumber = $request->input('interiorNumber');
        $postalCode = $request->input('postalCode');
        $state = $request->input('state');
        $city = $request->input('city');
        $municipality = $request->input('municipality');
        $suburb = $request->input('suburb');
        $references = $request->input('references');
        $phoneNumber = $request->input('phoneNumber');
        $email = $request->input('email');
        $product_id = $request->input('product_id');

        $validate = $this->validate($request, [
            'name' => ['string', 'required'],
            'lastname' => ['string', 'required'],
            'street' => ['string', 'required'],
            'outdoorNumber' => ['string', 'required'],
            'postalCode' => ['required'],
            'state' => ['string', 'required'],
            'city' => ['string', 'required'],
            'municipality' => ['string', 'required'],
            'suburb' => ['string', 'required'],
            'references' => ['string', 'required'],
            'phoneNumber' => ['required'],
            'email' => ['string', 'required'],
        ]);

        $delivery = Delivery::firstWhere('user_id', $user->id);

        if ($delivery) {
            $delivery = Delivery::firstWhere('user_id', $user->id);
            $delivery->name = $name;
            $delivery->lastname = $lastname;
            $delivery->street = $street;
            $delivery->outdoorNumber = $outdoorNumber;
            $delivery->interiorNumber = $interiorNumber;
            $delivery->postalCode = $postalCode;
            $delivery->state = $state;
            $delivery->city = $city;
            $delivery->municipality = $municipality;
            $delivery->suburb = $suburb;
            $delivery->references = $references;
            $delivery->phoneNumber = $phoneNumber;
            $delivery->email = $email;
            $delivery->update();
        } else {
            $delivery = new Delivery();
            $delivery->user_id = $user->id;
            $delivery->name = $name;
            $delivery->lastname = $lastname;
            $delivery->street = $street;
            $delivery->outdoorNumber = $outdoorNumber;
            $delivery->interiorNumber = $interiorNumber;
            $delivery->postalCode = $postalCode;
            $delivery->state = $state;
            $delivery->city = $city;
            $delivery->municipality = $municipality;
            $delivery->suburb = $suburb;
            $delivery->references = $references;
            $delivery->phoneNumber = $phoneNumber;
            $delivery->email = $email;
            $delivery->save();
        }

        $product = Product::firstWhere('id', $product_id);
        $product->existence = 0;
        $product->update();

        $purchase = new Purchase();
        $purchase->user_id = $user->id;
        $purchase->delivery_id = $delivery->id;
        $purchase->product_id = $product_id;
        $purchase->save();

        return view('purchases.compra-lista');
    }

    public function delete($id)
    {
        $images = DB::table('images')->where('product_id', $id)->get();
        foreach ($images as $image) {
            Storage::disk('products')->delete($image->image_path);
        }
        $products = Product::find($id)->delete();
        return redirect()->route('user.index');
    }

    // public function edit($id)
    // {
    //     $color = DB::table('colors')
    //         ->where('colors.id', $id)
    //         ->first();
    //     return view('admin.colors.edit', ['color' => $color]);
    // }

    // public function update(Request $request)
    // {
    //     $user = Auth::user();
    //     $name = $request->input('name');
    //     $id = $request->input('id');

    //     $validate = $this->validate($request, [
    //         'name' => ['string', 'required'],
    //     ]);

    //     $color = Color::find($id);
    //     $color->user_id = $user->id;
    //     $color->name = $name;
    //     $color->update();

    //     return redirect()->route('colors.index')->with(['message' => 'Se ha actualizado correctamente el color llamado ' . $name]);
    // }
}
