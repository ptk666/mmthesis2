<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Murder Manila</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/297acfa026.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="/parallax.js-1.5.0/parallax.min.js"></script>
</head>
<body>

<!--navbar-->
<nav class="navbar navbar-dark bg-dark" id="navbar">
	<a class="navbar-brand" href="#"><i class="fas fa-search"></i> Murder Manila</a>
</nav>

<!--parallax-->
<div class="parallax">
<div class="heading">
	From the team that brought you Mystery Manila <img src="2.png" width="50" height="70">
	<br>
	<img src="12.png" width="570" height="570">
	<br>
	<button type="button" class="btn btn-light" id="btn-booking">BOOK NOW</button>
	</div>
</div>
<p class="booking">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan enim et purus molestie egestas. Cras eget dignissim magna. Ut auctor placerat turpis ac tincidunt. Donec lacinia mollis lacinia. Donec congue venenatis metus eget elementum. Maecenas congue neque nec ipsum bibendum euismod. In condimentum dignissim congue. Donec vel maximus ante. Morbi ultricies tempus tincidunt. Fusce vehicula eu nibh sed tristique. Aenean elit ex, lobortis in tortor et, finibus condimentum metus. Aliquam id hendrerit mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dolor nisi, malesuada eu diam vel, sollicitudin interdum purus.

Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum malesuada rhoncus est, maximus pharetra diam varius a. Suspendisse dignissim varius dapibus. Sed scelerisque ornare massa, a dignissim tortor tincidunt sit amet. Maecenas neque tellus, gravida sed magna vel, sodales interdum tortor. Sed at auctor quam. Morbi ipsum nunc, aliquet sit amet dictum in, finibus non magna. Aenean sollicitudin, tellus ac facilisis lobortis, sapien enim volutpat nunc, et malesuada enim mauris ac orci. Vivamus erat nulla, luctus in lectus eget, lacinia ornare ex. Praesent interdum lacus vitae quam imperdiet facilisis.

Phasellus congue commodo est vitae faucibus. Nulla faucibus tellus sed ante rhoncus vulputate. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris congue tortor a felis pulvinar, in sagittis metus viverra. Aliquam pretium ex vitae leo ornare faucibus. Duis ultrices interdum enim, vel pellentesque leo ultricies feugiat. Nulla suscipit molestie enim, quis ultrices orci vestibulum eget. Nunc tincidunt dui ac lectus bibendum, id molestie orci lobortis. Praesent mollis facilisis porttitor. Nunc dignissim massa eu magna ultricies laoreet. Etiam tempor blandit dolor ac commodo. Aenean semper purus diam, congue vehicula leo lacinia in. Mauris malesuada venenatis erat in lacinia. Etiam ultricies semper volutpat. Curabitur a porttitor nulla, eu ornare purus.</p>

<footer id="footer">
	<p class="footer-con">CONTACT US | Bruce James Dela Cruz</p>
</footer>
</body>
<style>
	body {
		padding: 0;
		margin: 0;
		width: 100%;
		height: 100vh;
		font-family: 'Nunito', sans-serif;
		 letter-spacing: 0.5px;
	}
	.parallax {
		min-height:95%;
		background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("1.jpg");
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-position: center;
		
	
	}
	.heading {
		position: absolute;
		color: #fff;
		top: 10%;
		left: 35%;
		font-size: 150%;
		text-shadow: 0 0 10px #000;
	}
	#btn-booking {
		padding: 5px 20px;
		position: absolute;
		left: 37%;
	}
	.booking {
		float: left;
		width: 100%;
		text-align: center;
		padding: 10px 10px;
		padding-bottom: 100px;
	}
	#footer {
		position: relative;
		background-color: #000;
		height: 20%;
		margin-top: -100px;
		clear: both;
	}
	.footer-con {
		position: absolute;
		text-align: center;
		color: #fff;
		top: 30%;
		width: 100%;
	}
	
</style>
</html>