@extends('ookawa1.layouts')

<h1>mysql database</h1>

@section('content')
<table>
<tr><th>ID</th>
<th>Name</th>
<th>come</th>
<th>age</th>
</tr>
@foreach ($items as $item)
    <tr>
        <td>{{$item->id}}</td>
	<td>{{$item->name}}</td>
	<td>{{$item->come}}</td>
        <td>{{$item->age}}</td>
    </tr>
@endforeach

</table>
@endsection

