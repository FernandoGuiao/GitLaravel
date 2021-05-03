<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserAlt;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\MockObject\Rule\Parameters;

class usercontroller extends Controller
{
    public function index(Request $request){
        //porco
        //dd($request);
        //$requestDec =  json_decode($request);
        $username = $request->request->get('nome');
        $password = $request->request->get('password');
        $functs = [$request->request->get('admin'),$request->request->get('moderator'),$request->request->get('guest')];
        //dd($functs);

        $user = DB::insert("INSERT INTO `user`(user,password) VALUES (?,?)", [$username,$password]);
         if($user == true){
             //dd($user);
             $user_id = DB::table('user')->where('user', '=' , $username )->where('password', '=', $password)->value('id');
             for ($i = 0 ; $i<count($functs); $i++) {
                if ($functs[$i]!= null){
                    $user_functs = DB::insert("INSERT INTO `user_function`(id_user,id_funct) VALUES (?,?)", [$user_id,$functs[$i]]);
                }

             }
        }

        //dd($user);
        //return view('user.index', ['users' => $users]);
        
        //INSERT INTO `projetolar`(users,funcoes VALUES (value_1,value_2);
        return view('relatorio');

    }
}
