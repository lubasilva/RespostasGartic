@extends('partials.header')

@section('title')
Adjetivo
@endsection

@section('content')
    @foreach ($adjetivos as $item)
        {{$item->nome}},
    @endforeach
@endsection

@extends('partials.footer')
