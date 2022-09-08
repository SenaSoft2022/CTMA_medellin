<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/alert.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <title></title>
</head>

<body>
    <form action="/juego" method="post">
        @csrf
        <div class="contenido">
            <div class="mx-4 mt-3">
                <div class="row">
                    <div class="col">
                        <div class="col-md-9">
                            <div
                                class="p-3 bg-success shadow-sm d-flex justify-content-around align-items-center rounded">
                                <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                                <div>
                                    <p class="fs-5 fw-bold">Jugador 1</p>
                                    <div class="cat2">
                                        <img src="{{ asset('storage') . '/img/naipes2.jpg' }}" class="img_naipe"
                                            alt="">
                                    </div> <h6 class="mx-3 fw-bold text-white"> = {{ $contar1 }}</h6>

                                    @if (empty($turno))
                                    <input type="hidden" name="loop" value="{{ @$loop }}">
                                    <div class="mx-2 mt-2">

                                    <select name="caracteristica" class="form-select" id="">
                                        <option value="internacionales">Titulos Internacionales</option>
                                        <option value="liga">Titulos Liga</option>
                                        <option value="copa">Titulos Copas</option>
                                    </select>

                                    <input class="btn btn-primary mt-2" type="submit" value="Enviar">
                                </div>
                                    @endif





                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        @if (empty($baraja1))
                        @else
                            <div class="col-md-7">

                                <div
                                    class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">

                                    <div>
                                        {{ array_column($baraja1, 'codigo')[empty($loop)?0:@$loop] }} <br>
                                        <div class="cat">
                                            <img src="{{ asset('storage') . '/img/' . array_column($baraja1, 'foto')[empty($loop)?0:@$loop] }}"
                                                alt=""><br>
                                        </div>
                                        Titulos:
                                        Internacionales:{{ array_column($baraja1, 'titulos_inter')[empty($loop)?0:@$loop] }} <br>
                                        Locales:{{ array_column($baraja1, 'titulos_locales')[empty($loop)?0:@$loop] }} <br>
                                        Titulos_copas:{{ array_column($baraja1, 'titulos_copas')[0] }} <br>
                                        Pais : {{ array_column($baraja1, 'pais')[empty($loop)?0:@$loop] }}
                                    </div>

                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col">
                        @if (empty($baraja2))
                        @else
                            <div class="col-md-7">
                                <div
                                    class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">

                                    <div>
                                        {{ array_column($baraja2, 'codigo')[empty($loop)?0:$loop] }} <br>
                                        <div class="cat">
                                            <img width="40%"
                                                src="{{ asset('storage') . '/img/' . array_column($baraja2, 'foto')[empty($loop)?0:$loop] }}"
                                                alt=""><br>
                                        </div>
                                        Titulos:
                                        Internacionales:{{ array_column($baraja2, 'titulos_inter')[empty($loop)?0:$loop] }} <br>
                                        Locales:{{ array_column($baraja2, 'titulos_locales')[empty($loop)?0:$loop] }} <br>
                                        Copas:{{ array_column($baraja2, 'titulos_copas')[empty($loop)?0:$loop] }} <br>
                                        Pais : {{ array_column($baraja2, 'pais')[empty($loop)?0:$loop] }}
                                    </div>

                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col">
                        <div class="col-md-9">
                            <div
                                class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded">
                                <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                                <div>
                                    <p class="fs-5 fw-bold">Jugador 2</p>
                                    <div class="cat2">
                                        <img src="{{ asset('storage') . '/img/naipes2.jpg' }}" class="img_naipe"
                                            alt="">
                                    </div> <h6 class="mx-3 fw-bold text-white"> = {{ $contar2 }}</h6>
                                    @if (@$turno==1)
                                    <input type="text" name="loop" value="{{ @$loop }}">
                                    <div class="mx-2 mt-2">

                                    <select name="caracteristica" class="form-select" id="">
                                        <option value="internacionales">Titulos Internacionales</option>
                                        <option value="liga">Titulos Liga</option>
                                        <option value="copa">Titulos Copas</option>
                                    </select>

                                    <input type="submit" value="enviar">
                                </div>
                                    @endif

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <br>
                    <div class="col bajar">
                        <div class="col-md-9">
                            <div
                                class="p-3 bg-danger shadow-sm d-flex justify-content-around align-items-center rounded">
                                <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                                <div>
                                    <p class="fs-5 fw-bold">Jugador 3</p>
                                    <div class="cat2">
                                        <img src="{{ asset('storage') . '/img/naipes2.jpg' }}" class="img_naipe"
                                            alt="">
                                    </div> <h6 class="mx-3 fw-bold text-white"> = {{ @$contar3 }}</h6>
                                    @if (@$turno==2)
                                    <input type="text" name="loop" value="{{ @$loop }}">
                                    <input type="text" name="turno3" value="">
                                    <div class="mx-2 mt-2">

                                    <select name="caracteristica" class="form-select" id="">
                                        <option value="internacionales">Titulos Internacionales</option>
                                        <option value="liga">Titulos Liga</option>
                                        <option value="copa">Titulos Copas</option>
                                    </select>

                                    <input type="submit" value="enviar">
                                </div>
                                    @endif

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col bajar">
                        @if (empty($baraja3))
                        <div class="col">
                            <div class="col-md-7">
                                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">

                                    <div>
                                        <p class="fs-5">No hay jugador</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @else
                            <div class="col-md-7">
                                <div
                                    class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">

                                    <div>
                                        {{ array_column($baraja3, 'codigo')[empty($loop)?0:$loop] }} <br>
                                        <div class="cat">
                                            <img width="40%"
                                                src="{{ asset('storage') . '/img/' . array_column($baraja3, 'foto')[empty($loop)?0:$loop] }}"
                                                alt=""><br>
                                        </div>
                                        Titulos:
                                        Internacionales:{{ array_column($baraja3, 'titulos_inter')[empty($loop)?0:$loop] }} <br>
                                        Locales:{{ array_column($baraja3, 'titulos_locales')[empty($loop)?0:$loop] }} <br>
                                        Copas:{{ array_column($baraja3, 'titulos_copas')[empty($loop)?0:$loop] }} <br>
                                        Pais : {{ array_column($baraja3, 'pais')[empty($loop)?0:$loop] }}
                                    </div>

                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col bajar">
                        @if (empty($baraja4))
                        <div class="col">
                            <div class="col-md-7">
                                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">

                                    <div>
                                        <p class="fs-5">No hay jugador</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @else
                            <div class="col-md-7">
                                <div
                                    class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">

                                    <div>
                                        {{ array_column($baraja4, 'codigo')[empty($loop)?0:$loop] }} <br>
                                        <div class="cat">
                                            <img width="40%"
                                                src="{{ asset('storage') . '/img/' . array_column($baraja4, 'foto')[empty($loop)?0:$loop] }}"
                                                alt=""><br>
                                        </div>
                                        Titulos:
                                        Internacionales:{{ array_column($baraja4, 'titulos_inter')[empty($loop)?0:$loop] }} <br>
                                        Locales:{{ array_column($baraja4, 'titulos_locales')[empty($loop)?0:$loop] }} <br>
                                        Copas:{{ array_column($baraja4, 'titulos_copas')[empty($loop)?0:$loop] }} <br>
                                        Pais : {{ array_column($baraja4, 'pais')[empty($loop)?0:$loop] }}
                                    </div>

                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col bajar">
                        <div class="col-md-9">
                            <div
                                class="p-3 bg-warning shadow-sm d-flex justify-content-around align-items-center rounded">
                                <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                                <div>
                                    <p class="fs-5 fw-bold">Jugador 4</p>
                                    <div class="cat2">
                                        <img src="{{ asset('storage') . '/img/naipes2.jpg' }}" class="img_naipe"
                                            alt="">
                                    </div> =

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
    <script src="js/alert.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
     @if (isset($mensaje))
     <script>
         swal({
            title: "Ganador!",
            text: "{{ $mensaje }}"
            });
     </script>

     @endif
</body>

</html>
