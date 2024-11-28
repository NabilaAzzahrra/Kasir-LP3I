<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="gap-5 items-start flex">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg w-1/2 p-4">
                    <div class="p-4 bg-gray-100 mb-2 rounded-xl font-bold">
                        FORM INPUT PRODUK
                    </div>
                    <div>
                        <form class="max-w-sm mx-auto" method="POST" action="{{ route('produk.store') }}">
                            @csrf
                            <div class="mb-5">
                                <label for="kode_produk"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode
                                    Produk</label>
                                <input type="text" name="kode_produk"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required placeholder="Kode Konsinyasi" value="{{ $kodeProduk }}"
                                    readonly />
                            </div>
                            <div class="mb-5">
                                <label for="produk"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Produk</label>
                                <input type="text" name="produk"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required placeholder="Produk" />
                            </div>
                            <div class="mb-5">
                                <label for="harga"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Harga
                                </label>
                                <input type="number" id="harga" name="harga"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required placeholder="Harga" />
                            </div>

                            <div class="mb-5">
                                <label for="harga_jual"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Harga Jual
                                </label>
                                <input type="number" id="harga_jual" name="harga_jual"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required placeholder="Harga Jual" readonly />
                            </div>
                            <div class="mb-5">
                                <label for="qty"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Qty</label>
                                <input type="number" name="qty"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required placeholder="Qty" />
                            </div>
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </form>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg w-full p-4">
                    <div class="p-4 bg-gray-100 mb-2 rounded-xl font-bold">
                        PRODUK
                    </div>
                    <div>
                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 bg-gray-100">
                                            NO
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            KODE PRODUK
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            PRODUK
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            HARGA
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            HARGA JUAL
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            QTY
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            TANGGAL MASUK
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            STATUS
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            ACTION
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($data as $f)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white bg-gray-100">
                                                {{ $no++ }}
                                            </th>
                                            <td class="px-6 py-4 bg-gray-100">
                                                {{ $f->kode_produk }}
                                            </td>
                                            <td class="px-6 py-4 bg-gray-100">
                                                {{ $f->produk }}
                                            </td>
                                            <td class="px-6 py-4 bg-gray-100">
                                                {{ $f->harga }}
                                            </td>
                                            <td class="px-6 py-4 bg-gray-100">
                                                {{ $f->harga_jual }}
                                            </td>
                                            <td class="px-6 py-4 bg-gray-100">
                                                {{ $f->qty }}
                                            </td>
                                            <td class="px-6 py-4 bg-gray-100">
                                                {{ $f->tgl_masuk }}
                                            </td>
                                            <td class="px-6 py-4 bg-gray-100">
                                                {{ $f->status }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <button type="button"
                                                    class="bg-amber-400 p-3 w-10 h-10 rounded-xl text-white hover:bg-amber-500"
                                                    onclick="editSourceModal(this)" data-modal-target="sourceModal"
                                                    data-id="{{ $f->id }}" data-status="{{ $f->status }}">
                                                    <i class="fi fi-sr-file-edit"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4">
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="fixed inset-0 flex items-center justify-center z-50 hidden" id="sourceModal">
        <div class="fixed inset-0 bg-black opacity-50"></div>
        <div class="fixed inset-0 flex items-center justify-center">
            <div class="w-full md:w-1/2 relative bg-white rounded-lg shadow mx-5">
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900" id="title_source">
                        Tambah Sumber Database
                    </h3>
                    <button type="button" onclick="sourceModalClose(this)" data-modal-target="sourceModal"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                        data-modal-hide="defaultModal">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form method="POST" id="formSourceModal">
                    @csrf
                    <div class="flex flex-col  p-4 space-y-6">
                        <div class="">
                            <label for="status"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                            <select class="js-example-placeholder-single js-states form-control w-full m-6"
                                name="status" id="status" data-placeholder="Pilih Status">
                                <option value="">Pilih...</option>
                                <option value="SUDAH">SUDAH</option>
                                <option value="BELUM">BELUM</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center p-4 space-x-2 border-t border-gray-200 rounded-b">
                        <button type="submit" id="formSourceButton"
                            class="bg-green-400 m-2 w-40 h-10 rounded-xl hover:bg-green-500">Simpan</button>
                        <button type="button" data-modal-target="sourceModal" onclick="sourceModalClose(this)"
                            class="bg-red-500 m-2 w-40 h-10 rounded-xl text-white hover:shadow-lg hover:bg-red-600">Batal</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script>
        const editSourceModal = (button) => {
            const formModal = document.getElementById('formSourceModal');
            const modalTarget = button.dataset.modalTarget;
            const id = button.dataset.id;
            const statusKonsinyasi = button.dataset.status;

            let url = "{{ route('produk.update', ':id') }}".replace(':id', id);
            console.log(url);

            let status = document.getElementById(modalTarget);
            document.getElementById('title_source').innerText = `Update Status`;
            document.getElementById('status').value = statusKonsinyasi;
            let event = new Event('change');
            document.getElementById('status').dispatchEvent(event);

            document.getElementById('formSourceButton').innerText = 'Simpan';
            document.getElementById('formSourceModal').setAttribute('action', url);
            let csrfToken = document.createElement('input');
            csrfToken.setAttribute('type', 'hidden');
            csrfToken.setAttribute('value', '{{ csrf_token() }}');
            formModal.appendChild(csrfToken);

            let methodInput = document.createElement('input');
            methodInput.setAttribute('type', 'hidden');
            methodInput.setAttribute('name', '_method');
            methodInput.setAttribute('value', 'PATCH');
            formModal.appendChild(methodInput);

            status.classList.toggle('hidden');
        }

        const sourceModalClose = (button) => {
            const modalTarget = button.dataset.modalTarget;
            let status = document.getElementById(modalTarget);
            status.classList.toggle('hidden');
        }
    </script>
    <script>
        // Ambil elemen input
        const hargaInput = document.getElementById('harga');
        const hargaJualInput = document.getElementById('harga_jual');

        // Tambahkan event listener untuk mendeteksi perubahan
        hargaInput.addEventListener('input', function () {
            const harga = parseFloat(hargaInput.value) || 0;
            const hargaJual = harga + (harga * 0.5);
            hargaJualInput.value = hargaJual.toFixed(0); // Dibulatkan ke integer
        });
    </script>
</x-app-layout>
