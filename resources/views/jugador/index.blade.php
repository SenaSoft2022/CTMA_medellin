@extends('base')

@section('titulo')
@endsection


@section('contenido')
    <div class="background-wrap">
        <div class="background"></div>
    </div>

    <form id="" action="/inicio" method="post">
        @csrf
        <div class="vh-100 row justify-content-center align-items-center">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <input type="text" name="cod_juego">
                        <button>Entrar a sala</button>
                    </div>
                </div>
            </div>
    </form>
@endsection
