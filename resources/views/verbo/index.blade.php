@extends('partials.header')

@section('title')
Verbos
@endsection

@section('content')
    @foreach ($verbos as $item)
        {{$item->nome}},
    @endforeach
@endsection

@extends('partials.footer')
