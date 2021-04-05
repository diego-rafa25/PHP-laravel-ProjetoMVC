@extends('layout.principal')
@section('conteudo')

@if($errors->any())

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        
        </ul>
    
    </div>

@endif
@if(empty($cidade))
<form action="{{route('cidade.insere')}}"  method = "POST">
@else
<form action="{{route('cidade.edicao', ['id'=>$cidade->id])}}"  method = "POST">
@endif
    @csrf
    <br>
    <label class="form-label">Cidade</label>
    <input class="form-control" type="text" name="nome" maxlength="150" @isset($cidade) value="{{$cidade->nome}}" @endisset> </br>

@if (empty($cidade))
    <button class="btn btn-primary" type="submit">Salvar</button>
@else
    <button class="btn btn-primary type="submit">Editar</button>
    <a class="btn btn-secondary href="{{route('cidade.lista')}}">Cancelar</a>

@endif

</form>

@if(!empty($cidade))
<form action="{{route('cidade.exclusao', ['id'=>$cidade->id])}}"  method = "POST">
@csrf
    <button class="btn btn-danger type="submit">Excluir</button>
</form>
@endif

@endsection