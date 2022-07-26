<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UsuarioController extends Controller
{
    public function __construct()
    {
        //  $this->middleware('auth');
        //  $this->middleware('verified');
    }

    public function index()
    {
        $user = Auth::user();
        $products = DB::table('products')
            ->where('user_id', $user->id)
            ->get();

        $likes = DB::table('likes')->get();

        return view(
            'user.prod',
            [
                'products' => $products,
                'likes' => $likes,
            ]
        );
    }

    public function usuarioProd($id)
    {
        $products = DB::table('products')
            ->where('user_id', $id)
            ->select('products.*')
            ->get();

        $likes = DB::table('likes')->get();


        return view('user.prod', [
            'id' => $id,
            'products' => $products,
            'likes' => $likes,
        ]);
    }

    public function favoritos()
    {

        $user = Auth::user();
        $products = Product::join('likes', 'likes.product_id', '=', 'products.id')
            ->where('likes.user_id', $user->id)
            ->select('products.*')
            ->get();
        $likes = DB::table('likes')->get();
        return view('user.fav', [
            'products' => $products,
            'likes' => $likes,
        ]);
    }

    public function ventas()
    {
        $user = Auth::user();

        $purchases = DB::table('purchases')
            ->join('products', 'products.id', '=', 'purchases.product_id')
            ->select('purchases.*', 'products.id as pid', 'products.name', 'products.price')
            ->where('products.user_id', $user->id)
            ->get();

        return view('user.ventas', ['purchases' => $purchases]);
    }

    public function balance()
    {
        return view('user.balance');
    }

    public function compras()
    {
        $user = Auth::user();
        $products = DB::table('purchases')
            ->join('products', 'purchases.product_id', '=', 'products.id')
            ->join('users', 'users.id', '=', 'products.user_id')
            ->where('purchases.user_id', $user->id)
            ->select('products.*', 'purchases.id as puid', 'purchases.created_at as pucrea', 'users.nickname')
            ->get();

        if (count($products) > 0) return view('user.compras', ['products' => $products]);
        else return view('user.sin-compras');
    }

    public function account()
    {
        $user = Auth::user();
        $nacimiento = Carbon::parse($user->dateOfBirth);

        switch ($nacimiento->month) {
            case '1':
                $mes = 'Enero';
                break;

            case '2':
                $mes = 'Febrero';
                break;

            case '3':
                $mes = 'Marzo';
                break;

            case '4':
                $mes = 'Abril';
                break;

            case '5':
                $mes = 'Mayo';
                break;

            case '6':
                $mes = 'Junio';
                break;

            case '7':
                $mes = 'Julio';
                break;

            case '8':
                $mes = 'Agosto';
                break;

            case '9':
                $mes = 'Septiembre';
                break;

            case '10':
                $mes = 'Octubre';
                break;

            case '11':
                $mes = 'Noviembre';
                break;

            case '12':
                $mes = 'Diciembre';
                break;
        }


        return view('user.settings.configuracion-cuenta', [
            'user' => $user,
            'nacimiento' => $nacimiento,
            'mes' => $mes
        ]);
    }

    public function saveAccount(Request $request)
    {
        $user = Auth::user();
        $nickname = $request->input('nickname');
        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $phoneNumber = $request->input('phoneNumber');
        $day = $request->input('day');
        $month = $request->input('month');
        $year = $request->input('year');
        $image1 = $request->file('image1');

        $validate = $this->validate($request, [
            'nickname' => ['string', 'required'],
            'name' => ['string', 'required'],
            'lastname' => ['string', 'required'],
            'email' => ['email', 'required'],
            'phoneNumber' => ['required'],
        ]);

        switch ($month) {
            case 'Enero':
                $month = '1';
                break;

            case 'Febrero':
                $month = '2';
                break;

            case 'Marzo':
                $month = '3';
                break;

            case 'Abril':
                $month = '4';
                break;

            case 'Mayo':
                $month = '5';
                break;

            case 'Junio':
                $month = '6';
                break;

            case 'Julio':
                $month = '7';
                break;

            case 'Agosto':
                $month = '8';
                break;

            case 'Septiembre':
                $month = '9';
                break;

            case 'Octubre':
                $month = '10';
                break;

            case 'Noviembre':
                $month = '11';
                break;

            case 'Diciembre':
                $month = '12';
                break;
        }


        if ($day && $month && $year) {
            $date = $year . '-' . $month . '-' . $day;
            $dateOfBirth = Date::createFromFormat('Y-m-d', $date);
            $dateOfBirth = date_format($dateOfBirth, 'Y-m-d');
        }
        $userImage = $user->image;

        $account = User::find($user->id);
        $account->nickname = $nickname;
        $account->name = $name;
        $account->lastname = $lastname;
        $account->email = $email;
        $account->phoneNumber = $phoneNumber;

        if (isset($dateOfBirth)) {
            $account->dateOfBirth = $dateOfBirth;
        }

        if ($image1) {
            $image_path_name = Str::random(10) . $image1->getClientOriginalName();
            $account->image = $image_path_name;
            Storage::disk('users')->put($image_path_name, File::get($image1));
        }
        $account->update();

        if ($userImage && $image1) {
            Storage::disk('users')->delete($userImage);
        }


        // return view('user.settings.configuracion-cuenta', ['user' => $user]);
        return redirect()->route('user.account');
    }

    public function delivery()
    {
        $user = Auth::user();

        $delivery = Delivery::where('user_id', $user->id)->first();

        return view('user.settings.configuracion-envio', [
            'user' => $user,
            'delivery' => $delivery,
        ]);
    }

    public function updateDelivery(Request $request)
    {
        $user = Auth::user();
        $phoneNumber = $request->input('phoneNumber');
        $email = $request->input('email');
        $street = $request->input('street');
        $outdoorNumber = $request->input('outdoorNumber');
        $interiorNumber = $request->input('interiorNumber');
        $postalCode = $request->input('postalCode');
        $state = $request->input('state');
        $city = $request->input('city');
        $municipality = $request->input('municipality');
        $suburb = $request->input('suburb');
        $references = $request->input('references');

        $validate = $this->validate($request, [
            'phoneNumber' => ['required'],
            'email' => ['email', 'required'],
            'street' => ['string', 'required'],
            'outdoorNumber' => ['string', 'required'],
            'postalCode' => ['string', 'required'],
            'state' => ['string', 'required'],
            'city' => ['string', 'required'],
            'municipality' => ['string', 'required'],
            'suburb' => ['string', 'required'],
            'references' => ['string', 'required'],
        ]);

        $delivery = Delivery::firstWhere('user_id', $user->id);

        $delivery->phoneNumber = $phoneNumber;
        $delivery->email = $email;
        $delivery->street = $street;
        $delivery->outdoorNumber = $outdoorNumber;
        $delivery->interiorNumber = $interiorNumber;
        $delivery->postalCode = $postalCode;
        $delivery->state = $state;
        $delivery->city = $city;
        $delivery->municipality = $municipality;
        $delivery->suburb = $suburb;
        $delivery->references = $references;
        $delivery->update();

        return redirect()->route('user.delivery');
    }

    public function sellMore()
    {
        $user = Auth::user();

        return view('user.settings.configuracion-mas', ['user' => $user]);
    }

    public function notifications()
    {
        $user = Auth::user();

        return view('user.settings.configuracion-notificacion', ['user' => $user]);
    }

    public function password()
    {
        $user = Auth::user();
        return view('user.settings.configuracion-pass', ['user' => $user]);
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();
        $passact = $request->input('passact');
        $passnue = $request->input('passnue');
        $passcon = $request->input('passcon');
        $u = User::find($user->id)->first();

        $validate = $this->validate($request, [
            'passact' => ['string', 'required'],
            'passnue' => [
                'required', 'string',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()
            ],
            'passcon' => ['string', 'required'],
        ]);

        $password = Hash::check($passact, $user->password);

        if ($password) {
            if ($passnue == $passcon) {
                $u->password = Hash::make($passnue);
                $u->update();
                return redirect()->route('user.password');
            } else {
                return redirect()->route('user.password');
            }
        }
    }

    public function changePassword()
    {
        return view('autenticacion.cambio-pass');
    }
}
