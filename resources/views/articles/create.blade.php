@extends('layout.main')

@section('page-title')
Добавление сатьи
@endsection

@section('content')
    <h1>Добавление статьи</h1>
    <a href="/" class="back-button">На главную</a>
    {{-- Использование библиотеки composer require laravie/html --}}
    {!! Form::open(['url'=>'/article/add/post','files' => true,'class' => 'article-form']) !!} 
    {{-- можно не прописывать массив, по умолчанию параметры те же --}}
        {{ Form::label('title','Название статьи') }}
        {{ Form::text('title','',['placeholder'=>'Введите название статьи']) }}

        {{ Form::label('anons','Анонс статьи') }}
        {{ Form::textarea('anons','',['placeholder'=>'Введите анонс статьи']) }}

        {{ Form::label('main_image','Фото статьи') }}
        {{ Form::file('main_image') }}

        {{ Form::label('text','Основной текст статьи') }}
        {{ Form::textarea('text','',['placeholder'=>'Введите текст статьи','id'=>'editor']) }}

        {{ Form::submit('Добавить',['class'=>'add-button']) }}
    {!! Form::close() !!}


    {{-- Использование библиотеки composer require spatie/laravel-html --}}
{{-- {{ html()->form('','/article/add/post')->class('article-form')->open() }} --}}
{{-- ->atribute('enctype','multipart/form-data') не устанавливается--}}

    {{-- {{ html()->label('Название статьи') }}
    {{ html()->text('title')->placeholder('Введите название статьи') }}

    {{ html()->label('Анонс статьи') }}
    {{ html()->textarea('anons')->placeholder('Введите анонс статьи') }}

    {{ html()->label('Фото статьи') }}
    {{ html()->file('main_image') }}

    {{ html()->label('Основной текст статьи') }}
    {{ html()->textarea('text')->placeholder('Введите текст статьи')->id('editor') }}

    {{ html()->submit('Добавить') }}

{{ html()->form()->close() }} --}}
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create( document.querySelector('#editor'));        
</script>
@endsection
