<x-dashboard-layout>
    <div class="flex flex-col gap-6 bg-slate-500 p-2 ml-8 mt-5 width-custom mx-auto sm:px-6 lg:px-8 overflow-hidden shadow-sm rounded-md">
        <h1 class="text-2xl mb-4 text-slate-200 font-handjet text-center font-medium letter-custom  "> ~ Pengeluaran Masjid ~</h1>

        <div class="flex justify-end">
            <a href="{{route('pengeluaran.create')}}" class="bg-green-100 text-slate-600 hover:bg-green-300 hover:text-white transition-all p-2 px-3 text-center rounded-md">+ Tambah Pengeluaran</a>
        </div>

        <table class="mb-4 table-auto border bg-gray-700 ">
            <thead class="bg-gray-200 text-slate-500">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold  text-gray-500 font-poppins ">No</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold  text-gray-500 font-poppins ">Penanggung Jawab</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold  text-gray-500 font-poppins ">Judul</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold  text-gray-500 font-poppins ">Deskripsi</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold  text-gray-500 font-poppins ">Nominal</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold  text-gray-500 font-poppins ">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                <tr>
                    <td class="text-left py-3 px-4  font-handjet text-white text-lg font-semibold">{{ $loop->iteration }}</td>
                    <td class="text-left py-3 px-4  font-handjet text-white text-lg font-semibold">{{ $d->user->name }}</td>
                    <td class="text-left py-3 px-4  font-handjet text-white text-lg font-semibold">{{ $d->judul_pengeluaran }}</td>
                    <td class="text-left py-3 px-4  font-handjet text-white text-lg font-semibold">{{ $d->deskripsi }}</td>
                    <td class="text-left py-3 px-4  font-handjet text-white text-lg font-semibold">{{ $d->nominal }}</td>
                    <td class="text-left py-3 px-4  font-handjet text-white text-lg font-semibold inline-flex flex-col gap-2">
                        <a href="{{ route('pengeluaran.edit', $d->id) }}"
                        class="bg-green-300 hover:bg-lime-400  cursor-pointer text-white p-2 px-3 text-center rounded-md"> 
                        Edit
                        </a>
                        <form action="{{ route('pengeluaran.destroy', $d->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-300 hover:bg-red-500 text-white p-2 px-3 text-center rounded-md">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-dashboard-layout>
