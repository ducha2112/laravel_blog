@extends('layout.main')

@section('page-title')
Изменение сатьи
@endsection

@section('content')
    <h1>Изменение статьи</h1>
    <a href="/" class="back-button">На главную</a>
    {{-- Использование библиотеки composer require spatie/laravel-html --}}
{{-- 
{{ html()->form('PUT','')->class('article-form')->open() }}

    {{ html()->label('Название статьи') }}
    {{ html()->text('title')->value($article->title) }}

    {{ html()->label('Анонс статьи') }}
    {{ html()->textarea('anons')->value($article->anons) }}

    {{ html()->label('Основной текст статьи') }}
    {{ html()->textarea('text')->value($article->text)->id('editor') }}

    {{ html()->submit('Изменить') }}

{{ html()->form()->close() }} --}}

{!! Form::open(['method'=>'put','files' => true,'class' => 'article-form']) !!} 
   
        {{ Form::label('title','Название статьи') }}
        {{ Form::text('title',$article->title,['placeholder'=>'Введите название статьи']) }}

        {{ Form::label('anons','Анонс статьи') }}
        {{ Form::textarea('anons',$article->anons,['placeholder'=>'Введите анонс статьи']) }}

        {{ Form::label('main_image','Фото статьи') }}
        {{ Form::file('main_image') }}

        {{ Form::label('text','Основной текст статьи') }}
        {{ Form::textarea('text',$article->text,['placeholder'=>'Введите текст статьи','id'=>'editor']) }}

        {{ Form::submit('Изменить',['class'=>'add-button']) }}
    {!! Form::close() !!}
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create( document.querySelector('#editor'));        
</script>
@endsection
