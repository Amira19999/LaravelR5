<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\Clientcontroller;
use Illuminate\Http\Request;
use App\Http\Controllers\Studentcontroller;

Route::get('insertStudent',[studentcontroller::class, 'store']);   //student
Route::get('test',[MyController::class,'my_data']);
Route::get('insertClient',[Clientcontroller::class, 'store']);   
Route::get('/', function () {
    return view('welcome');
});


Route::get('amira/{id?}', function ($id=0) {
    return 'Welcome to my site'. $id;

})->whereNumber('id');



Route::get('course/{name}', function ($name){
    return 'My name is:'.$name;
})->whereIn('name',['amira','ahmed','hassan']);

Route::prefix('cars') -> group(function() {
    Route::get('bmw',function (){
    return 'categrop is Bmw';
    });

    Route::get('mercedes',function () {
        return 'categrop is mercedes';
    });
});

// Route::fallback (function () {
//     return  redirect('/');
// });

Route::get('test20',function () {    //return  form view
    return  view('form1');

});



Route::post('recfrom1',function (Request $request) {   //return  form  action
    return $request->all();
})->name ('receivefrom1');

Route::get('form', [ClientController::class,'create']);
Route::post('formResult',[ClientController::class,'store'])->name('formResult');

