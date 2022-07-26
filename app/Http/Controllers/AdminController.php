<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function index()
    {
        if (Auth::user()->role == 'admin')
            return view('admin.index');
        else
            return view('home.index');
    }

    public function info()
    {
        if (Auth::user() && Auth::user()->role == 'admin') {
            $users = DB::table('users')
                ->orderBy('id', 'desc')
                ->get();

            return view('admin.users.info', ['users' => $users]);
        } else return view('home.index');
    }

    public function blockUser($id)
    {
        if (Auth::user()->role == 'admin') {
            $user = User::where('id', $id)->first();
            $user->email_verified_at = null;
            $user->update();

            $users = DB::table('users')
                ->orderBy('id', 'desc')
                ->get();

            return view('admin.users.info', ['users' => $users]);
        } else
            return view('home.index');
    }

    public function unlockUser($id)
    {
        if (Auth::user()->role == 'admin') {
            $user = User::where('id', $id)->first();
            $user->email_verified_at = now();
            $user->update();

            $users = DB::table('users')
                ->orderBy('id', 'desc')
                ->get();

            return view('admin.users.info', ['users' => $users]);
        } else
            return view('home.index');
    }

    public function deleteUser($id)
    {
        if (Auth::user()->role == 'admin') {
            $user = User::where('id', $id)->first();
            $user->delete();

            $users = DB::table('users')
                ->orderBy('id', 'desc')
                ->get();

            return view('admin.users.info', ['users' => $users]);
        } else
            return view('home.index');
    }
}
