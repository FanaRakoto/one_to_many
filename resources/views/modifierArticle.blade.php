@extends('layouts.app')
@section('title', 'modification | Article')
@section('content')



<div class="max-w-2xl w-full mx-auto bg-slate-800 p-8 rounded-2xl border border-red-500/5 shadow-2xl transition-all duration-300 hover:border-red-500/100">
    <div class="border-b border-slate-700/50 pb-5 mb-6">
        <h3 class="text-2xl font-bold text-white tracking-tight">
            Modifier l' <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-rose-600">Article</span>
        </h3>

        <p class="mt-1 text-sm text-slate-400">
            Modifiez les information ci-dessous pour mettre à jour l'article.
        </p>
    </div>

    <form action="{{ route('articles.update', $article->id) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="space-y-2 sm:col-span-2">
                <label for="title" class="block text-sm font-medium text-slate-300">Titre de l'article : </label>

                <input type="text" id="title" name="title" required
                    value="{{ old('title', $article->title) }}"
                    placeholder="Ex: Clavier Mécanique RGB"
                    class="appearance-none relative block w-full px-4 py-3 border border-slate-700 bg-slate-900/50 text-white placeholder-slate-500 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 sm:text-sm transition-all duration-300">
            </div>

            <div class="space-y-2">
                <label for="prix" class="block text-sm font-medium text-slate-300">
                    Prix(en Ariary) :
                </label>

                <input type="number" id="prix" name="prix" step="0.01" required
                    value="{{ old('prix', $article->prix) }}"
                    placeholder="Ex: 150000"
                    class="appearance-none relative block w-full px-4 py-3 border border-slate-700 bg-slate-900/50 text-white placeholder-slate-500 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 sm:text-sm transition-all duration-300 font-mono">
            </div>

            <div class="space-y-2">
                <label for="categories_id" class="block text-sm font-medium text-slate-300">
                    Catégorie :
                </label>
                <div class="relative">
                    <select id="categories_id" name="categories_id" required
                        class="appearance-none relative block w-full px-4 py-3 border border-slate-700 bg-slate-900 text-white rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 sm:text-sm transition-all duration-300">

                        <option value="" disabled class="text-slate-400 bg-slate-900">Choisir une catégorie...</option>

                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" 
                            {{ old('categories_id', $article->categories_id) == $category->id ? 'selected' : '' }}
                            class="text-white bg-slate-900 py-2">
                            {{ $category->title }}
                        </option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-400">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="space-y-2">
            <label for="dexcription" class="block text-sm font-medium text-state-300">
                Description de l'article :
            </label>

            <textarea id="description" name="description" rows="4"
                placeholder="Rédigez la description détaillée de l'article..."
                class="appearance-none relative block w-full px-4 py-3 border border-slate-700 bg-slate-900/50 text-white placeholder-slate-500 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 sm:text-sm transition-all duration-300 resize-none">{{ old('description', $article->description) }}</textarea>
        </div>

        <div class="flex flex-col sm:flex-row items-center justify-end gap-3 pt-4 border-t border-slate-700/50">
            <a href="{{ route('articles.index') }}" class="w-full sm:w-auto px-6 py-2.5 bg-slate-700 hover:bg-slate-600 text-white font-bold rounded-xl transition-all duration-300 transform hover:-translate-y-0.5 text-sm text-center">Annuler</a>

            <button type="submit"
                class="w-full sm:w-auto px-6 py-2.5 bg-gradient-to-r from-red-600 to-rose-500 hover:from-red-500 hover:to-rose-400 text-white font-bold rounded-xl transition-all duration-300 transform hover:-translate-y-0.5 shadow-lg shadow-red-900/30 hover:shadow-red-500/30 text-sm text-center">
                Mettre à jour l'article
            </button>
        </div>
    </form>
</div>




@endsection