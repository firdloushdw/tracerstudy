@extends('pages.admin.layout')
@section('title', 'Dashboard')
@section('content')

<script type="text/javascript">
	document.getElementsByClassName('side-menu')[0].classList.add('active')
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4"></script>
<div class="container my-3">
	<legend><strong>Dashboard</strong></legend>
	<div class="w-100 bg-white borderradius-10 border border-secondary p-md-4 p-3">

		<h5><strong>Rekap Data Alumni<br>2023</strong></h5>
		<div class="d-md-flex align-items-center justify-content-center">
			<canvas id="rekapDataAlumni" width="250" height="250"></canvas>
	  		<div id="chartLegend" class="ms-md-5"></div>
	  	</div>
	</div>
</div>
<script>
  	var ctx = document.getElementById("rekapDataAlumni").getContext("2d");
  	var rekapDataAlumni = new Chart(ctx, {
    	type: "pie",
    	data: {
      		labels: ["Melanjutkan Pendidikan", "Bekerja", "Belum Bekerja", "Wirausaha"],
      		datasets: [
        		{
          			data: [28, 32, 18, 22],
          			backgroundColor: ["#5DD6DE", "#AFFE93", "#F9D1D1", "#4F85F8"],
        		},
      		],
    	},
    	options: {
      		responsive: false,
      		legend: {
        		display: false,
      		},
      		tooltips: {
        		enabled: true,
      		},
    	},
  	});

  	var chartLegend = document.getElementById("chartLegend");
  	var legendHTML = '';
  	rekapDataAlumni.data.datasets[0].data.forEach(function(dataPoint, index) {
    	var backgroundColor = rekapDataAlumni.data.datasets[0].backgroundColor[index];
    	var label = rekapDataAlumni.data.labels[index];
    	legendHTML += '<div class="d-flex align-items-center my-2"><span class="me-3" style="display:inline-block;width:20px;height:20px;background-color:' + backgroundColor + '"></span>'+label+'</div>';
  	});
  	chartLegend.innerHTML = legendHTML;
</script>

@endsection