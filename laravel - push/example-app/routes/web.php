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
use App\Role;

Route::get('/', function () {
    return view('cadastro');
});

Route::get('/cadastro', function () {
    return view('cadastro');

});


// Route::get('/relatorio', function () {
//     return view('relatorio');
// });

Route::post('/create', 'Controller@create');

Route::post('/readRole', 'Controller@readRole');

Route::post('/addRole', 'Controller@addRole');

Route::post('/deleteRole', 'Controller@deleteRole');





// Route::post('/create' , 'Role@index');


// //  Route::get('/create' , function(){

// // //     //criar um usuario pelo phpmyadmin ou por esse linha:
// //  //    $user = User::create(['name'=>'Fernando Santana', 'email'=>'fernando.sidfjisjdf@gmom', 'password'=>bcrypt('123')]);
// // //     //

// //      $user = User::find(1);

// //      $role = new Role(['name'=>'Guest']);

// //      $user->roles()->save($role);


// //  });

Route::get('/read' , function(){

    $user = User::findOrFail(1);

    foreach ($user->roles as $role) {

        echo $role->name . '<br>';
        echo '<br>';
    }


    echo $user->posts;

});


Route::get('/update' , function(){

    $user = User::find(1);

    if($user->has('roles')){
        foreach ($user->roles as $role) {
            if($role->name == "Admin"){
                $role->name = "Administrator";
                $role->save();
            }
        }

    
    }



 });

Route::get('/delete' , function(){

    $user = User::findOrFail(1);

    //deleta tudo
    //$user->roles()->delete();

    if($user->has('roles')){
        foreach ($user->roles as $role) {
            if($role->name == "Administrator"){
                $role->delete();
            }
        }    
    }


    




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