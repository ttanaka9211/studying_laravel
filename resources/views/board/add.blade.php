@extends('layouts.hello')

@section('title','Board.Add')

@section('menubar')
    @parent
    投稿ページ
@endsection

@section('content')
    <table>
        <form action="/board/add" method="post">
            @csrf
            <tr>
                <th>person id;</th>
                <td><input type="number" name="person_id" id=""></td>
            </tr>
            <tr>
                <th>title;</th>
                <td><input type="text" name="title" id=""></td>
            </tr>
            <tr>
                <th>message;</th>
                <td><input type="text" name="message" id=""></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="send"></td>
            </tr>
        </form>
    </table>
@endsection

@section('footer')
    copyright 2017 tuyano.
@endsection
