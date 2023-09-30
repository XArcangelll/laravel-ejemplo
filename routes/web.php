<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use App\Mail\ContactactanosMailable;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', HomeController::class)->name('home');

// Route::controller(CursoController::class)->group(function () {
//   //   Route::get('/cursos', 'index')->name("cursos.index");
//   //   Route::get('/cursos/create', 'create')->name("cursos.crear");
//   //   Route::post('cursos', 'store')->name("cursos.registrar");
//   //   Route::get('/cursos/{id}', 'show')->name("cursos.show");
//   //   Route::get('/cursos/{id}/edit','edit')->name('cursos.edit');
//   //   Route::put('/cursos/{curso}','update')->name('cursos.update')->missing(function () {
//   //       return redirect()->route("cursos.index")->withErrors("Algo salio mal");
//   //   });
//   //   Route::delete('/cursos/{curso}','destroy')->name('cursos.destroy')->missing(function () {
//   //     return redirect()->route("cursos.index")->withErrors("Algo salio mal con el borrado");
//   // });
//   //  Route::put('/cursos/{curso}','update')->name('cursos.update');


// });

// Route::resource('asignaturas', CursoController::class)->parameters(["asignatura"=>"curso"])->names('cursos')->missing(function(){
//   return redirect()->route("cursos.index")->withErrors("Hubo un error inesperado");
// }) ;


Route::view('nosotros','nosotros')->name('nosotros');


Route::resource('cursos', CursoController::class)->missing(function(){
  return redirect()->route("cursos.index")->withErrors("Hubo un error inesperado");
}) ;

// Route::get('contactanos',function(){
//       Mail::to('diegoprincipesiseñor@hotmail.com')->send(new ContactactanosMailable);

//       return "Mensaje enviado";
// })->name('contactanos');

Route::get('contactanos',[ContactanosController::class,'index'])->name('contactanos.index');
Route::post('contactanos',[ContactanosController::class,'store'])->name('contactanos.store');