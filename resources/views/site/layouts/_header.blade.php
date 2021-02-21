<!DOCTYPE html>
<html lang="en">

<head>
	<title>Traveland - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
            <!--<a class="navbar-brand" href="index.html"><span>Traveland</span></a>-->
            <a class="navbar-brand" href="index.html">
                <img class="img-logo"
                    src="{{asset('images/logo_travelAgency.png')}}">
                </img>
            </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="{{route('home.index')}}" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="{{route('sobre.index')}}" class="nav-link">Sobre</a></li>
					<li class="nav-item"><a href="{{route('destino.index')}}" class="nav-link">Destino</a></li>
					<!--<li class="nav-item"><a href="hotel-resto.html" class="nav-link">Hotels &amp; Restaurant</a></li>
					<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>-->
					<li class="nav-item"><a href="{{route('contato.index')}}" class="nav-link">Contato</a></li>
					<li class="nav-item cta"><a href="#" class="nav-link">Agende agora</a></li>

				</ul>
			</div>
		</div>
	</nav>
    <!-- END nav -->

    @yield('body')
