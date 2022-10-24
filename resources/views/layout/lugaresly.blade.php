@section('lugares')
<main class="translate-y-[120px]">
    <div class="duration-700 relative p-8 container mx-auto max-w-[1128px] h-[550px] rounded-[20px] border border-[#868686] bg-white drop-shadow-xl overflow-auto dark:bg-slate-900 dark:border-black dark:text-white">
        <h1 class="text-[25px] font-semibold"> @yield('region_name') - LUGARES </h1>
        <div class="container mx-auto max-w-[850px]">
            <nav>
                <ul class="flex flex-wrap justify-center space-x-10">
                    <li>
                        <div class="duration-700 relative my-8 w-[230px] h-[320px] bg-white shadow-lg rounded-[15px] dark:bg-slate-800">
                            <img class="object-cover w-full h-[126px] rounded-t-md" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Cultivos_de_pino_casuarina_%28Casuarina_equisetifolia%29_en_el_Vivero_Forestal_de_Chimbote_06.jpg/640px-Cultivos_de_pino_casuarina_%28Casuarina_equisetifolia%29_en_el_Vivero_Forestal_de_Chimbote_06.jpg" alt="">
                            <h1 class="p-6 text-center text-[20px] font-semibold"> LUGAR </h1>
                            <p class="break-words px-6 text-center text-[15px] max-w-[224px] max-h-[90px]">
                                kasjdlkajdklasjdasdasdasdasdasdasdadasdasdasdasdasdasdasd
                            </p>
                        </div> 
                    </li>
                </ul>
            </nav>                
        </div>
    </div>
</main>
@show
