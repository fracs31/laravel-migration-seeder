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
    {{-- Main --}}
    <main>
        {{-- Container --}}
        <div class="container">
            {{-- Titolo --}}
            <h1 class="text-center pt-5">Treni</h1>
            <h2 class="pt-4">Tutti i treni</h2>
            {{-- Riga --}}
            <div class="row">
                {{-- Ciclo --}}
                @foreach ($trains as $train)
                    {{-- Colonna --}}
                    <div class="col">
                        {{-- Carta --}}
                        <div class="card" style="width: 18rem;">
                            {{-- Codice del treno --}}
                            <div class="card-header">
                                {{ $train->train_code }}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Stazione di partenza: {{ $train->start_station }}</li>
                                <li class="list-group-item">Stazione di arrivo: {{ $train->last_station }}</li>
                                <li class="list-group-item">Orario di partenza: {{ $train->start_time }}</li>
                                <li class="list-group-item">Orario di arrivo: {{ $train->arrive_time }}</li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
            <h2 class="pt-4">Treni di oggi</h2>
            {{-- Riga --}}
            <div class="row">
                {{-- Ciclo --}}
                @foreach ($today as $train)
                    {{-- Colonna --}}
                    <div class="col">
                        {{-- Carta --}}
                        <div class="card" style="width: 18rem;">
                            {{-- Codice del treno --}}
                            <div class="card-header">
                                {{ $train->train_code }}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Stazione di partenza: {{ $train->start_station }}</li>
                                <li class="list-group-item">Stazione di arrivo: {{ $train->last_station }}</li>
                                <li class="list-group-item">Orario di partenza: {{ $train->start_time }}</li>
                                <li class="list-group-item">Orario di arrivo: {{ $train->arrive_time }}</li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>
</html>