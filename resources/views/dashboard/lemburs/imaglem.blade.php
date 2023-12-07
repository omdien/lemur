@extends('dashboard.layouts.main') @section('container')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="relative p-4 shadow-md sm:rounded-lg">
                <h2 class="mb-5 text-2xl font-semibold text-center text-blue-500 font-inter">Edit Gambar Lembur</h2>
                <div class="flex mb-5">
                    <div class="flex-auto">
                        {{-- <h3 class="font-mono ms-6">Nama UAKPB : <span class="font-bold text-blue-500">SKIPM MERAK</span></h3>
                    <h3 class="font-mono ms-6">Kode UAKPB : <span class="font-bold text-blue-500">032.13.2900.649688.000.KD</span></h3> --}}
                    </div>
                    <div class="flex-auto text-end me-6">
                        {{-- <a href="{{env('APP_URL')}}/dashboard/rooms/create"><span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Tambah ruangan</span></a>      --}}
                    </div>
                </div>
                <form method="POST" action="/dashboard/lembur/{{ $lembur->id }}/addimag" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="grid mt-2 md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="lem_nama" id="lem_nama" aria-label="disabled input"
                                class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ auth()->user()->name }}" disabled>
                            <label for="lem_nama"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-1 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="supel_Id"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-1 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                            {{-- <label for="supel_id" class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Surat
                                Perintah
                                Lembur</label> --}}
                            <select id="supel_id" name="supel_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                disabled>
                                {{-- @foreach ($supels as $supel) --}}
                                {{-- @if (old('supel_id', $lembur->supel_id) == $supel->id) --}}
                                {{-- <option value="{{ $supel->id }}" selected>{{ $supel->sup_nomor }}</option> --}}
                                {{-- @else --}}
                                <option value="{{ $lembur->supel_id }}">{{ $lembur->supel->sup_nomor }}</option>
                                {{-- @endif --}}
                                {{-- @endforeach --}}
                            </select>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="lem_maksud" id="lem_maksud"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{ old('lem_maksud', $lembur->lem_maksud) }}" required disabled />
                            <label for="lem_maksud"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Maksud</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="lem_tujuan" id="lem_tujuan"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " value="{{ old('lem_tujuan', $lembur->lem_tujuan) }}" required disabled />
                            <label for="lem_tujuan"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tujuan</label>
                        </div>
                    </div>
                    <div class="text-sm font-medium text-gray-500">Waktu</div>
                    <div class="grid mt-2 md:grid-cols-3 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <div class="relative mb-3" data-te-datepicker-init data-te-input-wrapper-init>
                                <input type="text" name="lem_tanggal" id="lem_tanggal"
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                    value="{{ old('lem_tanggal', date('d/m/Y', strtotime($lembur->lem_dari))) }}"
                                    placeholder="Tanggal" disabled />
                                <label for="lem_tanggal"
                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Tanggal</label>
                            </div>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <div class="relative" data-te-timepicker-init data-te-input-wrapper-init>
                                <input type="text" name="lem_dari" id="lem_dari"
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                    value="{{ old('lem_dari', date('H:i A', strtotime($lembur->lem_dari))) }}" disabled />
                                <label for="lem_dari"
                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Dari
                                    Pukul</label>
                            </div>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <div class="relative" data-te-timepicker-init data-te-input-wrapper-init>
                                <input type="text" name="lem_sampai" id="lem_sampai"
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                    value="{{ old('lem_sampai', date('H:i A', strtotime($lembur->lem_sampai))) }}"
                                    disabled />
                                <label for="lem_sampai"
                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Sampai
                                    Pukul</label>
                            </div>
                        </div>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <label for="lem_tempat"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Daftar
                            Gambar</label>
                        {{-- first table --}}
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full text-sm font-light text-left">
                                            <thead class="font-medium border-b dark:border-neutral-500">
                                                <tr>
                                                    <th scope="col" class="px-6 py-4">#</th>
                                                    <th scope="col" class="px-6 py-4">Nama Gambar</th>
                                                    <th scope="col" class="px-6 py-4">Handle</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                @foreach ($gambars as $gambar)
                                                    <tr
                                                        class="transition duration-300 ease-in-out border-b hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                                        <td class="px-6 py-4 font-medium whitespace-nowrap">
                                                            {{ $no }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap">{{ $gambar->lem_gambar }}
                                                        </td>
                                                        <td class="p-3 ">
                                                            <a href="/dashboard/lembur/{{ $gambar->id }}/viewgam"
                                                                class="mr-2 text-gray-400 hover:text-gray-100">
                                                                <i class="text-base material-icons-outlined">visibility</i>
                                                            </a>
                                                            <a href="#"
                                                                class="ml-2 text-gray-400 hover:text-gray-100">
                                                                <i
                                                                    class="text-base material-icons-round">delete_outline</i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php $no = $no + 1; ?>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end table --}}
                        <div class="mb-3">
                            <label for="lem_gambar"
                                class="inline-block mb-2 text-neutral-700 dark:text-neutral-200">Gambar</label>
                            <div class="flex items-center gap-2">
                                <input
                                    class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                    type="file" id="lem_gambar" name="lem_gambar" />
                                <button type="submit"
                                    class="px-5 py-1 mr-2 -mb-2 text-sm font-medium text-center text-white rounded-lg bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800">Tambah</button>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="lem_tempat" id="lem_tempat"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " value="{{ old('lem_tempat', $lembur->lem_tempat) }}" required disabled />
                        <label for="lem_tempat"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tempat</label>
                    </div> --}}
                    {{-- <div>
                        <div class="text-sm font-medium text-gray-500">Hasil Lembur</div>
                        <label for="lem_hasil" class="sr-only">Hasil Lembur</label>
                        <input id="lem_hasil" type="hidden" name="lem_hasil" disabled>
                        <trix-editor input="lem_hasil" disabled>{!! old('lem_hasil', $lembur->lem_hasil) !!}</trix-editor>
                    </div> --}}
                    {{-- <div class="mt-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Pilih
                            Gambar</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="file_input" type="file">
                    </div> --}}
                    {{-- <div class="relative mt-3 mb-10 basis-1/2">
                        <div class="absolute right-0">
                            <button type="submit"
                                class="px-5 py-1 mr-2 -mb-2 text-sm font-medium text-center text-white rounded-lg bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800">Simpan</button>
                        </div>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
@endsection
