<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  

  <title>Document</title>
  
  <link href="/css/sb-admin.css" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">    

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="static-top navbar navbar-expand-md navbar-dark bg-primary shadow-sm">

    <a class="navbar-brand mr-1" href="index.html">siAbsen</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" style="margin-right: 1050px;" href="#">
      Dashboard
    </button>
    @guest
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item text-white">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->nama }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" style="" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-primary" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
         </li>
       </ul>
    @endguest

  </nav>

  <div id="wrapper">

    <ul class="sidebar navbar-nav bg-light ">
      <li class="nav-item border-bottom border-secondary">
        <a href="/" class="nav-link text-dark">
          <img src="img/dashboard.png" class="center-icon img-fluid mr-3"/>Dashboard
        </a>
      </li>
      <li class="nav-item border-bottom border-secondary">        
        <a href="/pegawai" class="nav-link text-dark">
          <img src="img/network.png" class="center-icon img-fluid mr-3"/>Pegawai
        </a>
      </li>
      <li class="nav-item border-bottom border-secondary">
        <a href="/pengajuan" class="nav-link text-dark">
        <img src="img/article.png" class="center-icon img-fluid mr-3"/>Pengajuan 
        </a>          
      </li>
      <li class="nav-item border-bottom border-secondary">
        <a href="/dataAbsensi" class="nav-link text-dark">
        <img src="img/resume.png" class="center-icon img-fluid mr-3"/>Data Absensi
        </a>          
      </li>
      <li class="nav-item border-bottom border-secondary">
        <a href="/penugasan" class="nav-link text-dark">
        <img src="img/planning.png" class="center-icon img-fluid mr-3"/>Penugasan
        </a>
      </li>
      <li class="nav-item border-bottom border-secondary">
        <a href="/slipGaji" class="nav-link text-dark">
        <img src="img/lembur.png" class="center-icon img-fluid mr-3"/>Slip Gaji
        </a>
      </li>
      <li class="nav-item border-bottom border-secondary">
        <a href="/setting" class="nav-link text-dark">
        <img src="img/settings (1).png" class="center-icon img-fluid mr-3"/>Setting
        </a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
        
        <!-- row -->
        <div class="row">

          <!-- icon -->
          <div class="col-12 mt-4">

            <!-- icon item -->
            <div class="row">

              <div class="col-12">
                <div class="row">
                  <div class="col-9">
                    @yield('content')              
  
                    <!-- pengaturan absen masuk dan keluar -->
                    @yield('pengaturanAbsen')
                    <!-- tutup pengaturan absen masuk dan keluar -->
    
                    <!-- content absen -->
                      @yield('contentAbsen')
                    <!-- tutup content absen -->
                  </div>
                    
                    <!-- content profile perusahaan -->
                    @yield('contentPerusahaan')          
                    <!-- tutup content profile perusahaan -->           
                </div>                
              </div>
              
              {{-- content pegawai --}}
                @yield('contentPegawai')
              {{-- tutup content pegawai --}}

            </div>
            <!-- tutup icon item -->

          </div>
          <!-- tutup icon -->          
          

        </div>
        <!-- tutup row -->

        <div class="row">
        
        </div>

      </div>
      <!-- tutup container -->
        
      <footer class="sticky-footer bg-primary">
        
      </footer>

    </div>
  

  </div>
  
  

</body>

<script src="js/jquery/jquery.min.js"></script>
<script src="js/sb-admin.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
<script src="js/analytics.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/utils.js"></script>

@yield('script')




</html>
