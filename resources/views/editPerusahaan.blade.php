@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
            <img src="img/bank.png" class="img-fluid medium-icon mr-2"/><b>Edit Perusahaan</b>
            </div>
            <div class="col-6 mt-2 text-right">
            <a href="#" class="medium-font-size text-secondary">Dashboard >Edit perusahaan</a>
            </div>
        </div>
    </div>
@endsection
        
@section('contentPegawai')
    <div class="col-12">
        <div class="card col-12 bg-white rounded-lg mt-3 p-4 mb-5 shadow">
            <div class="row">
                <div class="col-12">
                    <!-- search -->
                    <form action="" class="">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label>Nama Perusahaan</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <label>Email Perusahaan</label>
                                <input type="text" class="form-control">                   
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <label>Provinsi</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <label>Kabupaten</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <label>Kecamatan</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <label>Alamat Perusahaan</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <label>Bidang Industri</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <label>Telp Perusahaan</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-2 text-center">
                                        <div class="shadow p-3 mb-5 bg-white rounded mt-4">
                                        <img src="img/user.png" class="img-fluid large-icon"/>
                                        </div>
                                    </div>
                                    <div class="col-2 mt-4 text-center">
                                        <b>Logo Perusahaan</b>
                                        <small class="text-secondary">File PNG/JPG</small>
                                    </div>
                                    <div class="col-8 text-right mt-5 p-3">
                                        <button class="btn btn-primary rounded-pill pl-5 pr-5 p-2">SIMPAN</button>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    </form>
                    <!-- tutup search -->
                </div>
            </div>
        </div>
    </div>
@endsection
        