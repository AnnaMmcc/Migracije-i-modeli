<?php

use Illuminate\Support\Facades\Route;

Route::get("/",[ \App\Http\Controllers\HomeController::class, 'index']);
//Route::view("/", "welcome");

Route::view("/about", "about");

Route::get("shop", [\App\Http\Controllers\ShopController::class, 'index']);
//Route::view("/shop", "shop");

Route::get("/contact", [\App\Http\Controllers\ContactController::class, 'index']);
//Route::view("/contact", "contact");

Route::get("/admin/all-contacts",[\App\Http\Controllers\ContactController::class, 'getAllContacts']);


