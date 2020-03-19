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
        <div class="col-12">

          <div class="card col-12 bg-white rounded-lg mt-5 p-3">
            <div class="row">
              <div class="col-5">
                <a href="/manajemenPegawai" class="text-dark"><div class="mr-auto p-2 bd-highlight"><button class="btn btn-primary">+ Tambah</button></div></a>
              </div>
              <div class="col-7">
                <!-- search -->
                <form action="/pegawaicari" class="GET">
                  <div class="row">
                    <div class="col">
                      <select name="" id="" class="form-control">
                          <option value="">Stevanus</option>
                          <option value="">Veri</option>
                          <option value="">Christian</option>
                      </select>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Cari Data" value="{{ old('cari') }}" name="cari">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary">CARI</button>
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
                  <th>foto</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Email</th>
                  <th scope="col">Divisi</th>
                  <th scope="col">Jabatan</th>
                  <th scope="col">Mulai Kerja</th>
                  <th scope="col" colspan="2" class="text-center">Aksi</th>
                </thead>
                <tbody>                                    
                  @foreach ($pegawai as $p)                  
                    <tr>
                      <td scope="row"><img src="img/user.png" class="img-circle center-icon" onclick="userProfil()" /><span class="ml-2"></span></td>
                      <td>{{ $p->nama }}</td> 
                      <td>{{ $p->email }}</td>
                      <td>{{ $p->profile->divisi }}</td>                    
                      <td>{{ $p->profile->jabatan }}</td>                    
                      <td>{{ $p->profile->tgl_mulai_kerja }}</td>
                      <td>
                        <button class="btn btn-primary pl-4 pr-4">Edit</button>                        
                      </td>
                      <td>
                        <form action="/pegawai/delete/{{ $p->id_user }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <input type="submit" class="btn btn-danger" value="Delete">
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