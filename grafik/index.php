<!DOCTYPE html>
<html>
<head>
	<title>MEMBUAT GRAFIK DARI DATABASE MYSQL DENGAN PHP DAN CHART.JS</title>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
	body{
		font-family: roboto;
	}
 
	table{
		margin: 0px auto;
	}
	</style>
 
 
	<center class="mb-3">
		<h2>MEMBUAT GRAFIK DARI DATABASE MYSQL DENGAN PHP DAN CHART.JS</h2>
	</center>
 
 
	<?php 
	include 'koneksi.php';
	?>

	<div class="container text-center">
		<div class="row">
			<div class="col">
			Pie Chart
				<div class="w-100" style="margin: 0px auto;">
					<canvas id="myChart"></canvas>
				</div>
			</div>
			<div class="col">
			Bar Chart
				<div class="w-100" style="margin: 0px auto;">
					<canvas id="barChart"></canvas>
				</div>
			</div>
			<div class="col">
			Column
			</div>
		</div>
	</div>
	<br/>
	<br/>
 
	<table border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Mahasiswa</th>
				<th>NIM</th>
				<th>JK</th>
				<th>Fakultas</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			$data = mysqli_query($koneksi,"select * from tbl_latihan_grafik_mahasiswa");
			while($d=mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['nim']; ?></td>
					<td align="center" bgcolor="pink"><?php echo $d['jenis_kelamin']; ?></td>
					<td><?php echo $d['fakultas']; ?></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
 
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["Laki-laki", "Perempuan"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_laki = mysqli_query($koneksi,"select * from tbl_latihan_grafik_mahasiswa where jenis_kelamin='L'");
					echo mysqli_num_rows($jumlah_laki);
					?>, 
					<?php 
					$jumlah_perempuan = mysqli_query($koneksi,"select * from tbl_latihan_grafik_mahasiswa where jenis_kelamin='P'");
					echo mysqli_num_rows($jumlah_perempuan);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

	<script>
		var chrt = document.getElementById("barChart").getContext("2d");
		var chartId = new Chart(chrt, {
			type: 'bar',
			data: {
				labels: ["Teknik", "Ekonomi","Fisip","Pertanian"],
				datasets: [{
				label: "data mahasiswa",
				data: [
					<?php 
					$Teknik = mysqli_query($koneksi,"select * from tbl_latihan_grafik_mahasiswa where fakultas='Teknik'");
					echo mysqli_num_rows($Teknik);
					?>,
					<?php 
					$Ekonomi = mysqli_query($koneksi,"select * from tbl_latihan_grafik_mahasiswa where fakultas='Ekonomi'");
					echo mysqli_num_rows($Ekonomi);
					?>,
					<?php 
					$Fisip = mysqli_query($koneksi,"select * from tbl_latihan_grafik_mahasiswa where fakultas='Fisip'");
					echo mysqli_num_rows($Fisip);
					?>,
					<?php 
					$Pertanian = mysqli_query($koneksi,"select * from tbl_latihan_grafik_mahasiswa where fakultas='Pertanian'");
					echo mysqli_num_rows($Pertanian);
					?>

				],
				backgroundColor: ['lightblue'],
				borderColor: ['black'],
				borderWidth: 2,
				}],
			},
			options: {
				responsive: false,
			},
		});
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
