<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

// Serve storage files when symlink doesn't work (e.g. shared hosting / cPanel)
Route::match(['get', 'head'], 'storage/{path}', function () {
    $requestPath = ltrim(request()->path(), '/');
    if (!str_starts_with($requestPath, 'storage/')) {
        abort(404);
    }
    $path = substr($requestPath, 8); // strip 'storage/'
    if (empty($path) || str_contains($path, '..')) {
        abort(404);
    }

    $fullPath = storage_path('app/public/' . $path);
    $realPath = realpath($fullPath);
    $storageRoot = realpath(storage_path('app/public'));

    if (!$realPath || !is_file($realPath)) {
        abort(404);
    }
    if ($storageRoot && !Str::startsWith($realPath, $storageRoot)) {
        abort(404);
    }

    return response()->file($realPath);
})->where('path', '.*')->name('storage.serve');

Route::view('/', 'pages.home')->name('home');
Route::view('/services', 'pages.services')->name('services');
Route::view('/about', 'pages.about')->name('about');
Route::view('/gallery', 'pages.gallery')->name('gallery');
Route::view('/blog', 'pages.blog')->name('blog');
Route::get('/blog/{slug}', function (string $slug) {
    $posts = config('blog.posts');
    $index = collect($posts)->search(fn ($post) => $post['slug'] === $slug);

    if ($index === false) {
        abort(404);
    }

    return view('pages.blog-show', [
        'post' => $posts[$index],
        'index' => $index,
        'prev' => $posts[$index + 1] ?? null,
        'next' => $posts[$index - 1] ?? null,
    ]);
})->name('blog.show');
Route::view('/career', 'pages.career')->name('career');
Route::view('/contact', 'pages.contact')->name('contact');
