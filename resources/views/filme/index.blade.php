@extends('partials.header')

@section('title')
Filmes
@endsection

@section('content')
    @foreach ($filmes as $item)
        {{$item->nome}},
    @endforeach
@endsection

@extends('partials.footer')
