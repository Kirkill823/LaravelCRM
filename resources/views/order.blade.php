@extends('layouts.main')
@section('content')

    @foreach ($orders as $order)

        <div>{{$order->position}}
        {{$order->table_number}}
        {{$order->waiter_name}}
        {{$order->updated_at}}</div>

    @endforeach
    
@endsection