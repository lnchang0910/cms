@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>商品一覽</h1>
    </div>
@endsection

@section('my_menu')
    <li class="nav-item">
        <a href="/home" class="nav-link">回控制台</a>
    </li>
    @parent
@stop
