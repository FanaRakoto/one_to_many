@extends('layouts.app')
@section('title', 'Accueil | List Article*')
@section('content')
<div class="min-h-screen bg-slate-900 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl w-full mx-auto space-y-8">

        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-slate-800 pb-6">
            <div>
                <h1 class="text-3xl font-extrabold text-white tracking-tight">
                    Liste des <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-rose-600">Articles</span>
                </h1>
                <p class="mt-2 text-sm text-slate-400">
                    Consultez l'ensemble de notre catalogue d'articles disponibles.
                </p>
            </div>

            <div>
                <a href="{{ route('articles.create') }}" class="inline-flex items-center justify-center w-full sm:w-auto px-5 py-2.5 text-sm font-bold text-white bg-gradient-to-r from-red-600 to-rose-500 hover:from-red-500 hover:to-rose-400 rounded-xl shadow-lg shadow-red-900/30 hover:shadow-red-500/30 transition-all duration-300 transform hover:-translate-y-0.5">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4" />
                    </svg>
                    Ajouter un article
                </a>
            </div>
        </div>

        <div class="bg-slate-800 rounded-2xl border border-red-500/5 shadow-2xl overflow-hidden transition-all duration-300 hover:border-red-500/10">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse min-w-[900px]">
                    <thead>
                        <tr class="bg-slate-900/40 border-b border-slate-700/50 text-slate-400 text-xs uppercase tracking-wider font-semibold">
                            <th class="py-3.5 px-6 text-center w-20">ID</th>
                            <th class="py-3.5 px-6 w-1/4">Titre</th>
                            <th class="py-3.5 px-6 w-1/3">Description</th>
                            <th class="py-3.5 px-6 text-right w-36">Prix</th>
                            <th class="py-3.5 px-6 text-center w-36">Catégorie</th>
                            <th class="py-3.5 px-6 text-center w-40">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-700/40">
                        @forelse($articles as $article)
                        <tr class="hover:bg-slate-700/20 transition-colors duration-150 group">

                            <td class="py-3 px-6 text-center font-mono text-xs text-slate-500 group-hover:text-red-400 transition-colors">
                                {{ Str::limit($article->id, 8, '') }}
                            </td>

                            <td class="py-3 px-6 font-bold text-white text-sm">
                                {{ $article->title }}
                            </td>

                            <td class="py-3 px-6 text-slate-400 text-sm leading-relaxed">
                                <p class="line-clamp-2">
                                    {{ $article->description ?? 'Aucune description rédigée.' }}
                                </p>
                            </td>

                            <td class="py-3 px-6 text-right font-mono font-bold text-red-400 text-sm whitespace-nowrap">
                                {{ number_format($article->prix, 2, ',', ' ') }} Ar
                            </td>

                            <td class="py-3 px-6 text-center">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-semibold bg-red-500/10 text-red-400 border border-red-500/10 whitespace-nowrap">
                                    {{ $article->categories->title ?? 'Sans catégorie' }}
                                </span>
                            </td>

                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('articles.edit', $article->id) }}" class="p-2 text-slate-400 hover:text-white hover:bg-slate-700/60 rounded-lg transition-all duration-200" title="Modifier">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </a>

                                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="inline" onsubmit="return confirm('Supprimer définitivement cet article ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 text-slate-500 hover:text-red-400 hover:bg-red-500/10 rounded-lg transition-all duration-200" title="Supprimer">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.34 6m-4.74 0l-.34-6m4.74-6l-.34 6m-6A6 6 0 006 18h12a6 6 0 00-.34-6M9 3h6M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="py-12 text-center text-sm text-slate-500">
                                <svg class="w-12 h-12 mx-auto text-slate-600 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0a2 2 0 01-2 2H6a2 2 0 01-2-2m16 0l-3.586 3.586a2 2 0 01-2.828 0L16 16m-2 2l-3.586 3.586a2 2 0 01-2.828 0L5 18" />
                                </svg>
                                Aucun article trouvé pour le moment.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($articles->hasPages())
            <div class="p-4 border-t border-slate-700/40 bg-slate-900/10">
                {{ $articles->links() }}
            </div>
            @endif
        </div>

    </div>

    {{-- SERVICE --}}
    <div class="max-w-7xl w-full mx-auto space-y-8 py-12">
        
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-slate-800 pb-6">
            <div>
                <h1 class="text-3xl font-extrabold text-white tracking-tight">
                    Nos <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-rose-600">Services</span>
                </h1>
                <p class="mt-2 text-sm text-slate-400">
                    Tout ce que nous mettons en place pour vous offrir la meilleure expérience d'achat.
                </p>
            </div>

            <div>
                <a href="{{ route('articles.create') }}" class="inline-flex items-center justify-center w-full sm:w-auto px-5 py-2.5 text-sm font-bold text-white bg-gradient-to-r from-red-600 to-rose-500 hover:from-red-500 hover:to-rose-400 rounded-xl shadow-lg shadow-red-900/30 hover:shadow-red-500/30 transition-all duration-300 transform hover:-translate-y-0.5">
                    Nous contacter   ->
                </a>
            </div>
        </div>

        <div>
            <div class="w-full h-30 bg-slate-800 rounded-2xl border border-red-500/5 grid grid-cols-4">
                <div class="flex flex-col justify-center items-center border-r-1 border-slate-900 w-full h-full rounded-tl-2xl rounded-bl-2xl">
                    <h2 class="text-rose-300 font-bold text-3xl">12 000+</h2>
                    <p>CLIENTS SATISFAITS</p>
                </div>
                <div class="flex justify-center items-center border-r-1 border-slate-900 w-full h-full rounded-tl-2xl rounded-bl-2xl">
                    
                </div>
                <div class="flex justify-center items-center border-r-1 border-slate-900 w-full h-full">
                    
                </div>
                <div class="flex justify-center items-center w-full h-full rounded-tr-2xl rounded-br-2xl">
                    
                </div>
            </div>
        </div>

    </div>

</div>
@endsection