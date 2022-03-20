@extends('partials.header')

@section('title')
Desenhos Animados
@endsection

@section('content')
    @foreach ($desenhos as $item)
        {{$item->nome}},
    @endforeach
@endsection

@extends('partials.footer')
