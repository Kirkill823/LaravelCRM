@extends('layouts.main')
@section('content')

    <div>
        {{$order->id}}.
        {{$order->position}}
        {{$order->table_number}}
        {{$order->waiter_name}}
        {{$order->updated_at}}
        {{$loyalty->name}}
        <br>
        Комментарий = {{$order->comment}}
    </div>
    <a href="{{Route('order.index')}}">Назад</a>
    <a href="{{Route('order.edit', $order->id)}}">Изменить заказ</a>
    <div>
        <form action="{{Route('order.delete', $order->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Удалить">
        </form>
    </div>
@endsection 