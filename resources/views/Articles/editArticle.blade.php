@extends('layouts.app')
@section('title', 'update | Article')
@section('content')
<div class="max-w-2xl w-full mx-auto bg-slate-800 p-8 rounded-2xl border border-red-500/5 shadow-2xl transition-all duration-300 hover:border-red-500/10">

    <div class="border-b border-slate-700/50 pb-5 mb-6">
        <h3 class="text-2xl font-bold text-white tracking-tight">
            Modifier un <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-rose-600">Article</span>
        </h3>
        <p class="mt-1 text-sm text-slate-400">
            Remplissez les informations ci-dessous pour ajouter un produit au catalogue.
        </p>
    </div>

    <form action="{{ route('articles.update', $article->id) }}" method="POST" class="space-y-6">
    
</div>

@endsection