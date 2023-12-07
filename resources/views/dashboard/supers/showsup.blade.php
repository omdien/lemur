@extends('dashboard.layouts.main') @section('container')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="relative shadow-md sm:rounded-lg">
                {{-- batas tempalate --}}
                <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 flex justify-end">
                    <a href="/dashboard/super/{{ $supel->id }}/edit" class="mx-2 text-gray-400 hover:text-gray-100">
                        <i class="text-base material-icons-outlined">edit_note</i>
                    </a>
                    <a href="/dashboard/super/{{ $supel->id }}/print" class="mx-2 text-gray-400 hover:text-gray-100">
                        <i class="text-base material-icons-outlined">print</i>
                    </a>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="text-center font-bold text-xl">
                        SURAT PERINTAH KERJA LEMBUR
                    </div>
                    <div class="text-center">
                        {{ $supel->sup_nomor }}
                    </div>
                    <div class="mt-5">
                        <p>Dalam rangka pelaksanaan tugas pokok dan fungsi Karantina Ikan, Pengendalian Mutu dan Keamanan
                            Hasil Perikanan dalam lingkup Stasiun Karantina Ikan, Pengendalian Mutu dan Keamanan Hasil
                            Perikanan Merak di wilayah Banten, maka kami menugaskan :</p>
                    </div>

                    <div class="flex gap-3 mt-4">
                        <div class="flex w-2/12 justify-between">
                            <div>Kepada</div>
                            <div>:</div>
                        </div>
                        <div class="w-10/12">
                            <div class="flex gap-2">
                                <div class="flex w-2/12 justify-between">
                                    <div>Nama</div>
                                    <div>:</div>
                                </div>
                                <div>{{ $supel->User->name }}</div>
                            </div>
                            <div class="flex gap-2">
                                <div class="flex w-2/12 justify-between">
                                    <div>NIP</div>
                                    <div>:</div>
                                </div>
                                <div>{{ $supel->User->nip }}</div>
                            </div>
                            <div class="flex gap-2">
                                <div class="flex w-2/12 justify-between">
                                    <div>Pangkat</div>
                                    <div>:</div>
                                </div>
                                <div>{{ $supel->User->pangkat }}</div>
                            </div>
                            <div class="flex gap-2">
                                <div class="flex w-2/12 justify-between">
                                    <div>Jabatan</div>
                                    <div>:</div>
                                </div>
                                <div>{{ $supel->User->jabatan }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-3 mt-4">
                        <div class="flex w-2/12 justify-between">
                            <div>Untuk</div>
                            <div>:</div>
                        </div>
                        <div class="w-10/12">
                            <div class="flex gap-3">
                                <div>1.</div>
                                <div>{!! $supel->sup_keterangan !!}</div>
                            </div>
                            <div class="flex gap-3">
                                <div>2.</div>
                                <div>Setelah selesai menjalankan tugasnya, diwajibkan membuat laporan secara tertulis kepada
                                    atasan langsung</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <p>Demikian surat tugas ini diberikan kepada yang bersangkutan untuk dilaksanakan dengan penuh
                            tanggungjawab.</p>
                    </div>
                    <div class="flex mt-5">
                        <div class="basis-1/2"></div>
                        <div class="basis-1/2">
                            <div class="text-center">Merak, {{ $tg_surat }}</div>
                            <div class="text-center">Kepala,</div>
                            <div class="text-center mt-20">Iromo, S.IP</div>
                            <div class="text-center">NIP. 19691031 198903 1 002</div>
                        </div>
                    </div>
                </div>
                {{-- batas template --}}
            </div>
        </div>
    </div>
@endsection
