<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\KidController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MaritalController;
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


Route::get('/test', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// Route::get('/index', function () {
//     return view('personnel.home.index');
// })->middleware(['auth', 'verified'])->name('home.index');


Route::group(['prefix' => 'home', 'controller' => ProfileController::class], function() {
    Route::get('index','index')->name('home.index');
    Route::get('protozoa','protozoa')->name('home.protozoa');
    Route::get('staffing','staffing')->name('home.staffing');
});

Route::prefix('')->middleware(['auth:sanctum', 'role:boss'])-> group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    
    Route::group(['prefix' => 'employee', 'controller' => EmployeeController::class], function() {
        Route::get('index','index')->name('employee.index');
        Route::get('show/{id}','show')->name('employee.show');
        Route::get('create','create')->middleware(['auth', 'role:boss'])->name('employee.create');
        Route::post('add','store')->name('employee.store');
        Route::post('update/{id}','update')->name('employee.update');
        Route::get('edit/{id}','edit')->name('employee.edit');
    });
    Route::group(['prefix' => 'kid', 'controller' => KidController::class], function() {
        Route::get('index','index')->name('kid.index');
        Route::get('create/{id}','create')->name('kid.create');
        Route::post('delete/{id}' ,'destroy')->name('kid.destroy');
        Route::get('restore/{id}' ,'restore')->name('kid.restore');
        Route::post('add/{id}','store')->name('kid.store');
        Route::get('edit/{id}','edit')->name('kid.edit');
        Route::get('editBlock/{id}','editBlock')->name('kid.editBlock');
        Route::post('update/{id}','update')->name('kid.update');
    });
    Route::group(['prefix' => 'marital', 'controller' => maritalController::class], function() {
        Route::get('index','index')->name('marital.index');
        Route::get('create/{id}','create')->name('marital.create');
        Route::post('add/{id}','store')->name('marital.store');
        Route::get('edit/{id}','edit')->name('marital.edit');
        Route::post('update/{id}','update')->name('marital.update');
        Route::get('editBlock/{id}','editBlock')->name('marital.editBlock');
        Route::post('delete/{id}' ,'destroy')->name('marital.destroy');
    });
    Route::group(['prefix' => 'block', 'controller' => BlockController::class], function() {
        Route::get('index','index')->name('block.index');
        Route::get('create','create')->name('block.create');
        Route::post('add','store')->name('block.store');
        Route::get('edit/{id}','edit')->name('block.edit');
        Route::post('update/{id}','update')->name('block.update');
    });
    Route::group(['prefix' => 'status', 'controller' => StatusController::class], function() {
        Route::get('index','index')->name('status.index');
        Route::get('create','create')->name('status.create');
        Route::post('add','store')->name('status.store');
        Route::get('edit/{id}','edit')->name('status.edit');
        Route::post('update/{id}','update')->name('status.update');
    });
    Route::group(['prefix' => 'country', 'controller' => CountryController::class], function() {
        Route::get('index','index')->name('country.index');
        Route::get('create','create')->name('country.create');
        Route::post('add','store')->name('country.store');
        Route::get('edit/{id}','edit')->name('country.edit');
        Route::post('update/{id}','update')->name('country.update');
    });
    Route::group(['prefix' => 'city', 'controller' => CityController::class], function() {
        Route::get('index/{id}','index')->name('city.index');
        Route::get('create/{id}','create')->name('city.create');
        Route::post('add/{id}','store')->name('city.store');
        Route::get('edit/{id}','edit')->name('city.edit');
        Route::post('update/{id}','update')->name('city.update');
    });
    Route::group(['prefix' => 'department', 'controller' => DepartmentController::class], function() {
        Route::get('index','index')->name('department.index');
        Route::get('create','create')->name('department.create');
        Route::post('add','store')->name('department.store');
        Route::get('edit/{id}','edit')->name('department.edit');
        Route::post('update/{id}','update')->name('department.update');
    });
    Route::group(['prefix' => 'position', 'controller' => PositionController::class], function() {
        Route::get('index','index')->name('position.index');
        Route::get('create','create')->name('position.create');
        Route::post('add','store')->name('position.store');
        Route::get('edit/{id}','edit')->name('position.edit');
        Route::post('update/{id}','update')->name('position.update');
    });
    Route::group(['prefix' => 'bill', 'controller' => BillController::class], function() {
        Route::get('index/{id}','index')->name('bill.index');
        Route::get('create','create')->name('bill.create');
        Route::post('add','store')->name('bill.store');
        Route::get('export','export')->name('bill.export');
        Route::post('active/{id}','active')->name('bill.active');
        Route::get('edit/{id}','edit')->name('bill.edit');
        Route::post('update/{id}','update')->name('bill.update');
        Route::get('edit_bill/{id}','edit_bill')->name('bill.edit_bill');
    });
    Route::group(['prefix' => 'user', 'controller' => UserController::class], function() {
        Route::get('export','export')->name('user.export');
        Route::get('index','index')->name('user.index');
        Route::get('create','create')->name('user.create');
        Route::get('create_permission/{id}','createPermission')->name('user.create_permission');
        Route::post('permission/{id}','permission')->name('user.permission');
        Route::post('add','store')->name('user.store');
        Route::get('edit/{id}','edit')->name('user.edit');
        Route::post('update/{id}','update')->name('user.update');
    });
});
require __DIR__.'/auth.php';
