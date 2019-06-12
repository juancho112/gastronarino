<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Inicio</title>
		<link rel = "stylesheet" type = "text/css" href = "css/Estilos.css">
		<link rel = "stylesheet" type = "text/css" href = "css/estilos2.css">
		<script src="js/jquery-3.3.1.min.js"></script>
		<link rel="stylesheet" href="css/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script>
			function mostrarLogin() {
                $('#modalFondo').show(); //esto reemplaza a la instruccion (document.getElementById)
                $('#modalContenido').show();
            }
		</script>
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

		<!--SideBar-->
		<div class="w3-row w3-bar w3-light-red w3-black">
			<div class="w3-col w3-container" style="width: 8%; margin-top: 15px;">
			   	<button class="w3-bar-item w3-button">
				    <a href="login.php" id="Ref2">INICIO</a>
				</button>
			</div>

		    <div class="w3-col w3-container" style="width: 65%; margin-top: 15px;">
				<a href="#" class="w3-bar-item w3-button">PLATOS TIPICOS</a>

			    <div class="w3-dropdown-click">
				    <button class="w3-button" onclick="myFunction1()"> CORREGIMIENTOS <i class="fa fa-caret-down"></i>
				    </button>
				    <div id="demo1" class="w3-dropdown-content w3-bar-block w3-card">
					    <a href="Cabrera.php" class="w3-bar-item w3-button">CABRERA</a>
					    <a href="Catambuco.php" class="w3-bar-item w3-button">CATAMBUCO</a>
					    <a href="encanou.php" class="w3-bar-item w3-button">EL ENCANO</a>
					    <a href="SanFernando.php" class="w3-bar-item w3-button">SAN FERNANDO</a>
				    </div>
				</div>

				<div class="w3-dropdown-click">
				    <button class="w3-button" onclick="myFunction2()"> MUNICIPIOS <i class="fa fa-caret-down"></i>
				    </button>
				    <div id="demo2" class="w3-dropdown-content w3-bar-block w3-card">
					    <a href="Pastou.php" class="w3-bar-item w3-button">PASTO</a>


					   <a href="ipiales.php" class="w3-bar-item w3-button">IPIALES</a>
					   <a href="Tumaco.php" class="w3-bar-item w3-button">TUMACO</a>
				    </div>
				</div>

				<a href="#" class="w3-bar-item w3-button">GLOSARIO</a>

				<a href="#" class="w3-bar-item w3-button">CONTACTANOS</a>


	  		</div>


		    <div class="w3-col w3-container" style="width: 25%;">
			    <div class="w3-col w3-container" style="display: inline;margin-top: 5px;">
			    	<a href="#" class="w3-bar-item w3-button w3-red">Registrarse</a>
			    	<a href="Index.php" class="w3-bar-item w3-button w3-white">Iniciar sesion</a>
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

		<!--Contenido-->

  			<div class = "w3-container w3-blue-black">



			<div class='w3-half w3-container ' style='height: 900px;'> <!--de aqui fue-->
				<div class='w3-card-4' style='width: 1287px;'>

					<head>
    <title>Prueba de Bootstrap</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

  <div class="container">

    <div class="row">
      <div class="col-lg-4"  style="background-color:#fbebf1">
        <h1>CHOCLO COCINADO CON HABAS</h1>
        <p>Es platillo que no necesita mucha preparación, pero si para la selección de los ingredientes, en especial del choclo, que varía mucho del gusto, ya que se lo encuentra tierno o maduro, lo que crea una gran diferencia. el choclo tierno es más suave y pequeño, mientras que el maduro es todo lo contrario este acompañado con habas y una porcion de queso</p>
      </div>
      <div class="col-lg-4"  style="background-color:#fbebf1">
        <h1>FRESAS CON CREMA</h1>
        <p>Es un postre que incluye esta frutas que sirven partidas en cuartos, bañadas con crema de leche batida con azúcar o bien con crema de leche batida y azúcar morena salpicada al gusto.</p>
      </div>
      <div class="col-lg-4"  style="background-color:#fbebf1">
        <h1>FRITO PASTUSO</h1>
        <p>El frito Pastuso es un plato que se puede ofrecer en cualquier evento social bien sea reuniones de oficina o familiares,también en paseos campestres se sirve con carne de cerdo crispetas y papas al vapor.</p>
      </div>
    </div>
  </div>

  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-4"  style="background-color:#fbebf1">
        <h1>LAPINGACHOS</h1>
        <p>Este es un plato tipico de la region andina sur de Colombia, basicamente son tortillas asadas o fritas, hechas de papas cocidas, aplastadas y rellenas con queso.</p>
      </div>
      <div class="col-lg-4"  style="background-color:#fbebf1">
        <h1>CREMA DE LANGOSTINO</h1>
        <p>Este plato, está cocinado con una base de Sopas y cremas y pertenece a los platos de la cocina Tradicional. Por regla general se consume, principalmente, durante Todo el año, y se suele servir a los comensales como Primer plato.</p>
      </div>
      <div class="col-lg-4"  style="background-color:#fbebf1">
        <h1>CUY ASADO</h1>
        <p>En el corregimiento de Catambuco uno de los platos típicos es el cuy asado a la brasa, servido con papas y crispetas, acompañados con salsa de maní y una buena gaseosa la Cigarra. Este plato es uno de los más tradicionales del sur occidente Colombiano y su preparacion representa una fuente de trabajo para los habitantes de este sector.</p>
      </div>
    </div>

  </div>

</body>

				</div>
			</div>

		</div>


		<!--Pie de pagina-->
		<div class="w3-container w3-red w3-center">
			<p class="w3-large"><i class = "fa fa-copyright"></i>&nbsp;GASTRONARI&Ntilde;O - 2019</p>
		</div>
	</body>
</html>
