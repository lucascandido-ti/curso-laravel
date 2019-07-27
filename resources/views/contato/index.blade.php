@extends('layout.site')

@section('titulo', 'Contatos')
    
@section('conteudo')
    
    <h1>Essa é a View Index</h1>
    @foreach($contatos as $contato)
        <p>{{ $contato->nome }}</p>
        <p>{{ $contato->tel }}</p>
        

    @endforeach

@endsection