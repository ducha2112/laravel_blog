@extends('layout.main')

@section('page-title')
Магазин
@endsection

@section('content')
    <h1>Все товары</h1>
    
        @foreach ($products as $el)
            <div class="product">
                <h2>{{$el->title}}</h2>
                <p>{{ $el->anons}}</p>
                <p>Цена: {{ $el->price }} рублей</p>
                <a href="/public/shop/{{ $el->id }}" class='details'>Детальнее</a>

                {{-- {!! html()->form()->class('product-form')->open() !!}   
                    {{ html()->submit('Детальнее') }}
                {!! html()->form()->close() !!}  --}}
            </div>  
        @endforeach
        
 
@endsection
