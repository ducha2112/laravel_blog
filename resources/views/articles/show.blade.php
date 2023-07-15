@extends('layout.main')

@section('page-title')
{{ $article->title }}
@endsection

@section('content')
    <h1>{{ $article->title }} / Статья на Blog Spot</h1>
    <a href="/" class="back-button">На главную</a>

    <div class="articles one">

           <div class="post">
            <img src="/storage/img/articles/{{$article->image}}" alt="{{$article->image}}" >
            <h2>{{$article->title}}</h2>
            <p>{{$article->anons}}</p>
            <p>{!! $article->text !!}</p>
            <p><b>Автор: </b>{{ $article->user->name }}</p>
            <br><hr>


            @auth
                @if(Auth::user()->id == $article->user_id)
                <a href="/article/{{$article->id}}/edit">Изменить</a>
                {!! html()->form('DELETE','')->class('article-form')->open() !!}
                    {{ html()->submit('Удалить')->class('delete-button') }}
                {!!html()->form()->close() !!}
                @endif
            @endauth
           </div>

            <div class="comments">
                @foreach ($comments as $el)
                    @if($el->article_id ==$article->id )
                    <div class="comment">
                        {{$el->text}}

                     @auth

                        {{ link_to_action('CommentsController@destroy', 'Удалить комментарий',  ['id'=>$el->id,'method'=>'delete']) }}
                    @endauth
                    </div>
                    @endif
                @endforeach
                <h2>Форма комментариев</h2>

                {!! Form::open(['method'=>'post','class' => 'article-form']) !!}

                    {{ Form::label('text','Комметарий') }}
                    {{ Form::textarea('text','',['placeholder'=>'Оставьте комментарий']) }}

                    {{ Form::submit('Добавить',['class'=>'add-button']) }}
                {!! Form::close() !!}

            </div>

    </div>
@endsection
