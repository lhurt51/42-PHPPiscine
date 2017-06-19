<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="signed-off.css">
		<title>Home</title>
	</head>
	<?php include("header.php") ?>
	<body>
		<section class="content-wrapper">
			<h2 id="title">Rush01</h2>
			<p id="t-cap">Awesome space battles at your fingertips!</p>
			<div class="my-slides">
				<div class="slide">
					<img src="imgs/spacebattle1.jpg" alt="space battle 1">
				</div>
				<div class="slide">
					<img src="imgs/spacebattle2.jpeg" alt="space battle 2">
				</div>
				<div class="slide">
					<img src="imgs/spacebattle2.jpg" alt="space battle 3">
				</div>
				<div class="nav-slide"><button class="slide-btn btn-display-left" onclick="plusSlides(-1)">&#10094;</button>
					<button class="slide-btn in-index" onclick="curSlide(1)">1</button>
					<button class="slide-btn in-index" onclick="curSlide(2)">2</button>
					<button class="slide-btn in-index" onclick="curSlide(3)">3</button>
				<button class="slide-btn btn-display-right" onclick="plusSlides(+1)">&#10095;</button></div>
			</div>
			<?php
			if ($_SESSION['loggued_on_user'] === "")
				echo "<h3>Play today all you need to do is sign up</h3>
					<p>It is completely free!</p>";
			else
				echo "<h3>Choose a server to join!</h3>";
			?>
		</section>
	</body>
	<script type="text/javascript">
        var slideIndex = 1;
        showSlide(slideIndex);

        function plusSlides(n) {
            showSlide(slideIndex += n);
        }

        function curSlide(n) {
            showSlide(slideIndex = n);
        }

        function showSlide(n) {
            var x = document.getElementsByClassName("slide");
            var dots = document.getElementsByClassName("in-index");
            if (n > x.length) {slideIndex = 1};
            if (n < 1) {slideIndex = x.length};
            for (var i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (var i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" back-btn", "");
            }
            x[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " back-btn";
        }
    </script>
</html>
