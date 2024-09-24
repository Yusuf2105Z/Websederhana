<x-dashboard-layout>
    <div class="flex flex-col gap-6 p-8 mb-4 bg-white rounded-md shadow-sm">
        <h1 class="text-2xl mb-4">Tambah Pengeluaran</h1>

        <form action="{{route('pengeluaran.update', $data->id)}}" method="POST" class="w-96 flex flex-col gap-6">
            @csrf
            @method('PUT')
            <input name="id_user" value="{{auth()->user()->id}}" type="hidden"/>

            <x-input-label value="Judul Pengeluaran" />
            <x-text-input class="block mt-1 w-full" value="{{$data->judul_pengeluaran}}" type="text" name="judul_pengeluaran" required/>

            <x-input-label value="Deskripsi" />
            <x-text-input class="block mt-1 w-full" value="{{$data->deskripsi}}" type="text" name="deskripsi" required/>

            <x-input-label value="Nominal" />
            <x-text-input class="block mt-1 w-full" value="{{$data->nominal}}" type="number" name="nominal" required/>

            <x-primary-button class="text-lg bg-blue-500">
                {{ __('Submit') }}
            </x-primary-button>
        </form>
    </div>
</x-dashboard-layout>
