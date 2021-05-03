<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //para criar esse model de role: php artisan make:model Role -m
    //depois tem que criar a tabela pivot: php artisan make:migration create_role_user_table --create=role_user
    //fica em databases/migrations 
    //fazer isso antes de dar o migrate

    protected $fillable =['name'];

    
}
