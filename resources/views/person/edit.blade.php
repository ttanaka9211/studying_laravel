@extends('layouts.hello')
@section('title','Person.Edit')
@section('menubar')
    @parent
    編集ページ
@endsection
@section('content')
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <table>
        <form action="/person/edit" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$form->id}}">
            <tr>
                <th>name;</th>
                <td><input type="text" name="name"  value="{{$form->name}}"></td>
            </tr>
            <tr>
                <th>mail;</th>
                <td><input type="text" name="mail" id="" value="{{$form->mail}}"></td>
            </tr>
            <tr>
                <th>age;</th>
                <td><input type="number" name="age" id="" value="{{$form->age}}"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="send"></td>
            </tr>
        </form>
    </table>
@endsection
@section('footer')
    copuright 2017 tuyano.
@endsection
