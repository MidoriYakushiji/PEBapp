@extends('layouts.app')

@section('title', 'Add')

@section('menu_title')
新規登録画面
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
   <form action="/peb/create" method="post">
   <table>
      @csrf
    <p>具材登録画面</p>
    <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
    <tr><th>type: </th><td><input type="number" name="type" value="{{old('type')}}"></td></tr>
    <tr><th>price: </th><td><input type="number" name="price" value="{{old('price')}}"></td></tr>
    <tr><th>img: </th><td><input type="text" name="img" value="{{old('img')}}"></td></tr>
    <tr><th>user_id: </th><td><input type="number" name="user_id" value="{{old('user_id')}}"></td></tr>
    <tr><th></th><td><input type="submit" value="新規登録"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
copyright 2022 PEB
@endsection
