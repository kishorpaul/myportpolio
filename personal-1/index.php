<!DOCTYPE html>
<html lang="en">
<head>
	<title>My personal portpolio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>

<style type="text/css">
	
	*,
	*::before,
	*::after{
		box-sizing: border-box;
	}
	*:focus{
		outline: none;
	}
	body{
		padding: 0;
		margin:0;
		background: #000;
		color: white;
		font-family: "oxygen", sans-serif;
		
	}
	a{
		text-decoration: none;
	}
	img{
		width: 100%;
	}

	.home img{
		width: 100%;
		
		-webkit-filter: grayscale(100%) contrast(100%);
		filter: grayscale(100%) contrast(200%) brightness(60%);
	}

	.folio img{
		filter: grayscale(100%);
	}
	aside{
		position: fixed;
		background: #222;
		top: 0px;
		left: 0px;
		width: 120px;
		height: 100%;
		overflow: none;
		z-index: 1;
		text-align:center;
		padding:0;
	}
	aside img{
		filter: grayscale(100%) contrast(50%) brightness(100%);
		margin-bottom: -3px;
	}
	.material-icons.md-36	{
		font-size: 36px;
	}
	aside a{
		display: block;
		padding:15px 0;
		color: white;
		transition: all 0.35s;
		text-transform: uppercase;
		font-size: 0.75em;
		letter-spacing: 2px;
	}
	aside p{
		margin:0;
		padding: 0;
	}
	aside a:hover{
		background: #000;
	}
	aside nav a:nth-child(2){
		background: #000;
	}
	aside nav a:nth-child(2):hover{
		background: #b2b2b2;
		color: #222;
	}
	main{
		max-width: 980px;
		background: #000;
		margin-left: 20%;
		padding: 12px 50px 12px 50px;
	}
	header{
		text-align: center;
		letter-spacing: 2px;
	}
	header h1{
		font-weight: bold;
		font-size: 4em;
		letter-spacing: 4px;
	}
	header h5{
		font-weight: 300;
		font-size: 1em;
		letter-spacing: 4px
		color:#b2b2b2;
	}
	.about,
	.folio,
	.contact{
		line-height: 1.5em;
		letter-spacing: 1px;
		font-weight: 300;
	}
	.about h2,
	.folio h2,
	.contact h2{
		font-weight: 3--;
		text-transform: uppercase;
		text-decoration: line-through;
		padding-bottom: 10px;
		margin: 100px 0 0 0;
		letter-spacing: 4px;
	}
	.about p{
		color: #b2b2b2;
	}
	.about span{
		font-weight: 600;
		color:white;
	}
	.about h3{
		font-weight: 300;
		margin: 50px 0;
	}
	.container{
		width: 100%;
		background-color: #b2b2b2;
	}
	.skills{
		text-align: right;
		padding-right: 20px;
		line-height: 30px;
		color: white;
		background-color: #424242;
	}
	.java{
		width: 85%;
	}
	.html{
		width: 90%;
	}
	.python{
		width: 95%;
	}
	.js{
		width: 65%;
	}
	.php{
		width: 60%;	
	}

	.folio h3{
		color: white;
		font-weight: 300;
		letter-spacing: 2px;
	}
	.folio p{
		font-size: 0.875em;
	}
	.row-halves{
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		justify-content: space-between;
		margin: 20px 0;
		-webkit-flex-pack:jquery;
	}
	.row-halves .col{
		width: 49%;
	}
	.col{
		border: 1px solid #222;
		background: #222;
		color: #b2b2b2;
		padding: 10px;
	}
	label{
		color:#b2b2b2;
	}
	form input[type="text"],
	select,
	textarea{
		width: 100%;
		padding: 12px;
		border: none;
		border: 1px solid #222;
		background: transparent;
		margin-top:6px;
		margin-bottom: 16px;
		resize: vertical;
		color: #b2b2b2;
	}
	form input[type="text"]:focus,
	textarea:focus{
		outline: none;
		border: 1px solid #009688;
	}
	input[type="submit"]{
		background-color: transparent;
		color: #b2b2b2;
		text-transform: uppercase;
		padding: 12px 20px;
		border: 1px solid #222;
		cursor: pointer;
		transition: all 0.35s;
	}
	input[type="submit"]{
		background-color: transparent;
		color: #b2b2b2;
		text-transform: uppercase;
		padding: 12px 20px;
		border: 1px soild #222;
		cursor: pointer;
		transition: all 0.35s;
	}
	input[type="submit"]:hover{
		background-color: #b2b2b2;
		color: #222;
	}
	.contact .container{
		margin-top: 20px;
		margin-bottom: 100px;
		background: transparent;
		padding: 20px 0;
	}
	.footer{
		border-bottom: 1px solid #222;
	}
	.top-bar{
		padding: 20px 0;
		text-align: center;
	}
	.top-bar a{
		margin: 10px;
		font-size: 2em;
		color: #b2b2b2;
		transition: all 0.35s;
		display: inline-block;
	}
	.top-bar a:hover{
		transform: scale(1.1);
		color: #009688;
	}
	.bottom-bar{
		background: #000;
		font-size: 0.75em;
		text-align: center;
	}
	@media(max-width: 768px){
		.row-halves{
			display: block;
		}
		.row-halves .col{
			width: 100%;
			margin: 0 0 10px 0;
		}
	}
		@media(max-width: 601px){
		aside{
			display: none;
		}
		main{
			width: 100%;
			margin: 0 auto;
			padding: 12px 25px;
		}

		header{
			margin-top: 80px;
		}
		header h1{
			font-size: 3em;
			line-height: 1.4em;
		}
		header h5{
		font-size: 3em;
		letter-spacing: : 2px;
		}
		.mobile-nav{
			position: fixed;
			width: 100%;
			display: flex;
			justify-content: space-around;
			background: rgba(0,0,0,0.8);
			z-index: 1;
		}
		.mobile-nav a{
			width: 100%;
			color: #b2b2b2;
			text-transform: uppercase;
			font-size: 0.875em;
			letter-spacing: 2px;
			text-align: center;
			padding: 10px 10px;
			transition: all 0.35s;
		}
		.mobile-nav a:hover{
			background: #b2b2b2;
			color: #222;
		}
	}
	@media (min-width:600px){
		.mobile-nav{
			display: none;
		}
	}


</style>

<body>
	<aside>
		<nav>
			<img src="a.png">
			<a href="#home"><i class="material-icons md-36">Home</i>
			<p>Home</p></a>
			

			<a href="#about"><i class="material-icons md-36">person</i>
			<p>About</p></a>
			

			<a href="#folio"><i class="material-icons md-36">image</i>
			<p>Folio</p></a>
			

			<a href="#contact"><i class="material-icons md-36">mail</i>
			<p>Contact</p></a>
			
		</nav>
	</aside>
	<nav class="mobile-nav">
		<a href="#home">Home</a>
		<a href="#about">About</a>
		<a href="#folio">Folio</a>
		<a href="#contact">Contact</a>
	</nav>
	<main>
		<header class="home" id="home"><br><br>
			<h1>I'm KishorPaul</h1>
			<h5>Designer // Developer</h5>
			<img src="a4.png" alt="">
		</header>
	</main>
	<section 4class="about" id="about">
		<h2>About me</h2>
		<p>
			<span>Hello, I'm Kishorpaul</span> I'm an web-site and software developer who mainly focuses on the skills in demand. A bit about me, I love music and travelling, creating inovative things.
		</p>
		<p>
			I believe in user centered design and delivery. Interested in php and css along with html.
		</p>
		<h3>My Skills</h3>
		<p>Python</p>
		<div class="container">
			<div class="skills python">95%</div>
		</div>
		<p>Java</p>
		<div class="container">
			<div class="skills java">90%</div>
		</div>
		<p>Html</p>
		<div class="container">
			<div class="skills html">75%</div>
		</div>
		
	</section>

	<section class="folio" id="folio">
		<h2>Folio</h2>
		<div class="row-halves">
		<div class="col">
			<img src="a1.jpg" alt="">
			<h3>Business</h3>
			<p>I believe in user centered design and delivery. Interested in php and css along with html.</p>
		</div>

		<div class="col">
			<img src="a1.jpg" alt="">
			<h3>Mobile</h3>
			<p>I believe in user centered design and delivery. Interested in php and css along with html.</p>
		</div>
	</div>


	<div class="row-halves">
		<div class="col">
			<img src="a1.jpg" alt="">
			<h3>Personal</h3>
			<p>I believe in user centered design and delivery. Interested in php and css along with html.</p>
		</div>

		<div class="col">
			<img src="a1.jpg" alt="">
			<h3>Online</h3>
			<p>I believe in user centered design and delivery. Interested in php and css along with html.</p>
		</div>
	</div>
	</section>

	<section class="contact" id="contact">
		<h2>Contact</h2>
		<div class="container">
			<form action="">
				<label for="name">Name</label>
				<input type="text" id="name" name="name">
				<label for="email">E-mail</label>
				<input type="text" id="email" name="email">
				<texta for="message">Message</label>
				<textarea name="message" style="height: 200px;" id="message"></textarea>
				<input type="submit" value="message">
			</form>
		</div>
	</section>

	<footer>
		<section class="top-bar">
			<a href=""><i class="fab fa-facebook-f"></i></a>
			<a href=""><i class="fab fa-twitter"></i></a>
			<a href=""><i class="fab fa-gethub"></i></a>
		</section>

		<section class="bottom-bar">
			<p>&copy 2019 | All rights reserved</p>
		</section>
	</footer>


</body>
</html>