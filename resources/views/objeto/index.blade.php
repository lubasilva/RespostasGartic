@extends('partials.header')

@section('title')
    Objetos
@endsection

@foreach ($objetos as $objeto)
    @php
        $teste =  max(mb_strlen(trim(str_replace(' ', '', $objeto->nome))), 1);
    @endphp
@endforeach

<form method="GET">
  <div class="form-group">
    <label for="formResposta">Quantidade de letras</label>
    <select class="form-control" id="formResposta" name="formResposta">
        <?php
            for ($i = 1; $i <= $teste; $i++ ) { ?>
                <option value="{{$i}}">{{$i}}</option>
        <?php } ?>

    </select>
  </div>
  <br> <button type="submit" onclick="qtdPalavras()" class="btn btn-primary">Buscar</button>
</form>

@section('content')
<div class="row">
        @php
            $result = '';
            if($_GET){
                $result = $_GET['formResposta'];
            }
        @endphp
        @foreach ($objetos as $objeto)
        @if ($result)
            @if (mb_strlen(trim(str_replace(' ', '', $objeto->nome))) ==  $result)
                <p class="flex btn btn-success m-2">{{$objeto->nome}}</p>
            @endif
        @endif
        @endforeach

        </div>
@endsection

<script>
    function qtdPalavras() {
        qtdPlvr = document.querySelector('#formResposta').value
        console.log(qtdPlvr)
    }
</script>

@extends('partials.footer')
