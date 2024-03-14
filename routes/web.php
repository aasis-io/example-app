<?php

use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route Methods


/*

* 1. GET
* 2. POST
* 3. PUT
* 4. PATCH
* 5. DELETE

*/


Route::get('person/{id?}', function ($id = null) {

    return [
        'id' => $id,
        'name' => 'John Doe'
    ];
});




Route::get('animals', function () {
    return 'Animals';
})->name('animals');


// Route Grouping

Route::group(['as' => 'animals.', 'prefix' => 'animals'], function () {
    Route::get('dog', function () {
        return 'Woof!';
    })->name('dog');

    Route::get('cat', function () {
        return 'Meow!';
    })->name('cat');
});




Route::get('blade-test', function() {
    return view('blade-test');
})->name('blade-test');


Route::get('about', function () {
    return view('about');
});




Route::get('contact', [testController::class,'contact'])->name('contact');

