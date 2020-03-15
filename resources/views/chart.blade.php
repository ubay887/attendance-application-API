@extends('layout.layout')

@section('content')
    <h1>grafik perusahaan</h1>
@endsection

@section('contentPegawai')
    <div id="container" style="width: 75%;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
        <canvas id="canvas" style="display: block; width: 1013px; height: 506px;" width="1013" height="506" class="chartjs-render-monitor"></canvas>
    </div>
@endsection