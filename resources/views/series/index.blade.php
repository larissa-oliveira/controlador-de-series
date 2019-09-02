@extends('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(!empty($mensagem))
    <div class="alert alert-success">
        {{ $mensagem }}
    </div>
@endif
<div class="row">
    <div class="col-md">
        <ul class="list-group">
            @foreach($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">{{$serie->nome}}
                <form action="/series/{{$serie->id}}" method="post" 
                onsubmit="return confirm ('tem certeza q deseja remover a série {{$serie->nome}}?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">X</button>
                </form>
            </li>
            @endforeach
        </ul>
     </div>
</div>

<div class="row">
    <div class="col-md" style="margin-top: 1rem;">
        <a href="{{route ('form_adicionar_series') }}" class="btn btn-dark mb-2">Adicionar</a>
    </div>
</div>

@endsection