<?php

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
    return redirect()->route('trang-chu');
});
Route::get('index', 'PageController@index')->name('trang-chu');

Route::get('dang-ky', 'PageController@getTrangDangKy')->name('dang-ky');

Route::post('tao-ho-so', ['as' => 'tao-ho-so',
    'uses' => 'HoSoController@postHoSo']);

Route::get('chi-tiet-ho-so/{id}', ['as' => 'chi-tiet-ho-so',
    'uses' => 'HoSoController@getChiTietHoSo']);

Route::get('chi-tiet-ho-so/{hoSoBoMe}/them-con', ['as' => 'them-con',
    'uses' => 'HoSoController@getThemHoSoCon']);

Route::get('so-do-gia-pha','HoSoController@getGiaPha')->name('so-do-gia-pha');

Route::get('cach-xung-ho','HoSoController@getXungHo')->name('cach-xung-ho');
Route::get('ket-qua-xung-ho','HoSoController@getKQXungHo')->name('ket-qua-xung-ho');
Route::get('lich', function (){
    return view('page.lich-gia-pha');
})->name('lich');
Route::post('cap-nhat-ho-so/{id}', 'HoSoController@capNhatHoSo')->name('cap-nhat-ho-so');

Route::get('so-do-gia-pha/{id}', 'HoSoController@getGiaPha')->name('so-do-gia-pha-2');

