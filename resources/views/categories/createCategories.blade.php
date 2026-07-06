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
        @include('categories._form')
    </form>
</div>

@endsection