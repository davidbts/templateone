<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function index()
    {
        if (Auth::user()->role == 'admin') {
            $statuses = DB::table('statuses')
                ->orderBy('id', 'desc')
                ->get();
            return view('admin.statuses.information', ['statuses' => $statuses]);
        } else return view('home.index');
    }

    public function create()
    {
        if (Auth::user()->role == 'admin')
            return view('admin.statuses.create');
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

            $status = new Status();
            $status->user_id = $user->id;
            $status->name = $name;
            $status->save();

            return redirect()->route('statuses.index')->with(['message' => 'Se ha creado correctamente el nuevo estado llamado ' . $name]);
        } else return view('home.index');
    }

    public function delete($id)
    {
        if (Auth::user()->role == 'admin') {
            $status = Status::find($id)->delete();

            return redirect()->route('statuses.index')->with('delete', 'El estado se ha borrado correctamente');
        } else return view('home.index');
    }

    public function edit($id)
    {
        if (Auth::user()->role == 'admin') {
            $status = DB::table('statuses')
                ->where('statuses.id', $id)
                ->first();
            return view('admin.statuses.edit', ['status' => $status]);
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

            $status = Status::find($id);
            $status->user_id = $user->id;
            $status->name = $name;
            $status->update();

            return redirect()->route('statuses.index')->with(['message' => 'Se ha actualizado correctamente el estado llamado ' . $name]);
        } else return view('home.index');
    }
}
