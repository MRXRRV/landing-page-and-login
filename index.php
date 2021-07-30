<!DOCTYPE html>
<html>
<head>
	<title>Pagina web maqutada con bootstrap y estilos css</title>
	<meta name="viewport" content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/bootstrap-4.3.1/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css?<?php print date("Y-m-d H:i:s"); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header>
		<nav>
			<section class="container nav-2">
				<div class="logo">
					<a href="#">
						<img src="img/logo-jordan-alexander.png" alt="">	
					</a>
				</div>
				<div class="enlaces-header">
					<?php $arr = ['Home','We provide','Our creatyvity','Lorem','Web design','Contact Us'];
						$arrhref = ['Home','We-provide','Our-creatyvity','Lorem','Web-design','Contact-Us'];
					for ($i=0; $i <count($arr); $i++) { ?>
						<a href="#<?php print $arrhref[$i]; ?>"><?php print $arr[$i];?></a>
					<?php } ?>
					<a href="#" onclick="openLoginForm()">Iniciar sesión</a>
				</div>
				<div class="hamburger">
					<i class="fa fa-bars"></i>
				</div>
			</section>
		</nav>
		<div id="Home" class="container">
			<section class="contenido-header">
				<section class="textos-header">
					<h1>Our creatyvity is your success</h1>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, laboriosam.</p>
					<a href="#">Learn more</a>
				</section>
				<img src="img/primeraIlustracion.svg" alt="">
			</section>
		</div>
	</header>
	<div id="We-provide" class="container-color">
		<div class="container contenedor-1">
			<div class="container row">
				<h1>We provide a wide range</h1>
			</div>
			<div class="row contenedor-articulo">
				<div class="articulo">
					<i class="fa fa-pencil"></i>
					<h3>Graphic Design</h3>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Adipisci ipsa temporibus architecto officia delectus amet!</p>
					<a href="" ref="#">read More ---></a>
				</div>
				<div class="articulo">
					<i class="fa fa-code"></i>
					<h3>Web Design</h3>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Adipisci ipsa temporibus architecto officia delectus amet!</p>
					<a href="" ref="#">read More ---></a>
				</div>
				<div class="articulo">
					<i class="fa fa-pie-chart"></i>
					<h3>Video Production</h3>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Adipisci ipsa temporibus architecto officia delectus amet!</p>
					<a href="" ref="#">read More ---></a>
				</div>
				<div class="articulo">
					<i class="fa fa-comments"></i>
					<h3>SEO</h3>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Adipisci ipsa temporibus architecto officia delectus amet!</p>
					<a href="" ref="#">read More ---></a>
				</div>
				<div class="articulo">
					<i class="fa fa-bar-chart"></i>
					<h3>Marketing</h3>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Adipisci ipsa temporibus architecto officia delectus amet!</p>
					<a href="" ref="#">read More ---></a>
				</div>
				<div class="articulo">
					<i class="fa fa-cog"></i>
					<h3>Inphograpics</h3>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Adipisci ipsa temporibus architecto officia delectus amet!</p>
					<a href="" ref="#">read More ---></a>
				</div>
			</div>
		</div>
	</div>
	<div id="Our-creatyvity" class="container">
		<div class="questions">
			<div class="textos-questions">
				<h1>Our creatyvity is your success</h1>
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, laboriosam</p>
				<a href="#">Learn more</a>
			</div>
			<div class="textos-questions">
				<img src="img/segundaIlustracion.svg">
			</div>
		</div>
	</div>
	<div id="Lorem" class="results">
		<div class="container">
			<div class="contenedor-1 conten-results">	
				<section class="numbers">
					<div class="number">
						<h4>+2322</h4>
						<p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Odit, libero.</p>
					</div>
					<div class="number">
						<h4>+2322</h4>
						<p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Odit, libero.</p>
					</div>
					<div class="number">
						<h4>+2322</h4>
						<p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Odit, libero.</p>
					</div>
					<div class="number">
						<h4>+2322</h4>
						<p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Odit, libero.</p>
					</div>
				</section>
				<section class="results-text">
					<h4>Lorem, ipsum dolor sit amet.</h4>
					<p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Odit, libero.</p>
					<a href="#">Ingrese aqui</a>
				</section>
			</div>
		</div>	
	</div>
	<div id="Web-design" class="container contenedor-1 service">
		<img src="img/terceraIlustracion.svg">
		<div class="box-skills">
			<h4><i class="fa fa-check-circle"></i> Web design</h4>
			<h4><i class="fa fa-check-circle"></i> Web develovment</h4>
			<h4><i class="fa fa-check-circle"></i> SEO</h4>
			<h4><i class="fa fa-check-circle"></i> Marketing</h4>
			<h4><i class="fa fa-check-circle"></i> Web support</h4>
		</div>
	</div>
	<footer id="Contact-Us">
		<div class="part-footer">
			<img src="img/logo-jordan-alexander.png">
		</div>
		<div class="part-footer">
			<h4>Servicios</h4>
			<a href="">servicios 1</a>
			<a href="">servicios 1</a>
			<a href="">servicios 1</a>
		</div>
		<div class="part-footer">
			<h4>Acerca de</h4>
			<a href="">Acerca de 1</a>
			<a href="">Acerca de 1</a>
			<a href="">Acerca de 1</a>
		</div>
		<div class="part-footer">
			<h4>Redes sociales</h4>
			<div class="social-media">
				<i class="fa fa-facebook-f"></i>
				<i class="fa fa-twitter"></i>
				<i class="fa fa-instagram"></i>
				<i class="fa fa-youtube"></i>
				<i class="fa fa-github"></i>
			</div>
		</div>
	</footer>

	<div class="login-container">
		<div class="popup-overlay"></div>
		<div class="cards">
			<div class="front">
				<div class="popup">
					<div class="popup-close" onclick="closeLoginForm()">×</div>
					<div class="form">
						<div class="avatar">
							<img src="https://bit.ly/31pHqJb" alt="">
						</div>
						<div class="header">
							Iniciar sesión
						</div>
						<form action="#">	
							<div class="element">
								<label for="username">Usuario</label>
								<input type="text" id="username" required>
							</div>
							<div class="element">
								<label for="password">Contraseña</label>
								<input type="password" id="password" required>
							</div>
							<div class="element">
								<button>Login</button>
							</div>
							<div class="element">
								<span>¿No tienes cuenta?</span><a href="#" id="register-user">Registrate</a>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="back">
				<div class="popup">
					<div class="popup-close" onclick="closeLoginForm()">×</div>
					<div class="form">
						<div class="avatar">
							<img src="https://bit.ly/31pHqJb" alt="">
						</div>
						<div class="header">
							Registro
						</div>
						<form action="#">
							<div class="element">
								<label for="nombre">Nombre</label>
								<input type="text" id="nombre" required>
							</div>
							<div class="element">
								<label for="apellido">Apellidos</label>
								<input type="text" id="apellido" required>
							</div>
							<div class="element">
								<button>Crear cuenta</button>
							</div>
							<div class="element">
								<span>¿Ya tienes una cuenta?</span><a href="#" id="login-user">Iniciar sesión</a>
							</div>		
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
		

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/scroll-menu-landing.js?<?php print date('Y-m-d H:i:s'); ?>"></script>
<script src="js/main.js?<?php print date('Y-m-d H:i:s'); ?>"></script>
<script type="text/javascript">
	function openLoginForm(){
		document.body.classList.add("showLoginForm");
	}
	
	function closeLoginForm(){
	  	document.body.classList.remove("showLoginForm");
	}


	$('#login-user').on('click',function(e) {
        e.preventDefault();
        displayForgotUser();
    });

	$('#register-user').on('click',function(e) {
        e.preventDefault();
        displayForgotRegister();
    });

    function displayForgotRegister() {
        $(".login-container").find('.cards').toggleClass("flipped");
        setTimeout(function(){$('.front').hide()},200);
        setTimeout(function(){$('.back').show()},200);
    }

    function displayForgotUser() {
        $(".login-container").find('.cards').toggleClass("flipped");
        setTimeout(function(){$('.front').show()},200);
        setTimeout(function(){$('.back').hide()},200);
    }
</script>
</html>