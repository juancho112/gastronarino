<html>
	<head>
		<title>GASTRONARI&Ntilde;O | Pagina principal</title>
		<link rel = "stylesheet" type = "text/css" href = "css/Estilos.css">
		<link rel="stylesheet" href="css/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<!--Header-->
		<div class="w3-display-container">
			<img src="img/Fondo.jpg" alt="Lights" style="width: 100%; height: 150	;">
			<div class="w3-display-middle w3-large">
				<h1 class="w3-text-white" style="text-shadow:5px 3px 0 #444">
					<b>GASTRONARI&Ntilde;O</b>
				</h1>
			</div>
		</div>

		<div class="w3-row w3-bar w3-light-red w3-black">
			<div class="w3-col w3-container" style="width: 8%; margin-top: 15px;">
			   	<button class="w3-bar-item w3-button">
				    <a href="Index.php" id="Ref2">INICIO</a>
				</button>
			</div>

			<div class="w3-col w3-container" style="width: 77%; margin-top: 15px;">
				<a href="Platos.php" class="w3-bar-item w3-button">PLATOS TIPICOS</a>

			    <div class="w3-dropdown-click">
				    <button class="w3-button" onclick="myFunction1()"> CORREGIMIENTOS <i class="fa fa-caret-down"></i>
				    </button>
				    <div id="demo1" class="w3-dropdown-content w3-bar-block w3-card">
					    <a href="Cabrera.php" class="w3-bar-item w3-button">CABRERA</a>
					    <a href="Catambuco.php" class="w3-bar-item w3-button">CATAMBUCO</a>
					    <a href="encano.php" class="w3-bar-item w3-button">EL ENCANO</a>
					    <a href="SanFernando.php" class="w3-bar-item w3-button">SAN FERNANDO</a>
				    </div>
				</div>

				<div class="w3-dropdown-click">
				    <button class="w3-button" onclick="myFunction2()"> MUNICIPIOS <i class="fa fa-caret-down"></i>
				    </button>
				    <div id="demo2" class="w3-dropdown-content w3-bar-block w3-card">
					    <a href="Pasto.php" class="w3-bar-item w3-button">PASTO</a>

					    <a href="Ipiales.php" class="w3-bar-item w3-button">IPIALES</a>
					    <a href="Tumaco.php" class="w3-bar-item w3-button">TUMACO</a>
				    </div>
				</div>

				<a href="Glosariop.php" class="w3-bar-item w3-button">GLOSARIO</a>

				<a href="#" class="w3-bar-item w3-button">CONTACTANOS</a>

				<form name = "formulario" action = "datosPersonales.php" method = "post">
					<input type="text" name = "busqueda" class="w3-bar-item w3-input w3-white w3-mobile" style="width: 200px;" placeholder="Buscar..">&nbsp;&nbsp;
					<i class="fa fa-search" style="font-size:30px;color:red;"></i>
				</form>
	  		</div>

			<div class="w3-col w3-container" style="width: 15%;">

			    <div class="w3-dropdown-click">
				    <button class="w3-button" onclick="myFunction4()">
				        <i class="fa fa-github-alt" style="font-size:50px;color:red;text-align: right;">&nbsp;</i>
				        <i class="fa fa-caret-down"></i>
				    </button>
				    <div id="demo4" style="right: 5px; position: absolute;" class="w3-dropdown-content w3-bar-block w3-card">

					    <a href="login.php" class="w3-bar-item w3-button">Cerrar sesion</a>
				    </div>
				</div>
			</div>

			<script>
				function myFunction1() {
				    var x = document.getElementById("demo1");
				    if (x.className.indexOf("w3-show") == -1) {
				        x.className += " w3-show";
				    } else {
				        x.className = x.className.replace(" w3-show", "");
				    }
				}
				function myFunction2() {
				    var y = document.getElementById("demo2");
				    if (y.className.indexOf("w3-show") == -1) {
				        y.className += " w3-show";
				    } else {
				        y.className = y.className.replace(" w3-show", "");
				    }
				}
				function myFunction3() {
				    var z = document.getElementById("demo3");
				    if (z.className.indexOf("w3-show") == -1) {
				        z.className += " w3-show";
				    } else {
				        z.className = z.className.replace(" w3-show", "");
				    }
				}
				function myFunction4() {
				    var w = document.getElementById("demo4");
				    if (w.className.indexOf("w3-show") == -1) {
				        w.className += " w3-show";
				    } else {
				        w.className = w.className.replace(" w3-show", "");
				    }
				}
			</script>
	  	</div>
	  	<br>

		<!--Contenido-->

			<div class='w3-quarter w3-container' style='height: 200px;'>
				<div class='w3-card-4' style='width: 290px;'>
					<a href=''><img src='img/logo.jpg' alt='Norway' width='290' height='135' title=''></a>
					<h6 style="text-align: center;">JSO</h6>
					<div class='w3-container w3-center'>
						<a href='#' id='Ref2' ' title=''><h5 style='text-align: left;'></h5></a>

					</div>
				</div>
			</div>


		<div class="container">
  			<div class="card">
    			<div class="front">
      				<div class="logo"><span></span></div>
    			</div>
    				<div class="back">
      				<h1>JOINT SOFTWARE OPERATION<span><i></i></span></h1>
      				<ul>
        				<li>+57-301-514-68-47</li>
        				<li>JSO@email.com</li>
        				<li>my-JSO.com</li>
        			</ul>
    				</div>
   		 	</div>
  		</div>
  		<br>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

	  	<!--Pie de pagina-->
		<div class="w3-container w3-red w3-center">
			<p class="w3-large"><i class = "fa fa-copyright"></i>&nbsp;GASTRONARI&Ntilde;O - 2019</p>
		</div>
	</body>
</html>
