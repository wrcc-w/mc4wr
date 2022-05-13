<?php



use Illuminate\Http\Middleware\CheckResponseForModifications;
use Illuminate\Support\Facades\Route;
use Westreels\WestreelsMain;



// Auth test
Route::middleware(['auth:sanctum'])->group(function () {
	Route::get('/indextest', 'WestreelsMain@indexTest');
});
