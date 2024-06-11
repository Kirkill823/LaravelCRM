@extends('layouts.main')
@section('content')

     <div>
        <form action="{{route('order.store')}}" method="post">
            @csrf
            <select name="table_number" class="form-select" aria-label="Default select example">
                <option selected>Выберите столик</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select>
            <select name="position" class="form-select" aria-label="Default select example">
                <option selected>Выберите Позицию</option>
                <option value="meat">Мясо</option>
                <option value="fish">Рыба</option>
                <option value="potato">Картофель</option>
                <option value="cake">Кекс</option>
                <option value="syrniki">Сырники</option>
            </select>
            <select name="waiter_name" class="form-select" aria-label="Default select example">
                <option selected>Ваше имя(Временно)</option>
                <option value="Katya">Катя</option>
                <option value="Oleg">Миша</option>
                <option value="3">Олег</option>
            </select>
            <select name="course" class="form-select" aria-label="Default select example">
                <option selected>Очередь подачи</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Оставить комментарий(Тест)</span>
                <input name="comment" type="string" class="form-control" placeholder="Комментарий" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <!-- <button class="btn btn-primary">Добавить позицию к заказу</button><br> -->
            <button type="submit"class="btn btn-primary">Добавить новый заказ</button>
        </form>
    </div>

    
@endsection