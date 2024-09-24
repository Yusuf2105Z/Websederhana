<x-dashboard-layout>
    <div class="flex p-2 ml-8 mt-5 width-custom bg-slate-500 mx-auto sm:px-6 lg:px-8 overflow-hidden shadow-sm rounded-md">
        <div class="flex flex-col gap-6 w-full lg:flex-row-reverse">
            <div class="flex justify-center items-center p-4 lg:w-1/2">
                <img src="{{asset('img/forms-img.png')}}"class="max-w-xs ">
            </div>

            <!-- Form Section (left side) -->
            <div class="flex flex-col gap-6 w-full lg:w-1/2 p-4">
                <h1 class="text-2xl mb-4 text-center font-protest text-slate-200">Tambah Pengeluaran</h1>
                <form action="{{route('pengeluaran.store')}}" method="POST" class="w-full flex flex-col gap-6">
                    @csrf
                    <input name="id_user" value="{{auth()->user()->id}}" type="hidden"/>
                    <div>
                        <x-input-label :value="__('Judul Pengeluaran')" class="text-white font-poppins " />
                        <x-text-input class="block mt-1 w-full font-handjet" type="text" name="judul_pengeluaran" required/>
                    </div>
                    <div>
                        <x-input-label :value="__('Deskripsi')" class="text-white font-poppins " />
                        <x-text-input class="block mt-1 w-full font-handjet" type="text" name="deskripsi" required/>
                    </div>
                    <div>
                        <x-input-label :value="__('Nominal')"  class="text-white font-poppins "/>
                        <x-text-input class="block mt-1 w-full font-handjet" type="number" name="nominal" required/>
                    </div>
                    <div>
                        <x-primary-button class="text-lg hover:bg-green-400">
                            {{ __('Submit') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-dashboard-layout>
