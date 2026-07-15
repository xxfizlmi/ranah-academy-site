<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MentorsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/courses', [CoursesController::class, 'index']);
Route::get('/mentors', [MentorsController::class, 'index']);
Route::get('/articles', [ArticlesController::class, 'index']);
Route::get('/events', [EventsController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
