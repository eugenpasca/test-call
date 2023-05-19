<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('users', [\App\Http\Controllers\User\UserController::class, 'index'])->name('admin.users.index');
                            Route::get('users/create', [\App\Http\Controllers\User\UserController::class, 'create'])->name('admin.users.create');
                            Route::get('users/{user}', [\App\Http\Controllers\User\UserController::class, 'show'])->name('admin.users.show');
                            Route::get('users/{user}/edit', [\App\Http\Controllers\User\UserController::class, 'edit'])->name('admin.users.edit');
                                                Route::get('products', [\App\Http\Controllers\Backoffice\ProductController::class, 'index'])->name('admin.products.index');
                            Route::get('products/create', [\App\Http\Controllers\Backoffice\ProductController::class, 'create'])->name('admin.products.create');
                            Route::get('products/{product}', [\App\Http\Controllers\Backoffice\ProductController::class, 'show'])->name('admin.products.show');
                            Route::get('products/{product}/edit', [\App\Http\Controllers\Backoffice\ProductController::class, 'edit'])->name('admin.products.edit');
                    
    });
