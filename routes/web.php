<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;

Route::get('/product',[
    ProductsController::class,
    'index'
]);

Route::get('/product/{productName}',[
    ProductsController::class,
    'detail'
]);

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


//Tra ve View
Route::get('/', function () {
    return view('welcome');
});

//Tra ve chuoi string
Route::get('/string', function () {

    //2 cach viet nay tuong tu nhau
    //return env('MY_NAME');
    return "Tôi tên là Phạm Thị Hoài!";
});

//Tra ve mot array 
Route::get('/foods', function () {
   return ['thịt kho', 'cá kho', 'ba chỉ luộc'];
});

//Tra ve mot object 
Route::get('/foodss', function(){
    return response() -> json([
        'name' => 'Phạm Thị Hoài',
        'age'=> '2000 - 22 tuoi',
        'sex' => 'Nữ'
    ]);
});

//Tra ve mot request khac
Route::get('/anythings', function(){
    return redirect('/');
});

