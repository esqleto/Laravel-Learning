<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TermsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/idea/{idea}', [IdeaController::class, 'show'])->name('idea.show');

Route::put('/idea/{idea}', [IdeaController::class, 'update'])->name('idea.update');

Route::get('/idea/{idea}/edit', [IdeaController::class, 'edit'])->name('idea.edit');

Route::post('/idea', [IdeaController::class, 'store'])->name('idea.create');

Route::delete('/idea/{idea}', [IdeaController::class, 'destroy'])->name('idea.destroy');





Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/terms', [TermsController::class, 'index']);