@section('navbar')
<header>
    
    <div class = "duration-700 top-0 fixed w-full z-40 bg-white h-[80px] shadow-xl dark:bg-slate-900">  
        <div class="container mx-auto max-w-[1150px]">
            <div class="flex items-center justify-center space-x-[50px]">
                <div class="py-[20px] font-semibold text-[#0057FF] text-[25px]">
                    <a href="/"> SENATI VIAJES </a>
                </div>
                <div class="relative my-1 justify-self-center">
                    <form>
                        <div class="relative w-[550px]">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none ">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <input type="text" id="search" class="duration-700 block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800" placeholder="Buscar...">
                            <button type="submit" class="duration-700 text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-[12px] px-4 py-2">BUSCAR</button>
                        </div>
                    </form> 
                </div>
                <ul class="flex space-x-6">
                    <li>
                        <button id="lugares_id" data-dropdown-toggle="drop_lugares" data-dropdown-placement="bottom" class="duration-500 hover:text-blue-600 dark:text-white"> REGIONES </button>

                        <div id="drop_lugares" class="hidden z-10 w-60 py-2 bg-white rounded-[5px] drop-shadow-xl border-2 dark:bg-slate-900">
                            <ul>
                                @foreach($regiones as $fila_reg)
                                    <li><a class="duration-500 flex py-2 px-4 hover:text-white hover:bg-blue-600 dark:text-white" href="/regiones/{{$fila_reg->r_description}}">{{$fila_reg->r_description}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                            
                    </li>
                    <li>
                        <a href="#" class="duration-500 hover:text-blue-600 dark:text-white">
                            CONTACTO
                        </a>
                    </li>
                </ul>

                <button id="theme-toggle" type="button" class="duration-700 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                    <script>
                        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
                        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

                        // Change the icons inside the button based on previous settings
                        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                            themeToggleLightIcon.classList.remove('hidden');
                        } else {
                            themeToggleDarkIcon.classList.remove('hidden');
                        }

                        var themeToggleBtn = document.getElementById('theme-toggle');

                           themeToggleBtn.addEventListener('click', function() {

                            // toggle icons inside button
                            themeToggleDarkIcon.classList.toggle('hidden');
                            themeToggleLightIcon.classList.toggle('hidden');

                                // if set via local storage previously
                            if (localStorage.getItem('color-theme')) {
                                if (localStorage.getItem('color-theme') === 'light') {
                                    document.documentElement.classList.add('dark');
                                    localStorage.setItem('color-theme', 'dark');
                                } else {
                                    document.documentElement.classList.remove('dark');
                                    localStorage.setItem('color-theme', 'light');
                                }

                                // if NOT set via local storage previously
                            } else {
                                if (document.documentElement.classList.contains('dark')) {
                                    document.documentElement.classList.remove('dark');
                                    localStorage.setItem('color-theme', 'light');
                                } else {
                                    document.documentElement.classList.add('dark');
                                    localStorage.setItem('color-theme', 'dark');
                                }
                            }  
                        });
                    </script>
                </button>
            </div>
        </div>
    </div>
</header>
@show
