<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ArtesaoController;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;


    // Rotas públicas
    Route::get('/', [SiteController::class, 'index'])->name('site.principal');

    Auth::routes();
    // Rotas autenticadas
    Route::middleware(['auth'])->group(function () {

    // Página inicial do usuário
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    //CRUD Artesãos
    Route::get('/artesao', [ArtesaoController::class, 'index'])->name('artesao.index');
    Route::get('/artesao/create', [ArtesaoController::class, 'create'])->name('artesao.create');
    Route::post('/artesao', [ArtesaoController::class, 'store'])->name('artesao.store');
    Route::get('/artesao/{id}', [ArtesaoController::class, 'show'])->name('artesao.show');
    Route::get('/artesao/{id}/edit', [ArtesaoController::class, 'edit'])->name('artesao.edit');
    Route::put('/artesao/{id}', [ArtesaoController::class, 'update'])->name('artesao.update');
    Route::delete('/artesao/{id}', [ArtesaoController::class, 'destroy'])->name('artesao.destroy');

    //CRUD Postagens
    Route::get('/postagem', [PostagemController::class, 'index'])->name('postagem.index');
    Route::get('/postagem/create', [PostagemController::class, 'create'])->name('postagem.create');
    Route::post('/postagem', [PostagemController::class, 'store'])->name('postagem.store');
    Route::get('/postagem/{id}', [PostagemController::class, 'show'])->name('postagem.show');
    Route::get('/postagem/{id}/edit', [PostagemController::class, 'edit'])->name('postagem.edit');
    Route::put('/postagem/{id}', [PostagemController::class, 'update'])->name('postagem.update');
    Route::delete('/postagem/{id}', [PostagemController::class, 'destroy'])->name('postagem.destroy');

    //Alterar senha do usuário
    Route::get('/admin/alterarSenha', [UserController::class, 'alterarSenha'])->name('admin.alterarSenha');
    Route::put('/admin/updateSenha', [UserController::class, 'updateSenha'])->name('admin.updateSenha');
});
