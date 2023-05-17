<?php

use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Client\HomeController as ClientHomeController;
use App\Http\Controllers\Client\OrderController as ClientOrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
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
    return view('auth.login');
});

Route::post('/', function () {
    $email = request('email');
    $password = request('password');

    // Logika validasi dan autentikasi sederhana
    if ($email === 'siscaadmin' && $password === 'sisca123') {
        // Jika login berhasil, arahkan ke halaman selanjutnya
        return redirect('/dashboard');
    } if ($email === 'siscauser' && $password === 'sisca123') {
        // Jika login berhasil, arahkan ke halaman selanjutnya
        return redirect('/home');
    }else {
        // Jika login gagal, arahkan kembali ke halaman login dengan pesan error
        return redirect('/')->with('error', 'Login failed.');
    }

   
});

Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/register', function () {
    return redirect('/home');
});


//Ini Adalah Route Untuk Dashboard
Route::get('/tabelUser', [UserController::class, 'tableUser'])->name('tabelUser');
Route::get('/dashboard', [OrderController::class, 'tableOrder'])->name('dashboard');
Route::get('/tabelLayanan', [LayananController::class, 'tableLayanan'])->name('tabelLayanan');
Route::get('/laporan', [LaporanController::class, 'laporan'])->name('laporan');


//ini adalah Route Untuk Client
Route::get('/home', [ClientHomeController::class, 'home'])->name('home');
Route::get('/layanan', [ClientOrderController::class, 'layanan'])->name('layananpage');









// ini adlaah Route Register
// Route::get('/register', [RegisteredUserController::class, 'create'])
//                 ->name('register');

// Route::post('/register', [RegisteredUserController::class, 'store']);




// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';

// Auth::routes();

// Route::get('/test', [RoleController::class, 'getRole']);

// Route::get('/', [AuthenticatedSessionController::class, 'create'])
//                 ->name('login');

// Route::post('/', [AuthenticatedSessionController::class, 'store']);
