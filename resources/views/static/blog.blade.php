@extends('layout.main')

@section('page-title')
{{ $title }}
@endsection

@section('content')
    @foreach($text as $el)
    

        <div class="blog">
            <h1>Запись на сайте</h1>
        <p>{{ $el }}</p>
        <button class="btn btn-success">Детально</button>
        </div>
    @endforeach
@endsection