<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание продуктов</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="flex justify-between">
        <h1>Интернет-магазин</h1>
        <nav>
            <ul class="flex gap-4">
                <li>
                    <a href="{{route('products.index')}}">Главная</a>
                </li>
                <li>
                    <a href="{{route('products.create')}}">Создать продукт</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <form action="{{route('products.store')}}" method="POST">
                @csrf
                <input type="text" name="title" id="title" placeholder="введи название продукта по-братски" required><br>
                <input type="number" name="price" step="any" id="price" placeholder="цена продукта" required><br><textarea name="description" id="description" placeholder="описание продукта" required></textarea><br>
                <input type="submit" value="Создать">
            </form>
        </div>
    </main>
</body>
</html>