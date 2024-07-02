<?php

use App\Http\Controllers\AdminControllers\AdminBooksController;
use App\Http\Controllers\AdminControllers\AdminController;
use App\Http\Controllers\AdminControllers\AdminUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteControllers\ClientBookController;
use App\Http\Controllers\ClienteControllers\ClienteController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio_session', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('role')->group(function () {
    route::get('/cliente/home', [ClienteController::class, 'index'])->name('home.cliente');
    route::get('/cliente/edit', [ClienteController::class, 'edit'])->name('cliente.edit');
    route::put('/cliente/update/{id}', [ClienteController::class, 'update'])->name('cliente.update');

    route::get('/cliente/mis_libros', [ClientBookController::class, 'listBooks'])->name('user.listBooks');
    route::get('/cliente/libro/{id}', [ClientBookController::class, 'userBook'])->name('user.userBook');
    route::delete('cliente/devolver/libro/{id}', [ClientBookController::class, 'regresarLibro'])->name('regresarLibro');
    route::post('cliente/prestar/libro/{id}', [ClientBookController::class, 'store'])->name('prestarLibro');
});

Route::middleware('role')->group(function () {

    Route::get('/admin/home', [AdminController::class, 'index'])->name('home.adim');
    Route::get('/admin/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/admin/update', [AdminController::class, 'update'])->name('admin.update');

    Route::get('/lista/usuarios', [AdminUserController::class, 'index'])->name('list.users');
    Route::delete('/admin/eliminar-usuario/{id}', [AdminUserController::class, 'destroy'])->name('admin.elimiarUser');
    Route::get('/admin/lista/libros', [AdminBooksController::class, 'index'])->name('admin.listBooks');
    Route::get('/admin/editar/libro/{id}', [AdminBooksController::class, 'edit'])->name('admin.editBook');
    Route::put('/admin/update/libro/{id}', [AdminBooksController::class, 'update'])->name('admin.updateBook');
    Route::delete('/admin/eliminar/libro/{id}', [AdminBooksController::class, 'destroy'])->name('deleteBook');
});