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
      <img src="img/Fondo.jpg" alt="Lights" style="width: 100%; height: 150 ;">
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
            <a href="login.html" id="Ref2">INICIO</a>
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
              <a href="#" class="w3-bar-item w3-button">EL ENCANO</a>
              <a href="#" class="w3-bar-item w3-button">SAN FERNANDO</a>
            </div>
        </div>

        <div class="w3-dropdown-click">
            <button class="w3-button" onclick="myFunction2()"> MUNICIPIOS <i class="fa fa-caret-down"></i>
            </button>
            <div id="demo2" class="w3-dropdown-content w3-bar-block w3-card">
              <a href="#" class="w3-bar-item w3-button">ALBUMES NUEVOS</a>
              <a href="#" class="w3-bar-item w3-button">MUSICA NUEVA</a>
              <a href="#" class="w3-bar-item w3-button">ARTISTAS NUEVOS</a>
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
        <br>
        <br>



    <!--Contenido-->
    <div class = "w3-container  w3-blue-black">


      <div class='w3-half w3-container ' style='height: 900px;'> <!--de aqui fue-->
        <div class='w3-card-4' style='width: 700px;'>
          <div class='w3-container w3-rigt'>

            <html>
            <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
              body {font-family: Arial, Helvetica, sans-serif;}
              form {border: 3px solid #f1f1f1;}

              input[type=text], input[type=password] {
                  width: 100%;
                  padding: 12px 20px;
                  margin: 8px 0;
                  display: inline-block;
                  border: 1px solid #ccc;
                  box-sizing: border-box;
              }

              button {
                  background-color: #4CAF50;
                  color: white;
                  padding: 14px 20px;
                  margin: 8px 0;
                  border: none;
                  cursor: pointer;
                  width: 100%;
              }

                  button:hover {
                      opacity: 0.8;
                  }

                  .cancelbtn {
                      width: auto;
                      padding: 10px 18px;
                      background-color: #f44336;
                  }

                  .imgcontainer {
                      text-align: center;
                      margin: 24px 0 12px 0;
                  }

                  img.avatar {
                      width: 40%;
                      border-radius: 50%;
                  }

                  .container {
                      padding: 16px;
                  }

                  span.psw {
                      float: right;
                      padding-top: 16px;
                  }

                  /* Change styles for span and cancel button on extra small screens */
                  @media screen and (max-width: 300px) {
                      span.psw {
                         display: block;
                         float: none;
                      }
                      .cancelbtn {
                         width: 100%;
                      }
                  }
                  </style>
                  </head>
                  <body>

                  <h2>Login Form</h2>

                  <form action="/action_page.php">
                    <div class="imgcontainer">
                      <img src="img/usuario.jpg" alt="Avatar" class="avatar">
                    </div>

                    <div class="container">
                      <label for="uname"><b>Username</b></label>
                      <input type="text" placeholder="Enter Username" name="uname" required>

                      <label for="psw"><b>Password</b></label>
                      <input type="password" placeholder="Enter Password" name="psw" required>

                      <button type= "submit" href="Index.php">INICIO</button>



                      <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                      </label>
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                      <button type="button" class="cancelbtn">Cancel</button>


                      <span class="psw">Forgot <a href="#">password?</a></span>
                    </div>
                  </form>

                  </body>
                  </html>
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
