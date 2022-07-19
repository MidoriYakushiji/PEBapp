@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (Auth::check())
                    <p>こんにちは、{{$user->name . ' (' . $user->email . ')'}}さん。</p>
                    @else
                    <p>※ログインしていません。（<a href="/login">ログイン</a>|
                    <a href="/register">登録</a>）</p>
                    @endif
                    <table>
                    <tr>
                        <th>name</th><th>price</th><th>img</th><th>Select</th><th>Update</th><th>Delete</th>
                    </tr>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->price}}</td>
                            <td><img src="{{$item->img}}" width="200" alt="具材"></td>
                            <td><a href="/peb/show?id={{$item->id}}">詳細</a></td>
                            <td><a href="/peb/edit?id={{$item->id}}">更新</a></td>
                            <td><a href="/peb/del?id={{$item->id}}">削除</a></td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
copyright 2022 PEB.
@endsection