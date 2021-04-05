@extends('layout.principal')
@section('conteudo')
    

        <h2>Listagem de Cidades <a href="{{route('cidade.formulario')}}"><i class="bi bi-plus-circle"></i></a></h2>
        <table class="table">
            @foreach ($cidades as $c)
            <tr>
                <td> {{ $c->nome}}</td>
                <td> <a href="{{route('cidade.formulario.edit',['id'=>$c->id])}}"> <i class="bi bi-pencil-square"></i></a></td>
            </tr>
            @endforeach
        </table>

@endsection
  

