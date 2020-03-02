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
        <a href="/editProfile" class="text-dark"><span class="mr-3"><img src="img/004-assistance.png" class="img-fluid center-icon"/>Akun</span></a>
        <a href="index6.php" class="text-dark"><span class="mr-3"><img src="img/008-id-card.png" class="img-fluid center-icon"/>Edit Profil</span></a>
        <a href="index7.php" class="text-dark"><span><img src="img/016-smartphone.png" class="img-fluid center-icon"/>Ganti Password</span></a>
        </div>
        <div class="col-1"></div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="card col-3  bg-white rounded-lg mb-5 p-2 mt-4 shadow">
            <div class="text-center mt-5 p-3"><br>
                <img src="img/girl (1).png" class="img-fluid large-icon rounded-circle mt-5" /><br>
                <b class="mt-2">Admin</b>
                <div class="text-secondary">PT SETIA KARYA</div>
            </div>
        </div>
        <div class="col-1"></div>
        <div class="col-7  card bg-white shadow-sm rounded-lg mt-4 p-3 mb-4">
        <form action="" class="">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Tempat/Tanggal Lahir</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="" id="" cols="30" rows="5" class="form-control" style="max-height:100px"></textarea>
                </div>
            </div>

            <div class="col-6">
                    <div class="form-group">
                        <label>Golongan Darah</label>
                        <select name="" id="" class="form-control">
                            <option value="">A</option>
                            <option value="">B</option>
                            <option value="">C</option>
                            <option value="">D</option>
                            <option value="">E</option>
                            <option value="">F</option>
                            <option value="">G</option>
                            <option value="">H</option>
                            <option value="">I</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="" id="" class="form-control">
                            <option value="">Single</option>
                            <option value="">Menikah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <input type="text" class="form-control">
                    </div><br>
                    <div class="form-group text-right pt-3">
                        <button class="btn btn-primary rounded-pill pr-5 pl-5 mt-4">PERBARUI</button>
                    </div>
            </div>
        </div>
    </div>
@endsection

