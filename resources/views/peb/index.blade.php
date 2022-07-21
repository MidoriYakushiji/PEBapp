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

@section('menu_title')
具材一覧ページ
@endsection

@section('content')
 @if (Auth::check())
 <p>お疲れ様です。{{ $user->name }}さん。</p>
 <a href="/peb/add">新規登録</a>
 <table>
   <tr>
       <th>name</a></th>
       <th>price</a></th>
       <th>img</a></th>
       <th>Select</th>
       <th>Update</th>
       <th>Delete</th>
   </tr>
   @foreach ($items as $item)
       <tr>
           <td>{{$item->name}}</td>
           <td>{{$item->price}}円</td>
           <td><img src="{{$item->img}}" width="200" alt="具材"></td>
           <td><a href="/peb/show?id={{$item->id}}">詳細</a></td>
           <td><a href="/peb/edit?id={{$item->id}}">更新</a></td>
           <td><a href="/peb/del?id={{$item->id}}">削除</a></td>
       </tr>
   @endforeach
   </table>
 @else
 <p>※ログインしていません。（<a href="/login">ログイン</a>|
   <a href="/register">登録</a>）</p>
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
              <td><img src="{{$item->img}}" width="200" alt="具材"></td>
          </tr>
      @endforeach
      </table>
 @endif

@endsection

@section('footer')
copyright 2022 PEB.
@endsection