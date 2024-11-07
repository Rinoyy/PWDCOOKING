<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <title>Document</title>

     {{-- Menggunakan section untuk memuat CSS yang spesifik untuk tiap halaman --}}
     {{-- @yield('styles') --}}
</head>
<body>
     <div class="">
          @include('layout.app.navbar')
          @yield('content')
          @include('layout.app.footer')
     </div>
</body>
</html>
