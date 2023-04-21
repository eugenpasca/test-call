<?php

Route::name('laragen-api.')
    ->prefix('laragen-api')
    ->middleware('api')
    ->group(function () {

                                    Route::get('sdasfddf', [\App\Http\Controllers\Api\Backoffice\CarController::class, 'index'])->name('sdasfddf.index');
                            Route::post('sdasfddf', [\App\Http\Controllers\Api\Backoffice\CarController::class, 'store'])->name('sdasfddf.store');
                            Route::get('sdasfddf/{car}', [\App\Http\Controllers\Api\Backoffice\CarController::class, 'show'])->name('sdasfddf.show');
                            Route::patch('sdasfddf/{car}', [\App\Http\Controllers\Api\Backoffice\CarController::class, 'update'])->name('sdasfddf.update');
                            Route::delete('sdasfddf/{car}', [\App\Http\Controllers\Api\Backoffice\CarController::class, 'destroy'])->name('sdasfddf.destroy');
                    
    });
