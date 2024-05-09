<?php
Route::get('test99',function () {    //return   view
    return  view('task2');

});

Route::post('recfrom1',function () {   //return   action
  return 'Data received';
})->name('datareceivefrom');