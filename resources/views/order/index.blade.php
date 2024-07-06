@extends('layouts.main')
@section('content')

<a class="btn btn-primary mb-2", href="{{Route('order.create')}}">Создать заказ</></a>

    @foreach ($orders as $order)

        <div>
            <a href="{{Route('order.show', $order->id)}}">
                {{$order->id}}.
                {{$order->position}}
                {{$order->table_number}}
                {{$order->waiter_name}}
                {{$order->updated_at}}
            </a>
        </div>

    @endforeach
    
@endsection