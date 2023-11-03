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
    <title>Latihan Upload</title>
</head>

<body>
    <!-- Button trigger modal -->
    <button type="button"
        class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
        data-te-toggle="modal" data-te-target="#exampleModal" data-te-ripple-init data-te-ripple-color="light">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div data-te-modal-init
        class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
        id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div data-te-modal-dialog-ref
            class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
            <div
                class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                <div
                    class="flex items-center justify-between flex-shrink-0 p-4 border-b-2 border-opacity-100 rounded-t-md border-neutral-100 dark:border-opacity-50">
                    <!--Modal title-->
                    <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                        id="exampleModalLabel">
                        Modal title
                    </h5>
                    <!--Close button-->
                    <button type="button"
                        class="box-content border-none rounded-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        data-te-modal-dismiss aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!--Modal body-->
                <div class="absolute top-0 bottom-0 left-0 right-0 z-10 py-12 transition duration-150 ease-in-out bg-gray-700"
                    id="modal">
                    <div role="alert" class="container w-11/12 max-w-lg mx-auto md:w-2/3">
                        <div class="relative px-5 py-8 bg-white border border-gray-400 rounded shadow-md md:px-10">
                            <div class="flex justify-start w-full mb-3 text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wallet"
                                    width="52" height="52" viewBox="0 0 24 24" stroke-width="1"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <path
                                        d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" />
                                    <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" />
                                </svg>
                            </div>
                            <h1 class="mb-4 font-bold leading-tight tracking-normal text-gray-800 font-lg">Enter Billing
                                Details
                            </h1>
                            <label for="name"
                                class="text-sm font-bold leading-tight tracking-normal text-gray-800">Nama
                                Gambar</label>
                            <input id="name"
                                class="flex items-center w-full h-10 pl-3 mt-2 mb-5 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-indigo-700"
                                placeholder="James" />
                            <label for="lem_gambar"
                                class="text-sm font-bold leading-tight tracking-normal text-gray-800">Gambar</label>
                            <input
                                class="mb-5 relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                type="file" id="lem_gambar" name="lem_gambar" />
                            {{-- <label for="email2" class="text-sm font-bold leading-tight tracking-normal text-gray-800">Card
                        Number</label>
                    <div class="relative mt-2 mb-5">
                        <div class="absolute flex items-center h-full px-4 text-gray-600 border-r">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-credit-card"
                                width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <rect x="3" y="5" width="18" height="14" rx="3" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                                <line x1="7" y1="15" x2="7.01" y2="15" />
                                <line x1="11" y1="15" x2="13" y2="15" />
                            </svg>
                        </div>
                        <input id="email2"
                            class="flex items-center w-full h-10 pl-16 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-indigo-700"
                            placeholder="XXXX - XXXX - XXXX - XXXX" />
                    </div>
                    <label for="expiry" class="text-sm font-bold leading-tight tracking-normal text-gray-800">Expiry
                        Date</label>
                    <div class="relative mt-2 mb-5">
                        <div class="absolute right-0 flex items-center h-full pr-3 text-gray-600 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event"
                                width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <rect x="4" y="5" width="16" height="16" rx="2" />
                                <line x1="16" y1="3" x2="16" y2="7" />
                                <line x1="8" y1="3" x2="8" y2="7" />
                                <line x1="4" y1="11" x2="20" y2="11" />
                                <rect x="8" y="15" width="2" height="2" />
                            </svg>
                        </div>
                        <input id="expiry"
                            class="flex items-center w-full h-10 pl-3 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-indigo-700"
                            placeholder="MM/YY" />
                    </div>
                    <label for="cvc"
                        class="text-sm font-bold leading-tight tracking-normal text-gray-800">CVC</label>
                    <div class="relative mt-2 mb-5">
                        <div class="absolute right-0 flex items-center h-full pr-3 text-gray-600 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-info-circle"
                                width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                <circle cx="12" cy="12" r="9"></circle>
                                <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                <polyline points="11 12 12 12 12 16 13 16"></polyline>
                            </svg>
                        </div>
                        <input id="cvc"
                            class="flex items-center w-full h-10 pl-3 mb-8 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-indigo-700"
                            placeholder="MM/YY" />
                    </div> --}}

                            <div class="flex items-center justify-start w-full">
                                <button
                                    class="px-8 py-2 text-sm text-white transition duration-150 ease-in-out bg-indigo-700 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-indigo-600">Submit</button>
                                <button
                                    class="px-8 py-2 ml-3 text-sm text-gray-600 transition duration-150 ease-in-out bg-gray-100 border rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 hover:border-gray-400 hover:bg-gray-300"
                                    onclick="modalHandler()">Cancel</button>
                            </div>
                            <button
                                class="absolute top-0 right-0 mt-4 mr-5 text-gray-400 transition duration-150 ease-in-out rounded cursor-pointer hover:text-gray-600 focus:ring-2 focus:outline-none focus:ring-gray-600"
                                onclick="modalHandler()" aria-label="close modal" role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x"
                                    width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <line x1="18" y1="6" x2="6" y2="18" />
                                    <line x1="6" y1="6" x2="18" y2="18" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!--Modal footer-->
                <div
                    class="flex flex-wrap items-center justify-end flex-shrink-0 p-4 border-t-2 border-opacity-100 rounded-b-md border-neutral-100 dark:border-opacity-50">
                    <button type="button"
                        class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                        data-te-modal-dismiss data-te-ripple-init data-te-ripple-color="light">
                        Close
                    </button>
                    <button type="button"
                        class="ml-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                        data-te-ripple-init data-te-ripple-color="light">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
