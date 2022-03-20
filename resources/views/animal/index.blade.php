@extends('partials.header')

@section('title')
Animais
@endsection

@section('content')
    @foreach ($animais as $item)
        {{$item->nome}},
    @endforeach
@endsection

@extends('partials.footer')
