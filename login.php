<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>TshirtIdea-CAMISETAS PERSONALIZADAS</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="librerias/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="librerias/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
</head>
<body id="mibody">
  <nav class="red accent-4" role="navigation">
    <div class="nav-wrapper container"><a id="header" href="index.php" class="brand-logo" >TshirtIdea</a>
      <ul class="right hide-on-med-and-down">
        <li><a class="minav" href="#">Inicia Sesión</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">ES<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="minav" href="#"><i class="tiny material-icons new badge">shopping_cart</i></a></li>
        <!-- Dropdown Structure -->
          <ul id="dropdown1" class="dropdown-content">
            <li><a style="color:black" href="#!">EN</a></li>
            <li><a style="color:black" href="#!">ES</a></li>
          </ul>
      </ul>

      <ul id="nav-mobile" class="side-nav blue-grey darken-4">
        <li><a class="white-text" href="#">Iniciar Sesión</a></li>
      </ul>
      <a  href="#" data-activates="nav-mobile" class="button-collapse" style="color:white;"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <nav class="grey lighten-4" role="navigation">
    <div class="nav-wrapper container">
      <ul class="left hide-on-med-and-down">
        <li><a class="black-text" href="#">Hombre</a></li>
        <li><a class="black-text" href="#">Mujer</a></li>
        <li><a class="black-text" href="#">Lienzos</a></li>
        <li><a class="black-text" href="#">Diseña a tu gusto</a></li>
      </ul>
    </div>
  </nav>
   <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 m5">
          <h5 class="black-text">¿Ya estás registrado?</h5>
          <h6 class="red-text text-accent-4">Inicia Sesión: </h6> 
            <div class="row">
              <form class="col s12" action="#" method="POST">
                <div class="row">
                  <div class="input-field col s10">
                    <input placeholder="Email o Usuario" id="usuario" name="usuario" type="text" class="validate black-text" required>
                    <label class="black-text" for="user">Email o Usuario</label> 
                  </div>
                  <div class="input-field col s10">
                    <input placeholder="Contraseña" id="clave" name="clave" type="password" class="validate black-text" required>
                    <label class="black-text" for="pass">Contraseña</label>
                  </div>
                </div>
                <button class="waves-effect waves-light btn red accent-4" type="submit" id="iniciar">Iniciar</button>
              </form>
            </div>
        </div>
        <div class="col s12 m5">
            <h5 class="black-text">¿Nuevo usuario?</h5>
            <h6 class="red-text text-accent-4" >Registrate:</h6>
            <div class="row">
              <form class="col s12" action="#" method="POST">
                <div class="row">
                  <div class="input-field col s10">
                    <input placeholder="Email" id="email" name="email" type="email" class="validate black-text" required>
                    <label class="black-text" for="email">Email</label> 
                  </div>
                  <div class="input-field col s10">
                    <input placeholder="Confirmar Email" id="email2" name="email2" type="email" class="validate black-text" required>
                    <label class="black-text" for="email">Confirmar Email</label> 
                  </div>
                  <div class="input-field col s10">
                    <input placeholder="Contraseña" id="clave" name="clave" type="password" class="validate black-text" required>
                    <label class="black-text" for="pass">Contraseña</label>
                  </div>
                  <div class="input-field col s10">
                    <input placeholder="Confirmar Contraseña" id="clave2" name="clave2" type="password" class="validate black-text" required>
                    <label class="black-text" for="pass">Confiar Contraseña</label>
                  </div>
                  <div class="input-field col s10">
                    <input placeholder="Usuario" id="usuario" name="usuario" type="text" class="validate black-text" required>
                    <label class="black-text" for="pass">Usuario</label>
                  </div>
                </div>
                <button class="waves-effect waves-light btn red accent-4" type="submit" id="registrar">Registrar</button>
              </form>
            </div> 
        </div>
      </div>
    </div>
    <br><br>
  </div>
  <footer class="page-footer grey darken-4">
    <div class="grey darken-4">
    <div class="container"> 
      <div class="row">
        <div class="col l6 s12">
          <h5 class="grey-text darken-4-text">Acerca de Nosotros</h5>
          <ul>
            <li><a class="grey-text darken-4-text" href="#!">Quienes somos</a></li>
            <li><a class="grey-text darken-4-text" href="#!">Contacto</a></li>
            <li><a class="grey-text darken-4-text" href="#!">Terminos de uso</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="grey-text darken-4-text">Ayuda</h5>
          <ul>
            <li><a class="grey-text darken-4-text" href="#!">Preguntas Frecuentes</a></li>
            <li><a class="grey-text darken-4-text" href="#!">Metodos de Pago</a></li>
            <li><a class="grey-text darken-4-text" href="#!">Tallas y Materiales</a></li>
            <li><a class="grey-text darken-4-text" href="#!">Precios y Tarifas</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="grey-text darken-4-text">Soporte</h5>
          <ul>
            <li><a class="grey-text darken-4-text" href="#!">Envios y Devoluciones</a></li>
          </ul>
        </div>
      </div>
      </div> 
    </div>
    <div class="footer-copyright ">
      <div class="container white-text">
      © TshirtIdea - Tienda de camisetas online &nbsp;&nbsp;
        <img class="responsive-img" src="librerias/images/paypal.png">&nbsp;
        <img class="responsive-img" src="librerias/images/visa_straight.png">&nbsp;
        <img class="responsive-img" src="librerias/images/mastercard.png">
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="librerias/js/materialize.js"></script>
  <script src="librerias/js/init.js"></script>

  </body>
</html>

<script>
   $(".button-collapse").sideNav();

   $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });

   $(document).ready(function(){
    $('.materialboxed').materialbox();
  })
</script>