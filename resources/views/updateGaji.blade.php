@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
        <img src="img/090-time-is-money.png" class="img-fluid medium-icon mr-2"/><b>Update Gaji</b>
        </div>
    </div>
</div>
@endsection

@section('contentPegawai')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="col-1"></div>
                <div class="card col-10 bg-white rounded-lg mt-5 p-3 ml-5 pr-5">
            <div class="col-1"></div>
                <div class="row">
                    <div class="col-3"></div>

                    <div class="col-6">
                        <!-- search -->
                        <form action="/updateGaji/submit" class="" method="POST">
                            @csrf
                            @method('post')
                            <div class="row">
                                <div class="col">
                                    <label>Bulan</label>
                                    <select name="bulan" id="bulan" class="form-control">
                                        <option value="Januari">Januari</option>
                                        <option value="Februari">Februari</option>
                                        <option value="Maret">Maret</option>
                                        <option value="April">April</option>
                                        <option value="Mei">Mei</option>
                                        <option value="Juni">Juni</option>
                                        <option value="Juli">Juli</option>
                                        <option value="Agustus">Agustus</option>
                                        <option value="September">September</option>
                                        <option value="Oktober">Oktober</option>
                                        <option value="November">November</option>
                                        <option value="Desember">Desember</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label>Jumlah</label>
                                    <input type="text" class="form-control" name="jumlah" id="jumlah" onkeyup="hitung()" value="0">
                                </div>                                 
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Untuk</label>
                                    <select name="id_user" id="" class="form-control">
                                        @foreach ($pegawai as $p)
                                            <option value="{{$p->id_user}}">{{$p->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label>Bonus</label>
                                    <input type="text" class="form-control" name="bonus" id="bonus" onkeyup="hitung()" value="0">
                                </div>                                
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Potongan</label>
                                    <input type="text" class="form-control" name="potongan" id="potongan" onkeyup="hitung()" value="0">
                                </div>
                                <div class="col">
                                    <label>Subtotal</label>
                                    <input type="text" class="form-control" name="subtotal" onkeyup="hitung()" id="subtotal" value="">
                                </div>                              
                            </div>
                        </div>
                        <div class="col-3 mt-4 p-1">
                            <div class="row mt-5">
                                <div class="col mt-5">
                                    <button class="btn btn-primary mt-5">+ Tambah</button>
                                </div> 
                            </div>
                        </div>
                    </form>
                    <!-- tutup search -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
    function hitung(){
        var jumlah = parseInt(document.getElementById('jumlah').value);
        var bonus = parseInt(document.getElementById('bonus').value);
        var potongan = parseInt(document.getElementById('potongan').value);
        var hitung = jumlah+bonus-potongan;
        
        document.getElementById('subtotal').value = hitung;
    }
</script>
@endsection
        
        