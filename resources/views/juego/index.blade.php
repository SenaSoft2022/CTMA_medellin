<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style2.css">

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
                                class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded">
                                <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                                <div>
                                    <p class="fs-5">Jugador 1</p>
                                    <div class="cat2">
                                        <img src="{{ asset('storage') . '/img/naipes2.jpg' }}" class="img_naipe"
                                            alt="">
                                    </div> = {{ $contar1 }}


                                    <input type="text" name="loop" value="{{ @$loop }}">
                                    <select name="caracteristica" id="">
                                        <option value="internacionales">Titulos Internacionales</option>
                                        <option value="liga">Titulos Liga</option>
                                        <option value="copa">Titulos Copas</option>
                                    </select>


                                    <input type="submit" value="enviar">

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
                                        <p class="fs-5">{{ array_column($baraja1, 'nombre')[0] }}</p>
                                        {{ array_column($baraja1, 'codigo')[0] }} <br>
                                        <div class="cat">
                                            <img src="{{ asset('storage') . '/img/' . array_column($baraja1, 'foto')[0] }}"
                                                alt=""><br>
                                        </div>
                                        Titulos:
                                        Internacionales:{{ array_column($baraja1, 'titulos_inter')[0] }} <br>
                                        Locales:{{ array_column($baraja1, 'titulos_locales')[0] }} <br>
                                        Titulos_copas:{{ array_column($baraja1, 'titulos_copas')[0] }} <br>
                                        Pais : {{ array_column($baraja1, 'pais')[0] }}
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

                                        <p class="fs-5">{{ array_column($baraja2, 'nombre')[0] }}</p>
                                        {{ array_column($baraja2, 'codigo')[0] }} <br>
                                        <div class="cat">
                                            <img width="40%"
                                                src="{{ asset('storage') . '/img/' . array_column($baraja2, 'foto')[0] }}"
                                                alt=""><br>
                                        </div>
                                        Titulos:
                                        Internacionales:{{ array_column($baraja2, 'titulos_inter')[0] }} <br>
                                        Locales:{{ array_column($baraja2, 'titulos_locales')[0] }} <br>
                                        Copas:{{ array_column($baraja2, 'titulos_copas')[0] }} <br>
                                        Pais : {{ array_column($baraja2, 'pais')[0] }}
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
                                    <p class="fs-5">Jugador 2</p>
                                    <div class="cat2">
                                        <img src="{{ asset('storage') . '/img/naipes2.jpg' }}" class="img_naipe"
                                            alt="">
                                    </div> = {{ $contar2 }}

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <br>
                    <div class="col bajar">
                        <div class="col-md-9">
                            <div
                                class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded">
                                <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                                <div>
                                    <p class="fs-5">Jugador 3</p>
                                    <div class="cat2">
                                        <img src="{{ asset('storage') . '/img/naipes2.jpg' }}" class="img_naipe"
                                            alt="">
                                    </div> = {{ $contar3 }}

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col bajar">
                        @if (empty($baraja3))
                        @else
                            <div class="col-md-7">
                                <div
                                    class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">

                                    <div>
                                        <p class="fs-5">{{ array_column($baraja3, 'nombre')[0] }}</p>
                                        {{ array_column($baraja3, 'codigo')[0] }} <br>
                                        <div class="cat">
                                            <img width="40%"
                                                src="{{ asset('storage') . '/img/' . array_column($baraja3, 'foto')[0] }}"
                                                alt=""><br>
                                        </div>
                                        Titulos:
                                        Internacionales:{{ array_column($baraja3, 'titulos_inter')[0] }} <br>
                                        Locales:{{ array_column($baraja3, 'titulos_locales')[0] }} <br>
                                        Copas:{{ array_column($baraja3, 'titulos_copas')[0] }} <br>
                                        Pais : {{ array_column($baraja3, 'pais')[0] }}
                                    </div>

                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col bajar">
                        @if (empty($baraja4))
                        @else
                            <div class="col-md-7">
                                <div
                                    class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">

                                    <div>
                                        <p class="fs-5">{{ array_column($baraja4, 'nombre')[0] }}</p>
                                        {{ array_column($baraja4, 'codigo')[0] }} <br>
                                        <div class="cat">
                                            <img width="40%"
                                                src="{{ asset('storage') . '/img/' . array_column($baraja4, 'foto')[0] }}"
                                                alt=""><br>
                                        </div>
                                        Titulos:
                                        Internacionales:{{ array_column($baraja4, 'titulos_inter')[0] }} <br>
                                        Locales:{{ array_column($baraja4, 'titulos_locales')[0] }} <br>
                                        Copas:{{ array_column($baraja4, 'titulos_copas')[0] }} <br>
                                        Pais : {{ array_column($baraja4, 'pais')[0] }}
                                    </div>

                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col bajar">
                        <div class="col-md-9">
                            <div
                                class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded">
                                <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                                <div>
                                    <p class="fs-5">Jugador 4</p>
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
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
