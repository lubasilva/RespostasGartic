@extends('partials.header')

@section('title')
Alimentos
@endsection

@section('content')
    @foreach ($alimentos as $item)
        {{$item->nome}},
    @endforeach
@endsection

@extends('partials.footer')
