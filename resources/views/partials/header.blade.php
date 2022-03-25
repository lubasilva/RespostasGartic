<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Respostas Gartic</title>
</head>
<body>

    <div class="container">

        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="/adjetivos" class="nav-link">Adjetivos</a></li>
                <li class="nav-item"><a href="/alimentos" class="nav-link">Alimentos</a></li>
                <li class="nav-item"><a href="/animais" class="nav-link">Animais</a></li>
                <li class="nav-item"><a href="/desenhos-animado" class="nav-link">Desenhos Animado</a></li>
                <li class="nav-item"><a href="/filmes" class="nav-link">Filmes</a></li>
                <li class="nav-item"><a href="/gerais" class="nav-link">Geral</a></li>
                <li class="nav-item"><a href="/objetos" class="nav-link">Objetos</a></li>
                <li class="nav-item"><a href="/profissoes" class="nav-link">Profissões</a></li>
                <li class="nav-item"><a href="/verbos" class="nav-link">Verbos</a></li>
            </ul>
        </header>

        <div class="d-flex justify-content-center">
            <div class="jombotrom">
                <h1>@yield('title')</h1>
            </div>
        </div>

        <div class="container">
            @yield('content')

    </div>
