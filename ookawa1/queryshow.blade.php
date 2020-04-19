@extends('ookawa1.layouts')

<h1>queryshow</h1>

@section('content')

 @if ($items != null)
   @foreach($items as $item)
    <table width="400px">
      <tr><th width="50px">id:</th>
      <td width="50px">{{$item->id}}</td>
      <tr><th width="50px">name:</th>
      <td width="50px">{{$item->name}}</td>
   </table>
   @endforeach
 @endif
@endsection

