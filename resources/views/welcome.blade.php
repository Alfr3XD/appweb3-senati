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

        <!-- NAV BAR -->
        <div class = "fixed w-full z-40 bg-white h-[80px] shadow-xl">  
            <div class="container mx-auto max-w-[1150px]">
                <div class="flex items-center justify-center space-x-[100px]">
                    <div class="py-[20px] font-semibold text-[#0057FF] text-[25px]">
                        <a href="/">
                            SENATI VIAJES
                        </a>
                    </div>
                    <div class="relative my-1 justify-self-center">
                        <svg class="absolute h-6 w-6 right-0" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>

                        <input type="text" placeholder="Buscar..." maxlength="35" class="border-b-2 border-[#ffffff] h-[30px] w-[450px] focus:outline-none">
                    </div>
                    <ul class="flex space-x-6">
                        <li>
                            <a href="#" class="duration-500 hover:text-blue-600">
                                LUGARES
                            </a>
                        </li>
                        <li>
                            <a href="#" class="duration-500 hover:text-blue-600">
                                CONTACTO
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Nav bar -->

        <div class="translate-y-[100px] ">
            <div class= "container mx-auto max-w-[1200px] h-[400px]" >
                <img class="object-cover w-full h-full rounded-[15px]" src="https://www.confiep.org.pe/wp-content/uploads/2020/09/11-Turismo.png" alt="">
            </div>

            <div class="container mx-auto max-w-[600px] py-8">
                <h1 class="font-semibold text-[#0057FF] text-[35px] text-center">EXPLORE LUGARES MARAVILLOSOS EN EL PERÚ<h2>
            </div>
            <div class="w-full bg-[#0057FF] py-9">
                <div class="duration-700 container mx-auto max-w-[220px] h-[50px] bg-white rounded-[10px] hover:brightness-[0.8] hover:scale-[1.1]">
                    <button class=" w-[220px] h-[50px] text-[20px]">
                        <a href="#"> Explora lugares </a>
                    </button>
                </div>
            </div>
        </div>

    </body>
</html>