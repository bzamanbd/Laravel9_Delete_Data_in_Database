<?php

use App\Http\Controllers\ListController;
use Illuminate\Support\Facades\Route;

Route::get('list',[ListController::class, 'showData']);
Route::get('delete/{id}',[ListController::class, 'deleteData']);