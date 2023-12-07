@extends('dashboard.layouts.main') @section('container')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="relative p-4 shadow-md sm:rounded-lg">
                <h2 class="mb-5 text-2xl font-semibold text-center text-blue-500 font-inter">Tambah Surat Perintah Lembur
                </h2>
                <div class="flex mb-5">
                    <div class="flex-auto">
                        {{-- <h3 class="font-mono ms-6">Nama UAKPB : <span class="font-bold text-blue-500">SKIPM MERAK</span></h3>
                    <h3 class="font-mono ms-6">Kode UAKPB : <span class="font-bold text-blue-500">032.13.2900.649688.000.KD</span></h3> --}}
                    </div>
                    <div class="flex-auto text-end me-6">
                        {{-- <a href="{{env('APP_URL')}}/dashboard/rooms/create"><span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Tambah ruangan</span></a>      --}}
                    </div>
                </div>
                <form method="POST" action="/dashboard/super" enctype="multipart/form-data">
                    @csrf
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="lem_nama" id="lem_nama" aria-label="disabled input"
                            class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            value="{{ auth()->user()->name }}" disabled>
                        <label for="lem_nama"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-1 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
                    </div>
                    {{-- <div class="relative z-0 w-full mb-6 group">
                        <label for="supel_id" class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Surat
                            Perintah
                            Lembur</label>
                        <select id="supel_id" name="supel_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Pilih Surat Perintah Lembur</option>
                            @foreach ($supels as $supel)
                                <option value="{{ $supel->id }}">{{ $supel->sup_nomor }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="sup_nomor" id="sup_nomor"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required />
                        <label for="sup_nomor"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor
                            Surat</label>
                    </div>
                    <div class="grid mt-2 md:grid-cols-3 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <div class="relative mb-3" data-te-datepicker-init data-te-input-wrapper-init>
                                <input type="text" name="sup_tanggal" id="sup_tanggal"
                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                    placeholder="Tanggal" />
                                <label for="sup_tanggal"
                                    class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Tanggal
                                    Surat</label>
                            </div>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <div class="relative z-0 w-full mb-6 group">
                                {{-- <label for="sup_tahun"
                                    class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Surat
                                    Perintah
                                    Lembur</label> --}}
                                <select id="sup_bulan" name="sup_bulan"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Bulan</option>
                                    <?php $no = 1; ?>
                                    @foreach ($bulan as $bln)
                                        <option value="{{ $no }}">{{ $bln }}</option>
                                        <?php $no += 1; ?>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <div class="relative z-0 w-full mb-6 group">
                                {{-- <label for="sup_tahun"
                                    class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Surat
                                    Perintah
                                    Lembur</label> --}}
                                <select id="sup_tahun" name="sup_tahun"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Tahun</option>
                                    {{-- @foreach ($supels as $supel) --}}
                                    <option value="{{ 2023 }}">2023</option>
                                    {{-- @endforeach --}}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="text-sm font-medium text-gray-500">Hasil Lembur</div>
                        <label for="sup_keterangan" class="sr-only">Hasil Lembur</label>
                        <input id="sup_keterangan" type="hidden" name="sup_keterangan">
                        <trix-editor input="sup_keterangan"></trix-editor>
                    </div>
            </div>
            <div class="relative mt-3 mb-10 basis-1/2">
                <div class="absolute right-0">
                    <button type="submit"
                        class="px-5 py-1 mr-2 -mb-2 text-sm font-medium text-center text-white rounded-lg bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800">Simpan</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
