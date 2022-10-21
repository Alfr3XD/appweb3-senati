<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;600&display=swap" rel="stylesheet">

        @vite('resources/css/app.css')
        <title>Laravel</title>
    </head>
    <body class="top-0 min-h-screen bg-[#f5f5f5]">
         <!-- NAV BAR -->
        <div class="fixed w-full z-40 bg-white h-[50px]">
            <div class="container mx-auto max-w-[1020px] h-[50px]">
                <div class="flex space-x-[100px] justify-center">
                    <h1 class="pt-2 font-bold text-[#0057FF] text-[25px]">
                        <a href="/">SENATI VIAJES</a>
                    </h1>

                    <div class="relative mt-3">
                        <svg class="absolute h-6 w-6 right-0" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                        <input type="text" placeholder="Buscar..." maxlength="32" class="border-b-2 border-[#ffffff] h-[24px] w-[355px] focus:outline-none focus:border-[#000000]">
                    </div>

                    <ul class='flex space-x-[40px] mt-4 text-[15px] font-black'>
                        <li>
                            <a href='#aea' class="duration-500 NAV-principal-txt hover:text-blue-600">
                                REGIONES
                            </a>
                        </li>
                        <li>
                            <a href='#contacyo' class="duration-500 Nav-link hover:text-blue-600">
                                CONTÁCTOS
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container mx-auto max-w-[1400px]">
            <div class="rounded-[15px] w-full h-[550px]" style="background-image: url('https://2.blogs.elcomercio.pe/checklistviajero/wp-content/uploads/sites/292/2018/12/CATARATAS-HORNILLOS-ABRE.jpg')">
                <h1 class="container mx-auto max-w-[500px] pt-[150px] text-white font-bold text-center text-[50px] drop-shadow-lg shadow-red-500">
                    VEN Y EXPLORA CON NOSOTROS
                </h1>
            </div>
            <!---
            <div class="relative">
                <img class="absolute w-full h-[550px] rounded-[8px] object-cover" src="https://2.blogs.elcomercio.pe/checklistviajero/wp-content/uploads/sites/292/2018/12/CATARATAS-HORNILLOS-ABRE.jpg" alt="" draggable="false"/>
                <h1 class="absolute left-5 max-w-[500px] pt-20 text-white font-bold text-center text-[50px]">
                    VEN Y EXPLORA CON NOSOTROS
                </h1>
            </div>
            --> 
        </div>
    </body>
</html>