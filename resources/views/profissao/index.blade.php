@extends('partials.header')

@section('title')
Profissões
@endsection

@section('content')

    @foreach ($profissoes as $item)
        @if (mb_strlen($item->nome) == 15)
            <button class="row btn btn-success m-2">{{$item->nome}}</button>
        @endif
    @endforeach
@endsection

@extends('partials.footer')
