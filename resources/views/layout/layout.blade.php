<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  

  <title>Document</title>
  
  <link href="/css/sb-admin.css" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-primary static-top">

    <a class="navbar-brand mr-1" href="index.html">siAbsen</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      Dashboard
    </button>    

  </nav>

  <div id="wrapper">

    <ul class="sidebar navbar-nav bg-light ">
      <li class="nav-item border-bottom border-secondary">
        <a href="/" class="nav-link text-dark">
          <img src="img/dashboard.png" class="center-icon img-fluid mr-3"/>Dashboard
        </a>
      </li>
      <li class="nav-item border-bottom border-secondary">        
        <a href="/pegawai" class="nav-link text-dark">
          <img src="img/network.png" class="center-icon img-fluid mr-3"/>Pegawai
        </a>
      </li>
      <li class="nav-item border-bottom border-secondary">
        <a href="/pengajuan" class="nav-link text-dark">
        <img src="img/article.png" class="center-icon img-fluid mr-3"/>Pengajuan 
        </a>          
      </li>
      <li class="nav-item border-bottom border-secondary">
        <a href="/dataAbsensi" class="nav-link text-dark">
        <img src="img/resume.png" class="center-icon img-fluid mr-3"/>Data Absensi
        </a>          
      </li>
      <li class="nav-item border-bottom border-secondary">
        <a href="/penugasan" class="nav-link text-dark">
        <img src="img/planning.png" class="center-icon img-fluid mr-3"/>Penugasan
        </a>
      </li>
      <li class="nav-item border-bottom border-secondary">
        <a href="/slipGaji" class="nav-link text-dark">
        <img src="img/lembur.png" class="center-icon img-fluid mr-3"/>Slip Gaji
        </a>
      </li>
      <li class="nav-item border-bottom border-secondary">
        <a href="/setting" class="nav-link text-dark">
        <img src="img/settings (1).png" class="center-icon img-fluid mr-3"/>Setting
        </a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
        
        <!-- row -->
        <div class="row">

          <!-- icon -->
          <div class="col-12 mt-4">

            <!-- icon item -->
            <div class="row">

              <div class="col-12">
                <div class="row">
                  <div class="col-9">
                    @yield('content')              
  
                    <!-- pengaturan absen masuk dan keluar -->
                    @yield('pengaturanAbsen')
                    <!-- tutup pengaturan absen masuk dan keluar -->
    
                    <!-- content absen -->
                      @yield('contentAbsen')
                    <!-- tutup content absen -->
                  </div>
                    
                    <!-- content profile perusahaan -->
                    @yield('contentPerusahaan')          
                    <!-- tutup content profile perusahaan -->           
                </div>                
              </div>
              
              {{-- content pegawai --}}
                @yield('contentPegawai')
              {{-- tutup content pegawai --}}

            </div>
            <!-- tutup icon item -->

          </div>
          <!-- tutup icon -->          
          

        </div>
        <!-- tutup row -->

        <div class="row">
        
        </div>

      </div>
      <!-- tutup container -->
        
      <footer class="sticky-footer bg-primary">
        
      </footer>

    </div>
  

  </div>
  
  

</body>

<script src="js/jquery/jquery.min.js"></script>
<script src="js/sb-admin.min.js"></script>
<script src="js/sweetalert2.all.min.js"></script>
<script src="js/analytics.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/utils.js"></script>

<script>
  var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
var color = Chart.helpers.color;
var barChartData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
        label: 'Dataset 1',
        backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
        borderColor: window.chartColors.red,
        borderWidth: 1,
        data: [
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor()
        ]
    }, {
        label: 'Dataset 2',
        backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
        borderColor: window.chartColors.blue,
        borderWidth: 1,
        data: [
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor()
        ]
    }]
};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myBar = new Chart(ctx, {
				type: 'bar',
				data: barChartData,
				options: {
					responsive: true,
					legend: {
						position: 'top',
					},
					title: {
						display: true,					
					}
				}
			});

		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			var zero = Math.random() < 0.2 ? true : false;
			barChartData.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return zero ? 0.0 : randomScalingFactor();
				});

			});
			window.myBar.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var colorName = colorNames[barChartData.datasets.length % colorNames.length];
			var dsColor = window.chartColors[colorName];
			var newDataset = {
				label: 'Dataset ' + (barChartData.datasets.length + 1),
				backgroundColor: color(dsColor).alpha(0.5).rgbString(),
				borderColor: dsColor,
				borderWidth: 1,
				data: []
			};

			for (var index = 0; index < barChartData.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());
			}

			barChartData.datasets.push(newDataset);
			window.myBar.update();
		});

		document.getElementById('addData').addEventListener('click', function() {
			if (barChartData.datasets.length > 0) {
				var month = MONTHS[barChartData.labels.length % MONTHS.length];
				barChartData.labels.push(month);

				for (var index = 0; index < barChartData.datasets.length; ++index) {
					// window.myBar.addData(randomScalingFactor(), index);
					barChartData.datasets[index].data.push(randomScalingFactor());
				}

				window.myBar.update();
			}
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			barChartData.datasets.pop();
			window.myBar.update();
		});

		document.getElementById('removeData').addEventListener('click', function() {
			barChartData.labels.splice(-1, 1); // remove the label first

			barChartData.datasets.forEach(function(dataset) {
				dataset.data.pop();
			});

			window.myBar.update();
		});
</script>


</html>
