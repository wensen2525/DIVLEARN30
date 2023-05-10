<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
      @vite(['resources/js/app.js'])
</head>
<body>
      <div id="app">
            
            @if (isset($navbar))
                <x-navbar></x-navbar>
            @else
                <x-userNavbar></x-userNavbar>
            @endif

            <main>
                  {{ $slot }}
            </main>

            <x-footer></x-footer>
      </div>
      
</body>
</html>