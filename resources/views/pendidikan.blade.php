@extends('layout.layout')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-6">
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
          <a href="index10.php" class="text-dark"><span>3. Arsip File</span></a>
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
                <div class="col-22 ml-3">
                  <input type="text" class="form-control" placeholder="Nama Sekolah">
                </div>
                <div class="col-2 ml-3">
                  <input type="text" class="form-control" placeholder="Pilih Jenjang Pendidikan">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Jurusan">
                </div>                
                <div class="col">
                  <input type="text" class="form-control" placeholder="Tahun Masuk">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Tahun Selesai">
                </div>
                <div class="col">
                  <button class="btn btn-primary pr-3 pl-3">+</button>
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
