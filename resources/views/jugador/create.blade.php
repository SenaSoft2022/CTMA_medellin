@extends('base')

@section('titulo')
@endsection


@section('contenido')
    <div class="background-wrap">
        <div class="background"></div>
    </div>

    <form id="" action="/jugador" method="post">
        @csrf
        <div class="vh-100 row justify-content-center align-items-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <div class="">
                        <div class="mb-3">
                            <label class="form-label">Ingrese su nombre</label>
                            <input type="hidden" name="cod_juego" value="{{ $codigo }}">
                            <input name="nombres" type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn">Confirmar</button>

                    </div>
                </div>
            </div>
    </form>
@endsection
