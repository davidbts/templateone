<?php

namespace App\Http\Controllers;

use App\Models\Element;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ElementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function index()
    {
        if (Auth::user()->role == 'admin') {
            $elements = DB::table('elements')
                ->join('subcategories', 'elements.subcategory_id', '=', 'subcategories.id')
                ->join('categories', 'subcategories.category_id', '=', 'categories.id')
                ->select('elements.*', 'subcategories.name as subcatname', 'categories.name as catname')
                ->orderBy('elements.id', 'desc')
                ->get();
            return view('admin.elements.information', ['elements' => $elements]);
        } else return view('home.index');
    }

    public function create()
    {
        if (Auth::user()->role == 'admin') {
            $categories = DB::table('categories')
                ->orderBy('id', 'asc')
                ->get();

            return view('admin.elements.create', ['categories' => $categories]);
        } else return view('home.index');
    }

    public function createSubcategories($category_id)
    {
        if (Auth::user()->role == 'admin') {
            $subcategories = DB::table('subcategories')
                ->where('category_id', $category_id)
                ->orderBy('id', 'asc')
                ->get();

            $cadena = '<div class="form-group" id="subcategory_id">
                        <label for="subcategory_id" class="text-gray-900">Nombre de la subcategoría</label>
                        <select class="form-control" name="subcategory" id="subcategory" required>
                            <option value="0">Selecciona una subcategoría</option>';

            foreach ($subcategories as $subcategory) {
                $cadena = $cadena . '<option value=' . $subcategory->id . '>' . $subcategory->name . '</option>';
                $cadena = $cadena . '<br>';
            }

            echo $cadena . "</select></div>";
        } else return view('home.index');
    }

    public function save(Request $request)
    {
        if (Auth::user()->role == 'admin') {
            $user = Auth::user();
            $name = $request->input('name');
            $subcategory_id = $request->input('subcategory');


            $validate = $this->validate($request, [
                'name' => ['string', 'required']
            ]);

            $element = new Element();
            $element->user_id = $user->id;
            $element->subcategory_id = $subcategory_id;
            $element->name = $name;
            $element->save();

            return redirect()->route('element.index')->with(['message' => 'Se ha creado correctamente el nuevo elemento llamado ' . $name]);
        } else return view('home.index');
    }

    public function delete($id)
    {
        if (Auth::user()->role == 'admin') {
            $element = Element::find($id)->delete();
            return redirect()->route('element.index')->with('delete', 'El elemento se ha eliminado correctamente');
        } else return view('home.index');
    }

    public function edit($id)
    {
        if (Auth::user()->role == 'admin') {
            $categories = DB::table('categories')
                ->orderBy('id', 'asc')
                ->get();

            $element = DB::table('elements')
                ->join('subcategories', 'elements.subcategory_id', '=', 'subcategories.id')
                ->join('categories', 'subcategories.category_id', '=', 'categories.id')
                ->select('elements.*', 'subcategories.name as subcatname', 'subcategories.id as subcatid', 'categories.name as catname', 'categories.id as catid')
                ->orderBy('elements.id', 'desc')
                ->where('elements.id', $id)
                ->first();

            return view('admin.elements.edit', [
                'categories' => $categories,
                'element' => $element,
            ]);
        } else return view('home.index');
    }

    public function update(Request $request)
    {
        if (Auth::user()->role == 'admin') {
            $user = Auth::user();
            $name = $request->input('name');
            $subcategory = $request->input('subcategory');
            $subcatactual = $request->input('subcatactual');
            $id = $request->input('id');

            $validate = $this->validate($request, [
                'name' => ['string', 'required'],
            ]);

            $element = Element::find($id);
            $element->user_id = $user->id;
            $element->name = $name;
            if ($subcategory == 0) $element->subcategory_id = $subcatactual;
            else $element->subcategory_id = $subcategory;
            $element->update();

            return redirect()->route('element.index')->with(['message' => 'Se ha actualizado correctamente el elemento llamado ' . $name]);
        } else return view('home.index');
    }
}
