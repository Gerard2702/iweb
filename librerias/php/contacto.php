<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head>
<title>Formulario de Contacto </title>
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../../librerias/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../../librerias/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
 </head>

 <body  >
     <nav class="red accent-4" role="navigation">
    <div class="nav-wrapper container"><a id="header" href="../../../revision2/index.php" class="brand-logo" >TshirtIdea</a>
      <ul class="right hide-on-med-and-down">
        <li><a class="minav" href="login.php">Inicia Sesion</a></li>
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

              </ul>
    </div>
  </nav>
  <div class="container">
      <h2 class="header center black-text">Contactanos</h2>
      <div class="row center">
        <h5 class="header col s12 light black-text">Como cliente eres nuestra razon de ser , por ello sientete libre de hacer tus consultas, propuestas o comentarios, escribenos sera un gusto saber de ti  somos obras de arte somos Tshirt....</h5>
      </div>
    </div>
 <div class="row">
    <form class="col s12">
     <center> <div class="row" >
        
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Nombre</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">mail</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Tu correo </label>
        </div>
         <div class="input-field col s6">
          <i class="material-icons prefix">stars</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Numero de pedido (si aplica) </label>
        </div>
    

    </br></br> </br></br><div>
                            </br></br ><i class="material-icons prefix">mode_edit</i>Escribenos tu consulta</br>
                             <textarea class="input"  name="consulta" style="font-size: 13px; width:410px; height:120px; margin-top:4px;" cols="25" rows=""></textarea>
                        </div>
        <div ><a href="#" style="font-size: 13px; color:#0075E0; text-decoration: none;">Politica de Privacidad</a></div>             

        <div style="margin:5px 0 30px 0;"><input type="submit"  style="margin-top: 10px;" onclick="return enviar_contacto(this)" value="Enviar" /></div>

      </div></center>
    </form>
  </div>
  <footer class="page-footer grey darken-4">
    <div class="grey darken-4">
    <div class="container"> 
      <div class="row">
        <div class="col l6 s12">
          <h5 class="grey-text darken-4-text">Acerca de Nosotros</h5>
          <ul>
            <li><a class="grey-text darken-4-text" href="#!">Quienes somos</a></li>
            <li><a class="grey-text darken-4-text" href="contacto.php">Contacto</a></li>
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
      <div class="white-text">
      © TshirtIdea - Tienda de camisetas online &nbsp;&nbsp;

        <img class="responsive-img" src="../../librerias/images/paypal.png">&nbsp;
        <img class="responsive-img" src="../../librerias/images/visa_straight.png">&nbsp;
        <img class="responsive-img" src="../../librerias/images/mastercard.png">
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="librerias/js/materialize.js"></script>
  <script src="librerias/js/init.js"></script>

    
</body>
</html>
