<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyect Final UCA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php ROOT ?>css/global.min.css">
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
                    switch (true) {
                        case $_SERVER['REQUEST_URI'] ==  substr(ROOT, -12):
                    ?>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item mt-1"><a class="nav-link" aria-current="page" href="<?= ROOT ?>login">Adoptar</a></li>
                            </ul>
                            <div class="d-flex ms-lg-4"><a class="btn btn-secondary-outline" href="<?= ROOT ?>login"> Ingresar</a><a class="btn btn-warning ms-3" href="<?= ROOT ?>signup">Registro</a>
                            </div>

                        <?php
                            break;
                        case str_contains($_SERVER['REQUEST_URI'], 'login'):
                        ?>
                            <ul class="navbar-nav ms-auto">
                                <div class="d-flex ms-lg-4">
                                    <a class="btn btn-warning ms-3" href="<?= ROOT ?>">Inicio</a>
                                </div>
                            </ul>

                        <?php
                            break;
                        case str_contains($_SERVER['REQUEST_URI'], 'signup'):
                        ?>
                            <ul class="navbar-nav ms-auto">
                                <div class="d-flex ms-lg-4">
                                    <a class="btn btn-warning ms-3" href="<?= ROOT ?>">Inicio</a>
                                </div>
                            </ul>

                        <?php
                            break;
                        default:
                        ?>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item mt-1"><a class="nav-link" aria-current="page" href="<?= ROOT ?>home">Adoptar</a></li>
                                <li class="nav-item mt-1"><a class="nav-link" aria-current="page" href="<?= ROOT ?>post">Publicar</a></li>

                                <div class="d-flex ms-lg-4 dropdown">
                                    <a class="btn btn-warning ms-3 " data-bs-toggle="dropdown" aria-expanded="false" style="width:50px;height:50px;padding:10px 16px;font-size:18px;line-height:1.33;border-radius:25px">
                                        <?= substr($_SESSION['USER'][0]->full_name, 0, 1) ?>
                                    </a>
                                    <ul class="dropdown-menu" style="width: 20rem;">
                                        <li><strong>&nbsp;Ingreso como:</strong> <?= $_SESSION['USER'][0]->email_address ?> </li>
                                        <li><strong>&nbsp;Nombre:</strong> <?= $_SESSION['USER'][0]->full_name ?> </li>
                                        <li><strong>&nbsp;Correo:</strong> <?= $_SESSION['USER'][0]->email_address ?></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="<?= ROOT ?>myprofile">Editar mi Perfil</a></li>
                                        <li><a class="dropdown-item" href="<?= ROOT ?>mypost">Mis Publicaciones</a></li>                                        
                                        <li><a class="dropdown-item" href="<?= ROOT ?>">Cerrar Sesion</a></li>
                                    </ul>
                                </div>
                            </ul>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </nav>