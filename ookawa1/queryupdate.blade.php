@extends('ookawa1.layouts')

@section('title', 'queryedit')

@section('menubar')
    @parent
    更新ページ
@endsection

@section('content')
    <table>
    <form action="/ookawa1/queryedit" method="post">
       {{ csrf_field() }}
       <input type="hidden" name="id" value="{{$form->id}}">
       <tr><th>name: </th><td><input type="text" name="name" value="{{$form->name}}"></td></tr>
       <tr><th>come: </th><td><input type="text" name="come" value="{{$form->come}}"></td></tr>
       <tr><th>age: </th><td><input type="text" name="age" value="{{$form->age}}"></td></tr>
       <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
    </table>
@endsection

@section('footer')
copyright 2020 kouhei.
@endsection


