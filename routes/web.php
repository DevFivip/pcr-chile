<?php

use App\Http\Controllers\MakePdfController;
use App\Http\Controllers\PersonaController;
use App\Models\Persona;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Resultados/Index/{qr}', function ($qr) {
    $persona = Persona::where('qr', $qr)->first();
    if (!$persona) {
        return abort(404);
    }

    $fecha_ingreso = new DateTime($persona->recepcion_muestra_fecha);

    $res_fecha_ingreso = $fecha_ingreso->modify('+ 62 minutes')->modify('+ 24 hour')->modify('- 45 minutes')->format('d/m/Y H:i');

    return view('resultado', ["persona" => $persona, "fecha" => $res_fecha_ingreso]);
});


Route::get('/get/{id}', [MakePdfController::class, 'make'])->middleware('auth');

Route::resource('persona', PersonaController::class);
Route::post('persona/pagar/{id}', [PersonaController::class, 'pagar'])->middleware('auth');


Route::prefix('ooooo')->group(function () {
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
