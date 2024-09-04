<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <title>Document</title>
</head>
<body>
     <div class="container-fluid bg-light.bg-gradient">
          @include('layout.app.navbar')
          @yield('content')
          @include('layout.app.footer')
     </div>

     

</body>
</html>








