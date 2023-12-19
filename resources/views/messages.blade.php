@extends('layouts.app')

@section('title')Сообщения@endsection

@section('content')
<h1>Все сообщения</h1>
    @foreach($data as $el)
        <div class="allert allert-info">
            <h3>{{ $el->name }}</h3>
            <h6>{{ $el->email }}</h6>
            <a href="{{ route('contact-message', $el->id)}}">Деталльнее</a>
        </div>
    @endforeach

@endsection

@section('aside')
    @parent
@endsection
