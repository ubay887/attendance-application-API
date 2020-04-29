@extends('layout.layout')

@section('content')
<div class="row">

  <div class="col-4">

    <div class="shadow-lg p-3 mb-5  bg-white rounded ">
      <div class="row">
        <div class="col-6">
          <h3>{{ $pengajuan }}</h3>
          <div class="text-muted">Ijin/Cuti</div>
        </div>
        <div class="col-6">
          <img src="img/076-calendar-17.png" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  
  </div>
  
  <div class="col-4">
  
    <div class="shadow-lg p-3 mb-5 bg-white rounded ">
      <div class="row">
        <div class="col-6">
          <h3>{{ $absen }}</h3>
          <div class="text-muted">Absen</div>
        </div>
        <div class="col-6">
          <img src="img/036-time.png" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  
  </div>
  
  <div class="col-4">
  
    <div class="shadow-lg p-3 mb-5 bg-white rounded ">
      <div class="row">
        <div class="col-6">
          <h3>{{ $user }}</h3>
          <div class="text-muted">Pegawai</div>
        </div>
        <div class="col-6">
          <img src="img/046-meeting.png" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  
  </div>          

</div>
@endsection

@section('pengaturanAbsen')
  <!-- <div class="col-12">
    <span class="text-muted mr-4">
      <img src="img/all.png" alt="" class="img-fluid small-icon mr-3">All
    </span>
    <span class="text-muted mr-4">
      <img src="img/absen-masuk.png" alt="" class="img-fluid small-icon mr-3">Absen Masuk
    </span>
    <span class="text-muted mr-4">
      <img src="img/absen-keluar.png" alt="" class="img-fluid small-icon mr-3">Absen Keluar
    </span>                
    <div class="border mt-4"></div>
  </div> -->
@endsection

@section('contentAbsen')


<div class="col-lg-12 shadow-lg px-3 mt-2 mb-4 rounded">

  <div class="row">

    <div class="col-12 my-3 ">
      <b>Absen</b>
    </div>

  </div>

  <!-- absen masuk & keluar -->
  
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th>Foto</th>
        <th>Nama</th>
        <th>Status</th>
        <th>Tgl & Waktu</th>
        <th>Keterangan</th>
        <th>Deskripsi</th>        
        <th>Tanggapi</th>        
      </tr>
    </thead>
    <tbody>
    @foreach ($absens as $a)
    <tr style="cursor:pointer">
      <td style="display:none">
        <input type="text" value="{{ $a->id_user }}" id="id_user">
        <input type="text" value="{{ $a->timestamp }}" id="tgl_absensi">
      </td>
      <td>          
        <img src="./foto_absensi/{{$a->photo}}" alt="" class="img-fluid" style="height:100px; width:110px" onclick="showabsenprofile('{{$a->photo}}','{{$a->nama}}','{{$a->type}}','{{$a->timestamp}}','{{$a->status}}','{{$a->deskripsi}}','{{$a->id_user}}')">
      </td>
      <td>
        <b>{{$a->nama}}</b>
      </td>
      <td>
        {{$a->type}}
      </td>
      <td>
        {{$a->timestamp}}
      </td>
      <td>
        {{$a->status}}
      </td>
      <td>
        {{$a->deskripsi}}
      </td>          
      <td>
        <button class="btn btn-success" onclick="tanggapi('TANGGAPI')">TANGGAPI</button>
      </td>
    </tr>          
    @endforeach
    </tbody>
  </table>  

</div>

<div class="col-lg-12 shadow-lg p-4 mt-2 rounded mb-5" id="formtanggapan"  style="display:none">
  <div class="row">
    <div class="col-12 my-3 ">
      <b>Beri Tanggapan</b>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="my-3">Akan menanggapi absensi pada tgl : <b id="show_tgl_absensi"></b></div>
      <input type="text" class="form-control" placeholder="Beri Tanggapan" id="tanggapan">
      <button class="btn btn-success my-3 col-lg-12" onclick="kirimtanggapan()">KIRIM</button>
      <button class="btn btn-danger col-lg-12" onclick="tanggapi('BATALKAN')">BATALKAN</button>
    </div>
  </div>
</div>

<!-- tutup content absen -->
@endsection

@section('contentPerusahaan')
  <div class="col-3">
    <div class="col-12 text-center mb-3">
      <div class="shadow-lg p-3 rounded">
        <img src="img/user.png" alt="" class="img-fluid">
        @foreach ($perusahaan as $item)
          <h4 class="mt-3">{{ $item->nama_perusahaan }}</h4>
        @endforeach
        <a href="/chart" class="text-decoration-none text-success">Grafik perusahaan</a>
      </div>
    </div>

    <div class="col-12">
      <div class="shadow-lg p-3 rounded mb-3">
        <div class="row">
          <div class="text-center col-12">
            <h4>Contact</h4>
          </div>
          @foreach ($perusahaan as $item)
            <div class="col-12 mt-3">
              <span>
                <img src="img/telpon.png" alt="" class="small-icon img-fluid">
              </span>
              <span class="small-font-size">Telepon : {{ $item->telpon_perusahaan }}</span>
            </div>
            <div class="col-12  mt-3">
              <span>
                <img src="img/email.png" alt="" class="small-icon img-fluid">
              </span> 
              <span class="small-font-size">Email :{{ $item->email_perusahaan }}</span>
            </div>
            <div class="col-12  mt-3">
              <span>
                <img src="img/placeholder.png" alt="" class="small-icon img-fluid">
              </span>
              <span class="small-font-size">Alamat :{{ $item->alamat_perusahaan }}</span>
            </div>
            <div class="col-12  mt-3">
              <span>
                <img src="img/all.png" alt="" class="small-icon img-fluid">
              </span>
              <span class="small-font-size">Industri : {{ $item->industri }}</span>
            </div>          
          @endforeach
        </div>
      </div>
    </div>
  </div>  

@endsection

@section('script')
  <script>
    function showabsenprofile(foto,nama,type,timestamp,status,deskripsi,id_user){      
      Swal.fire({
        html : `
          <img src="./foto_absensi/${foto}" class="img-fluid">          
        `,        
      });
    }

    function tanggapi(type){

      var tgl_absensi = document.getElementById("tgl_absensi").value;
      document.getElementById("show_tgl_absensi").innerHTML = tgl_absensi;
      if(type == "TANGGAPI"){
        document.getElementById("formtanggapan").style.display = "block";
      }else{
        document.getElementById("formtanggapan").style.display = "none";
      }
    }

    function datatanggapan(){
      var tgl_absensi = document.getElementById("tgl_absensi").value;
      var tanggapan = document.getElementById("tanggapan").value;
      var id_user = document.getElementById("id_user").value;
      var form = new FormData();
      form.set("tanggapan",tanggapan);
      form.set("id_user",id_user);
      form.set("tgl_absensi",tgl_absensi);
      return form;
    }

    function kirimtanggapan(){
      fetch("http://localhost:8000/api/tanggapan",{
        method : "post",
        body : datatanggapan(),
      })
      tanggapi('BATALKAN');
    }

  </script>
@endsection