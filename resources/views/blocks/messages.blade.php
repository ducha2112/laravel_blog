@if (count($errors) > 0) {{--$errors - встроенный массив ошибок в laravel--}}
    @foreach ($errors->all() as $el)
        <div class="error-mess">{{$el}}</div>
    @endforeach
@endif

@if (session('success'))
    <div class="success-mess">{{ session('success') }}</div>
@endif

@if (session('error'))
    <div class="error-mess">{{ session('error') }}</div>
@endif