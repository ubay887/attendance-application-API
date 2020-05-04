@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
        <img src="img/planning.png" class="img-fluid medium-icon mr-2"/><b>Beri Penugasan</b>
        </div>
    </div>
</div>
@endsection

@section('contentPegawai')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card col-12 bg-white rounded-lg mt-5 p-3 my-3">
                <div class="row">
                    <div class="col-12">
                        <!-- tambah penugasan -->
                        <form action="/penugasanupdate{{$pegawai->id_user}}" class="" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col">
                                    <label>Tanggal Diberikan Tugas</label>
                                    <input type="date" class="form-control" id="theDate" name="tgl_diberikan_tugas" format value="{{ $penugasan->tgl_diberikan_tugas}}">
                                </div> 
                                <div class="col">
                                    <label>Judul Tugas</label>
                                    <input type="text" class="form-control" name="judul" value="{{ $penugasan->judul}}">
                                </div>
                                <div class="col">
                                    <label>Pengecek</label>
                                    <select name="pengecek" id="" class="form-control" value="{{ $penugasan->pengecek}}">
                                        @foreach ($pegawai as $p)
                                            <option value="{{ $p->email }}">{{ $p->email }}</option>          
                                        @endforeach   
                                    </select>
                                </div>                                    
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <label>Detail Penugasan</label>
                                    <textarea class="form-control" style="max-height:80px;" name="detail"></textarea>
                                </div>
                                <div class="col">
                                    <label>Kepada</label>
                                    <select name="id_user" id="" class="form-control" value="{{ $pegawai->email}}">
                                        @foreach ($pegawai as $p)
                                            <option value="{{ $p->id_user }}">{{ $p->email }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label>Tanggal Deadline</label>
                                    <input type="date" class="form-control" name="deadline" format value="{{ $penugasan->deadline}}">
                                </div>                                  
                            </div>                                                        
                            <div class="row mt-2">                                
                                <div class="col">
                                    <button class="btn btn-primary">submit</button>
                                </div>
                            </div>
                        </form>
                        <!-- tutup tambah penugasan -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var today = new Date();
    document.getElementById("theDate").value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);
</script>

@endsection
