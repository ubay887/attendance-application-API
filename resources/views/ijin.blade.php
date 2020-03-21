@extends('layout.layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <img src="img/planning.png" class="img-fluid medium-icon mr-2"/><b>Pengajuan</b>
    </div>
  </div>
</div>
@endsection

@section('contentPegawai')
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="row mt-3">
        <div class="col-12 border-bottom mt-4">
          <a href="/pengajuan" class="text-dark"><span class="mr-4"><img src="img/010-contract.png" class="center-icon img-fluid mr-2" />Cuti</span></a>
          <a href="/ijin" class="text-dark"><span><img src="img/037-responsive.png" class="center-icon img-fluid mr-2" />Ijin</span></a>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12 mt-1">
          <div class="card col-12 bg-white rounded-lg mt-4 p-3 pb-5">
            <div class="row">
              <div class="col-12">
                <table class="table mt-4">
                  <thead class="thead-light">
                      <th scope="col">Nama</th>
                      <th scope="col">Mulai Ijin</th>
                      <th scope="col">Lama Hari</th>
                      <th scope="col">Alasan Ijin</th>
                      <th scope="col">Penjelasan Detail</th>
                      <th scope="col" colspan="2">Aksi</th>
                  </thead>
                  <tbody>
                    @foreach($ijin as $i)
                      <tr>
                        <td scope="row"><img src="img/user.png" class="img-circle center-icon"/><span class="ml-2">{{ $i->pegawai->nama }}</span></td>
                          <td>{{$i->tgl_mulai}}</td>
                          <td>{{$i->lama_hari}}</td>
                          <td>{{$i->alasan_ijin}}</td>
                          <td>{{$i->desc}}</td>
                        <td>
                          <form action="/ijin/delete/{{ $i->id }}" method="post">
                            @csrf
                            @method('delete')
                              <button class="btn btn-primary pl-4 pr-4">Setuju</button>
                              <button class="btn btn-primary pl-4 pr-4">Tolak</button>
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
      </div>
    </div>

@endsection