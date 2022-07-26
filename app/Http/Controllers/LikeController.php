<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function like($id)
    {
        $user = Auth::user();

        $isset_like = Like::where('user_id', $user->id)
            ->where('product_id', $id)
            ->count();

        if ($isset_like == 0) {

            $like = new Like();
            $like->user_id = $user->id;
            $like->product_id = $id;
            $like->save();

            // return redirect()->route('user.favoritos');
            return response()->json([
                'like' => $like
            ]);
        } else {
            return response()->json([
                'message' => 'El like ya existe'
            ]);
        }
    }

    public function dislike($id)
    {
        $user = Auth::user();

        $like = Like::where('user_id', $user->id)
            ->where('product_id', $id)
            ->first();

        if ($like) {
            $like->delete();

            return response()->json([
                'like' => $like,
                'mesagge' => 'Has dado dislike'
            ]);
        } else {
            return response()->json([
                'mesagge' => 'eL LIKE NO EXISTE'
            ]);
        }
    }
}
