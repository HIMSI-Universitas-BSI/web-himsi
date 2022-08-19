<?php

use App\Http\Controllers\C_campuses;
use App\Http\Controllers\C_openRecruitment;
use Illuminate\Support\Facades\Route;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Carbon;

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

Route::get('/', [C_openRecruitment::class, 'index']);

Route::group(['prefix' => 'oprec'], function () {
    Route::get('/', [C_openRecruitment::class, 'index']);
    Route::get('/data/{Open_recruitment}', [C_openRecruitment::class, 'edit']);
    Route::get('/choose-campus', [C_openRecruitment::class, 'chooseCampus']);
    Route::get('/choose-campus/{campus}', [C_openRecruitment::class, 'inputNIM']);
    Route::post('/input-nim', [C_openRecruitment::class, 'create']);
    Route::get('/form/{campus}/{NIM}', [C_openRecruitment::class, 'form']);
    Route::post('/', [C_openRecruitment::class, 'store']);
    Route::get('/done/{NIM}', [C_openRecruitment::class, 'done']);
});

Route::resources([
    'campuses' => C_campuses::class
]);

// Route::get('/generate', function () {
//     $now = Carbon::now()->format('ym');
//     $config = ['table' => 'users', 'length' => 12, 'prefix' => "UID-$now"];
//     $uid = IdGenerator::generate($config);
//     return $uid;
// });
