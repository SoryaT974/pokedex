<?php

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

use App\Http\Controllers\DefaultController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\MovePokemonController;



Route::get('/', [DefaultController::class, 'home'])->name('home');

Route::get('/pokemon/{id}/pokemonDetails', [DefaultController::class, 'homeDetails'])->name('homeDetails');

Route::get('/register', [UserController::class, 'create'])->name('users.create');
Route::post('/register', [UserController::class, 'store'])->name('users.store');
Route::get('/login', [UserController::class, 'login'])->name('users.login');
Route::post('/login', [UserController::class, 'authenticate'])->name('users.authenticate');
Route::get('/logout', [UserController::class, 'logout'])->name('users.logout');

// Pokemons
Route::get('/pokemons', [PokemonController::class, 'list'])->name('pokemons');
Route::get('/pokemon/{id}', [PokemonController::class, 'pokemon'])->name('pokemon');

// Create pokemon
Route::get('/pokemons/create', [PokemonController::class, 'create'])->name('pokemon.create');
Route::post('/pokemons/create', [PokemonController::class, 'postCreate'])->name('pokemon.create.post');

// Update pokemon
Route::get('/pokemon/{id}/update', [PokemonController::class, 'update'])->name('pokemon.update');
Route::post('/pokemon/{id}/update', [PokemonController::class, 'postUpdate'])->name('pokemon.update.post');

// Delete pokemon
Route::get('/pokemons/{id}/delete', [PokemonController::class, 'delete'])->name('pokemon.delete');

// Create pokemon 
Route::get('/pokemon/{id}/addMove', [MovePokemonController::class, 'addMovePokemon'])->name('movePokemon.add');
Route::post('/pokemon/{id}/addMove', [MovePokemonController::class, 'postAddMovePokemon'])->name('movePokemon.add.post');
Route::get('/pokemon/{pokemonId}/deleteMove/{moveId}', [MovePokemonController::class, 'delete'])->name('movePokemon.delete');
