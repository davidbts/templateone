<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function save(Request $request)
    {
        $user = Auth::user();
        $comentario = $request->input('comment');
        $id = $request->input('id');

        $validate = $this->validate($request, [
            'comment' => ['string', 'required'],
        ]);

        $comment = new Comment();
        $comment->user_id = $user->id;
        $comment->product_id = $id;
        $comment->content = $comentario;
        $comment->save();

        return redirect()->route('product.detail', [$id]);
    }
}
