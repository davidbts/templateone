<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function SubcategoriesgetImage($filename)
    {
        $file = Storage::disk('subcategories')->get($filename);
        return new Response($file, 200);
    }

    public function productsgetImage($filename)
    {
        $file = Storage::disk('products')->get($filename);
        return new Response($file, 200);
    }

    public function purchasesgetImage($id)
    {
        $image = Image::where('product_id', $id)->first();
        $file = Storage::disk('products')->get($image->image_path);
        return new Response($file, 200);
    }

    public function usergetImage($filename)
    {
        $file = Storage::disk('users')->get($filename);
        return new Response($file, 200);
    }
}
