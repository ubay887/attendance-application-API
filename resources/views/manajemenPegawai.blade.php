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
                        <form action="/pegawai/submit" class="" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                                <div class="col">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="col">
                                    <label>No HP</label>
                                    <input type="text" class="form-control" name="no_hp">
                                </div>                                    
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Nomor Induk Pegawai</label>
                                    <input type="text" class="form-control" name="nik_pegawai">
                                </div>
                                <div class="col">
                                    <label>Divisi</label>
                                    <input type="text" class="form-control" name="devisi">
                                </div>
                                <div class="col">
                                    <label>Jabatan</label>
                                    <input type="text" class="form-control" name="jabatan">
                                </div>                                    
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Jam Kerja</label>
                                    <input type="number" class="form-control" name="jam_kerja">
                                </div>
                                <div class="col">
                                    <label>Jatah Cuti Pegawai</label>
                                    <input type="text" class="form-control" name="jatah_cuti">
                                </div> 
                                <div class="col">
                                    <label>Nomor KTP</label>
                                    <input type="text" class="form-control" name="no_ktp">
                                </div>                              
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Jenis Kelamin</label>
                                    <input type="text" class="form-control" name="gender">
                                </div>
                                <div class="col">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tgl_lahir">
                                </div> 
                                <div class="col">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir">
                                </div>                              
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Golongan Darah</label>
                                    <input type="text" class="form-control" name="gol_darah">
                                </div>
                                <div class="col">
                                    <label>agama</label>
                                    <input type="text" class="form-control" name="agama">
                                </div> 
                                <div class="col">
                                    <label>Tinggi Badan</label>
                                    <input type="number" class="form-control" name="tinggi_badan">
                                </div>                              
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Tanggal Mulai Kerja</label>
                                    <input type="date" class="form-control" name="tgl_mulai_kerja">
                                </div>
                                <div class="col"> 
                                    <label>Status Karyawan</label>
                                    <input type="text" class="form-control" name="status_karyawan">
                                </div>
                                <div class="col"> 
                                    <label>Berat Badan</label>
                                    <input type="number" class="form-control" name="berat_badan">
                                </div> 
                                <div class="col"> 
                                    <label> alamat</label>
                                    <input type="text" class="form-control" name="alamat">
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
