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
                        <form action="/pegawai/update" class="" method="GET">
                            {{ csrf_field() }}
                            
                            <input type="hidden" name="id" value="{{ $pegawai->id }}">

                            <div class="row">
                                <div class="col">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $pegawai->email }}">
                                </div>
                                <div class="col">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" value="{{ $pegawai->nama }}">
                                </div>
                                <div class="col">
                                    <label> alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="{{ $profile->alamat }}">
                                </div>                                    
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Nomor Induk Pegawai</label>
                                    <input type="text" class="form-control" name="nik_pegawai" value="{{ $profile->nik_pegawai }}">
                                </div>
                                <div class="col">
                                    <label>Divisi</label>
                                    <input type="text" class="form-control" name="divisi" value="{{ $profile->divisi }}">
                                </div>
                                <div class="col">
                                    <label>Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan" value="{{ $profile->jabatan }}">
                                </div>                                    
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Jam Kerja</label>
                                    <input type="number" class="form-control" name="jam_kerja" value="{{ $profile->jam_kerja }}">
                                </div>
                                <div class="col">
                                    <label>Jatah Cuti Pegawai</label>
                                    <input type="text" class="form-control" name="jatah_cuti" value="{{ $profile->jatah_cuti }}">
                                </div> 
                                <div class="col">
                                    <label>Nomor KTP</label>
                                    <input type="text" class="form-control" name="no_ktp" value="{{ $profile->no_ktp }}">
                                </div>                              
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Jenis Kelamin</label>
                                    <input type="text" class="form-control" name="gender" value="{{$profile->gender }}">
                                </div>
                                <div class="col">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tgl_lahir" value="{{ $profile->tgl_lahir }}">
                                </div> 
                                <div class="col">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir" value="{{ $profile->tempat_lahir }}">
                                </div>                              
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Golongan Darah</label>
                                    <input type="text" class="form-control" name="gol_darah" value="{{ $profile->gol_darah }}">
                                </div>
                                <div class="col">
                                    <label>agama</label>
                                    <input type="text" class="form-control" name="agama" value="{{ $profile->agama }}">
                                </div> 
                                <div class="col">
                                    <label>Tinggi Badan</label>
                                    <input type="number" class="form-control" name="tinggi_badan" value="{{$profile->tinggi_badan}}">
                                </div>                              
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Tanggal Mulai Kerja</label>
                                    <input type="date" class="form-control" name="tgl_mulai_kerja" value="{{ $profile->tgl_mulai_kerja }}">
                                </div>
                                <div class="col"> 
                                    <label>Status Karyawan</label>
                                    <input type="text" class="form-control" name="status" value="{{ $profile->status }}">
                                </div>
                                <div class="col"> 
                                    <label>Berat Badan</label>
                                    <input type="number" class="form-control" name="berat_badan" value="{{ $profile->berat_badan }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col"></div>
                                <div class="col"></div>
                                <div class="col text-right">    
                                    <button class="btn btn-primary mt-4 p-2 rounded-pill pr-5 pl-5">SIMPAN</button>
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
