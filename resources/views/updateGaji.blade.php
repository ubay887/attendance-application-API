@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
        <img src="img/090-time-is-money.png" class="img-fluid medium-icon mr-2"/><b>Update Gaji</b>
        </div>
    </div>
</div>
@endsection

@section('contentPegawai')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="col-1"></div>
                <div class="card col-10 bg-white rounded-lg mt-5 p-3 ml-5 pr-5">
            <div class="col-1"></div>
                <div class="row">
                    <div class="col-3"></div>

                    <div class="col-6">
                        <!-- search -->
                        <form action="" class="">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <label>Divisi</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Manajer</option>
                                        <option value="">Pegawai</option>
                                        <option value="">OB</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label>Jumlah</label>
                                    <input type="text" class="form-control">
                                </div>                                 
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Untuk</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">CEO</option>
                                        <option value="">Direktur Utama</option>
                                        <option value="">Supervisor</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label>Bonus</label>
                                    <input type="text" class="form-control">
                                </div>                                
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Potongan</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col">
                                    <label>Bulan</label>
                                    <input type="text" class="form-control">
                                </div>                              
                            </div>
                        </div>
                        <div class="col-3 mt-4 p-1">
                            <div class="row mt-5">
                                <div class="col mt-5">
                                    <button class="btn btn-primary mt-5">+ Tambah</button>
                                </div> 
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
        
        