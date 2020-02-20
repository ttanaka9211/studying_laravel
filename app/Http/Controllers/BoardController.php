<?php

namespace App\Http\Controllers;

use App\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = Board::all();

        return view('board.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('board.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, Board::$rules);
        $board = new Board();
        $form = $request->all();
        unset($form['_token']);
        $board->fill($form)->save();

        return redirect('/board');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Board $board
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Board $board)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Board $board
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Board $board)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Board               $board
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Board $board)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Board $board
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Board $board)
    {
    }
}