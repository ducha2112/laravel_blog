@extends('layout.main')

@section('page-title')
{{ $title }}
@endsection

@section('content')
   <div class="block">
    <h1>Напишите нам</h1>
       <h4>{{$zagolovok}}</h4>
       @if (count($params) > 0)
           <ul>
               @foreach ($params as $item)
                   <li>{{ $item }}</li>
               @endforeach
           </ul>
       @endif
       <h3>Вы можете отправить почту с сайта</h3>
       {!! Form::open(['url'=>'/contacty','files'=>true,'class' => 'article-form']) !!}

       {{ Form::label('email','Ваш email') }}
       {{ Form::text('email','',['placeholder'=>'Введите ваш email']) }}

       {{ Form::label('name','Ваше имя') }}
       {{ Form::text('name','',['placeholder'=>'Введите ваше имя']) }}

       {{ Form::label('messfile','Прикрепите файл') }}
       {{ Form::file('messfile') }}

       {{ Form::label('text','Текст сообщения') }}
       {{ Form::textarea('text','',['placeholder'=>'Введите текст сообщения','id'=>'editor']) }}

       {{ Form::submit('Отправить сообщение',['class'=>'add-button mess']) }}

       {!! Form::close() !!}




   </div>
@endsection
