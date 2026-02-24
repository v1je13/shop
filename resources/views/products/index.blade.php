<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spisok productov(BOB)</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1>Интернет-магазин</h1>
    </header>
    <main>
        <div class="container mx-auto">
            <h2>Каталог товаров</h2>
        </div>
        <div>
            @foreach ($products as $product)
                <div class="border mb-4 flex">
                     <img class="w-26 h-full aspect-1 mr-4" src="{{ Vite::asset($product->path_img) }} " >
                    <div>
                        <h3>{{$product->title}}</h3>
                        <p>{{$product->description}}</p>
                        <p>{{$product->price}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>