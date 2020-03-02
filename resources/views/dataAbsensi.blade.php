@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
            <img src="img/resume.png" class="img-fluid medium-icon mr-2"/><b>Data Absen</b>
            </div>
        </div>
    </div>
@endsection

@section('contentPegawai')
    <div class="col-12">
        <div class="card col-12 bg-white rounded-lg mt-5 p-3">
            <div class="row">
                <div class="col-5"></div>
                <div class="col-7">
                    <!-- search -->
                    <form action="" class="">

                        <div class="row">
                            <div class="col">
                                <select name="" id="" class="form-control">
                                    <option value="">Smk immanuel</option>
                                    <option value="">Smk panca bakti</option>
                                    <option value="">Smk cemerlang </option>
                                </select>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">
                                <button class="btn btn-primary">CARI</button>
                            </div>                                    
                        </div>
                        
                    </form>
                    <!-- tutup search -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table mt-4">
                        <thead class="thead-light">
                            <th scope="col">Tanggal</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Absen</th>
                            <th scope="col">Lama Waktu</th>
                        </thead>                                
                        <tbody>
                            <tr>
                                <td scope="row">21 November 2019</td>
                                <td>Michelle S</td>
                                <td><img src="img/user.png" class="img-circle user-size"/></td>
                                <td>08:20:10</td>
                                <td>Masuk Kerja</td>
                                <td>Tepat Waktu</td>
                                <td>Masuk</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><img src="img/user.png" class="img-circle user-size"/></td>
                                <td>10:20:10</td>
                                <td>Pergi Untuk Meeting</td>
                                <td>-</td>
                                <td>Keluar</td>
                                <td>2 Jam</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

    
