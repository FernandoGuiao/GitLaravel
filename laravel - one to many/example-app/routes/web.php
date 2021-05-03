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

use App\Http\Controllers\usercontroller;
use App\User;
use App\Post;

Route::get('/', function () {
    return view('cadastro');
});

Route::get('/cadastro', function () {
    return view('cadastro');

});

// Route::get('/relatorio', function () {
//     return view('relatorio');
// });

Route::post('/relatorio', 'usercontroller@index');

Route::get('/login', function () {
    return view('login');
});

Route::get('/create' , function(){

    //criar um usuario pelo phpmyadmin ou por esse linha:
    //$user = User::create(['name'=>'Fernando Santana', 'email'=>'fernando.sidfjisjdf@gmom', 'password'=>bcrypt('123')]);
    //

    $user = User::findOrFail(1);

    $post = new Post(['title'=>'My second post!','body'=>'im posting for the second time']);

    $user->posts()->save($post);

});

Route::get('/read' , function(){

    $user = User::findOrFail(1);

    foreach ($user->posts as $posts) {

        echo $posts->title . '<br>';
        echo $posts->body . '<br>';
        echo '<br>';
    }


    echo $user->posts;

});


Route::get('/update' , function(){

    $user = User::find(1);

    $user->posts()->whereId(1)->update(['title'=>'updated title', 'body'=>'updated body']);
   // $user->posts()->where('id', '=' , 1)->update(['title'=>'updated title', 'body'=>'updated body']);



});

Route::get('/delete' , function(){

    $user = User::findOrFail(1);
    $user->posts()->whereId(1)->delete();

});


// Route::get('/insert' , function(){

//     $user = User::findOrFail(1);

//     $address = new Address(['name' => 'meu endereço 2 ']);

//     $user -> address()->save($address);
// });


// Route::get('/update' , function(){

//     $address = Address::whereUserId(1)->first();

//     $address->name = 'updated address!!' ;
//     $address->save();
// });

// Route::get('/read' , function(){

//     $user = User::findOrFail(1);
//     echo $user->address->name;

// });


// Route::get('/delete' , function(){

//     $user = User::findOrFail(1);
//     $user->address->delete();

// });