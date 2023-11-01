@extends('dashboard.layouts.main') @section('container')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="relative shadow-md sm:rounded-lg">
                {{-- batas tempalate --}}
                <h2 class="my-5 mb-10 text-2xl font-semibold text-center text-blue-500 font-inter">LAPORAN HASIL LEMBUR</h2>
                <div class="flex mb-5">
                    <div class="w-1/4"></div>
                    <div class="flex-auto">
                        <div class="flex mb-1">
                            <div class="text-left w-28">Nama</div>
                            <div class="w-3 text-left">:</div>
                            <div class="text-left">{{ $lembur->Supel->User->name }}</div>
                        </div>
                        <div class="flex mb-1">
                            <div class="text-left w-28">NIP</div>
                            <div class="w-3 text-left">:</div>
                            <div class="text-left">{{ $lembur->Supel->User->nip }}</div>
                        </div>
                        <div class="flex mb-1">
                            <div class="text-left w-28">Pangkat</div>
                            <div class="w-3 text-left">:</div>
                            <div class="text-leftflex-auto">{{ $lembur->Supel->User->pangkat }}</div>
                        </div>
                        <div class="flex mb-1">
                            <div class="text-left w-28">Jabatan</div>
                            <div class="w-3 text-left">:</div>
                            <div class="text-leftflex-auto">{{ $lembur->Supel->User->jabatan }}</div>
                        </div>
                    </div>
                    <div class="w-1/4"></div>
                </div>
                <div class="container grid grid-cols-12 grid-rows-1 lg:mx-auto lg:w-1/2">
                    <div class="py-1 text-left">A</div>
                    <div class="col-span-11 py-1 text-left">Dasar</div>
                </div>
                <div class="container grid grid-cols-12 grid-rows-1 lg:mx-auto lg:w-1/2">
                    <div class="py-1 text-center"></div>
                    <div class="col-span-11 py-1 text-justify">
                        Surat Perintah Kerja Lembur Kepala Kantor Stasiun Karantina Ikan Pengendalian Mutu dan Keamanan
                        Hasil Perikanan Merak Nomor: {{ $lembur->Supel->sup_nomor }} tanggal
                        {{ $tglspl }}.
                    </div>
                </div>
                <div class="container grid grid-cols-12 grid-rows-1 lg:mx-auto lg:w-1/2">
                    <div class="py-1 text-left">B</div>
                    <div class="col-span-11 py-1 text-left">Maksud dan Tujuan</div>
                </div>
                <div class="container grid grid-cols-12 grid-rows-1 lg:mx-auto lg:w-1/2">
                    <div class="py-1 text-center"></div>
                    <div class="col-span-11 py-1">
                        <div class="grid grid-cols-9 grid-rows-1 mx-auto">
                            <div class="py-1 text-left">Maksud</div>
                            <div class="col-span-8 py-1 text-justify">{{ $lembur->lem_maksud }}.</div>
                        </div>
                        <div class="grid grid-cols-9 grid-rows-1 mx-auto">
                            <div class="py-1 text-left">Tujuan</div>
                            <div class="col-span-8 py-1 text-justify">{{ $lembur->lem_tujuan }}.</div>
                        </div>
                    </div>
                </div>
                <div class="container grid grid-cols-12 grid-rows-1 lg:mx-auto lg:w-1/2">
                    <div class="py-1 text-left">C</div>
                    <div class="col-span-11 py-1 text-left">Waktu dan Tempat</div>
                </div>
                <div class="container grid grid-cols-12 grid-rows-1 lg:mx-auto lg:w-1/2">
                    <div class="py-1 text-center"></div>
                    <div class="col-span-11 py-1">
                        <div class="grid grid-cols-9 grid-rows-1 mx-auto">
                            <div class="py-1 text-left">Waktu</div>
                            <div class="col-span-8 py-1 text-left">{{ $hari }}</div>
                        </div>
                        <div class="grid grid-cols-9 grid-rows-1 mx-auto">
                            <div class="py-1 text-left">Tempat</div>
                            <div class="col-span-8 py-1 text-left">{{ $lembur->lem_tempat }}.</div>
                        </div>
                    </div>
                </div>
                <div class="container grid grid-cols-12 grid-rows-1 lg:mx-auto lg:w-1/2">
                    <div class="py-1 text-left">D</div>
                    <div class="col-span-11 py-1 text-left">Hasil yang dicapai</div>
                </div>
                <div class="container grid grid-cols-12 grid-rows-1 lg:mx-auto lg:w-1/2">
                    <div class="py-1 text-center"></div>
                    <div class="col-span-11 py-1 text-justify">
                        {!! $lembur->lem_hasil !!}
                    </div>
                </div>

                <div class="container grid grid-cols-12 grid-rows-1 mt-5 lg:mx-auto lg:w-1/2">
                    <div class="col-span-6 py-1 text-center"></div>
                    <div class="col-span-6 py-1">
                        <div class="text-center">Merak, {{ $tglttd }}</div>
                        <div class="text-center">Yang Melaksanakan Lembur,</div>
                        <div class="mt-20 text-center">{{ $lembur->Supel->User->name }}</div>
                        <div class="text-center">NIP. {{ $lembur->Supel->User->nip }}</div>
                    </div>
                </div>
            </div>
            {{-- batas template --}}
        </div>
    </div>
    </div>
@endsection
