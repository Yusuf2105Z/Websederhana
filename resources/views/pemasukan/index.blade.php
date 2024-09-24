<x-dashboard-layout>
    <div class="flex flex-col gap-6 bg-slate-500 p-2 ml-8 mt-5 width-custom mx-auto sm:px-6 lg:px-8 overflow-hidden shadow-sm rounded-md">
        <h1 class="text-2xl mb-4 font-semibold text-slate-200 font-handjet letter-custom text-center "> ~ Validasi Infaq ~</h1>

        <table class="mb-4 table-auto border bg-gray-700 ">
            <thead class="bg-gray-200 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase   font-poppins text-gray-500 font-semibold">No</th>
                    <th class="text-left py-3 px-4 uppercase   font-poppins text-gray-500 font-semibold">Tanggal/Waktu</th>
                    <th class="text-left py-3 px-4 uppercase   font-poppins text-gray-500 font-semibold">Nama</th>
                    <th class="text-left py-3 px-4 uppercase   font-poppins text-gray-500 font-semibold">Instansi</th>
                    <th class="text-left py-3 px-4 uppercase   font-poppins text-gray-500 font-semibold">Nominal</th>
                    <th class="text-left py-3 px-4 uppercase   font-poppins text-gray-500 font-semibold">Bukti</th>
                    <th class="text-left py-3 px-4 uppercase   font-poppins text-gray-500 font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $d)
                <tr>
                    <td class="text-left py-3 font-handjet text-white text-lg  px-4  font-semibold">{{$loop->iteration}}</td>
                    <td class="text-left py-3 font-handjet text-white text-lg  px-4 font-semibold">{{$d->created_at}}</td>
                    <td class="text-left py-3 font-handjet text-white text-lg  px-4 font-semibold">{{$d->nama}}</td>
                    <td class="text-left py-3 font-handjet text-white text-lg  px-4 font-semibold">{{$d->instansi}}</td>
                    <td class="text-left py-3 font-handjet text-white text-lg  px-4 font-semibold">{{$d->nominal}}</td>
                    <td class="text-left py-3 font-handjet text-white text-lg  px-4 font-semibold">
                        <img class="w-60 bg-white rounded-xl" src="{{asset('/images/bukti_bayar/'.$d->bukti)}}"/>
                    </td>
                    <td class="text-left py-16 px-4 font-semibold inline-flex flex-col gap-2 ">
                        @if($d->is_valid == 0)
                        <a  href="{{route('pemasukan.validasi', $d->id)}}" 
                            class="bg-green-400 hover:bg-lime-500 cursor-pointer text-white p-2 px-3 text-center rounded-md">
                            Validasi
                        </a>
                        <form action="{{ route('pemasukan.destroy', $d->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-300 hover:bg-red-500 text-white w-full p-2 px-3 text-center rounded-md">
                                Hapus
                            </button>
                        </form>
                        @else
                            <p class="text-white font-handjet text-lg"> Data Telah Valid</p>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-dashboard-layout>