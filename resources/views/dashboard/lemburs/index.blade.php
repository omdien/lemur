@extends('dashboard.layouts.main') @section('container')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="relative shadow-md sm:rounded-lg">
                <h2 class="mb-5 text-2xl font-semibold text-center text-blue-500 font-inter">Daftar Lembur</h2>
                <div class="flex mb-5">
                    <div class="flex-auto">
                        {{-- <h3 class="font-mono ms-6">Nama UAKPB : <span class="font-bold text-blue-500">SKIPM MERAK</span></h3>
                    <h3 class="font-mono ms-6">Kode UAKPB : <span class="font-bold text-blue-500">032.13.2900.649688.000.KD</span></h3> --}}
                    </div>
                    <div class="flex-auto text-end me-6">
                        <a href="/dashboard/lembur/create"><span
                                class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"">Tambah
                                Lembur</span></a>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full text-sm font-light text-left">
                                    <thead class="font-medium border-b dark:border-neutral-500">
                                        <tr>
                                            <th scope="col" class="px-6 py-4">#</th>
                                            <th scope="col" class="px-6 py-4">Tanggal</th>
                                            <th scope="col" class="px-6 py-4">Maksud</th>
                                            <th scope="col" class="px-6 py-4">Tujuan</th>
                                            <th scope="col" class="px-6 py-4">Tempat</th>
                                            <th scope="col" class="px-6 py-4">Handle</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($lembur as $lembu)
                                            <tr
                                                class="transition duration-300 ease-in-out border-b hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                                <td class="px-6 py-4 font-medium whitespace-nowrap">
                                                    {{ $no }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ date('d/m/Y', strtotime($lembu->lem_dari)) }}
                                                    {{-- {{ $lembu->lem_dari }} --}}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ Str::substr($lembu->lem_maksud, 0, 20) . '...' }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ Str::substr($lembu->lem_tujuan, 0, 20) . '...' }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ Str::substr($lembu->lem_tempat, 0, 20) . '...' }}</td>
                                                <td class="p-3 ">
                                                    <a href="/dashboard/lembur/{{ $lembu->id }}"
                                                        class="mr-2 text-gray-400 hover:text-gray-100">
                                                        <i class="text-base material-icons-outlined">visibility</i>
                                                    </a>
                                                    <a href="/dashboard/lembur/{{ $lembu->id }}/edit"
                                                        class="mx-2 text-gray-400 hover:text-gray-100">
                                                        <i class="text-base material-icons-outlined">edit</i>
                                                    </a>
                                                    <a href="/dashboard/lembur/{{ $lembu->id }}/image"
                                                        class="mx-2 text-gray-400 hover:text-gray-100">
                                                        <i class="text-base material-icons-outlined">image</i>
                                                    </a>
                                                    <a href="/dashboard/lembur/{{ $lembu->id }}/print"
                                                        class="mx-2 text-gray-400 hover:text-gray-100">
                                                        <i class="text-base material-icons-outlined">print</i>
                                                    </a>
                                                    <a href="/dashboard/lembur/{{ $lembu->id }}/hapus"
                                                        class="ml-2 text-gray-400 hover:text-gray-100"
                                                        onclick="confirmation(event)">
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
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function confirmation(e) {
            e.preventDefault();

            var url = e.currentTarget.getAttribute('href')
            Swal.fire({
                icon: 'warning',
                title: 'Anda yakin lembur ini akan dihapus?',
                text: 'Aksi ini tidak dapat dibatalkan!',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.value) {
                    window.location.href = url;
                    Swal.fire(
                        'Deleted!',
                        'Lembur telah dihapus.',
                        'success'
                    )
                }
            })
        }
    </script>
    {{-- <script type="text/javascript">
        $function() {
            $(document).on('click', '#delete', function(e));
            {
                e.preventDefault();
                var $link = $(this).attr("href");
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            }
        }
    </script>
    {{-- <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        });
    </script> --}}
@endsection
