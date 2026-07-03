@extends('layouts.app')
@section('title', 'creation | categorie')
@section('content')

<div class="max-w-xl w-full mx-auto bg-slate-800 p-6 rounded-2xl border border-red-500/5 shadow-2xl transition-all duration-300 hover:border-red-500/10">

    <div class="border-b border-slate-700/50 pb-4 mb-5">
        <h3 class="text-xl font-bold text-white tracking-tight">
            Nouvelle <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-rose-600">Catégorie</span>
        </h3>
        <p class="mt-1 text-xs text-slate-400">
            Ajoutez une nouvelle catégorie pour y classer vos articles.
        </p>
    </div>

    <form action="{{ route('categories.store') }}" method="POST" class="space-y-5">
        @csrf

        <div class="space-y-2">
            <label for="name" class="block text-sm font-medium text-slate-300">
                Nom de la catégorie :
            </label>
            <input type="text" id="name" name="title" required
                placeholder="Ex: Électronique, Vêtements..."
                class="appearance-none relative block w-full px-4 py-3 border border-slate-700 bg-slate-900/50 text-white placeholder-slate-500 rounded-xl focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500 sm:text-sm transition-all duration-300">
        </div>

        <div class="flex items-center justify-end pt-2">
            <button type="submit"
                class="w-full sm:w-auto px-6 py-2.5 bg-gradient-to-r from-red-600 to-rose-500 hover:from-red-500 hover:to-rose-400 text-white font-bold rounded-xl transition-all duration-300 transform hover:-translate-y-0.5 shadow-lg shadow-red-900/30 hover:shadow-red-500/30 text-sm text-center">
                Créer la catégorie
            </button>
        </div>
    </form>
</div>

@endsection