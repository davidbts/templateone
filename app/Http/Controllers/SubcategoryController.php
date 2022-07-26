<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Images;

class SubcategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function index()
    {
        if (Auth::user()->role == 'admin') {
            $subcategories = DB::table('subcategories')
                ->join('categories', 'subcategories.category_id', '=', 'categories.id')
                ->select('subcategories.*', 'categories.name as catname')
                ->orderBy('subcategories.id', 'desc')
                ->get();
            return view('admin.subcategories.information', ['subcategories' => $subcategories]);
        } else return view('home.index');
    }

    public function create()
    {
        if (Auth::user()->role == 'admin') {
            $categories = DB::table('categories')
                ->orderBy('id', 'asc')
                ->get();
            return view('admin.subcategories.create', ['categories' => $categories]);
        } else return view('home.index');
    }

    public function save(Request $request)
    {
        if (Auth::user()->role == 'admin') {
            $user = Auth::user();
            $name = $request->input('name');
            $category_id = $request->input('category_id');
            $image_path = $request->file('image');

            $validate = $this->validate($request, [
                'name' => ['string', 'required'],
                'image' => ['required', 'image'],
            ]);

            $subcategory = new Subcategory();
            $subcategory->user_id = $user->id;
            $subcategory->category_id = $category_id;
            $subcategory->name = $name;
            $subcategory->save();

            $image = new Image();
            $image->user_id = $user->id;
            $image->subcategory_id = $subcategory->id;

            if ($image_path) {
                $image_path_name = time() . $image_path->getClientOriginalName();
                Storage::disk('subcategories')->put($image_path_name, File::get($image_path));
                $image->image_path = $image_path_name;
            }

            $image->save();

            return redirect()->route('subcategory.index')->with(['message' => 'Se ha creado correctamente la nueva subcategoría llamada ' . $name]);
        } else return view('home.index');
    }

    public function delete($id)
    {
        if (Auth::user()->role == 'admin') {

            $images = DB::table('images')->where('subcategory_id', $id)->get();
            foreach ($images as $image) {
                Storage::disk('subcategories')->delete($image->image_path);
            }

            $subcategory = Subcategory::find($id);
            $subcategory->delete();
            return redirect()->route('subcategory.index')->with('delete', 'La subcategoría se ha eliminado correctamente');
        } else return view('home.index');
    }

    public function edit($id)
    {
        if (Auth::user()->role == 'admin') {
            $subcategory = DB::table('subcategories')
                ->join('categories', 'categories.id', '=', 'subcategories.category_id')
                ->select('subcategories.*', 'categories.id as catid', 'categories.name as catname')
                ->where('subcategories.id', $id)
                ->first();
            $categories = Category::all();
            return view('admin.subcategories.edit', [
                'subcategory' => $subcategory,
                'categories' => $categories,
            ]);
        } else return view('home.index');
    }

    public function update(Request $request)
    {
        if (Auth::user()->role == 'admin') {
            $user = Auth::user();
            $name = $request->input('name');
            $category_id = $request->input('category_id');
            $catactual = $request->input('catactual');
            $id = $request->input('id');

            if ($request->has('image')) $image_path = $request->file('image');
            else $image_path = Image::where('subcategory_id', '=', $id)->first();
            // dd($image_path);

            if ($request->has('image')) {
                $validate = $this->validate($request, [
                    'name' => ['string', 'required'],
                    'image' => ['required', 'image'],
                ]);
            } else {
                $validate = $this->validate($request, [
                    'name' => ['string', 'required'],
                ]);
            }

            $subcategory = Subcategory::find($id);
            $subcategory->user_id = $user->id;
            $subcategory->name = $name;
            if ($category_id == 0) $subcategory->category_id = $catactual;
            else $subcategory->category_id = $category_id;
            $subcategory->update();

            if ($request->has('image') && $image_path) {

                $image_subcategory = Image::where('subcategory_id', '=', $id)->first();

                if ($image_subcategory) {
                    Storage::disk('subcategories')->delete($image_subcategory->image_path);
                    $image_subcategory->delete();
                }
            }

            if ($request->has('image') && $image_path) {
                $image = new Image();
                $image->user_id = $user->id;
                $image->subcategory_id = $subcategory->id;
                $image_path_name = time() . $image_path->getClientOriginalName();
                Storage::disk('subcategories')->put($image_path_name, File::get($image_path));
                $image->image_path = $image_path_name;
                $image->save();
            } else {
                $image = Image::firstWhere('subcategory_id', $id);
                $image->image_path = $image_path->image_path;
                $image->update();
            }

            return redirect()->route('subcategory.index')->with(['message' => 'Se ha actualizado correctamente la subcategoría llamada ' . $name]);
        } else return view('home.index');
    }
}
