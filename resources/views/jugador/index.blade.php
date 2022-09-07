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
                <div class="card-body">
                    <i class="fa-solid fa-futbol fs-6 fw-bold">   </i>
                    <div class="">
                        <div class="mb-3">
                            <label class="form-label">Ingresar codigo de sala</label>
                            <input name="cod_juego" type="text" class="form-control">
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn">Entrar a sala</button>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a  class="text-white" href="{{ route('inicio.create') }}">Crear una sala</a>
                </div>
            </div>

    </form>
@endsection
