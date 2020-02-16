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
        DB::table('people')->insert($param);

        return redirect('/hello');
    }

    public function edit(Request $request)
    {
        $item = DB::table('people')
            ->where('id', $request->id)->first();

        return view('hello.edit', ['from' => $item]);
    }

    public function update(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::update('people')
        ->where('id', $request->id)
        ->update($param);

        return redirect('/hello');
    }

    public function del(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select * from people where id = :id',
        $param);

        return view('hello.del', ['form' => $item[0]]);
    }

    public function remove(Request $request)
    {
        $param = ['id' => $request->id];
        DB::delete('delete from people where id = :id', $param);

        return redirect('/hello');
    }

    public function show(Request $request)
    {
        $id = $request->id;
        $item = DB::table('people')->where('id', $id)->first();

        return view('hello.show', ['item' => $item]);
    }
}