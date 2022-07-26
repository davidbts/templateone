<?php

namespace App\Http\Controllers;

use App\Models\Subcomment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubcommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function save(Request $request)
    {
        $user = Auth::user();
        $subcomentario = $request->input('subcomment');
        $id = $request->input('id');
        $idprod = $request->input('idprod');


        $validate = $this->validate($request, [
            'subcomment' => ['string', 'required'],
            'id' => ['string', 'required'],
        ]);

        $subcomment = new Subcomment();
        $subcomment->user_id = $user->id;
        $subcomment->comment_id = $id;
        $subcomment->content = $subcomentario;
        $subcomment->save();

        return redirect()->route('product.detail', [$idprod]);
    }
}
