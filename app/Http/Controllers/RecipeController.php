<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::where('user_id',Auth::id())->get();
        return view('dashboard', compact('recipes'));
    }

    public function create()
    {
        return view('recipes-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'time' => 'required',
            'instructions' => 'required',
        ]);



        $recipe = new Recipe([
            'title' => $request->get('title'),
            'time' => $request->get('time'),
            'instructions' => $request->get('instructions'),
            'user_id' => auth()->id(),
        ]);

        $recipe->save();

        return redirect('/dashboard')->with('success', 'Recipe saved!');
    }

    public function destroy($id)
    {
        $recipe = Recipe::find($id);
        $recipe->delete();

        return redirect('/dashboard')->with('success', 'Recipe deleted!');
    }

    public function edit($id) {
        $recipe = Recipe::findOrFail($id);
        return view('recipes-edit', compact('recipe'));
    }

    public function update(Request $request, $id) {
        $recipe = Recipe::findOrFail($id);
        $recipe->title = $request->input('title');
        $recipe->time = $request->input('time');
        $recipe->instructions = $request->input('instructions');
        $recipe->save();

        return redirect()->route('dashboard')->with('success', 'Receita atualizada com sucesso!');
    }
    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);

        return view('recipes-show', compact('recipe'));
    }

}
