@extends('layouts.base')
@section('content')
<h1>
    @if ($adocao)
        Editando a adocão
        {{$adocao->ad}}
        {{-- Começamos a editar a form --}}
    @else

    @endif
</h1>

