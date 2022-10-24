@extends('components.navbar')
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
        <title>REGIONES</title>
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
    <main class="translate-y-[120px]">
        <div class="duration-700 relative p-8 container mx-auto max-w-[1128px] h-[550px] rounded-[20px] border border-[#868686] bg-white drop-shadow-xl overflow-auto dark:bg-slate-900 dark:border-black">
            @foreach ($region as $rg)
                <h1 class="duration-700 text-[25px] font-semibold dark:text-white"> {{$rg->r_description}} - LUGARES </h1>
            @endforeach
            <div class="container mx-auto max-w-[850px]">
                <nav>
                    <ul class="flex flex-wrap justify-center space-x-10">
                        @foreach ($lugares_rg as $lg)
                        <li>
                            <a href="/regiones/{{$lg->r_description}}/{{$lg->lg_nombre}}/info" class="duration-700 hover:translate-y-4 hover:brightness-[0.8]">
                                <div class="duration-700 hover:translate-y-4 relative my-8 w-[230px] h-[320px] bg-white shadow-lg rounded-[15px] dark:bg-slate-800 dark:text-white">
                                    <img class="object-cover w-full h-[126px] rounded-t-md" src="{{$lg->lg_image}}" alt="">
                                    <h1 class="p-6 text-center text-[20px] font-semibold"> {{$lg->lg_nombre}} </h1>
                                    <div class="px-6 overflow-auto">
                                        <p class="break-words text-center text-[15px] max-w-[224px] max-h-[90px]">
                                        {{$lg->lg_description}}
                                        </p>
                                    </div>
                                </div> 
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </nav>                
            </div>
        </div>
    </main>
    </body>
</html>