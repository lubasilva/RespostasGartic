@extends('partials.header')

@section('title')
Gerais
@endsection

@section('content')
    @foreach ($gerais as $item)
        {{$item->nome}},
    @endforeach
@endsection

@extends('partials.footer')
