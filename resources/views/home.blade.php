<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        @foreach($trains as $train)
        <p>
            <strong>Company:</strong> {{ $train->company }}<br>
            <strong>Departure Station:</strong> {{ $train->departure_station }}<br>
            <strong>Arrival Station:</strong> {{ $train->arrival_station }}<br>
            <strong>Departure Time:</strong> {{ $train->departure_time }}<br>
            <strong>Arrival Time:</strong> {{ $train->arrival_time }}<br>
            <strong>Train Code:</strong> {{ $train->train_code }}<br>
            <strong>Carriage Count:</strong> {{ $train->carriage_count }}<br>
            <strong>On Time:</strong> {{ $train->on_time ? 'Yes' : 'No' }}<br>
            <strong>Canceled:</strong> {{ $train->canceled ? 'Yes' : 'No' }}<br>
        </p>
        <hr>
    @endforeach
    </main>

</body>

</html>