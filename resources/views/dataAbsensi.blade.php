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
                    <form action="/absencari" class="GET">
                        <div class="row">
                            <div class="col">
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
                            <th scope="col">Tanggal dan Waktu</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Status</th>
                            <th scope="col">Absen</th>
                        </thead>                                
                        <tbody>
                            @foreach($Absen as $a)
                            <tr>
                                <td scope="row">{{$a->timestamp}}</td>
                                <td>{{$a->nama}}</td>
                                <td><img src="./foto_absensi/{{$a->photo}}" class="img-circle user-size" onclick="showabsenprofile('{{$a->photo}}')"/></td>
                                <td>{{$a->status}}</td>
                                <td>{{$a->type}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
 <script>
    function showabsenprofile(foto,nama,type,timestamp,status,deskripsi,id_user){      
      Swal.fire({
        html : `
          <img src="./foto_absensi/${foto}" class="img-fluid">          
        `,        
      });
    }
  </script>

    
