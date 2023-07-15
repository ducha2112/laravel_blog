@extends('layout.main')

@section('page-title')
Главная страница сайта
@endsection

@section('content')
    <div id="app"></div>
    <div class="presentation"></div>

    <div class="articles">
        @foreach ($articles as $item)
           <div class="post">
            <img src="/storage/img/articles/{{$item->image}}" alt="{{$item->image}}">
            <h2>{{$item->title}}</h2>
            <p>{{$item->anons}}</p>
            <p><strong>Автор: </strong>{{ $item->user->name }}</p>
            <a href="/article/{{ $item->id }}">Прочитать</a>
           </div>
        @endforeach
    </div>
    {{-- {{ $articles->links() }} --}}
@endsection
