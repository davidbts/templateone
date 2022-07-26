<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = DB::table('categories')
            ->orderBy('id', 'asc')
            ->get();

        // $products = DB::table('products')
        //     ->orderByRaw('rand()')
        //     ->orderBy('products.id', 'asc')
        //     ->get();

        return view('home.index', [
            'categories' => $categories,
            // 'products' => $products,
        ]);
    }

    public function como()
    {
        return view('home.como');
    }

    public function somos()
    {
        return view('home.somos');
    }

    public function contacto()
    {
        return view('home.contacto');
    }

    public function terminos()
    {
        return view('home.terminos');
    }

    public function aviso()
    {
        return view('home.aviso-priv');
    }

    public function cookies()
    {
        return view('home.cookies');
    }

    public function preguntas()
    {
        return view('home.preguntas');
    }

    public function glosario()
    {
        return view('home.glosario');
    }

    public function ayuda()
    {
        return view('home.ayuda');
    }

    public function reglamento()
    {
        return view('home.reglamento');
    }

    public function devolucion()
    {
        return view('home.devolucion');
    }
    public function tips()
    {
        return view('home.tips');
    }

    public function loginAdmin()
    {
        if (!Auth::user()) {
            return view('admin.login');
        } else if (Auth::user() && Auth::user()->role == 'admin') {
            return view('admin.index');
        } else {
            return view('home.index');
        }
    }

    public function ir(Request $request)
    {
        $categories = DB::table('categories')
            ->orderBy('id', 'asc')
            ->get();

        // $products = DB::table('products')
        //     ->orderByRaw('rand()')
        //     ->orderBy('products.id', 'asc')
        //     ->get();

        return view('home.index', [
            'categories' => $categories,
            // 'products' => $products,
        ]);
    }
}
