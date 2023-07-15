@extends('layout.main')

@section('page-title')
{{ $product->title }}
@endsection

@section('content')
    <h1>{{ $product->title }}</h1>
    
        
            <div class="product">
                <h5>{{$product->cathegory}}</h5>
                <h2>{{$product->title}}</h2>
                
                <p>{{ $product->anons}}</p>
                <p>Цена: {{ $product->price }} рублей</p>

                <a href="" class='toBye'>Купить</a>

              
            </div>  
    
            <a href="/public/shop" class='backToShop'>В магазин</a>
 
@endsection
