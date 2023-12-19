@extends('layouts.app')

@section('title')$data->name@endsection

@section('content')
<h1>Все сообщения</h1>
    <div class="allert allert-info">
        <h3>{{ $data->name }}</h3>
        <h6>{{ $data->email }}</h6>
        <h6>{{ $data->dop_table }}</h6>
    </div>

@endsection

@section('aside')
    @parent
@endsection
