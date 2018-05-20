<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class Test extends Controller
{

    /**
     * 中间件验证是否登录
     *
     * PaperController constructor.
     */
    /*public function __construct(){
        $this->middleware('auth');
    }*/

    protected $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = $request->user();

            return $next($request);
        });
    }

    public function index()
    {
        //$user = new User;
        //$res = $user::all();
        //dd($res);
        return view('test/index');
    }

    public function menu1()
    {
        return view('test/menu-01');
    }

    public function menu2()
    {
        return view('test/menu-02');
    }

    public function menu3()
    {
        return view('test/menu-03');
    }

    public function menu4()
    {
        return view('test/menu-04');
    }

    public function person()
    {
        return view('test/person', ['user'=>$this->user]);
    }

    public function login()
    {
        return view('test/login');
    }

    public function register()
    {
        return view('test/register');
    }

    public function article()
    {
        return view('test/article');
    }
}
