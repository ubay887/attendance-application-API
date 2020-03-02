@extends('layout.layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 text-right">
      <a href="#" class="medium-font-size text-secondary">Home > Profile</a>
    </div>
  </div>
</div>
@endsection

@section('contentPegawai')

  <div class="container">
    <div class="row">
      <div class="col-4">
        <img src="img/021-deadline-3.png" class="img-fluid center-icon mr-2"/><b>Profile</b>
      </div>
      <div class="col-7 border-bottom text-left">
        <a href="/akun" class="text-dark"><span class="mr-3"><img src="img/004-assistance.png" class="img-fluid center-icon"/>Akun</span></a>
        <a href="/editProfile" class="text-dark"><span class="mr-3"><img src="img/008-id-card.png" class="img-fluid center-icon"/>Edit Profil</span></a>
        <a href="/password" class="text-dark"><span><img src="img/016-smartphone.png" class="img-fluid center-icon"/>Ganti Password</span></a>
      </div>
      <div class="col-1"></div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="card col-3  bg-white rounded-lg mb-5 p-2 mt-4 shadow">
        <div class="text-center mt-5"><br>
          <img src="img/girl (1).png" class="img-fluid large-icon rounded-circle mt-4" /><br>
          <b class="mt-2">Admin</b>
          <div class="text-secondary">PT SETIA KARYA</div>
        </div>
      </div>

      <div class="col-1"></div>

      <div class="col-7  card bg-white shadow-sm rounded-lg mt-4 p-3 mb-4">
        <form action="" class="">
          @csrf
          <div class="row">
            <div class="col-5">
              <label>Nama</label>
              <input type="text" class="form-control">
              <label>Email</label>
              <input type="text" class="form-control">
              <label>Deskripsi</label>
              <textarea name="" id="" cols="30" rows="5" class="form-control" style="max-height:120px;"></textarea>
            </div>
            <div class="col-6 text-center border border-dark pt-4 rounded-lg ml-4"><br>
              <img src="img/user.png" class="img-fluid large-icon mt-5" />
            </div>            
          </div>

          <div class="row">
            <div class="col">
              <a href="/update"><button class="btn btn-primary rounded-pill pr-5 pl-5 mt-4">PERBARUI</button></a>
            </div>
          </div>
      </div>

      </div>

@endsection