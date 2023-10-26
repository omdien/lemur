<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <title>Tambah Lembur</title>
</head>

<body>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- start form --}}
                    <div class="py-12">
                        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                                <div class="p-6 text-gray-900 dark:text-gray-100">
                                    {{-- {{ __("ini tentang about page") }} --}}
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
                                                                        {{ $lembu->lem_tempat }}</td>
                                                                    {{-- <td class="px-6 py-4 whitespace-nowrap">{{ date("d/m/Y", strtotime($supol->sup_tanggal)) }}</td> --}}
                                                                    {{-- <td class="px-6 py-4 whitespace-nowrap">{{ substr($supol->sup_keterangan,0,50) }} ...</td> --}}
                                                                    <td class="p-3 ">
                                                                        <a href=""
                                                                            class="mr-2 text-gray-400 hover:text-gray-100">
                                                                            <i
                                                                                class="text-base material-icons-outlined">visibility</i>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="mx-2 text-gray-400 hover:text-gray-100">
                                                                            <i
                                                                                class="text-base material-icons-outlined">edit</i>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end form --}}
                </div>
            </div>
        </div>
    </div>
</body>

</html>
