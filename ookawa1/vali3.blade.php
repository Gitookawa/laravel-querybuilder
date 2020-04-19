@extends('ookawa1.layouts')

   <h1>OOKAWA1 validate3 TEST</h1>
@section('content')
<p>{{$msg}}</p>
@if (count($errors) > 0)
<p>入力に問題があります。再入力してください</p>
@endif  
<form action="/ookawa1/vali3" method="post">
 {{ csrf_field() }}
@if ($errors->has('name'))
  <tr><th>ERROR</th><td>{{$errors->first('name')}}</td></tr>
  <br>
@endif
  <tr><th>name: </tr><td><input type="text"name="name"value="{{old('name')}}"></td></tr>
  <br>
  @if ($errors->has('mail'))
  <tr><th>ERROR</th><td>{{$errors->first('mail')}}</td></tr>
  <br>
  @endif
  <tr><th>mail: </tr><td><input type="text"name="mail"value="{{old('mail')}}"></td></tr>
  <br>
   @if ($errors->has('age'))
  <tr><th>ERROR</th><td>{{$errors->first('age')}}</td></tr>
  <br>
  @endif
  <tr><th>age: </tr><td><input type="text"name="age"value="{{old('age')}}"></td></tr>
  <br>
  <tr><th></tr><td><input type="submit" value="send"></td></tr>
</form>
</table>
@endsection

