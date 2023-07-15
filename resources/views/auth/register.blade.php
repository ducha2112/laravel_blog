@extends('layout.main')

@section('page-title')
Регистрация
@endsection

@section('content')
<h1>Регистрация</h1>
<a href="/" class="back-button">На главную</a>

    <form method="POST" action="/register" class="article-form">
        @csrf

        <label for="name">Имя</label>
        <input id="name" type="text" name="name" value="{{ old('name')}}">

        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email')}}">

        <label for="password">Пароль</label>
        <input id="password" type="password" name="password" value="{{ old('password')}}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

        <label for="password-confirm" >Подтверждение пароля</label>
        <input id="password-confirm" type="password"  name="password_confirmation" value="{{ old('password_confirmation')}}">

        <input type="submit" class="toRegister" value="Зарегистрироваться" style="width: 180px"/>
       
@endsection
