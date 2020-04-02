@extends('layout.layout')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-12">
          <img src="img/customer-support.png" class="img-fluid medium-icon mr-2"/><b>Setting</b>
        </div>
    </div>
  </div>
@endsection

@section('contentPegawai')

  <div class="col-2"></div>

  <div class="col-3 mt-5">
      <div class="card p-4 mt-3">
        <a href="/editPerusahaan" class="text-dark nav-link"><span><img src="img/store-2.png" class="img-fluid small-icon"/>
          <span class="ml-3">Edit Perusahaan</span></span></a>
      </div><br>
      <!-- <div class="card p-4 mt-5">
        <a href="/editKaryawan"class="text-dark nav-link"><span><img src="img/status.png" class="img-fluid small-icon"/><span class="ml-3">Edit Karyawan</span></span></a>
      </div> -->
  </div>

  <div class="col-1"></div>

  <div class="col-3 mt-5">
    <div class="card p-4 mt-3">
      <a href="{{ route('logout') }}" class="text-dark nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><span><img src="img/011-logout.png" class="img-fluid small-icon"/><span class="ml-3">Logout</span></span></a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
    </div><br>
<!--     <div class="card p-4 mt-3">
      <a href="/akun" class="text-dark nav-link"><span><img src="img/network.png" class="img-fluid small-icon"/><span class="ml-3">Edit Profil</span></span></a>
    </div><br> -->
  </div>

  <div class="col-2">

  </div>
<div class="col-1"></div>
@endsection
