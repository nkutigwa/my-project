<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RestoController;

/**create a route for login and register view files */
Route::view('register','register');
Route::view('login','login');
/**Create a route for login and register controller. */
Route::get('registerUser','RestoController@registerUser');
Route::post('loginUser','RestoController@login');
/*applying the middleware on the routes */

Route::group(['middleware'=>'customAuth'],function(){
 /* Route::get('/list','RestoController@list');
  Route::view('/add','add');
  Route::post('addResto','RestoController@addResto');*/
  Route::view('register','register');
  Route::view('login','login');
  Route::get('logout','RestoController@logout');
  });

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
/*
Route::get('/', function () {
    return view('welcome');
});

 Route::get("login" ,[LoginController::class,'show_login_form']);
 
Route::namespace('Auth')->group(function () {
    Route::get('/login','LoginController@show_login_form')->name('login');
    Route::post('/login','LoginController@process_login')->name('login');
    Route::get('/register','LoginController@show_signup_form')->name('register');
    Route::post('/register','LoginController@process_signup');
    Route::post('/logout','LoginController@logout')->name('logout');

  });

Route::get('/insert',function(){
$stuRef = app('firebase.firestore')->database()->collection('Students')->newDocument();
$stuRef->set([
    'firstname'=>'Aidan',
     'lastname'=> 'Stephen',
     'age' => 22 
]);
});*/
/*Route::get('firebase','FirebaseController@index');*/