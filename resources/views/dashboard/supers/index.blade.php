@extends('dashboard.layouts.main') @section('container')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="relative shadow-md sm:rounded-lg">
                <h2 class="mb-5 text-2xl font-semibold text-center text-blue-500 font-inter">Surat Perintah Lembur</h2>
                <div class="flex mb-5">
                    <div class="flex-auto">
                        {{-- <h3 class="font-mono ms-6">Nama UAKPB : <span class="font-bold text-blue-500">SKIPM MERAK</span></h3>
                    <h3 class="font-mono ms-6">Kode UAKPB : <span class="font-bold text-blue-500">032.13.2900.649688.000.KD</span></h3> --}}
                    </div>
                    <div class="flex-auto text-end me-6">
                        <a href="/dashboard/super/create"><span
                                class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"">Tambah</span></a>
                    </div>
                </div>
                {{-- first content --}}
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full text-sm font-light text-left">
                                    <thead class="font-medium border-b dark:border-neutral-500">
                                        <tr>
                                            <th scope="col" class="px-6 py-4">#</th>
                                            <th scope="col" class="px-6 py-4">Nomor Surat</th>
                                            <th scope="col" class="px-6 py-4">Tanggal</th>
                                            <th scope="col" class="px-6 py-4">Keterangan</th>
                                            <th scope="col" class="px-6 py-4">Handle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($supers as $supol)
                                            <tr
                                                class="transition duration-300 ease-in-out border-b hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                                <td class="px-6 py-4 font-medium whitespace-nowrap">{{ $no }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">{{ $supol->sup_nomor }}</td>
                                                {{-- <td class="px-6 py-4 whitespace-nowrap">{{ $supol->sup_tanggal->format('d/m/Y') }}</td> --}}
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ date('d/m/Y', strtotime($supol->sup_tanggal)) }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {!! substr($supol->sup_keterangan, 0, 50) !!} ...</td>
                                                <td class="p-3 ">
                                                    <a href="/dashboard/super/{{ $supol->id }}"
                                                        class="mr-2 text-gray-400 hover:text-gray-100">
                                                        <i class="text-base material-icons-outlined">visibility</i>
                                                    </a>
                                                    <a href="/dashboard/super/{{ $supol->id }}/edit"
                                                        class="mx-2 text-gray-400 hover:text-gray-100">
                                                        <i class="text-base material-icons-outlined">edit</i>
                                                    </a>
                                                    <a href="/dashboard/super/{{ $supol->id }}/print"
                                                        class="mx-2 text-gray-400 hover:text-gray-100">
                                                        <i class="text-base material-icons-outlined">print</i>
                                                    </a>
                                                    <a href="#" class="ml-2 text-gray-400 hover:text-gray-100">
                                                        <i class="text-base material-icons-round">delete_outline</i>
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
                {{-- end content --}}
            </div>
        </div>
    </div>
@endsection
