@extends('ookawa1.layouts')

<h1>queryadd</h1>

@section('content')

<table>
 <form action="/ookawa1/queryadd" method="post">
    {{ csrf_field() }}
 <tr>
   <th>name: </th>
     <td><input type="text" name="name"></td>
 </tr>
 <tr>
  <th>come: </th>
   <td><input type="text" name="come"></td>
 </tr>
 <tr>
  <th>age: </th>
   <td><input type="text" name="age"></td>
  </tr>
   <td><input type="submit" value="send"></td> 
 </form>
</table> 

@endsection
