
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{ $jugadores[6]->nombres }}
    <br>

    {{ json_encode($cartasA) }}
    <br>
    @foreach ($cartasA as $item)
        {{ json_encode($item) }}
    @endforeach
<br>
{{array_column($cartasA,'foto')[0]}}
<img src="{{ url('../../storage/img/real_madrid.png') }}" alt="">










</body>
</html>
