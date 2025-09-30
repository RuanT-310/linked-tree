<?php

use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

// Rota para a página pública (perfil)
Route::get('/', [LinkController::class, 'showProfile'])->name('profile');

// Rotas de recurso para o gerenciamento de links (CRUD)
Route::resource('links', LinkController::class)->except(['show', 'create', 'edit']);