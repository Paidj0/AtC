<?php 

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>AntiCopas</title>
	<link rel="stylesheet" type="text/css" href="anticopas.css">
</head>
<body>
	<div class="header">
		<div class="brand">
			<h1>AntiCopas</h1>
		</div>

		<div class="menu">
			<ul>
				<li><a href="index.php?halaman=pascal">BAHASA</a></li>
				<li><a href="index.php?halaman=pascal">BAHASA</a></li>
				<li><a href="index.php?halaman=pascal">BAHASA</a></li>
				<li><a href="index.php?halaman=pascal">BAHASA</a></li>
				<li><a href="index.php?halaman=pascal">BAHASA</a></li>
				<li><a href="index.php?halaman=pascal">MORE</a></li>
			</ul>
		</div>
	</div>

	<div class="main">
		<?php if (isset($_GET['halaman'])) {
			$halaman=$_GET['halaman'];
			switch ($halaman) {
			case 'pascal':
				include 'halaman/pascal.php';
				break;
			}
		}
		else{
			include 'halaman/home.php';
		}
		?>
		<div class="ads"><h1 align="center" style="line-height: 90%;">ADS</h1></div>
		<div class="clear"></div>
	</div>

	<div class="footer">
		<h1 align="center">FOOTER</h1>
	</div>
</body>
</html>