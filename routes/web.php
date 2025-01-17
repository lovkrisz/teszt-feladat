<?php

declare(strict_types=1);

use App\Domain\ProjectSystem\Controllers\ProjectController;
use App\Domain\ProjectSystem\Controllers\RouteController;
use App\Domain\ProjectSystem\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RouteController::class, 'index']);
Route::post('/project-save', [ProjectController::class, 'save'])->name('project.save');
// Route::post('/project-save', [ProjectController::class, 'save'])->name("project.save")->middleware(['auth']);

Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.show');
Route::get('/export/{id}', [UserController::class, 'export'])->name('export');
