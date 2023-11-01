@extends('dashboard.layouts.main') @section('container')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="relative shadow-md sm:rounded-lg">
                {{-- batas tempalate --}}
                <h2 class="mb-5 text-2xl font-semibold text-center text-blue-500 font-inter">LAPORAN HASIL LEMBUR</h2>
                <div class="flex-auto px-4 border-2 border-red-800">
                    <div class="flex gap-4">
                        <div class="basis-20">Nama</div>
                        <div>:</div>
                        <div class="flex-auto">{{ $lembur->Supel->User->name }}</div>
                    </div>
                    <div class="flex gap-4">
                        <div class="basis-20">NIP</div>
                        <div>:</div>
                        <div class="flex-auto">{{ $lembur->Supel->User->nip }}</div>
                    </div>
                    <div class="flex gap-4">
                        <div class="basis-20">Pangkat</div>
                        <div>:</div>
                        <div class="flex-auto">{{ $lembur->Supel->User->pangkat }}</div>
                    </div>
                    <div class="flex gap-4">
                        <div class="basis-20">Jabatan</div>
                        <div>:</div>
                        <div class="flex-auto">{{ $lembur->Supel->User->jabatan }}</div>
                    </div>
                </div>
                <div class="flex-auto mt-4">
                    <div class="flex">
                        <div class="basis-20">A.</div>
                        <div>Dasar</div>
                    </div>
                    <div class="flex">
                        <div class="basis-20"></div>
                        <div class="pl-4">Surat Perintah Kerja Lembur Kepala Kantor Stasiun Karantina Ikan Pengendalian
                            Mutu dan Keamanan Hasil Perikanan Merak, tanggal 18 April 2023 dengan Nomor: B.614/SKIPM.MER/
                            KP.440/IV/2023</div>
                    </div>
                </div>
                <div class="flex-auto mt-3">
                    <div class="flex">
                        <div class="basis-20">B.</div>
                        <div>Maksud dan Tujuan</div>
                    </div>
                    <div class="flex">
                        <div class="basis-20"></div>
                        <div class="flex">
                            <div class="basis-20">Maksud :</div>
                            <div>{{ $lembur->lem_maksud }}</div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="basis-20"></div>
                        <div class="flex">
                            <div class="basis-20">Tujuan :</div>
                            <div>{{ $lembur->lem_tujuan }}</div>
                        </div>
                    </div>
                </div>
                <div class="flex-auto mt-3">
                    <div class="flex">
                        <div class="basis-20">C.</div>
                        <div>Waktu dan Tempat</div>
                    </div>
                    <div class="flex">
                        <div class="basis-20"></div>
                        <div class="flex">
                            <div class="basis-20">Waktu :</div>
                            <div>{{ $lembur->lem_tanggal }}</div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="basis-20"></div>
                        <div class="flex">
                            <div class="basis-20">Tempat :</div>
                            <div>{{ $lembur->lem_tempat }}</div>
                        </div>
                    </div>
                </div>
                <div class="flex-auto mt-3">
                    <div class="flex">
                        <div class="basis-20">D.</div>
                        <div>Hasil Yang Dicapai</div>
                    </div>
                    <div class="flex">
                        <div class="basis-20"></div>
                        <div>{{ $lembur->lem_hasil }}</div>
                    </div>
                </div>
                <div class="flex-auto mt-3">
                    <div class="flex">
                        <div class="basis-20">E.</div>
                        <div>Screenshoot hasil kegiatan</div>
                    </div>
                    <div class="flex">
                        <div class="basis-20"></div>
                        <div>Photo dan Screenshoot</div>
                    </div>
                </div>
                <div class="flex mt-5">
                    <div class="basis-1/2"></div>
                    <div class="basis-1/2">
                        <div class="text-center">Merak, ...</div>
                        <div class="text-center">Yang Melaksanakan Lembur,</div>
                        <div class="mt-20 text-center">{{ $lembur->Supel->User->name }}</div>
                        <div class="text-center">NIP. {{ $lembur->Supel->User->nip }}</div>
                    </div>
                </div>
                {{-- batas template --}}
            </div>
        </div>
    </div>
@endsection
