@extends('layouts.main')
@section('content')

<div>
        <nav>
            <ul>
                <li><a href="{{route('info.index')}}">Информация</a></li>
                <li><a href="{{route('main.index')}}">Главная</a></li>
                <li><a href="{{route('order.index')}}">Заказ</a></li>
            </ul>
        </nav>
    </div>

<div>
    This is storage page
</div>
    
@endsection