<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class Test extends Controller
{
/*DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root
DB_PREFIX=e_*/
    public function index()
    {
        $user = new User;
        $res = $user::all();
        dd($res);
    }
}
