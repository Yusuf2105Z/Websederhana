<div class="sidebar-custom min-w-64 mt-10 ml-5 border-custom  shadow-xl p-5 pt-10 text-lg bg-slate-300">
    
    <div class="flex items-center  mb-10">
        <img class="w-12 h-12 rounded-full" src="{{asset('img/icons.png')}}" alt="Profile Picture">
        <h2 class=" font-protest  text-inherit font-thin tracking-wide text-2xl capitalize color-custom letter-custom">
            Amal<span class="italic">Masjidku</span>
            {{-- <h3 class="  flex-col capitalize font-protest color-custom text-xl letter-custom">amal<span class="italic">Masjidku</span>
            </h3> --}}
            <div class="text-xs font-poppins font-medium text-slate-600 italic">~ Indahnya Berbagi ~</div>
        </h2>
    </div>
    
    <nav>
        <ul class="flex flex-col gap-0 items-center">
            <li class="w-full text-center ">
                <a class="gap-3 flex font-handjet  tracking-wide text-xl  p-4 rounded-md transition-all ease-in-out text-slate-700  hover:bg-gray-200 hover:shadow-lg w-full" href="{{route('dashboard')}}">
                <img src="{{asset('img/dashboard.png')}}" class="w-6 h-6 ">
                    Dashboard
                </a>
            </li>
            <li class="w-full text-center">
                <a class=" flex gap-3 font-handjet  tracking-wide text-xl  p-4 rounded-md transition-all ease-in-out text-slate-700 hover:bg-gray-200 hover:shadow-lg w-full" href="{{route('pemasukan.index')}}">
                <img src="{{asset('img/pemasukan.png')}}" class="w-6 h-6">
                    Pemasukan
                </a>
            </li>
            <li class="w-full text-center">
                <a class=" flex gap-3 font-handjet  tracking-wide text-xl  p-4 rounded-md transition-all ease-in-out text-slate-700 hover:bg-gray-200 hover:shadow-lg w-full" href="{{route('pengeluaran.index')}}">
                <img src="{{asset('img/pengeluaran.png')}}" class="w-6 h-6">
                    Pengeluaran
                </a>
            </li>
            <li class="w-full text-center">
                <form method="POST" action="{{route('logout')}}">
                    @csrf
                    <a class=" flex gap-3 font-handjet  tracking-wide text-xl  p-4 rounded-md transition-all ease-in-out text-slate-700 hover:bg-gray-200 hover:shadow-lg w-full cursor-pointer"
                    href="{{route('logout')}}"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    <img src="{{asset('img/logout.png')}}" class="w-6 h-6">
                        {{__('logout')}}
                    </a>
                </form>
            </li>
        </ul>
    </nav>
</div>
