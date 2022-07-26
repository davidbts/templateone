<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ColorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function index()
    {
        if (Auth::user()->role == 'admin') {
            $colors = DB::table('colors')
                ->orderBy('id', 'desc')
                ->get();
            return view('admin.colors.information', ['colors' => $colors]);
        } else return view('home.index');
    }

    public function create()
    {
        if (Auth::user()->role == 'admin')
            return view('admin.colors.create');
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

            $color = new Color();
            $color->user_id = $user->id;
            $color->name = $name;
            $color->save();

            return redirect()->route('colors.index')->with(['message' => 'Se ha creado correctamente el nuevo color llamado ' . $name]);
        } else return view('home.index');
    }

    public function delete($id)
    {
        if (Auth::user()->role == 'admin') {
            $color = Color::find($id)->delete();
            return redirect()->route('colors.index')->with('delete', 'El color se ha eliminado correctamente');
        } else return view('home.index');
    }

    public function edit($id)
    {
        if (Auth::user()->role == 'admin') {
            $color = DB::table('colors')
                ->where('colors.id', $id)
                ->first();
            return view('admin.colors.edit', ['color' => $color]);
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

            $color = Color::find($id);
            $color->user_id = $user->id;
            $color->name = $name;
            $color->update();

            return redirect()->route('colors.index')->with(['message' => 'Se ha actualizado correctamente el color llamado ' . $name]);
        } else return view('home.index');
    }
}
