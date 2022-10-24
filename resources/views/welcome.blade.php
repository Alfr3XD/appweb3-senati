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
        <title>SENATI VIAJES</title>
    </head>
    <body class="top-0 min-h-screen bg-white">
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
    <main>
        <div class="translate-y-[100px]">
            <div data-carousel="slide" class="relative" id="default-carousel" data-bs-interval="true">
                <div class= "duration-1000 opacity-0 relative container mx-auto max-w-[1200px] h-[400px] overflow-hidden rounded-[15px]"
                data-replace='{"opacity-0": "opacity-100"}'>

                    @foreach($images as $image_lst)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img draggable="false" class="object-cover w-full h-full rounded-[15px]" src='{{$image_lst ->img_uri }}' alt="">
                        </div>
                    @endforeach

                </div>

                <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-black/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-black/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

            <div class="container mx-auto max-w-[600px] py-8">
                <h1 class="duration-1000 font-semibold text-[#0057FF] text-[35px] text-center transform transition-all translate-y-12 ease-out opacity-0" data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100"}'>
                    EXPLORE LUGARES MARAVILLOSOS EN EL PERÚ
                </h1>
            </div>
            <div class="w-full bg-[#0057FF] py-9">
            </div>
        </div>
    </main>
    </body>
</html>