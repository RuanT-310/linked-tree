@extends('layouts.app')

@section('title', 'Visualizar Usuário')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white shadow-sm rounded-lg overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-lg font-medium text-gray-900">
                <i class="fas fa-user mr-2"></i>
                Detalhes do Usuário
            </h2>
        </div>

        <div class="p-6">
            <div class="flex items-center mb-6">
                <div class="h-20 w-20 rounded-full bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center mr-6">
                    <span class="text-2xl font-bold text-white">
                        {{ strtoupper(substr($user->name, 0, 2)) }}
                    </span>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-900">{{ $user->name }}</h3>
                    <p class="text-sm text-gray-500">ID: {{ $user->id }}</p>
                </div>
            </div>

            <dl class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="bg-gray-50 px-4 py-3 rounded-lg">
                    <dt class="text-sm font-medium text-gray-500 mb-1">
                        <i class="fas fa-envelope mr-1"></i>Email
                    </dt>
                    <dd class="text-sm text-gray-900">{{ $user->email }}</dd>
                </div>

                <div class="bg-gray-50 px-4 py-3 rounded-lg">
                    <dt class="text-sm font-medium text-gray-500 mb-1">
                        <i class="fas fa-calendar-plus mr-1"></i>Data de Criação
                    </dt>
                    <dd class="text-sm text-gray-900">{{ $user->created_at->format('d/m/Y H:i:s') }}</dd>
                </div>

                <div class="bg-gray-50 px-4 py-3 rounded-lg">
                    <dt class="text-sm font-medium text-gray-500 mb-1">
                        <i class="fas fa-calendar-alt mr-1"></i>Última Atualização
                    </dt>
                    <dd class="text-sm text-gray-900">{{ $user->updated_at->format('d/m/Y H:i:s') }}</dd>
                </div>

                <div class="bg-gray-50 px-4 py-3 rounded-lg">
                    <dt class="text-sm font-medium text-gray-500 mb-1">
                        <i class="fas fa-clock mr-1"></i>Tempo de Cadastro
                    </dt>
                    <dd class="text-sm text-gray-900">{{ $user->created_at->diffForHumans() }}</dd>
                </div>
            </dl>

            <div class="flex justify-end space-x-3 mt-8 pt-6 border-t border-gray-200">
                <a href="{{ route('users.index') }}" 
                   class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                    <i class="fas fa-arrow-left mr-1"></i>Voltar
                </a>
                <a href="{{ route('users.edit', $user->id) }}" 
                   class="px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                    <i class="fas fa-edit mr-1"></i>Editar
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
