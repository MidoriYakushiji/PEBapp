@extends('layouts.app')

@section('title', 'Edit')

@section('menu_title')
更新画面
@endsection

@section('content')
@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
   <form action="/peb/update" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>name: </th><td><input type="text" name="name"
         value="{{$item->name}}"></td></tr>
      <tr><th>type: </th><td><input type="text" name="type"
         value="{{$item->type}}"></td></tr>
      <tr><th>price: </th><td><input type="text" name="price"
         value="{{$item->price}}"></td></tr>
      <tr><th>img: </th><td><input type="text" name="img"
         value="{{$item->img}}"></td></tr>
      <tr><th></th><td><input type="submit"
         value="更新"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
copyright 2022 PEB.
@endsection
