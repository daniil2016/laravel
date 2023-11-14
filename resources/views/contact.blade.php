@extends('layouts.app')

@section('title')Контакт@endsection

@section('content')
    <h1>Контакт</h1>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Имя" id="name" class="form-control">
        <input type="text" name="email" placeholder="Почта" id="email" class="form-control">
        <input type="submit" class="btn btn-succes"> 
    </form>
@endsection
