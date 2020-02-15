<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Http\Requests\HelloRequest;
=======
use app\Http\Requests\HelloRequest;
>>>>>>> cd2f1cb77871223e7afea36df989212204f86f11

class HelloController extends Controller
{
    public function index(Request $request)
    {
<<<<<<< HEAD
        return view('hello.index', ['msg' => 'フォームを入力ください。']);
=======
        return view('hello.index', ['msg' => 'フォームを入力して下さい。']);
>>>>>>> cd2f1cb77871223e7afea36df989212204f86f11
    }

    public function post(HelloRequest $request)
    {
        return view('hello.index', ['msg' => '正しく入力されました！']);
    }
}