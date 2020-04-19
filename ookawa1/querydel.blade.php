@extends('ookawa1.layouts')

@section('title','querydel')

@section('content')
<table>
 <form action="/ookawa1/querydel" method="post">
   {{ csrf_field() }}
  <input type="hidden" name="id" value="{{$form->id}}">
  <tr><th>name: </th><td>{{$form->name}}</td></tr>
  <tr><th>come: </th><td>{{$form->come}}</td></tr>
  <tr><th>age: </th><td>{{$form->age}}</td></tr>
  <tr><th></th><td><input type="submit" value="send"></td></tr>
 </form>
</table>

@endsection 
