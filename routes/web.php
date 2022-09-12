<?php

use App\Http\Controllers\panitia\C_openRecruitment as Panitia_Oprec;
use App\Http\Controllers\panitia\C_users as Panitia_Users;
use App\Http\Controllers\{C_authentication, C_campuses, C_dashboard, C_openRecruitment, C_profileUser};
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

Route::prefix('user')->group(function () {
    Route::get('/changePass', [C_profileUser::class, 'changePass']);
    Route::post('/changePassAct', [C_profileUser::class, 'changePassAct']);
});
Route::prefix('manage-users')->group(function () {
    Route::get('/', [Panitia_Users::class, 'index']);
    Route::get('/create', [Panitia_Users::class, 'create']);
    Route::get('/{user}', [Panitia_Users::class, 'show']);
    Route::post('/', [Panitia_Users::class, 'store']);
    Route::put('/{user}', [Panitia_Users::class, 'update']);
});

Route::group(['prefix' => 'authentication'], function () {
    Route::get('/login', [C_authentication::class, 'login'])->name('login');
    Route::post('/login', [C_authentication::class, 'storeLogin']);
    Route::post('/logout', [C_authentication::class, 'logout'])->middleware('auth');
});

Route::get('/', [C_openRecruitment::class, 'index']);

Route::group(['prefix' => 'oprec'], function () {
    Route::get('/', [C_openRecruitment::class, 'index']);
    Route::post('/', [C_openRecruitment::class, 'store']);
    Route::get('/edit/{openRecruitment}', [C_openRecruitment::class, 'edit']);
    Route::get('/choose-campus', [C_openRecruitment::class, 'chooseCampus']);
    Route::get('/choose-campus/{campus}', [C_openRecruitment::class, 'inputNIM']);
    Route::post('/input-nim', [C_openRecruitment::class, 'create']);
    Route::get('/form/{campus}/{NIM}', [C_openRecruitment::class, 'form']);
    Route::put('/form/{openRecruitment}', [C_openRecruitment::class, 'update']);
});

Route::resources([
    'campuses' => C_campuses::class
]);

Route::group(['prefix' => 'panitia', 'middleware' => 'auth'], function () {
    Route::get('/', [C_dashboard::class, 'index']);
    Route::group(['prefix' => 'openrecruitment'], function () {
        Route::get('/', [Panitia_Oprec::class, 'index']);
        Route::get('/campus/{campuses}', [Panitia_Oprec::class, 'campus']);
        Route::get('/campus/{campuses}/{status_interview}', [Panitia_Oprec::class, 'filterInterview']);
        Route::put('/interview/{openRecruitment}', [Panitia_Oprec::class, 'updateStatus']);
        Route::get('/{openRecruitment}', [Panitia_Oprec::class, 'show']);
        Route::delete('/{openRecruitment}', [Panitia_Oprec::class, 'destroy'])->middleware('admin');
    });
});

// Route::get('/generate', function () {
//     $now = Carbon::now()->format('ym');
//     $config = ['table' => 'users', 'length' => 12, 'prefix' => "UID-$now"];
//     $uid = IdGenerator::generate($config);
//     return $uid;
// });
