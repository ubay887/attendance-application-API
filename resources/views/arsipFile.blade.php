@extends('layout.layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <img src="img/network.png" class="img-fluid medium-icon mr-2"/><b>Manajemen Pegawai / Karyawan</b>
    </div>
  </div>
</div>
@endsection

@section('contentPegawai')
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="row">
        <div class="col-12 border-bottom mt-4">
          <a href="/editKaryawan" class="text-dark"><span class="mr-4">1. Data Personal</span></a>
          <a href="/pendidikan" class="text-dark"><span class="mr-4">2. Pendidikan</span></a>
          <a href="/arsipFile" class="text-dark"><span>3. Arsip File</span></a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card col-12 bg-white rounded-lg mt-3 p-3">
        <div class="row">
          <div class="col-12">
            <!-- search -->
            <form action="" class="">
              <div class="row">
                <div class="col-6 form-group">
                  <input type="text" class="form-control" placeholder="Nama Dokumen">
                  <div class="card-img-top bg-secondary border border-dark rounded-lg p-3 text-center mt-3">
                    <img src="img/003-photo-1.png" class="img-fluid large-icon" />
                  </div>
                </div>
                <div class="col"></div>
                <div class="col"></div>
                <div class="col mt-5 pt-4">
                  <a href="index15.php"><button class="btn btn-primary mt-4 p-2 rounded-pill pr-5 pl-5 mt-5">SIMPAN</button></a>
                </div>
              </div>
            </form>
            <!-- tutup search -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
