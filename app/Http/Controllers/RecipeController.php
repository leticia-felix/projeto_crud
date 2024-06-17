<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUpdateRecipeFormRequest;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Category;

use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::where('user_id',Auth::id())->get();
        return view('recipes-index', compact('recipes'));
    }




    public function create()
    {

        $categories = Category::all();
        return view('recipes-create', compact('categories'));

    }

    public function store(StoreUpdateRecipeFormRequest $request)
    {



            $recipe = new Recipe([
                'title' => $request->get('title'),
                'time' => $request->get('time'),
                'ingredients' => $request->get('ingredients'),
                'instructions' => $request->get('instructions'),
                'user_id' => auth()->id(),
            ]);

            // Salvar a receita no banco de dados
            $recipe->save();


            $recipe->categories()->sync($request->input('categories'));


            return redirect('/recipes')->with('success', 'Recipe saved!');


    }

    public function destroy($id)
    {
        $recipe = Recipe::find($id);
        $recipe->delete();

        return redirect('/recipes')->with('success', 'Recipe deleted!');
    }

    public function edit($id) {

        $recipe = Recipe::findOrFail($id);
        $categories = Category::all(); // Adicione esta linha
        return view('recipes-edit', compact('recipe', 'categories'));

    }

    public function update(Request $request, $id) {
        $recipe = Recipe::findOrFail($id);
        $recipe->title = $request->input('title');
        $recipe->time = $request->input('time');
        $recipe->instructions = $request->input('instructions');
        $recipe->save();

        return redirect()->route('recipes.index')->with('success', 'Receita atualizada com sucesso!');
    }
    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);

        return view('recipes-show', compact('recipe'));
    }

}
