@extends('layouts.app')
@section('title', 'Meu Perfil')
@section('content')
<div class="max-w-2xl mx-auto text-center">
    <img class="w-24 h-24 rounded-full mx-auto mb-4" src="[https://placehold.co/100x100/EFEFEF/333333?text=Eu](https://placehold.co/100x100/EFEFEF/333333?text=Eu)" alt="Imagem de Perfil">
    <h1 class="text-2xl font-bold mb-2">@seuusuario</h1>
    <p class="text-gray-600 mb-8">Bem-vindo à minha página de links!</p>

    <div class="space-y-4">
        @forelse ($links as $link)
            <a href="{{ $link->url }}" target="_blank" class="block w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-4 px-6 rounded-lg shadow-lg transition-transform transform hover:scale-105">
                {{ $link->title }}
            </a>
        @empty
            <div class="bg-gray-200 text-gray-500 py-4 px-6 rounded-lg">Nenhum link disponível.</div>
        @endforelse
    </div>

    <div class="mt-10">
        <a href="{{ route('links.index') }}" class="text-sm text-gray-500 hover:text-gray-700">Gerenciar links</a>
    </div>
</div>
@endsection