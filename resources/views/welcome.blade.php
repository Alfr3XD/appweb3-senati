@extends('components.navbar')
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        @vite('resources/css/app.css')
        <title>Laravel</title>
    </head>
    <body class="top-0 min-h-screen bg-white">
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <main>
        <div class="translate-y-[100px] ">
            <div class= "container mx-auto max-w-[1200px] h-[400px]">
                <img draggable="false" class="object-cover w-full h-full rounded-[15px]" src="https://www.confiep.org.pe/wp-content/uploads/2020/09/11-Turismo.png" alt="">
            </div>

            <div class="container mx-auto max-w-[600px] py-8">
                <h1 class="font-semibold text-[#0057FF] text-[35px] text-center">EXPLORE LUGARES MARAVILLOSOS EN EL PERÚ<h2>
            </div>
            <div class="w-full bg-[#0057FF] py-9">
            </div>
        </div>
    </main>
    </body>
</html>