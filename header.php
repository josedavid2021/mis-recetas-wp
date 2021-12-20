<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mis recetas de cocina casera">
    <meta name="keywords" content="recetas, cocina casera, gastronomía">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/huevo-frito.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <?php wp_head(); ?>
</head>

<body>

    <div class="container mx-auto px-10">
        <header class="flex justify-center my-5">
            <img class="h-16 sm:h-28" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="">
        </header>
    </div>

    <div class="bg-gray-300 py-2 sm:py-4 mb-10">
        <nav class="container mx-auto px-10 text-center text-lg">
            <span class="text-gray-400">Inicio</span>
            <span class="text-gray-500 mx-2 text-base">|</span>
            <a class="hover:underline" href="recetas.html">Recetas</a>
            <span class="text-gray-500 mx-2 text-base">|</span>
            <a class="hover:underline" href="contactar.html">Contactar</a>
        </nav>
    </div>