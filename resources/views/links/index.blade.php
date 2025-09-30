@extends('layouts.app')
@section('title', 'Gerenciar Links')
@section('content')
<div class="max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold text-center mb-6">Gerenciar Meus Links</h1>
    <a href="{{ route('profile') }}" class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700 mb-4">Ver Página Pública</a>

    <div class="bg-white p-6 rounded-lg shadow-md mb-8">
        <h2 class="text-2xl font-semibold mb-4">Adicionar Novo Link</h2>
        <form action="{{ route('links.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Título:</label>
                <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3" required>
            </div>
            <div class="mb-4">
                <label for="url" class="block text-gray-700 font-bold mb-2">URL:</label>
                <input type="url" name="url" id="url" class="shadow appearance-none border rounded w-full py-2 px-3" required placeholder="https://...">
            </div>
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Adicionar Link</button>
        </form>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Meus Links</h2>
        @forelse ($links as $link)
            <div class="border-b py-4">
                <form action="{{ route('links.update', $link->id) }}" method="POST" class="flex items-center justify-between">
                    @csrf
                    @method('PUT')
                    <div class="flex-grow">
                        <input type="text" name="title" value="{{ $link->title }}" class="text-lg font-semibold w-full border-gray-300 rounded-md">
                        <input type="url" name="url" value="{{ $link->url }}" class="text-gray-600 w-full mt-1 border-gray-300 rounded-md">
                        <label class="inline-flex items-center mt-3">
                            <input type="checkbox" name="is_active" class="h-5 w-5 rounded" value="1" {{ $link->is_active ? 'checked' : '' }}>
                            <span class="ml-2 text-gray-700">Ativo</span>
                        </label>
                    </div>
                    <div class="flex items-center ml-4">
                        <button type="submit" class="bg-yellow-500 text-white font-bold py-1 px-3 rounded hover:bg-yellow-700 mr-2">Salvar</button>
                </form>
                <form action="{{ route('links.destroy', $link->id) }}" method="POST" onsubmit="return confirm('Tem certeza?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white font-bold py-1 px-3 rounded hover:bg-red-700">Remover</button>
                </form>
                    </div>
            </div>
        @empty
            <p class="text-gray-500">Nenhum link cadastrado.</p>
        @endforelse
    </div>
</div>
@endsection