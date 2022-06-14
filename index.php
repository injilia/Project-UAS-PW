<?php
$conn = mysqli_connect("localhost", "root", "", "dataindonesia");

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}
$provinsi = query("SELECT * FROM t_provinsi ORDER BY id ASC");

function cari($keyword)
{
	$query = "SELECT * FROM t_provinsi WHERE
				nama LIKE '%$keyword%' ";
	return query($query);
}

// ketika tombol pencarian di tekan
if (isset($_POST["cari"])) {
	$provinsi = cari($_POST["keyword"]);
}



?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" href="css/styleindex.css">
	<title>Home</title>
</head>

<body>
	<div id="preloader"></div>


	<header id="navbar">
		<nav>
			<h1>Hello Indonesia!</h1>
			<ul>
				<li style="list-style:none;"><a href="klmpk4/index.html"><i class="fa-solid fa-people-group"></i></a></li>
			</ul>
		</nav>

	</header>
	<section class="banner">
		<h2>Wellcome</h2>
		<div class="wave wave1"></div>
		<div class="wave wave2"></div>
		<div class="wave wave3"></div>
		<div class="wave wave4"></div>
	</section>
	<!-- ================================================= about ============================================= -->
	<div class="def">
		<!-- <img src="map3.png" alt=""> -->
		<div>
			<h1>About</h1>
			<p>Indonesia ( Indonesian pronunciation: [in.ˈdo.nɛ.sja] ), with the official name of the Republic of Indonesia ( RI ) or in full the Unitary State of the Republic of Indonesia ( NKRI ), is an archipelagic country in Southeast Asia which is crossed by the equator and located between mainland Asia and Oceania , and between the Pacific Ocean and the Indian Ocean .</p>
			<br>
			<p>Indonesia is the 14th largest country as well as the largest archipelagic country in the world with an area of ​​1,904,569 km, and the country with the sixth largest island in the world, with 17,504 islands.The alternative name commonly used to refer to the "Indonesian Archipelago" is Nusantara. In addition, Indonesia is also the fourth most populous country in the world with a population of 270,203,917 in 2020, as well as the most populous and largest Muslim country in the world, with more than 230 million adherents. Indonesia is one of the most multiracial, multiethnic, and multicultural countries in the world, just like the United States .</p>
			<br>
			<a href="https://id.wikipedia.org/wiki/Indonesia">More</a>
		</div>
	</div>
	<!-- ===================================================== presiden =============================================== -->
	<div class="presiden">
		<div class="box">
			<h1>Presiden Indonesia (2019-2024)</h1>
			<br>
			<div class="img">
				<img src="https://i0.wp.com/www.cirebonkota.go.id/wp-content/uploads/2018/05/jokowi.jpg" alt="">
			</div>
			<br>
			<a href="https://id.wikipedia.org/wiki/Joko_Widodo?tableofcontents=1">Ir. Joko Widodo</a>
		</div>
	</div>
	<div class="sub">
		<h1>LET'S VISIT INDONESIA!!!</h1><br><br>
		<h2>Indonesia has...</h2>
	</div>
	<div class="data">
		<div class="box">
			<div class="in">
				<h1>"34"</h1>
			</div>
			<p>province</p>
		</div>
		<div class="box">
			<div class="in">
				<h1>"415"</h1>
			</div>
			<p>city</p>
		</div>
		<div class="box">
			<div class="in">
				<h1>"7274"</h1>
			</div>
			<p>district</p>
		</div>
		<div class="box">
			<div class="in">
				<h1>"83,467"</h1>
			</div>
			<p>village</p>
		</div>
	</div>
	<div class="cari">
		<form action="" method="post">
			<input type="text" name="keyword" size="15" autofocus placeholder="--search province--" autocomplete="off">
			<button type="submit" name="cari"><i class="fa-solid fa-magnifying-glass"></i></button>
		</form>
	</div>
	<div class="provinsi">
		<?php $i = 1 ?>
		<?php foreach ($provinsi as $row) : ?>
			<a href="prov.php?id=<?= $row['id'] ?>"><?php echo $row['nama']; ?></a>
			<?php $i++; ?>
		<?php endforeach; ?>
	</div>

	<div class="gallery">
		<div class="img"><span><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.ytimg.com%2Fvi%2FKczgN6blLKc%2Fmaxresdefault.jpg&f=1&nofb=1" alt=""></span></div>
		<div class="img"><span><img src="http://3.bp.blogspot.com/-FhQGb1I2H8k/U6MTxsYhvTI/AAAAAAAAApo/sYlpmLxcmXg/w1200-h630-p-k-no-nu/bunaken.jpg" alt=""></span></div>
		<div class="img"><span><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fres-5.cloudinary.com%2Fenchanting%2Fw_1600%2Ch_780%2Cc_fill%2Cf_auto%2Fet-web%2F2019%2F11%2FEnchanting-Travel-Indonesia-Bali-Tours-Guest-Image-Annette-Kiel-Faverdin.jpg&f=1&nofb=1" alt=""></span></div>
		<div class="img"><span><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi0.wp.com%2Fasiatimes.com%2Fwp-content%2Fuploads%2F2018%2F09%2FIndonesia-Komodo-National-Park-East-Nusa-Tenggara-September-16-2018.jpg%3Ffit%3D1200%252C674%26ssl%3D1&f=1&nofb=1" alt=""></span></div>
		<div class="img"><span><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fnews.cgtn.com%2Fnews%2F3d3d514e306b7a4d34457a6333566d54%2Fimg%2F3d87edc466734bbbaf7cf9fdcf61d761%2F3d87edc466734bbbaf7cf9fdcf61d761.jpg&f=1&nofb=1" alt=""></span></div>
		<div class="img"><span><img src="https://www.kopimusik.com/wp-content/uploads/destinasi-wisata-alam-indonesia-gunung-bromo.jpg" alt=""></span></div>
	</div>
	<div class="quote">
		<h1>I Love INDONESIA</h1>
	</div>
	<div class="contact">

		<div class="container">
			<div class="blok"></div>
			<div class="box">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5656.553303884973!2d124.82699150457671!3d1.458764798704743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3287748d30cfd679%3A0x2f0ca179d0b91656!2sUniversitas%20Sam%20Ratulangi!5e0!3m2!1sid!2sid!4v1655014031814!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="box">
				<h1>Contact Us</h1>
				<br>
				<div class="us">
					<h2>Email</h2>
					<p>rosalinakarinda026@student.unsrat.ac.id</p>
				</div>
				<div class="us">
					<h2>Follow Us</h2>
					<div class="li">
						<a href="https://www.instagram.com/unsrat1961/"><i class="fa-brands fa-instagram"></i></a>
						<a href="https://www.youtube.com/c/UNSRAT1961"><i class="fa-brands fa-youtube"></i></a>
						<a href="https://web.facebook.com/UNSRAT/?_rdc=1&_rdr"><i class="fa-brands fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="blok"></div>
		</div>

	</div>


	<div class="last">
		<div class="box">
			<h4>&copy;Copyright @2022 by kelompok 4</h4>
		</div>
	</div>
</body>

<script>
	// loader
	var loader = document.getElementById("preloader");
	window.addEventListener("load", function() {
		loader.style.display = "none";
	})

	function myFunction() {
		confirm("Do You Want To Logout?");
		if (confirm(text) == true) {
			window.location.href = "logout.php";
		}
	}
	window.onscroll = function() {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("navbar").style.top = "-60px";
		} else {
			document.getElementById("navbar").style.top = "0px";
		}
	}
</script>

</html>