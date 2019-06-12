<html>
	<head>
		<title>GASTRONARI&Ntilde;O | San Fernando</title>
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
				<a href="#" class="w3-bar-item w3-button">PLATOS TIPICOS</a>

			    <div class="w3-dropdown-click">
				    <button class="w3-button" onclick="myFunction1()"> CORREGIMIENTOS <i class="fa fa-caret-down"></i>
				    </button>
				    <div id="demo1" class="w3-dropdown-content w3-bar-block w3-card">
					    <a href="#" class="w3-bar-item w3-button">CABRERA</a>
					    <a href="#" class="w3-bar-item w3-button">CATAMBUCO</a>
					    <a href="#" class="w3-bar-item w3-button">EL ENCANO</a>
					    <a href="#" class="w3-bar-item w3-button">SAN FERNANDO</a>
				    </div>
				</div>

				<div class="w3-dropdown-click">
				    <button class="w3-button" onclick="myFunction2()"> MUNICIPIOS <i class="fa fa-caret-down"></i>
				    </button>
				    <div id="demo2" class="w3-dropdown-content w3-bar-block w3-card">
					    <a href="#" class="w3-bar-item w3-button">PASTO</a>
					   <a href="#" class="w3-bar-item w3-button">SAMANIEGO</a>
					   <a href="#" class="w3-bar-item w3-button">CONSACA</a>
					   <a href="#" class="w3-bar-item w3-button">IPIALES</a>
					   <a href="#" class="w3-bar-item w3-button">TUMACO</a>
				    </div>
				</div>

				<a href="#" class="w3-bar-item w3-button">GLOSARIO</a>

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
					    <a href="configuracionUsuario.php" class="w3-bar-item w3-button">Configuracion de perfil</a>
					    <a href="datosPersonales.php" class="w3-bar-item w3-button">Datos personales</a>
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
	  	<div class = "w3-container w3-blue-black">
	  		<dir class = "w3-container w3-blue-black">
	  			<h6 style="text-align: center; font-size: 30;" >HELADO DE PAILA</h6>
	  			<img src="img/helado1.png" alt="Lights" style="width: 100%; height: 400;">
	  		</dir>


			<div class='w3-half w3-container' style='height: 300px;'> <!--de aqui fue-->
				<div class='w3-card-4' style='width: 600px;'>
					<div class='w3-container w3-rigth'>

						<a href='#' id='Ref2' ' title='Ed Sheeran, El artista que mas albumes vendio en 2017.'><h5 style='text-align: left;'></h5></a>
						<p id='parrafo'>

							<h6 style="text-align: center;">DESCRIPCION</h6>
							<p>
								En el corregimiento de Catambuco uno de los platos típicos es el cuy asado a la brasa, servido con papas y crispetas, acompañados con salsa de maní  y una buena gaseosa la Cigarra. Este plato es uno de los más tradicionales del sur occidente Colombiano y su preparacion representa una fuente de trabajo para los habitantes de este sector.
							</p>
						</p>
						<img src="img/helado.jpg" alt="Lights" style="width: 100%; height: 265px;">
					</div>

					<div class='w3-container w3-center'>
						<div class='w3-panel w3-leftbar w3-sand w3-xxlarge w3-serif'>
							<h6 class='w3-opacity' style='text-align: left; line-height: 0px;'>Se ofertan servicios de gastronomía principalmente los fines de semana,  </h6>
							<a id='Ref'><h6 class='w3-opacity'>los precios de Alimentación promedian los $ 30.000  </h6></a>

						</div>
					</div>
				</div>
			</div>

			<div class='w3-half w3-container' style='height: 550px;'>
				<div class='w3-card-4' style='width: 600px;'>
					<div class='w3-container w3-rigth'>
						<h6 style="text-align: center;">LUGARES RECOMENDADOS</h6>
						<h6 style="text-align: center;">Cuyquer</h6>
						<a href=''><img src='img/mapaca.jpg' alt='Norway' width='570' height='350' title='Restaurante'></a>
						<a href='#' id='Ref2' ' title='Ed Sheeran, El artista que mas albumes vendio en 2017.'><h5 style='text-align: left;'></h5></a>
						<p id='parrafo'>

							<p>


							</p>
						</p>
					</div>

					<div class='w3-container w3-center'>
						<div class='w3-panel w3-leftbar w3-sand w3-xxlarge w3-serif'>
							<h6 class='w3-opacity' style='text-align: left; line-height: 0px;'>Dirección </h6>
							<a href='https://www.google.com.co/maps/dir/1.2103835,-77.2794854/Cuyquer,+Kilometro+7+panamericana+sur,+Catambuco,+Pasto,+Nari%C3%B1o/@1.1887221,-77.3009119,14z/data=!3m1!4b1!4m16!1m6!3m5!1s0x8e292ca15d34a2d9:0x4d54ace699c32761!2sCuyquer!8m2!3d1.1670718!4d-77.2908407!4m8!1m1!4e1!1m5!1m1!1s0x8e292ca15d34a2d9:0x4d54ace699c32761!2m2!1d-77.2908407!2d1.1670718' id='Ref'><h6 class='w3-opacity'>San fernando, Pasto, Nariño </h6></a>
							<!-- Colocar el link de google maps-->
						</div>
					</div>
				</div>
			</div>

			<div class='w3-half w3-container' style='height: 400px;'>
				<div class='w3-card-4' style='width: 600px;'>
					<div class='w3-container w3-rigth'>

						<a href='#' id='Ref2' ' title='Ed Sheeran, El artista que mas albumes vendio en 2017.'><h5 style='text-align: left;'></h5></a>
						<p id='parrafo'>

							<h6 style="text-align: center;">AGREGA UN COMENTARIO</h6>
							<form action="" method="post" enctype="text/plain">
								Nombre <input type="text" name="nombre" size="30" maxlength="100">
								<br>
								<br>

								Email <input type="text" name="email" size="25" maxlength="100" value="@">
								<br>
								<br>

								Comentarios sobre su satisfacción personal
								<br>
								<textarea cols="40" rows="3" name="comentarios"></textarea>
								<br>
								<input type="submit" value="Enviar comentario">
								<br>
								<br>
								<input type="Reset" value="Borrar todo">
							</form>

						</p>
					</div>

					<div class='w3-container w3-center'>
						<div class='w3-panel w3-leftbar w3-sand w3-xxlarge w3-serif'>
							<h6 class='w3-opacity' style='text-align: left; line-height: 0px;'>Tu opinion es muy importante haznos saber sobre el sitio recomendado  </h6>
							<a id='Ref'>


						</div>
					</div>
				</div>
			</div>
			<div class='w3-half w3-container' style='height: 450px;'>
				<div class='w3-card-4' style='width: 600px;'>
					<div class='w3-container w3-rigth'>

						<a href='#' id='Ref2' ' title=''><h5 style='text-align: left;'></h5></a>
						<p id='parrafo'>
							<h6 style="text-align: center;">CALIFICANOS</h6>
							<img src= "img/estrellas.png" alt="Lights" style="width: 50%; height: 40px;">

							<h6 style="text-align: center;">COMENTARIOS</h6>

						</p>
					</div>

					<div class='w3-container w3-center'>
						<div class='w3-container w3-center'>
						<div class='w3-panel w3-leftbar w3-sand w3-xxlarge w3-serif'>
							<h6 class='w3-opacity' style='text-align: left; line-height: 0px;'>Oscar Gomez:  </h6>
							<a id='Ref'>
							<h6 class='w3-opacity'>Super recomendado el lugar para pasar un buen tiempo en familia. </h6></a>

						</div>

							<input type="submit" value="Eliminar comentario">
								<br>
						<div class='w3-panel w3-leftbar w3-sand w3-xxlarge w3-serif'>

							<h6 class='w3-opacity' style='text-align: left; line-height: 0px;'>Santiago Rosero:  </h6>
							<a id='Ref'>
							<h6 class='w3-opacity'>Delicioso los platos. lugar super recomendado. </h6></a>

						</div>
							<input type="submit" value="Eliminar comentario">
								<br>

						<div class='w3-panel w3-leftbar w3-sand w3-xxlarge w3-serif'>

							<h6 class='w3-opacity' style='text-align: left; line-height: 0px;'>Ana Martinez:  </h6>
							<a id='Ref'>
							<h6 class='w3-opacity'>Me parece bueno. </h6></a>

						</div>
							<input type="submit" value="Eliminar comentario">
								<br>

					</div>
					</div>
				</div>
			</div>

			<dir class = "w3-container w3-blue-black">
	  			<h6 style="text-align: center; font-size: 30;" >FRESAS CON CREMA</h6>
	  			<img src="img/fresas.png" alt="Lights" style="width: 100%; height: 450;">
	  		</dir>

			<div class='w3-half w3-container' style='height: 200px;'>
				<div class='w3-card-4' style='width: 600px;'>
					<div class='w3-container w3-rigth'>

						<a href='#' id='Ref2' ' title=''><h5 style='text-align: left;'></h5></a>
						<p id='parrafo'>

							<h6 style="text-align: center;">DESCRIPCION</h6>
							Es un postre que incluye esta frutas que sirven partidas en cuartos, bañadas con crema de leche batida con azúcar o bien con crema de leche batida y azúcar morena salpicada al gusto.
						</p>
						<img src="img/fresas2.jpg" alt="Lights" style="width: 100%; height: 280px;">
					</div>

					<div class='w3-container w3-center'>
						<div class='w3-panel w3-leftbar w3-sand w3-xxlarge w3-serif'>
							<h6 class='w3-opacity' style='text-align: left; line-height: 0px;'>Se ofertan servicios de gastronomía principalmente los fines de semana,  </h6>
							<a id='Ref'>


						</div>
					</div>
				</div>
			</div>

			<div class='w3-half w3-container' style='height: 550px;'>
				<div class='w3-card-4' style='width: 600px;'>
					<div class='w3-container w3-rigth'>
						<h6 style="text-align: center;">LUGARES RECOMENDADOS</h6>
						<h6 style="text-align: center;">Lacteos Andinos de Nari&ntilde;o</h6>
						<a href=''><img src='img/colacteos.png' alt='Norway' width='570' height='350' title='Restaurante'></a>
						<a href='#' id='Ref2' ' title=''><h5 style='text-align: left;'></h5></a>
						<p id='parrafo'>

							<p>


							</p>
						</p>
					</div>

					<div class='w3-container w3-center'>
						<div class='w3-panel w3-leftbar w3-sand w3-xxlarge w3-serif'>
							<h6 class='w3-opacity' style='text-align: left; line-height: 0px;'>Dirección </h6>
							<a href='https://www.google.com.co/maps/dir/1.2103835,-77.2794854/Lacteos+Andinos+de+Narino,+Pan-American+Highway,+Catambuco,+Pasto,+Nari%C3%B1o/@1.1881556,-77.3017537,14z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0x8e292ca23a07fab3:0x97016c425945282c!2m2!1d-77.2924807!2d1.1658895' id='Ref'><h6 class='w3-opacity'>Lacteos Andinos de Narino, Pan-American Highway, Catambuco, Pasto, Nariño </h6></a>
							<!-- Colocar el link de google maps-->
						</div>
					</div>
				</div>
			</div>

			<div class='w3-half w3-container' style='height: 600px;'>
				<div class='w3-card-4' style='width: 600px;'>
					<div class='w3-container w3-rigth'>

						<a href='#' id='Ref2' ' title=''><h5 style='text-align: left;'></h5></a>
						<p id='parrafo'>

							<h6 style="text-align: center;">AGREGA UN COMENTARIO</h6>
							<form action="" method="post" enctype="text/plain">
								Nombre <input type="text" name="nombre" size="30" maxlength="100">
								<br>
								<br>

								Email <input type="text" name="email" size="25" maxlength="100" value="@">
								<br>
								<br>

								Comentarios sobre su satisfacción personal
								<br>
								<textarea cols="40" rows="3" name="comentarios"></textarea>
								<br>
								<input type="submit" value="Enviar comentario">
								<br>
								<br>
								<input type="Reset" value="Borrar todo">
							</form>

						</p>
					</div>

					<div class='w3-container w3-center'>
						<div class='w3-panel w3-leftbar w3-sand w3-xxlarge w3-serif'>
							<h6 class='w3-opacity' style='text-align: left; line-height: 0px;'>Tu opinion es muy importante haznos saber sobre el sitio recomendado  </h6>
							<a id='Ref'>


						</div>
					</div>
				</div>
			</div>

			<div class='w3-half w3-container' style='height: 450px;'>
				<div class='w3-card-4' style='width: 600px;'>
					<div class='w3-container w3-rigth'>

						<a href='#' id='Ref2' ' title=''><h5 style='text-align: left;'></h5></a>
						<p id='parrafo'>
							<h6 style="text-align: center;">CALIFICANOS</h6>
							<img src= "img/estrellas.png" alt="Lights" style="width: 50%; height: 40px;">

						</p>
					</div>
						<h6 style="text-align: center;">COMENTARIOS</h6>
					<div class='w3-container w3-center'>
						<div class='w3-container w3-center'>
						<div class='w3-panel w3-leftbar w3-sand w3-xxlarge w3-serif'>
							<h6 class='w3-opacity' style='text-align: left; line-height: 0px;'>Oscar Gomez:  </h6>
							<a id='Ref'>
							<h6 class='w3-opacity'>Super recomendado el lugar para pasar un buen tiempo en familia. </h6></a>

						</div>

							<input type="submit" value="Eliminar comentario">
								<br>
						<div class='w3-panel w3-leftbar w3-sand w3-xxlarge w3-serif'>

							<h6 class='w3-opacity' style='text-align: left; line-height: 0px;'>Santiago Rosero:  </h6>
							<a id='Ref'>
							<h6 class='w3-opacity'>Delicioso los platos. lugar super recomendado. </h6></a>

						</div>
							<input type="submit" value="Eliminar comentario">
								<br>

						<div class='w3-panel w3-leftbar w3-sand w3-xxlarge w3-serif'>

							<h6 class='w3-opacity' style='text-align: left; line-height: 0px;'>Ana Martinez:  </h6>
							<a id='Ref'>
							<h6 class='w3-opacity'>Me parece bueno. </h6></a>

						</div>
							<input type="submit" value="Eliminar comentario">
								<br>

					</div>
					</div>
				</div>
			</div>



		</div>




	  	<!--Pie de pagina-->
		<div class="w3-container w3-red w3-center">
			<p class="w3-large"><i class = "fa fa-copyright"></i>&nbsp;GASTRONARI&Ntilde;O - 2019</p>
		</div>
	</body>
</html>
