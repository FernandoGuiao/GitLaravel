<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use GuzzleHttp\Middleware;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // public function __construct()
    // {
    //     $this=middleware('auth');
    // }

    public function create(Request $request){

        //porco
        //dd($request);
         $username = $request->request->get('nome');
         $password = $request->request->get('password');
         $email = $request->request->get('email');
         $user = User::create([
             'name'=>$username, 
             'email'=>$email, 
             'password'=>$password]);
         
         return json_encode(['msg'=>'cadastro feito']);    
         //return view('relatorio');

    }

    public function readRole(Request $request){

        //porco

        $email = $request->request->get('email');
        $password = $request->request->get('password');
            

        $user = User::where([['email', '=', $email],['password','=', $password],])->firstOrFail();
        
            foreach ($user->roles as $role) {
        
                echo $role->name . '<br>';
                echo '<br>';
            }
        
        
            echo $user->posts;
        
        

    }


    public function addRole(Request $request){
       // dd($request);
        //porco
        $email = $request->request->get('email');
        $password = $request->request->get('password');
        $role_req = $request->request->get('role');

        //dd($password, bcrypt($password));
        $user = User::where([['email', '=', $email],['password','=', $password]])->firstOrFail();
        
             
        $role = new Role(['name'=> $role_req]);

        $user->roles()->save($role);

        return view('relatorio');

    }

    public function deleteRole(Request $request){

        $email = $request->request->get('email');
        $password = $request->request->get('password');
        $role_req = $request->request->get('role');


        $user = User::where([['email', '=', $email],['password','=', $password],])->firstOrFail();

             
        if($user->has('roles')){
            foreach ($user->roles as $role) {
                if($role->name == $role_req){
                    $role->delete();
                }
            }    
        }

        return view('relatorio');

        //deleta tudo
        //$user->roles()->delete();
    }

    // public function update(Request $request){

    //     //porco

    //      $username = $request->request->get('nome');
    //      $password = $request->request->get('password');
    //      $email = $request->request->get('email');

         
         
    //      return view('relatorio');

    // }

    // public function delete(Request $request){

    //     //porco

    //      $username = $request->request->get('nome');
    //      $password = $request->request->get('password');
    //      $email = $request->request->get('email');

    //      $user = User::create([
    //          'name'=>$username, 
    //          'email'=>$email, 
    //          'password'=>bcrypt($password)]);
         
    //      return view('relatorio');

    // }


      
    //     }

}