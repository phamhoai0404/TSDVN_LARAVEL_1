<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Đây là trang Index của Products</h1>
    <p>Đây là title name {{ $titleName ?? "Unknow" }}</p>
    <p>Đây là name {{ $nameProduct?? 'Unknow' }}</p>

    {{-- <p>Đây là điện thoại:</p>
    @foreach ($myPhone as $item)
        <h1> {{ $item }}</h1>
    @endforeach --}}

    <p>Đây là tên sản phẩm: {{ $product }}</p>
</body>
</html>