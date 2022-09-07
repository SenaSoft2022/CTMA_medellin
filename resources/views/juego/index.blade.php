<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>


    <div class="container row vh-100 justify-content-center align-items-center">
        <div class="row">
            <div class="col">
                <div class="col-md-6">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2"></h3>
                            <p class="fs-5">jugador 1</p>
                        </div>
                        <i class="fas fa-question fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>

                <div class="col-md-8">

                    <div class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded">
                        <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>

                        <div>
                            <img width="100" src="{{asset('storage').'/img/'.array_column($baraja1,'foto')[0]}}" alt="">
                            <h3 class="fs-2">{{array_column($baraja1,'codigo')[0]}}</h3>
                            <p class="fs-5">titulos internacionales:{{array_column($baraja1,'titulos_inter')[0]}}</p>
                            <p class="fs-5">titulos locales:{{array_column($baraja1,'titulos_locales')[0]}}</p>
                            <p class="fs-5">titulos_copas:{{array_column($baraja1,'titulos_copas')[0]}}</p>
                            <p class="fs-5">pais : {{array_column($baraja1,'pais')[0]}}</p>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col">
                <div class="col-md-6">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2"></h3>
                            <p class="fs-5">jugador 2</p>
                        </div>
                        <i class="fas fa-question fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>

                <div class="col-md-8">

                    <div class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded">
                        <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>

                        <div>
                            <img width="100" src="{{asset('storage').'/img/'.array_column($baraja2,'foto')[0]}}" alt="">
                            <h3 class="fs-2">{{array_column($baraja2,'codigo')[0]}}</h3>
                            <p class="fs-5">titulos internacionales:{{array_column($baraja2,'titulos_inter')[0]}}</p>
                            <p class="fs-5">titulos locales:{{array_column($baraja2,'titulos_locales')[0]}}</p>
                            <p class="fs-5">titulos_copas:{{array_column($baraja2,'titulos_copas')[0]}}</p>
                            <p class="fs-5">pais : {{array_column($baraja2,'pais')[0]}}</p>
                        </div>

                    </div>

                </div>
            </div>
        <div class="row">
            <div class="col">
                @if (empty($baraja3))

                @else
                <div class="col-md-6">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2"></h3>
                            <p class="fs-5">jugador 3</p>
                        </div>
                        <i class="fas fa-question fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>

                <div class="col-md-8">

                    <div class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded">
                        <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>

                        <div>
                            <img width="100" src="{{asset('storage').'/img/'.array_column($baraja3,'foto')[0]}}" alt="">
                            <h3 class="fs-2">{{array_column($baraja3,'codigo')[0]}}</h3>
                            <p class="fs-5">titulos internacionales:{{array_column($baraja3,'titulos_inter')[0]}}</p>
                            <p class="fs-5">titulos locales:{{array_column($baraja3,'titulos_locales')[0]}}</p>
                            <p class="fs-5">titulos_copas:{{array_column($baraja3,'titulos_copas')[0]}}</p>
                            <p class="fs-5">pais : {{array_column($baraja3,'pais')[0]}}</p>
                        </div>

                    </div>

                </div>
                @endif

            </div>
            <div class="col ">
                @if (empty($baraja4))


                @else
                <div class="col-md-3">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2"></h3>
                            <p class="fs-5">jugador 4</p>
                        </div>
                        <i class="fas fa-question fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>

                @endif

            </div>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
