<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
use App\Models\Categories;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Charge les articles en incluant leur catégorie liée
        $articles = Articles::with('categories')->latest()->paginate(5);

        return view('index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Categories::all();
        return view('createArticle', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'prix' => 'required|string',
            'categories_id' => 'required|exists:categories,id'
        ], [
            'title.required' => 'Le titre est obligatoire',
            'description.required' => 'La description est obligatoire',
            'categories_id.required' => 'Vous devez sélectionner une catégorie.',
        ]);

        Articles::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'prix' => $validatedData['prix'],
            'categories_id' => $validatedData['categories_id'],
        ]);
        return redirect()
            ->route('articles.index')
            ->with('success', 'Votre nouvelle article a été crée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Articles::findOrFail($id);

        $categories = Categories::all();
        return view('modifierArticle', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'prix' => 'required|string',
            'categories_id' => 'required|exists:categories,id'
        ], [
            'title.required' => 'Le titre est obligatoire',
            'description.required' => 'La description est obligatoire',
            'categories_id.required' => 'Vous devez sélectionner une catégorie.',
        ]);

        $article = Articles::findOrFail($id);
        
        $article->update([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'prix' => $validatedData['prix'],
            'categories_id' => $validatedData['categories_id'],
        ]);

        return redirect()
            ->route('articles.index')
            ->with('success', 'L\'article a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
