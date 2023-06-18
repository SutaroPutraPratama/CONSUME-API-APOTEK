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
      <a href="" class="flex items-center">
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
  <div class="flex mx-0 -mt-[20%] lg:-mt-16 lg:px-24 h-screen  justify-center items-center px-5 relative overflow-hidden boder-b-4">
    <div class="flex flex-col">
        <h1 class="text-5xl font-bold" data-aos="fade-left" data-aos-duration="1000">APOTEK INDONESIA</h1>
        <p class="text-sm font-semibold" data-aos="fade-right" data-aos-duration="1000">Obat-obatan hanya untuk anda</p>
    </div>
  </div>
  <div class="bg-slate-300 py-10 z-10 ">
    <h1 class="text-3xl font-bold uppercase text-center mb-6" data-aos="fade-up" data-aos-duration="1000">Beli obat disini</h1>
    <div class="container mx-auto flex">
      <div class="max-w-sm hover:bg-white  rounded overflow-hidden shadow-lg mx-6" data-aos="fade-up" data-aos-duration="1000">
        <img class="w-full" src="{{ asset('../img/drug.png') }}" alt="Image">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">PARACETAMOL</div>
          <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut semper eros.</p>
        </div>
        <div class="px-6 pt-4 pb-4">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Tag 1</span>
        </div>
      </div>
      <div class="max-w-sm hover:bg-white rounded overflow-hidden shadow-lg mx-6" data-aos="fade-up" data-aos-duration="1500">
        <img class="w-full" src="{{ asset('../img/drug.png') }}" alt="Image">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">VITAMIN</div>
          <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut semper eros.</p>
        </div>
        <div class="px-6 pt-4 pb-4">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Tag 1</span>
        </div>
      </div>
      <div class="max-w-sm hover:bg-white rounded overflow-hidden shadow-lg mx-6" data-aos="fade-up" data-aos-duration="2000">
        <img class="w-full" src="{{ asset('../img/drug.png') }}" alt="Image">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">ORALIT</div>
          <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut semper eros.</p>
        </div>
        <div class="px-6 pt-4 pb-4">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Tag 1</span>
        </div>
      </div>
      <div class="max-w-sm hover:bg-white rounded overflow-hidden shadow-lg mx-6" data-aos="fade-up" data-aos-duration="2500">
        <img class="w-full" src="{{ asset('../img/drug.png') }}" alt="Image">
        <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">PEMBESIH LUKA</div>
          <p class="text-gray-700 text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut semper eros.</p>
        </div>
        <div class="px-6 pt-4 pb-4">
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">Tag 1</span>
        </div>
      </div>
    </div>
  </div>
  <div class="h-screen">

  </div>

  
  


  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>