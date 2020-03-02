@extends('layout.layout')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-12">
        <img src="img/090-time-is-money.png" class="img-fluid medium-icon mr-2"/><b>Lihat Gaji</b>
        </div>
    </div>
  </div>
@endsection
        
@section('contentPegawai')
  <div class="col-12 mt-3">
    <div class="card col-12 bg-white rounded-lg mt-4 p-3">
        <div class="row">
            <div class="col-5">
            <a href="/updateGaji"><div class="mr-auto p-2 bd-highlight"><button class="btn btn-primary">+ Tambah</button></div></a>
            </div>
            <div class="col-7">
            </div>
        </div>
        <div class="row">
          <div class="col-12">
              <table class="table mt-3">
                  <thead class="thead-light">
                      <th scope="col">Nama</th>
                      <th scope="col">Bulan</th>
                      <th scope="col">Divisi</th>
                      <th scope="col">Jumlah</th>
                      <th scope="col">Bonus</th>
                      <th scope="col">Potongan</th>
                      <th scope="col">Subtotal</th>
                  </thead>
                <tbody>
                  <tr>
                      <td scope="row"><span>Michelle S</span></td>
                      <td>November</td>
                      <td>Sekretaris</td>
                      <td>Rp.1.000.000</td>
                      <td>0</td>
                      <td>0</td>
                      <td>Rp.1.000.000</td>
                    </tr>
                </tbody>
              </table>
            </div>
        </div>
    </div>
  </div>
@endsection
