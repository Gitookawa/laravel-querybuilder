@extends('ookawa1.layouts')

   <h1>OOKAWA1 MIDDLEWARE TEST</h1>

@section('content')
<table>
@foreach($data as $item)
<tr><th>{{$item['name']}}</th><td>{{$item['mail']}}</td></tr>
</table>
@endforeach
@endsection
