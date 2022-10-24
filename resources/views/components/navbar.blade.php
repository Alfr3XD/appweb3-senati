@section('navbar')
<header>
    
    <div class = "top-0 fixed w-full z-40 bg-white h-[80px] shadow-xl">  
        <div class="container mx-auto max-w-[1150px]">
            <div class="flex items-center justify-center space-x-[100px]">
                <div class="py-[20px] font-semibold text-[#0057FF] text-[25px]">
                    <a href="/"> SENATI VIAJES </a>
                </div>
                <div class="relative my-1 justify-self-center">
                    <svg class="absolute h-6 w-6 right-0" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>

                    <input type="text" placeholder="Buscar..." maxlength="35" class="border-b-2 border-[#ffffff] h-[30px] w-[450px] focus:outline-none">
                </div>
                <ul class="flex space-x-6">
                    <li>
                        <button id="lugares_id" data-dropdown-toggle="drop_lugares" data-dropdown-placement="bottom" class="duration-500 hover:text-blue-600"> LUGARES </button>

                        <div id="drop_lugares" class="hidden z-10 w-60 bg-white rounded-[10px] drop-shadow-xl border-2">
                            <ul>
                                @foreach($region as $fila_reg)
                                    <li><a class="duration-500 flex p-2 text-center hover:text-blue-600 hover:bg-neutral-300 rounded-[10px]" href="#">{{$fila_reg->r_description}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                            
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
    
</header>
@show
