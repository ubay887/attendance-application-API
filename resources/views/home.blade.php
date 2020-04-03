@extends('layout.layout')

@section('content')
<div class="row">

  <div class="col-4">

    <div class="shadow-lg p-3 mb-5 bg-white rounded ">
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


<div class="col-12 shadow-lg p-4 mt-2 ml-3 rounded">

  <div class="row">

    <div class="col-12">
      <b>Absen</b>
    </div>

  </div>

  <!-- absen masuk & keluar -->
  @foreach($absens as $a)
  <div class="row mt-4 mb-3">

    <div class="col-2">
      <img src="img/{{$a->photo}}" alt="" class="rounded-circle img-fluid medium-icon" onclick="userProfile()">
    </div>

    <div class="col-5 text-left">
      <div>
        <b>{{$a->nama}}</b>
      </div>
      <div class="text-muted">
        Absen {{$a->type}}
      </div>

    </div>

    <div class="col-5 text-right">
      <div class="text-muted">{{$a->timestamp}}</div>
      <div class="text-muted">
        {{$a->status}}
      </div>
    </div>

  </div>
  @endforeach
  <!-- tutup absen masuk & keluar -->

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




