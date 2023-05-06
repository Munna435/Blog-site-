<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get(
    '/',
    function () {
        return view('welcome');
    }
)->name('index');

Route::get(
    '/post/{postId}',
    function () {
        return view('post-details');
    }
)->name('post-details');

Route::get(
    '/dashboard',
    function () {
        return view('dashboard.index');
    }
)->middleware(['auth', 'verified'])->name('dashboard');

Route::get(
    '/dashboard/posts',
    function () {
        return view('dashboard.posts');
    }
)->middleware(['auth', 'verified'])->name('dashboard-posts');

Route::get(
    '/dashboard/posts/add',
    function () {
        return view('dashboard.add-post');
    }
)->middleware(['auth', 'verified'])->name('dashboard-add-post');

Route::middleware('auth')->group(
    function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    }
);

require __DIR__.'/auth.php';
