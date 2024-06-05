@extends('layouts.main')
@section('content')

<div>
        <nav>
            <ul>
                <li><a href="{{route('order.index')}}">Заказ</a></li>
                <li><a href="{{route('main.index')}}">Главная</a></li>
                <li><a href="{{route('storage.index')}}">Склад</a></li>
            </ul>
        </nav>
    </div>

<div>
    This is info page
</div>
    
@endsection