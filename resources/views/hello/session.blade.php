@extends('layouts.hello')

@section('title','Session')

@section('menubar')
    @parent
    セッションページ
@endsection

@section('content')
    <p>{{$session_data}}</p>
    <form action="/hello/session" method="post">
    @csrf
<input type="text" name="input" id="">
<input type="submit" value="send">
</form>
@endsection

@section('footer')
    copyright 2017 tuyano.
@endsection
