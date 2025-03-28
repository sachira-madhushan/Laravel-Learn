<?php

namespace App\Http\Controllers;

use App\Models\Dogo;
use Illuminate\Http\Request;
use App\Models\Ninja;

class NinjaController extends Controller
{
    public function index() {

      $ninjas = Ninja::with('dogo')->orderBy('created_at', 'desc')->paginate(10);

      return view('ninjas.index', ['ninjas' => $ninjas]);
    }

    public function show($id) {
      $ninja = Ninja::with('dojo')->findOrFail($id);

      return view('ninjas.show', ['ninja' => $ninja]);
    }

    public function create() {

      $dojos = Dogo::all();

      return view('ninjas.create', ['dojos' => $dojos]);
    }

    public function store(Request $request) {
        $validated=$request->validate([
            "name"=>"required|string|max:255",
            "skill"=>"required|integer|min:0|max:100",
            "bio"=>"required|string",
            "dogo_id"=>"required|exists:dogos,id",

        ]);

        Ninja::create($validated);

        return redirect()->route('ninjas.index');
    }

    public function destroy($id) {

    }


}
