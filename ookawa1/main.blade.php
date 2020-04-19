@extends('ookawa1.layouts')

<h1>ここにタイトルが入ります</h1>

@section('content')
     <p>ここには本文から送られてきた文章を表示します</p>
     <p>ここには記述が可能です</p>
@include('ookawa1come.message',['msg_title'=>'OK',
'msg_content'=>'サブビューです。'])

@each('ookawa1come.item',$data,'item')

@each('ookawa1come.item1',$data1,'item1')

@each('ookawa1come.syamu',$data2,'syamu')


@component('ookawa1come.message')
    @slot('msg_title')
    @CAUTION!
    @endslot

    @slot('msg_content')
    これはメッセージの表示です。
　　@endslot
@endcomponent

@endsection
