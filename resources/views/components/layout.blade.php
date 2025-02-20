<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" type="image/png" href="{{asset('images/myicon.png')}}">
  </head>
  <body>

    {{-- Main Section --}}
      {{$slot}}

    <!-- footer -->
    <footer>
      <span>2024 All rights reserved</span>
      <a class="footer-post" href="/create">Create Post</a>
    </footer>
    <!-- end of footer -->
  </body>
</html>
