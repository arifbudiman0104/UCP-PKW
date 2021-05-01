<form>
    {{-- Form Create and Update Data --}}
    <div>
        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-5 py-5">
                        <h3 class="text-lg font-medium leading-6 text-gray900">Data Mahasiswa</h3>
                        <p class="mt-1 text-sm text-gray-600">Fakultas Teknik UMY</p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">

                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="nama" class="block text-sm font-medium text-gray700">Nama
                                        Mahasiswa</label>
                                    <input wire:model="nama" type="text" name="nama" id="nama" autoc omplete="nama"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block wfull shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="nim" class="block text-sm font-medium text-gray700">NIM</label>
                                    <input wire:model="nim" type="text" name="nim" id="nim" autocompl ete="nim"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block wfull shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="alamat" class="block text-sm font-medium text-gray700">Alamat</label>
                                    <input wire:model="alamat" type="text" name="alamat" id="alamat"
                                        autocomplete="alamat"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button wire:click="store()"
                                class="inline-flex justifycenter py-2 px-4 border border-transparent shadow-sm text-sm font-medium roundedmd text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- Disylay Data on Table --}}
    <div class="rounded-t-xl overflow-hidden bg-gradient-to-r from-emerald-50 to-teal-100 p-10">
        <table class="table-hover">
            <thead>
                <tr>
                    <th class="w-1/3 ... py-2 text-emerald-600">NAMA</th>
                    <th class="w-1/4 ... py-2 text-emerald-600">NIM</th>
                    <th class="w-1/2 ... py-2 text-emerald-600">ALAMAT</th>
                    <th class="w-1/2 ... py-2 text-emerald-600">ACTION</th>
                    <th class="w-1/2 ... py-2 text-emerald-600"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataMahasiswa as $Mahasiswa)
                    <tr class="bg-emerald-200">
                        <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">
                            {{ $Mahasiswa->nama }}</td>
                        <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">
                            {{ $Mahasiswa->nim }}</td>
                        <td class="border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">
                            {{ $Mahasiswa->alamat }}</td>
                        {{-- Edit Button --}}
                        <td class="btn border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">
                            <button type="button" wire:click='edit({{ $Mahasiswa->id }})'
                                class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Edit
                            </button>
                        </td>
                        {{-- Delete Button --}}
                        <td class="btn border border-emerald-500 px-4 py-2 text-emerald-600 font-medium">
                            <button type="button" wire:click='destroy({{ $Mahasiswa->id }})'
                                class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</form>
