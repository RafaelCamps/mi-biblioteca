<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi biblioteca</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url();  ?>assets/img/favicon.png">
    <link rel="stylesheet" href="<?= base_url();  ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();  ?>assets/plugins/fontawesome/css/all.css">
    <link rel="stylesheet" href="<?= base_url();  ?>assets/css/estilos.css">
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
            <a class="navbar-brand" href="<?= base_url(); ?>"><i class="fas fa-book mr-2"></i> Mi Biblioteca</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url(); ?>"><i class="fas fa-home"></i> <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>libros">Libros</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Libros</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= base_url(); ?>libros/nuevo">Añadir nuevo</a>
                            <div class="dropdown-divider text-info"></div>
                            <a class="dropdown-item" href="<?= base_url(); ?>libros">Ver todos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= base_url(); ?>categorias/liderazgo">Por categorías</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>about">About</a>
                    </li>

                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form> -->
            </div>
        </nav>
    </header>
    <main class="container">