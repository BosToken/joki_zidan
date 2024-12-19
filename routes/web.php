<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\StudentController;
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

Route::get('login', [GuestController::class, 'login'])->name('login');
Route::post('login', [GuestController::class, 'auth']);


Route::middleware(['auth'])->group(function () {
    Route::get('/dasbor', [StudentController::class, 'dasbor'])->name('dasbor');
    Route::get('/peminjaman', [StudentController::class, 'peminjaman'])->name('peminjaman');
    Route::get('/borrow/{id}', [StudentController::class, 'borrow'])->name('borrow');
    Route::get('/list-buku', [StudentController::class, 'list_buku'])->name('list-buku');

    Route::get('/cancel-borrow/{id}', [StudentController::class, 'cancel_borrow'])->name('cancel-borrow');
    Route::get('/return-borrow/{id}', [StudentController::class, 'return_borrow'])->name('return-borrow');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
});

Route::middleware(['auth', 'admin'])->group(function() {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/master-book', [AdminController::class, 'master_book'])->name('master-book');
    Route::get('/add-book', [AdminController::class, 'add_book'])->name('add-book');
    Route::get('/edit-book/{id}', [AdminController::class, 'edit_book'])->name('edit-book');
    Route::post('/store-book', [AdminController::class, 'store_book'])->name('store-book');
    Route::post('/update-book/{id}', [AdminController::class, 'update_book'])->name('update-book');
    Route::get('/delete-book/{id}', [AdminController::class, 'deleteBook'])->name('delete-book');

    Route::get('/master-student', [AdminController::class, 'master_student'])->name('master-student');
    Route::get('/add-student', [AdminController::class, 'add_student'])->name('add-student');
    Route::post('/store-student', [AdminController::class, 'store_student'])->name('store-student');
    Route::get('/edit-student/{id}', [AdminController::class, 'edit_student'])->name('edit-student');
    Route::post('/update-student/{id}', [AdminController::class, 'update_student'])->name('update-student');
    Route::get('/delete-student/{id}', [AdminController::class, 'deleteStudent'])->name('delete-student');

    Route::get('/rent-book', [AdminController::class, 'rent_book'])->name('rent-book');
    Route::get('/rent-confirmation/{id}', [AdminController::class, 'rent_confirmation'])->name('rent-confirmation');
    Route::get('/borrow-book', [AdminController::class, 'borrow_book'])->name('borrow-book');
    Route::get('/return-book', [AdminController::class, 'return_book'])->name('return-book');
    
    Route::get('/report-rent', [AdminController::class, 'report_rent'])->name('report-rent');
    Route::get('/info-rent/{id}', [AdminController::class, 'info_rent'])->name('info-rent');
    Route::get('/report-student', [AdminController::class, 'report_student'])->name('report-student');
    Route::get('/info-student/{id}', [AdminController::class, 'info_student'])->name('info-student');
});
