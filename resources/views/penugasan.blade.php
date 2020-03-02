@extends('layout.layout')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-12">
        <img src="img/planning.png" class="img-fluid medium-icon mr-2"/><b>Penugasan</b>
        </div>
    </div>
  </div>
@endsection

@section('contentPegawai')
  <div class="col-12">
    <div class="card col-12 bg-white rounded-lg mt-4 p-3">
      <div class="row">
          <div class="col-5">
          <a href="/tambahPenugasan"><div class="mr-auto p-2 bd-highlight"><button class="btn btn-primary">+ Tambah</button></div></a>
          </div>
          <div class="col-7">
          </div>
      </div>
      <div class="row">
        <div class="col-12">
          <table class="table mt-3">
            <thead class="thead-light">
              <th>photo</th>
              <th scope="col">Nama</th>
              <th scope="col">Nama Pengecek</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Judul Tugas</th>
              <th scope="col">Detail Tugas</th>
              <th scope="col">Deadline</th>
              <th scope="col">Hapus</th>
            </thead>
            <tbody>
              @foreach ($penugasan as $p)
                <tr>
                  <td scope="row"><img src="img/user.png" class="img-circle center-icon"/></td>
                  <td>{{ $p->pegawai->email }}</td>
                  <td>{{ $p->pengecek }}</td>
                  <td>{{ $p->tgl_diberikan_tugas }}</td>                  
                  <td>{{ $p->judul }}</td>
                  <td>{{ $p->detail }}</td>
                  <td>{{ $p->deadline }} </td>
                  <td>
                    <form action="/penugasan/delete/{{ $p->id }}" method="post">
                      @csrf
                      @method('delete')
                      <input type="submit" value="selesai" class="btn btn-danger">
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
