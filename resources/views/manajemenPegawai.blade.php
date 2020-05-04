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
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="col">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                                                    
                            </div>

                            <div class="row mt-3">
                                <div class="col">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
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
