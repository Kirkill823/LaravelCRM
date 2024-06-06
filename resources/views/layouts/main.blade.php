<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заказы</title>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{route('main.index')}}">Нужно вставвить название</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route('main.index')}}">Главная</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('info.index')}}">Информация </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('storage.index')}}">Склад</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('order.index')}}">Заказ</a>
            </li>
            </ul>
        </div>
    </nav>

</head>
<body>
@yield('content')

</body>
</html>