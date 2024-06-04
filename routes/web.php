<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Auth;



    Route::get('/home', [LoginController::class, 'home'])->name('home');
    Route::get('/login', [LoginController::class,'login'])->name('login');
    Route::get('/logout', [LoginController::class,'logout'])->name('logout');

    Route::middleware(['guest'])->group(function() {
        Route::get('/login', [LoginController::class, 'showLoginform'])->name('login');
        Route::post('/login', [LoginController::class, 'login']);
    });

    Route::middleware(['auth'])->group(function() {
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

        Route::get('/home', function() {
            return redirect('home');
        });

        Route::get('/admn', [AdminController::class, 'index']);
        Route::get('/admn/gurubk', [AdminController::class, 'gurubk'])->middleware('userAkses:gurubk');
        Route::get('/admn/gurupengajar', [AdminController::class, 'gurupengajar'])->middleware('userAkses:gurupengajar');

        // Tambahkan rute lainnya di sini...
    });

// Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('/dashboard', [HomeController::class,'dashboard'])->name('dashboard');

    Route::get('/kelas', [HomeController::class,'kelas'])->name('kelas');
    Route::get('/kelas7', [HomeController::class,'kelas7'])->name('kelas7');
    Route::get('/kelas8', [HomeController::class,'kelas8'])->name('kelas8');
    Route::get('/kelas9', [HomeController::class,'kelas9'])->name('kelas9');
    
    // ... route lainnya ...

    Route::get('/data-siswa/{class_id}', [HomeController::class, 'data'])->name('data');
    Route::get('/data-siswa', [HomeController::class, 'all_studentdata'])->name('all-studentdata');

    Route::get('/import-data-siswa', [HomeController::class, 'showImportForm'])->name('import-data-siswa');
    Route::post('/import-data-siswa', [HomeController::class, 'import_proses'])->name('import-data-siswa');

    Route::get('/create-data', [HomeController::class,'create_data'])->name('create-data-siswa');
    Route::post('/store-data', [HomeController::class,'store_data'])->name('store-data-siswa');
    Route::get('/edit_data/{id}', [HomeController::class,'edit_data'])->name('edit-data-siswa');
    Route::put('/update_data/{id}', [HomeController::class,'update_data'])->name('update-data-siswa');
    Route::delete('/delete_data/{id}', [HomeController::class,'delete_data'])->name('delete-data-siswa');

    Route::get('/absensi', [HomeController::class,'absensi'])->name('absensi');
    Route::get('/absensi', [HomeController::class,'absensi'])->name('absensi');

    Route::get('/absensikelas', [HomeController::class,'bln_absensi'])->name('bln-absensi');
    Route::get('/pengaturan', [HomeController::class,'setting'])->name('setting');
// });





// Route::middleware(['prefix' => 'admin','middleware' => ['auth'], 'as' => 'user.'] , function(){
    Route::get('/user/home', [LoginController::class, 'home_user'])->name('home-user');
    Route::get('/user/login', [LoginController::class,'login_user'])->name('login-user');
    Route::get('/user/logout', [LoginController::class,'logout'])->name('logout');
// });

// Route::group(['prefix' => 'user','middleware' => ['auth'], 'as' => 'admin.'] , function(){
    Route::get('/user/dashboard', [UserController::class,'dashboard'])->name('user-dashboard');

    Route::get('/user/kelas', [UserController::class,'user_kelas'])->name('user-kelas');
    // Route::get('kelas/students/{class}', [HomeController::class, 'getStudentsByClass'])->name('students.by_class');
    // Route::get('/students/{class}', [StudentController::class, 'showByClass'])->name('students.by_class');

    Route::get('/user/kelas7', [UserController::class,'user_kelas7'])->name('user-kelas7');
    Route::get('/user/kelas8', [UserController::class,'user_kelas8'])->name('user-kelas8');
    Route::get('/user/kelas9', [UserController::class,'user_kelas9'])->name('user-kelas9');
    // Route::get('create-kelas', [HomeController::class,'create_kelas'])->name('kelas');

    Route::get('/user/data-siswa/{class_id}', [UserController::class,'user_data'])->name('user-data-siswa');
    Route::get('/user/data-siswa', [UserController::class, 'user_all_studentdata'])->name('user-all-studentdata');

    Route::get('/user/import-data-siswa', [UserController::class, 'user_showImportForm'])->name('user-import-data-siswa');
    Route::post('/user/import-data-siswa', [UserController::class, 'user_import'])->name('user-import-data-siswa');

    Route::get('/user/kelas7', [UserController::class,'user_kelas7'])->name('user-kelas7');
    Route::delete('/user/delete_data/{id}', [UserController::class,'user_delete_data'])->name('user-delete-data-siswa');

    Route::get('/user/edit_absensi/{class_id}', [UserController::class,'user_edit_absensi'])->name('user-edit-absensi');
    Route::put('/user/update_absensi/{class_id}', [UserController::class,'user_update_absensi'])->name('user-update-absensi');

    Route::post('/user/save-absensi', [UserController::class, 'saveAbsensi'])->name('user-save-absensi');
    Route::get('/user/absen-siswa', [UserController::class,'user_absen_siswa'])->name('user-absen-siswa');

    Route::get('/user/absensikelas', [UserController::class,'user_absensikls'])->name('user-absensikls');
    Route::get('/user/pengaturan', [UserController::class,'user_setting'])->name('user-setting');
// });