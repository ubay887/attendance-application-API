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
                      <th scope="col">Action</th>
                  </thead>
                <tbody>
                  @foreach ($gaji as $g)
                  <tr>
                      <td scope="row"><span>{{ $g->pegawai->nama }}</span></td>
                      <td>{{ $g->bulan }}</td>
                      <td>{{ $g->pegawai->divisi }}</td>
                      <td>Rp. {{ $g->jumlah }}</td>
                      <td>Rp. {{ $g->bonus }}</td>
                      <td>Rp. {{ $g->potongan }}</td>
                      <td>Rp. {{ $g->subtotal }}</td>
                      <td>
                        <form action="/slipGaji/delete/{{ $g->id }}" method="post">
                          @csrf
                          @method('delete')
                          <input type="submit" value="Hapus" class="btn btn-danger">
                        </form>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        </div>
    </div>
  </div>
@endsection
