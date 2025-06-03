<?php

// Rotas públicas
Route::get('/', [SiteController::class, 'index'])->name('site.principal');

// Rotas autenticadas
Route::middleware(['auth'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Artesãos
    Route::prefix('artesaos')->group(function () {
        Route::get('/', [ArtesaoController::class, 'index'])->name('artesao.index');
        Route::get('/create', [ArtesaoController::class, 'create'])->name('artesao.create');
        Route::post('/', [ArtesaoController::class, 'store'])->name('artesao.store');
        Route::get('/{id}', [ArtesaoController::class, 'show'])->name('artesao.show');
        Route::get('/{id}/edit', [ArtesaoController::class, 'edit'])->name('artesao.edit');
        Route::put('/{id}', [ArtesaoController::class, 'update'])->name('artesao.update');
        Route::delete('/{id}', [ArtesaoController::class, 'destroy'])->name('artesao.destroy');
    });

    // Postagens
    Route::prefix('postagens')->group(function () {
        Route::get('/', [PostagemController::class, 'index'])->name('postagem.index');
        Route::get('/create', [PostagemController::class, 'create'])->name('postagem.create');
        Route::post('/', [PostagemController::class, 'store'])->name('postagem.store');
        Route::get('/{id}', [PostagemController::class, 'show'])->name('postagem.show');
        Route::get('/{id}/edit', [PostagemController::class, 'edit'])->name('postagem.edit');
        Route::put('/{id}', [PostagemController::class, 'update'])->name('postagem.update');
        Route::delete('/{id}', [PostagemController::class, 'destroy'])->name('postagem.destroy');
    });

    // Alterar senha do usuário
    Route::get('/admin/alterarSenha', [UserController::class, 'alterarSenha'])->name('admin.alterarSenha');
    Route::put('/admin/updateSenha', [UserController::class, 'updateSenha'])->name('admin.updateSenha');

});
