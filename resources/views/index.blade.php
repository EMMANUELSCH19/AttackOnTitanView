<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attack On Titan</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="titulo">
        <h1>Attack on Titans</h1>
    </div>
    <hr>

    <div class="contenido">
        <div class="subtitulo">    
            <h2>Personajes</h2>
        </div>
        
        <div class="wrap">
            @foreach($personajes as $personaje)
            <div class="personaje">
                <div class="info">
                    <div class="id">
                        <h4>{{ $personaje['id'] }}</h4>
                    </div>
                    <div class="nombre">
                        {{ $personaje['name'] }}
                    </div>
                </div>
                <div class="genero">
                    {{ $personaje['gender'] }}
                </div>
                <div class="imagen">
                    <img src="{{ $personaje['image'] }}" alt="">
                </div>
            </div>
            @endforeach
        </div>
        

        <div class="subtitulo">
            <h2>Titanes</h2>
        </div>

        <div class="wrap">
            @foreach($titanes as $titan)
            <div class="titan">
                <div class="info">
                    <div class="id">
                        <h4>{{ $titan['id'] }}</h4>
                    </div>
                    <div class="nombre">
                        {{ $titan['name'] }}
                    </div>
                </div>
                <div class="personaje-id">
                    <h4>Personaje: {{ $titan['character_id'] }}</h4>
                </div>
                <div class="imagen">
                    <img src="{{ $titan['picture_url'] }}" alt="">
                </div>
                <div class="info-titan">
                    <div class="altura">
                        <h4>{{ $titan['height_m'] }} m</h4>
                    </div>
                    <div class="descripcion">
                        {{ $titan['description'] }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>

</body>
</html>