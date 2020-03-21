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
                    <div class="col"> </div>
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
                  @if (session('status'))
                    <div class="alert alert-success">
                      {{ session('status') }}
                    </div>
                  @endif
                  @foreach ($pegawai as $p)                  
                    <tr onclick="userProfile('{{$p->nama}}','{{$p->email}}','{{$p->profile->divisi}}','{{$p->profile->jabatan}}','{{$p->profile->tgl_mulai_kerja}}','{{$p->profile->tgl_lahir}}','{{$p->profile->tempat_lahir}}','{{$p->profile->gol_darah}}','{{$p->profile->status}}','{{$p->profile->agama}}','{{$p->profile->tinggi_badan}}','{{$p->profile->berat_badan}}','{{$p->profile->nik_pegawai}}','{{$p->profile->jatah_cuti}}','{{$p->profile->jam_kerja}}','{{$p->profile->alamat}}',)" style="cursor:pointer">
                      <td scope="row">
                        <img src="img/user.png" class="img-circle center-icon" style="cursor:pointer"  />
                      </td>
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

@section('script')
  <script>
    function userProfile(nama,email,divisi,jabatan,tgl_mulai_kerja,tgl_lahir,tempat_lahir,gol_darah,status,agama,tinggi_badan,berat_badan,nik_pegawai,jatah_cuti,jam_kerja,alamat){
      Swal.fire({
        html : ` 
          <div class="row">
            <div class="col text-left">
              <div> <b>Nama</b> : ${nama} </div>
              <div> <b>Email</b> : ${email} </div>
              <div> <b>Divisi</b> : ${divisi} </div>
              <div> <b>Jabatan</b> : ${jabatan} </div>
              <div> <b>Tgl kerja</b> : ${tgl_mulai_kerja} </div>
              <div> <b>Tgl lahir</b> : ${tgl_lahir} </div>
              <div> <b>Tempat lahir</b> : ${tempat_lahir} </div>
              <div> <b>Alamat</b> : ${alamat} </div>
            </div>
            <div class="col text-left">
              <div> <b>Goldar :</b> ${gol_darah} </div>
              <div> <b>Satus :</b> ${status} </div>
              <div> <b>Agama :</b> ${agama} </div>
              <div> <b>Tinggi badan :</b> ${tinggi_badan}cm </div>
              <div> <b>Berat badan :</b> ${berat_badan}kg </div>
              <div> <b>NIK :</b> ${nik_pegawai} </div>
              <div> <b>Cuti :</b> ${jatah_cuti} </div>
              <div> <b>Jam kerja :</b> ${jam_kerja} </div>
            </div>
          </div>
        `,
      })
    }
  </script>
@endsection