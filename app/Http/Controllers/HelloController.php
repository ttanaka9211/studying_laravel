<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('people')->orderBy('age', 'asc')->get();

        return view('hello.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('hello.add');
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::insert('insert into people (name,mail,age) values(:name, :mail, :age)', $param);

        return redirect('/hello');
    }

    public function show(Request $request)
    {
        $min = $request->min;
        $max = $request->max;
        $items = DB::table('people')
        ->whereRaw('age >= ? and age <= ?',
        [$min, $max])->get();

        return view('hello.show', ['items' => $items]);
    }
}