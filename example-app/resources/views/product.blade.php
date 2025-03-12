<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürünlerim</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class=" w-200 grid justify-items-center ml-auto mr-auto mt-20 ">
        <div class="mt-2 flex align-item gap-8" style="padding:10px 15px;justify-content:space-between;align-items:center;margin-bottom:20px;flex-direction:row;width:100%;">
          <h1 class="text-[#211C84] font-extrabold text-xl  text-left ">ÜRÜNLER</h1>
          <button class="px-4 py-2 bg-gradient-to-r from-rose-400 to-rose-600 text-white font-semibold text-sm rounded-2xl shadow-lg hover:scale-105 transition-transform duration-300 ease-in-out hover:from-rose-600 hover:to-rose-400">Ürün Ekle</button>
        </div>
        <table class="min-w-full border border-gray-400 text-left ">
            <thead class="py-2 px-5">
                <tr class="bg-indigo-50 ">
                    <th class="py-2 px-4 border-b border-b-gray-400 text-[#211C84]">No</th>
                    <th class="py-2 px-4 border-b  border-b-gray-400 text-[#211C84]">Adı</th>
                    <th class="py-2 px-4 border-b  border-b-gray-400 text-[#211C84]">Açıklama</th>
                    <th class="py-2 px-4 border-b border-b-gray-400 text-[#211C84]">Fiyat</th>
                    <th class="py-2 px-4 border-b border-b-gray-400"></th>
                    <th class="py-2 px-4 border-b border-b-gray-400"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $index=>$product )
                <tr class=" {{ $index % 2 == 0 ? 'bg-gray-100' : 'bg-white' }} hover:bg-gray-200 hover:shadow-md   ">
                    <td class="py-2 px-4  text-center">{{ $product->id }}</td>
                    <td class="py-2 px-4">{{ $product->name }}</td>
                    <td class="py-2 px-4"> {{ $product->description }}</td>
                    <td class="py-2 px-4"> {{ $product->price }}</td>
                    <td class="py-2 px-4">
                        <button class="flex items-center gap-1 bg-red-500 text-white p-2 rounded hover:bg-red-600 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </button>
                    </td>
                    <td class="py-2 px-4 ">
                        <button class="flex items-center gap-1 bg-yellow-400 text-white p-2 rounded hover:bg-yellow-500 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                              </svg>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
