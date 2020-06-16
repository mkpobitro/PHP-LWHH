<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Route::get( '/', function () {
//     return view( 'layout' );
// } );

// Route::get( '/hello', function () {
//     return ['name' => 'world'];
// } );

// Route::get( '/hello/{name}', function ( $worldName ) {
//     $worldName = ucwords( $worldName );
//     return "Hello {$worldName}";
// } );

// Route::get( '/greet/{greetings}/{name}', function ( $greetings, $worldName ) {
//     $worldName = ucwords( $worldName );
//     $greetings = ucwords( $greetings );
//     return "{$greetings} {$worldName}";
// } );

// Route::post( '/say', function ( Request $request ) {
//     $newName = $request->post( 'name' );
//     echo "Hi {$newName}";
// } );

// Route::get('/hello/world', 'MainController@sayHi');

// Route::get('/hello/world', [MainController::class, 'sayHi']);
// Route::get('/sayname/{something}', [MainController::class, 'sayMyName']);

// Route::get( '/hello/{world}', function ( $worldName ) {
//     return view( "info", [
//         'name' => ucwords( $worldName ),
//         'time' => time(),
//     ] );
// } );

// Route::post( '/say', function ( Request $request ) {
//     $newName = $request->post('name');
//     $greetings = $request->post('greetings');
//     return view("info", [
//         'name' => $newName,
//         'greet'=> $greetings
//     ]);
// } );
Route::get('/', [PostsController::class, 'createPost'])->name('posts.create');

Route::get('/', [MainController::class, 'main']);
Route::get('/features', [MainController::class, 'features']);
Route::get('/contact', [MainController::class, 'contact']);
Route::get('/allpeople', [MainController::class, 'allpeople']);
Route::get('/test', [MainController::class, 'testModel']);

Route::get('/form', [FormController::class, 'displayForm'])->name("form.create");
Route::post('/save', [FormController::class, 'saveForm'])->name("form.save");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
