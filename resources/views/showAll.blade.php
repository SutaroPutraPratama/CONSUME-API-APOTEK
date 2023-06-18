<!doctype html>
<html class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"  rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    
<nav class="bg-white border-gray-200 dark:bg-gray-900 sticky top-0 z-20 border-b-2">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="/" class="flex items-center">
          <img src="{{asset('../img/logo.jpg')}}" class="h-8 mr-3"  />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">APOTEK</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="/" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
          </li>
          <li>
            <a href="/data" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Data</a>
          </li>  
          <li>
            <a href="/create" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Create</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  @if (Session::get('success'))
  <div class="bg-blue-200 border-l-4 border-blue-500 text-blue-800 p-4 sm:w-1/2 md:w-1/3">
    <p class="font-bold">Alert!</p>
    <p>{{ Session::get('success') }}</p>
    </div>
  @endif

  @if (Session::get('failed'))
  <div class="bg-red-200 border-l-4 border-red-500 text-white-800 p-4 sm:w-1/2 md:w-1/3">
    <p class="font-bold">Alert!</p>
    <p>{{ Session::get('error') }}</p>
    </div>
  @endif


  <div class="container h-screen mt-6">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                  <th scope="col" class="px-6 py-3">
                      Nama
                  </th>
                  <th scope="col" class="px-6 py-3">
                      rujukan
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Rumah Sakit
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Obat
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Harga Satuan
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Harga Total
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Apoteker
                  </th>
                  <th scope="col" class="px-6 py-3">
                      Action
                  </th>
              </tr>
          </thead>
          <tbody>
            @foreach ($apotek as $item)
              <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      {{ $item['nama'] }}
                  </th>
                  <td class="px-6 py-4">
                      {{ $item['rujukan'] }}
                  </td>
                  <th class="px-6 py-4">
                      {{ $item['rumah_sakit'] }}
                  </th>
                  <th class="px-6 py-4">
                      {{ json_encode($item['obat']) }}
                  </th>
                  <th class="px-6 py-4">
                      {{ json_encode($item['harga_satuan']) }}
                  </th>
                  <th class="px-6 py-4">
                      {{ $item['total_harga'] }}
                  </th>
                  <th class="px-6 py-4">
                      {{ $item['apoteker'] }}
                  </th>
                  <td class="px-6 py-4 flex justify-between">
                      <a href="/edit/{{ $item['id'] }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                      <form action="/data/delete/{{ $item['id'] }}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="/data/delete/{{ $item['id'] }}" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Delete</a>
                      </form>
                  </td>
              </tr>
            @endforeach
          </tbody>
      </table>
    </div>
    
  </div>
  


  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>