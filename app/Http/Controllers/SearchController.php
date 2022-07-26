<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

    public function category($nombre)
    {
        $products = Product::join('categories', 'categories.id', '=', 'products.category_id')
            ->where('categories.name', '=', $nombre)
            ->select('products.*')
            ->get();

        $likes = DB::table('likes')->get();

        return view('search.category', [
            'products' => $products,
            'category' => $nombre,
            'likes' => $likes,
        ]);
    }

    public function subcategory($cname, $nombre)
    {
        $products = Product::join('subcategories', 'subcategories.id', '=', 'products.subcategory_id')
            ->where('subcategories.name', '=', $nombre)
            ->select('products.*')
            ->get();

        $likes = DB::table('likes')->get();

        return view('search.subcategory', [
            'products' => $products,
            'subcategory' => $nombre,
            'likes' => $likes,
        ]);
    }

    public function product(Request $request)
    {
        $word = $request->input('word');

        $validate = $this->validate($request, [
            'word' => ['string', 'required'],
        ]);

        $products = DB::table('products')
            ->join('subcategories', 'subcategories.id', '=', 'products.subcategory_id')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where('subcategories.name', 'like', '%' . $word . '%')
            ->orWhere('categories.name', 'like', '%' . $word . '%')
            ->orWhere('products.name', 'like', '%' . $word . '%')
            ->select('products.*')
            ->get();

        $likes = DB::table('likes')->get();

        return view('search.product', [
            'products' => $products,
            'likes' => $likes,
        ]);
    }
}
