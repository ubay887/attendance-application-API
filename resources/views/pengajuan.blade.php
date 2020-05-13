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
<style type="text/css">
  .disables {
          pointer-events: none;
          cursor: default;
          opacity: 40%;
      }
</style>
<div class="row">
  <div class="col-12">
    <div class="row mt-3 ml-2">
      <div class="col-12 border-bottom mt-4">
        <a href="/pengajuan" class="text-dark"><span class="mr-4"><img src="img/010-contract.png" class="center-icon img-fluid mr-2" />Cuti</span></a>
        <a href="/ijin" class="text-dark"><span><img src="img/037-responsive.png" class="center-icon img-fluid mr-2" />Ijin</span></a>
      </div>
    </div>
  </div>
</div>

<div class="col-12 mt-1">
  <div class="card col-12 bg-white rounded-lg mt-4 p-3 pb-5">
      <div class="row">
        <div class="col-12">
          <table class="table mt-4">
              <thead class="thead-light">
                  <th scope="col">Nama</th>
                  <th scope="col">Tanggal Ajukan</th>
                  <th scope="col">Mulai Cuti</th>
                  <th scope="col">status</th>
                  <th scope="col">Sisa Cuti</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col" colspan="2">Aksi</th>
                </thead>
                <tbody>
                  @foreach($cuti as $c)
                    <tr>
                        <td scope="row"><img src="img/user.png" class="img-circle center-icon"/><span class="ml-2">{{ $c->pegawai->nama }}</span></td>
                        <td>{{ $c->tgl_ajukan }}</td>
                        <td>{{ $c->mulai_cuti }}</td>
                        <td>{{ $c->lama_cuti }}</td>
                        @if($c->status== "")
                        <td>PROSES</td>
                        @else
                        <td>{{ $c->status }}</td>
                        @endif
                        <td>{{ $c->alasan }}</td> 
                        <td>
                            @if($c->status=="TOLAK")
                              <a href="/pengajuan/setuju/{{ $c->id }}" value="{{$c->id}}" class="btn btn-primary disables pl-4 pr-4">SETUJU
                              </a>
                              <a href="/" class="disables btn btn-danger pl-4 pr-4">TOLAK
                              </a>
                              <form action="/pengajuan/delete/{{ $c->id }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="BATAL" class="btn btn-warning disables mt-1">
                              </form>
                            @elseif($c->status=="SETUJU")
                              <a href="/pengajuan/setuju/{{ $c->id }}" value="{{$c->id}}" class="btn disables btn-primary pl-4 pr-4">SETUJU
                              </a>
                              <a href="/" class="disables btn btn-danger pl-4 pr-4">TOLAK
                              </a>
                              <form action="/pengajuan/delete/{{ $c->id }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="BATAL" class="btn btn-warning disables mt-1">
                              </form>
                            @else
                              <a href="/pengajuan/setuju/{{ $c->id }}" value="{{$c->id}}" class="btn btn-primary pl-4 pr-4">SETUJU
                                </a>                    
                              <a href="/tolak/{{$c->id}}" class="btn btn-danger pl-4 pr-4">TOLAK
                              </a>
                              <form action="/pengajuan/delete/{{ $c->id }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="BATAL" class="btn btn-warning  mt-1">
                              </form>
                            @endif
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