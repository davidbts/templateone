<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Brand_Category;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function index()
    {
        if (Auth::user()->role == 'admin') {
            $brands = DB::table('brands')
                ->orderBy('id', 'desc')
                ->join('brand_categories', 'brands.id', '=', 'brand_categories.brand_id')
                ->join('categories', 'brand_categories.category_id', '=', 'categories.id')
                ->select('brands.*', 'categories.name as catname')
                ->get();
            return view('admin.brands.information', ['brands' => $brands]);
        } else return view('home.index');
    }

    public function create()
    {
        if (Auth::user()->role == 'admin') {
            $categories = DB::table('categories')
                ->orderBy('id', 'asc')
                ->get();
            return view('admin.brands.create', ['categories' => $categories]);
        } else return view('home.index');
    }

    public function save(Request $request)
    {
        if (Auth::user()->role == 'admin') {
            $user = Auth::user();
            $name = $request->input('name');
            $category_id = $request->input('category_id');

            $validate = $this->validate($request, [
                'name' => ['string', 'required']
            ]);

            $brand = new Brand();
            $brand->user_id = $user->id;
            $brand->name = $name;
            $brand->save();

            $brandid = DB::table('brands')
                ->where('name', $name)
                ->first();

            $brand_category = new Brand_Category();
            $brand_category->user_id = $user->id;
            $brand_category->brand_id = $brandid->id;
            $brand_category->category_id = $category_id;
            $brand_category->save();

            return redirect()->route('brand.index')->with(['message' => 'Se ha creado correctamente la nueva marca llamada ' . $name]);
        } else return view('home.index');
    }

    public function delete($id)
    {
        if (Auth::user()->role == 'admin') {
            $brand_category = Brand_Category::where('brand_id', '=', $id)->delete();
            $brand = Brand::find($id)->delete();
            return Redirect()->route('brand.index')->with('delete', 'La marca se ha eliminado correctamente');
        } else return view('home.index');
    }

    public function edit($id)
    {
        if (Auth::user()->role == 'admin') {
            $brand = DB::table('brands')
                ->join('brand_categories', 'brands.id', '=', 'brand_categories.brand_id')
                ->join('categories', 'brand_categories.category_id', '=', 'categories.id')
                ->select('brands.*', 'categories.id as catid', 'categories.name as catname')
                ->where('brands.id', $id)
                ->first();
            $categories = Category::all();
            return view('admin.brands.edit', [
                'brand' => $brand,
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

            $validate = $this->validate($request, [
                'name' => ['string', 'required'],
            ]);

            $brand = Brand::find($id);
            $brand->user_id = $user->id;
            $brand->name = $name;
            $brand->update();

            // $brand_category = DB::table('brand_categories')->where('brand_id', $id)->first();
            $brand_category = Brand_Category::where('brand_id', $id)->where('category_id', $catactual)->first();
            $brand_category->user_id = $user->id;
            $brand_category->brand_id = $id;
            if ($category_id == 0) $brand_category->category_id = $catactual;
            else $brand_category->category_id = $category_id;
            $brand_category->update();

            return redirect()->route('brand.index')->with(['message' => 'Se ha actualizado correctamente la subcategoría llamada ' . $name]);
        } else return view('home.index');
    }
}
