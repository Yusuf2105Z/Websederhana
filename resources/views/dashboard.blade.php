<x-dashboard-layout>
    <div class="relative p-7 ml-8 mt-5 width-custom mx-auto sm:px-6 lg:px-8 overflow-hidden shadow-sm rounded-md bg-cover bg-center "style="background-image: url('{{ asset('/img/background.jpg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-60 rounded-md"></div>

        <div class="relative flex flex-col gap-6">
            <h1 class="text-3xl mb-4 text-white text-custom ">Filter Laporan</h1>
            <form class="flex gap-2 items-end">
                <div>
                    <x-input-label :value="_('Start Date')" class="text-white font-handjet font-custom"/>
                    <x-text-input class="block mt-1 w-full h-12 ctn-custom border-none hover:bg-slate-400 text-white" type="date" name="start" required />
                </div>
                <div>
                    <x-input-label :value="_('End Date')" class="text-white font-handjet  font-custom"/>
                    <x-text-input class="block mt-1 w-full h-12 ctn-custom border-none hover:bg-slate-400 text-white" type="date" name="end" required />
                </div>
                <div>
                    <x-primary-button class="text-lg block h-12 ctn-custom transition duration-300  text-white  hover:bg-green-400 ">
                        {{_('Filter')}}
                    </x-primary-button>
                    
                </div>
            </form>
        </div>
    </div>

    @if(isset($pemasukan) && isset($pengeluaran))
    <div class="flex gap-0">
        <div class="p-7 ml-8 mt-5 box-custom mx-auto sm:px-6 lg:px-8 overflow-hidden sm:rounded-lg bg-zinc-400 rounded-md shadow-lg">
            <h2 class=" text-gray-600 font-protest letter-custom font-semibold">Total Pemasukan : </h2>
            <p class="font-bold text-4xl text-slate-300">Rp. {{ $pemasukan->sum('nominal') }}</p>

            <table class="mt-8 table-auto border w-full ">
                <thead class="bg-slate-600  text-white">
                    <tr>
                        <th class="text-left py-3 px-4 uppercase font-semibold">No</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold">Tanggal</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold">Nominal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pemasukan as $d)
                    <tr>
                        <td class="text-left py-3 px-4 font-semibold">{{ $loop->iteration }}</td>
                        <td class="text-left py-3 px-4 font-semibold">{{ $d->created_at }}</td>
                        <td class="text-left py-3 px-4 font-semibold">{{ $d->nominal }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="p-7 -ml-3 mt-5 box-custom mx-auto sm:px-6 lg:px-8 overflow-hidden sm:rounded-lg bg-zinc-400 rounded-md shadow-lg">
            <h2 class=" text-gray-600 font-protest letter-custom font-semibold">Total Pengeluaran</h2>
            <p class="font-bold text-4xl text-slate-200">Rp. {{$pengeluaran->sum('nominal')}}</p>

            <table class="mt-8 table-auto border w-full">
                <thead class="bg-slate-600 text-white">
                    <tr>
                        <th class="text-left py-3 px-4 uppercase font-semibold">No</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold">Tanggal</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold">Nominal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengeluaran as $d)
                    <tr>
                        <td class="text-left py-3 px-4 uppercase font-semibold">{{ $loop->iteration }}</td>
                        <td class="text-left py-3 px-4 font-semibold">{{ $d->created_at }}</td>
                        <td class="text-left py-3 px-4 font-semibold">{{ $d->nominal }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
</x-dashboard-layout>
