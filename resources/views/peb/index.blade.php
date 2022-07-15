@extends('layouts.app')
<style>
   .pagination { font-size:10pt; }
   .pagination li { display:inline-block }
   tr th a:link { color: white; }
   tr th a:visited { color: white; }
   tr th a:hover { color: white; }
   tr th a:active { color: white; }
</style>
@section('title', 'Index')

@section('menubar')
   @parent
   インデックスページ
@endsection

@section('content')
@if (Auth::check())
<p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
@else
<p>※ログインしていません。（<a href="/login">ログイン</a>|
   <a href="/register">登録</a>）</p>
@endif
   <table>
   <tr>
       <th>name</a></th>
       <th>price</a></th>
       <th>img</a></th>
   </tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->name}}</td>
           <td>{{$item->price}}</td>
           <td>{{$item->img}}</td>
       </tr>
   @endforeach
   </table>

@endsection

@section('footer')
copyright 2022 PEB.
@endsection