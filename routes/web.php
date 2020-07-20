<?php

/*Route::get('/{any}', function () {
  return view('post');
})->where('any', '.*');
*//*
Route::get('/main', function () {
  return view('main');
});*/
use Illuminate\Http\Request;


Route::name('main')->get('/main', function(){
   return view('main');
});


Route::get('/contact-us', function () {
  return view('contact-us');
});

Route::post('/photo-upload', function(){
            $name = Request::file('photo')->getClientOriginalName();
            Request::file('photo')->move('rw_common/images',$name);


});

Route::get('/', function () {


    return view('login');
});




Route::post('/login', function (Request $request) {

   $password_to_website = 'RedBanana';
   $password = $request->get('password');
    if (strcmp($password,$password_to_website) == 0) {
        return ('good');
    }
    else{
        return ('bad');
    }






    /*return view('main');
    $password_to_website = 'RedMonkey';
    $password = 'RedMonkey';
    Redirect::to('google.com');
return view('main');
    if (strcmp($password,$password_to_website) == 0) {
        return view('main');
    }
    else{
        return view('login');
    }
*/

});




