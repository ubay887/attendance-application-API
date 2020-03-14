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
                    <form action="/editPerusahaan/submit" class="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label>Nama Perusahaan</label>
                                <input type="text" class="form-control" name="nama_perusahaan">
                            </div>
                            <div class="col">
                                <label>Email Perusahaan</label>
                                <input type="text" class="form-control" name="email_perusahaan">                   
                            </div>
                        </div>                       
                        <div class="row mt-3">
                            <div class="col">
                                <label>Alamat Perusahaan</label>
                                <input type="text" class="form-control" name="alamat_perusahaan">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <label>Bidang Industri</label>
                                <input type="text" class="form-control" name="industri">
                            </div>
                            <div class="col">
                                <label>Telp Perusahaan</label>
                                <input type="text" class="form-control" name="telpon_perusahaan">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="row">                     
                                    <div class="col-12 text-right mt-5 p-3">
                                        <button class="btn btn-primary rounded-pill pl-5 pr-5 p-2" type="submit">SIMPAN</button>
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
        