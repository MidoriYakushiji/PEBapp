@extends('layouts.app')

@section('title', 'Show')

@section('menu_title')
具材詳細画面

@endsection
@section('content')
    <div class="a">
   <table>
   <tr><th>id</th><th>Name</th><th>type</th><th>price</th><th>img</th><th>Registered by</th></tr>
       <tr>
           <td>{{$item->id}}</td>
           <td>{{$item->name}}</td>
           <td>{{$item->type}}</td>
           <td>{{$item->price}}</td>
           <td>{{$item->img}}</td>
           <td>{{$item->getData()}}</td>
           
       </tr>
   </table>
    </div>
@endsection

@section('footer')
copyright 2022 PEB.
@endsection
