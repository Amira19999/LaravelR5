<?php

use Illuminate\Support\Facades\Route;
use APP\Http\Controllers\MyController;
use Illuminate\Http\Request;
Route::get('test',[MyController::class,'my_data']);

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




