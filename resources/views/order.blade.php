@extends('layouts.main')
@section('content')

    <div>
        <nav>
            <ul>
                <li><a href="{{route('info.index')}}">Информация</a></li>
                <li><a href="{{route('main.index')}}">Главная</a></li>
                <li><a href="{{route('storage.index')}}">Склад</a></li>
            </ul>
        </nav>
    </div>

    @foreach ($orders as $order)

        <div>{{$order->position}}
        {{$order->table_number}}
        {{$order->waiter_name}}
        {{$order->updated_at}}</div>

    @endforeach
    
@endsection