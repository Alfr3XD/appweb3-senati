@extends('components.navbar')
@extends('layout.lugaresly')
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <script>
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark')
            }
        </script>

        @vite('resources/css/app.css')
        <title>SENATI VIAJES</title>
    </head>
    <body class="duration-700 top-0 min-h-screen bg-white dark:bg-slate-800">
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(){
            setTimeout(function(){
                var replacers = document.querySelectorAll('[data-replace]');
                for(var i=0; i<replacers.length; i++){
                    let replaceClasses = JSON.parse(replacers[i].dataset.replace.replace(/'/g, '"'));
                    Object.keys(replaceClasses).forEach(function(key) {
                        replacers[i].classList.remove(key);
                        replacers[i].classList.add(replaceClasses[key]);
                    });
                }
            }, 1);
        });
    </script>
    @section('region_name', 'aea')
    </body>
</html>