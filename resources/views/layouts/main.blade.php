<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SPBE | {{ $tittle }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="main-bg d-flex flex-column min-vh-100">
    @include('partials.navbar')
    <div class="container mt-4" style="min-height: 45vh">
      @yield('container')
    </div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#60BEF2" fill-opacity="1" d="M0,96L26.7,101.3C53.3,107,107,117,160,112C213.3,107,267,85,320,90.7C373.3,96,427,128,480,149.3C533.3,171,587,181,640,197.3C693.3,213,747,235,800,250.7C853.3,267,907,277,960,277.3C1013.3,277,1067,267,1120,256C1173.3,245,1227,235,1280,213.3C1333.3,192,1387,160,1413,144L1440,128L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{-- My Style --}}
    <link rel="stylesheet" href="/css/style.css">
  </body>
</html>