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
            <div class="card col-12 bg-white rounded-lg mt-5 mb-5 p-3">
                <div class="row">
                    <div class="col-12">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <!-- search -->
                        <form action="/pegawaiupdate{{$pegawai->id_user}}" class="" method="post">
                            {{ csrf_field() }}
                            <input type="text" name="id_user" value="{{ $pegawai->id_user }}">

                            <div class="row">
                                <div class="col">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $pegawai->email }}">
                                </div>
                                <div class="col">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" value="{{ $pegawai->nama }}">
                                </div>
                            </div>

                            <div class="row">
                                 <div class="col">
                                    <label>Password baru</label>
                                    <input type="Password" class="form-control" name="password" value="">
                                </div>
                                <div class="col text-right">
                                    <input type="submit" name="" value="SIMPAN" class="btn btn-primary mt-4 p-2 rounded-pill pr-5 pl-5">
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
