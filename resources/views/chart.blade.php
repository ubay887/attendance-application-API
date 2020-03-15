@extends('layout.layout')

@section('content')
    <h1>grafik perusahaan</h1>
@endsection

@section('contentPegawai')    

	<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="container">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">                            
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                        </div>
                    </div>
                    <canvas id="canvas" style="display: block; width: 1013px; height: 506px;" width="1013" height="506" class="chartjs-render-monitor"></canvas>
                </div>
            </div>
            <div class="col-lg-12">
                <button id="randomizeData" class="btn btn-success my-3">Randomize Data</button>
                <button id="addDataset" class="btn btn-success my-3">Add Dataset</button>
                <button id="removeDataset" class="btn btn-success my-3">Remove Dataset</button>
                <button id="addData" class="btn btn-success my-3">Add Data</button>
                <button id="removeData" class="btn btn-success my-3">Remove Data</button>
            </div>
        </div>
    </div>

@endsection