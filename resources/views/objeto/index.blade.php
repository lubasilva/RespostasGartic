@extends('partials.header')

@section('title')
    Objetos
@endsection



@section('content')

<div class="d-flex container justify-content-center">
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
                <option value="{{$i}}">@if ({{$_GET['primeiraLetra']}})

                @endif{{$i}}</option>
        <?php } ?>

    </select>

    <label for="primeiraLetra">Primeira letra</label>
    <input type="text"  id="primeiraLetra" name="primeiraLetra" value="{{$_GET['primeiraLetra']}}">

  </div>
  <br> <button type="submit" onclick="buscaPalavras()" class="btn btn-primary">Buscar</button>
</form>
</div>



<div class="row">
        @php
            $result = '';
            if($_GET){
                $result = $_GET['formResposta'];
            }
        @endphp
        @foreach ($objetos as $objeto)
        @if ($result != '')
            @if (mb_strlen(trim(str_replace(' ', '', $objeto->nome))) ==  $result)
                <p class="">{{$objeto->nome}}</p>
            @endif
        @else
            <p class="">{{$objeto->nome}}</p>
        @endif
        @endforeach

        </div>
@endsection

<script>
    function buscaPalavras() {
        qtdPlvr = document.querySelector('#formResposta').value
        primeiraLetra = document.querySelector('#primeiraLetra').innerText

        let qtdPlvrGuard = sessionStorage.getItem(qtdPlvr);

        location.reload(true);

    }

    window.onload = function () {
            palavras = document.querySelectorAll('.row p')

            palavras.forEach(function(el){
                el.innerHTML
            })

            document.querySelector('#formResposta').value = qtdPlvrGuard


        console.log(primeiraLetra)

    }

</script>

@extends('partials.footer')
