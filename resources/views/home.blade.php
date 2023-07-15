@extends('layout.main')

@section('page-title')
Кабинет пользователя
@endsection

@section('content')
<div class="block">
    <h1>Кабинет пользователя</h1>
    @if (session('status'))
        <div class="success-mess" >
            {{ session('status') }}
        </div>
    @endif
    <p>Привет, {{Auth::user()->name}}</p>
    <p>Ваш email: {{Auth::user()->email}}</p>
</div>


@if(count($articles) > 0)
    <h1>Ваши статьи</h1>
    <div class="articles">
        @foreach ($articles as $item)
           <div class="post">
            <img src="/storage/img/articles/{{$item->image}}" alt="">
            <h2>{{$item->title}}</h2>
            <p>{{$item->anons}}</p>
            <p>{!!$item->text!!}</p>
            <p><strong>Автор: </strong>{{ $item->user->name }}</p>
           </div>
        @endforeach
    </div>
@endif

@endsection
