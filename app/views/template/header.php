<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyect Final UCA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php ROOT ?>css/global.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light sticky-top" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand" href="index.html"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">
                    </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">

                    <?php
                    if ($_SERVER['REQUEST_URI'] !=  substr(ROOT,-12)) {
                    ?>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#modalAdoptar" aria-current="page" href="#feature">Adoptar</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#modalAdoptar" aria-current="page" href="#feature">Publicar</a></li>
                        <div class="d-flex ms-lg-4">
                            <a class="btn btn-warning ms-3" href="<?php ROOT ?>">Salir</a>
                        </div>
                    </ul>

                    <?php
                    } else {
                    ?>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#modalAdoptar" aria-current="page" href="#feature">Adoptar</a></li>
                        </ul>
                        <div class="d-flex ms-lg-4"><a class="btn btn-secondary-outline" data-bs-toggle="modal" data-bs-target="#modalIngresar" href="#!"> Ingresar</a><a class="btn btn-warning ms-3" data-bs-toggle="modal" data-bs-target="#modalRegistro" href="#!">Registro</a>
                        </div>

                    <?php
                    }
                    ?>


                </div>
            </div>
        </nav>
