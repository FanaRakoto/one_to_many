<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::latest()->paginate(8);
        return view('categories.listCategories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('createCategories');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatetData = $request->validate([
            'title' => 'required|string|max:200'
        ], [
            'title.required' => 'Le champ est obligatoire.'
        ]);

        Categories::create([
            'title' => $validatetData['title'],
        ]);

        return redirect()
        ->route('categories.index')
        ->with('success', 'Votre nouvelle categorie a été crée avec succèss');

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
        $category = Categories::findOrFail($id);
        return view('editCategories', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $validated = $request->validate([
        'title' => 'required|string|max:255',
    ]);

    $category = Categories::findOrFail($id);
    $category->update($validated);

    return redirect()->route('categories.index')
        ->with('success', 'Catégorie mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
