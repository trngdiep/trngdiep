<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐH4SHOP</title>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="trangchu.css">
</head>
<body>
    <header class="stiky-top">
		<div class="container">
			<div class="row">
				<div class="col-2 menu" >
					<h1 class='txtdeepshadow'>ĐH4 SHOP</h1>
				</div>
				<div class="col-2">
				</div>
				<div class="col-8 menu">
					<ul>
						<li><a href="">Trang chủ</a></li>
						<li><a href="mobile.php">Sản phẩm</a>
						</li>
                        <li><a href="">Giỏ hàng</a></li>
						<li><a href="">Liên hệ</a></li>
                        <li><a href="dangnhap.php">Đăng nhập</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="header_search">
	   		<input type="text" name="" id="" class="header_search-input" placeholder="Nhập tên sản phẩm cần tìm kiếm">
	   		<input class="timkiem" type="submit" value="Tìm kiếm" name="" id="">
		</div>  
	</header>
	<marquee behavior="alternate" width="100%">Chào mừng quý khách đến với ĐH4 SHOP</marquee>  
	<div class="container slider-margin">
		<div class="row">
			<div class="col-12">
					<div class="slideshow-container">
		<div class="mySlides fade">
			<div class="numbertext">
				1/3
			</div>
			<img src="img/logo2.png" style="width: 100%;">
			<div class="text">ĐH4 SHOP</div>
		</div>
		<div class="mySlides fade">
			<div class="numbertext">
				2/3
			</div>
			<img src="img/logo3.png" style="width: 100%;">
			<div class="text">ĐH4 SHOP</div>
		</div>
		<div class="mySlides fade">
			<div class="numbertext">
				3/3
			</div>
			<img src="img/logo1.png" style="width: 100%;">
			<div class="text">ĐH4 SHOP</div>
		</div>
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>
	<div style="text-align: center;">
		<span class="dot" onclick="currentSlide(1)"></span>
		<span class="dot" onclick="currentSlide(2)"></span>
		<span class="dot"onclick="currentSlide(3)"></span>
	</div>
	
	<div class="mobile_service row">
		<div class="col-3">
			<div class="mobile_service_in" style="margin: auto">
				<div class="mobile_service_in_img" style="margin: auto">
					<img src="img/thuonghieu.png" alt="" >
				</div>
				<p style="text-align: center">Thương hiệu đảm bảo</p>
			</div>
		</div>
		<div class="col-3">
			<div class="mobile_service_in" style="margin: auto">
				<div class="mobile_service_in_img" style="margin: auto">
					<img src="img/doitra.png" alt="" >
				</div>
				<p style="text-align: center">Đổi trả dễ dàng</p>
			</div>

		</div>
		<div class="col-3">
			<div class="mobile_service_in" style="margin: auto">
				<div class="mobile_service_in_img" style="margin: auto">
					<img src="img/giaohang.png" alt="" >
				</div>
				<p style="text-align: center">Giao hàng tận nơi</p>
			</div>
		</div>
		<div class="col-3">
			<div class="mobile_service_in" >
				<div class="mobile_service_in_img" style="margin: auto">
					<img src="img/sanpham.png" alt="" >
				</div>
				<p style="text-align: center">Sản phẩm chất lượng</p>
			</div>
		</div>
	</div>
</div>
</div>
</body>
<script>
   var slideIndex = 0;
showSlides();
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 1000); // Change image every 2 seconds
}
</script>
</html>