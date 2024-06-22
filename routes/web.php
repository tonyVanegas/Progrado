<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//agregamos los siguientes controladores
//use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
//use App\Http\Controllers\PermissionController;


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

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::resource('permissions', App\Http\Controllers\PermissionController::class);
Route::get('permissions/{permissionId}/delete', [App\Http\Controllers\PermissionController::class, 'destroy']);

Route::resource('roles', App\Http\Controllers\RolController::class);
Route::get('roles/{roleId}/delete', [App\Http\Controllers\RolController::class, 'destroy']);
Route::get('roles/{roleId}/give-permissions', [App\Http\Controllers\RolController::class, 'addPermissionToRole']);
Route::put('roles/{roleId}/give-permissions', [App\Http\Controllers\RolController::class, 'givePermissionToRole']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//y creamos un grupo de rutas protegidas para los controladores
Route::group(['middleware' => ['auth']], function () {
    //Route::resource('roles', RolController::class);
    //Route::resource('permisos', PermissionController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('blogs', BlogController::class);
});

require __DIR__ . '/auth.php';
