@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-slate-900 px-8 py-10">
    <div class="max-w-2xl mx-auto">

        <div class="mb-8">
            <h1 class="text-3xl font-bold text-white">
                Modifier la <span class="text-red-500">Catégorie</span>
            </h1>
            <p class="text-slate-400 mt-2">
                Modifiez les informations de la catégorie sélectionnée.
            </p>
        </div>

        @if ($errors->any())
            <div class="bg-red-500/10 border border-red-500 text-red-400 rounded-lg p-4 mb-6">
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-slate-800 rounded-xl p-8 shadow-lg">
            <form action="{{ route('categories.update', $category) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-6">
                    <label for="title" class="block text-sm font-medium text-slate-300 mb-2">
                        Nom / Titre
                    </label>
                    <input
                        type="text"
                        name="title"
                        id="title"
                        value="{{ old('title', $category->title) }}"
                        class="w-full bg-slate-900 border border-slate-700 text-white rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-500"
                        placeholder="Ex : Vêtement"
                        required
                    >
                </div>

                <div class="flex items-center gap-4 mt-8">
                    <button
                        type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-6 py-3 rounded-lg transition"
                    >
                        Enregistrer les modifications
                    </button>

                    
                     <a href="{{ route('categories.index') }}"
                        class="text-slate-400 hover:text-white px-6 py-3 rounded-lg transition"
                    >
                        Annuler
                    </a>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection