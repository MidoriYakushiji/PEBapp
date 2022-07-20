@extends('layouts.app')

@section('title', 'Del')

@section('menu_title')
ユーザ情報削除画面
@endsection

@section('content')
<div class="a">
   <form action="/peb/remove" method="post">
   <table>
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <tr><th>name: </th><td>{{$item->name}}</td></tr>
      <tr><th>type: </th><td>{{$item->type}}</td></tr>
      <tr><th>price: </th><td>{{$item->price}}</td></tr>
      <tr><th>img-src: </th><td>{{$item->img}}</td></tr>
      <tr><th>Registered by: </th><td>{{$item->getData()}}</td></tr>
      <tr><th></th><td><input type="submit" value="削除"></td></tr>
   </table>
   </form>
</div>
@endsection

@section('footer')
copyright 2022 PEB.
@endsection
