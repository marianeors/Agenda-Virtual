<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatosAgendaController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [ContatosAgendaController::class, 'index']);
Route::get('/contatos', [ContatosAgendaController::class, 'indexContatos']);
Route::get('/contatos/criar', [ContatosAgendaController::class, 'create']);
Route::post('/contatos/salvar', [ContatosAgendaController::class, 'store']);
Route::get('/contatos/{id}', [ContatosAgendaController::class, 'show']);