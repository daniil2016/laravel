@extends('layouts.app')

@section('title')Главная@endsection

@section('content')
<h1>Главная</h1>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст на главной</p>
@endsection
