<?php
	include 'header.php';
?>


<div class="container">
<h1>BLOG</h1>
	<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images/slide1.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="images/slide2.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="images/slide3.jpg" class="d-block w-100" alt="...">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</div>



<?php
	include 'footer.php';
?>