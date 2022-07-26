<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SizeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function index()
    {
        if (Auth::user()->role == 'admin') {
            $sizes = DB::table('sizes')
                ->orderBy('id', 'desc')
                ->get();
            return view('admin.sizes.information', ['sizes' => $sizes]);
        } else return view('home.index');
    }

    public function create()
    {
        if (Auth::user()->role == 'admin')
            return view('admin.sizes.create');
        else return view('home.index');
    }

    public function save(Request $request)
    {
        if (Auth::user()->role == 'admin') {
            $user = Auth::user();
            $name = $request->input('name');

            $validate = $this->validate($request, [
                'name' => ['string', 'required']
            ]);

            $size = new Size();
            $size->user_id = $user->id;
            $size->name = $name;
            $size->save();

            return redirect()->route('size.index')->with(['message' => 'Se ha creado correctamente la nueva talla llamada ' . $name]);
        } else return view('home.index');
    }

    public function delete($id)
    {
        if (Auth::user()->role == 'admin') {
            $size = Size::find($id)->delete();
            return redirect()->route('size.index')->with('delete', 'La talla se ha eliminado correctamente');
        } else return view('home.index');
    }

    public function edit($id)
    {
        if (Auth::user()->role == 'admin') {
            $size = DB::table('sizes')
                ->where('sizes.id', $id)
                ->first();
            return view('admin.sizes.edit', ['size' => $size]);
        } else return view('home.index');
    }

    public function update(Request $request)
    {
        if (Auth::user()->role == 'admin') {
            $user = Auth::user();
            $name = $request->input('name');
            $id = $request->input('id');

            $validate = $this->validate($request, [
                'name' => ['string', 'required'],
            ]);

            $size = Size::find($id);
            $size->user_id = $user->id;
            $size->name = $name;
            $size->update();

            return redirect()->route('size.index')->with(['message' => 'Se ha actualizado correctamente la talla llamada ' . $name]);
        } else return view('home.index');
    }
}
