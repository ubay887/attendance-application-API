{{-- @extends('layout.layout')

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
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <label>Nomor KTP</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col">
                                    <label>Golongan Darah</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col">
                                    <label>Berat Badan</label>
                                    <input type="text" class="form-control">
                                </div>                                    
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Jenis Kelamin</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col">
                                    <label>Status</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col">
                                    <label>Alamat</label>
                                    <textarea class="form-control" style="max-height:70px;"></textarea>
                                </div>                                    
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Tempat/Tanggal Lahir</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col">
                                    <label>Agama</label>
                                    <input type="text" class="form-control">
                                </div> 
                                <div class="col"></div>                              
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>No HP</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col">
                                    <label>Tinggi Badan</label>
                                    <input type="text" class="form-control">
                                </div> 
                                <div class="col text-center">
                                <a href="index3.php"><button class="btn btn-primary mt-4 p-2 rounded-pill pr-5 pl-5">SIMPAN</button>
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
        
         --}}
