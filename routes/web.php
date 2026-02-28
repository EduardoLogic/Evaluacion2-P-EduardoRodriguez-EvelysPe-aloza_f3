<?php

use App\Http\Controllers\PlatilloController;
use Illuminate\Support\Facades\Route;

Route::resource('platillos', PlatilloController::class);