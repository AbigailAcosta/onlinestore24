
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, iRUCial-scale=1">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/media.css">
<link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/logo.ico" />
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/autohidingnavbar.min.js"></script>
<script src="js/main.js"></script>
<script src="js/carrito.js"></script></head>
<body id="container-page-index">
    <section id="container-carrito-compras">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div id="carrito-compras-tienda"></div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <p class="text-center" style="font-size: 80px;">
                    <i class="fa fa-shopping-cart"></i>
                </p>
                <p class="text-center">
                    <a href="pedido.php" class="btn btn-success btn-block"><i class="fa fa-dollar"></i> Confirmar pedido</a>
                    <a href="process/vaciarcarrito.php" class="btn btn-danger btn-block"><i class="fa fa-trash"></i>   Vaciar carrito</a> 
                </p>
            </div>
        </div>
    </div>
</section>
<nav id="navbar-auto-hidden">
        <div class="row hidden-xs"><!-- Menu computadoras y tablets -->
            <div class="col-xs-4">
                <figure class="logo-navbar"></figure>
                <p class="text-navbar tittles-pages-logo">LP3 Electronics</p>
            </div>
            <div class="col-xs-8">
                <div class="contenedor-tabla pull-right">
                    <div class="contenedor-tr">
                        <a href="index.php" class="table-cell-td"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Inicio</a>
                        <a href="product.php" class="table-cell-td"><i class="fa fa-dropbox" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Productos</a>
                         
                                    <a href="registration.php" class="table-cell-td"><i class="fa fa-pencil-square" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;
                                        Registro</a>
                                    <a href="#" class="table-cell-td carrito-button-nav all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Ver carrito de compras">
                                    <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;Carrito
                                    </a>
                                    <a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-login">
                                        <i class="fa fa-user"></i>&nbsp;&nbsp;Login
                                    </a>
                                                     </div>
                </div>
            </div>
        </div>
        <div class="row visible-xs"><!-- Mobile menu navbar -->
            <div class="col-xs-12">
                <button class="btn btn-default pull-left button-mobile-menu" id="btn-mobile-menu">
                    <i class="fa fa-th-list"></i>&nbsp;&nbsp;Menú
                </button>
                <a href="#" id="button-shopping-cart-xs" class="elements-nav-xs all-elements-tooltip carrito-button-nav" data-toggle="tooltip" data-placement="bottom" title="Ver carrito de compras">
                    <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down"></i>
                </a>
                
                       <a href="#" data-toggle="modal" data-target=".modal-login" id="button-login-xs" class="elements-nav-xs">
                        <i class="fa fa-user"></i>&nbsp; Iniciar Sesión
                        </a> 
                               </div>
        </div>
    </nav>
    <!-- Modal login -->
    <div class="modal fade modal-login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
          <div class="modal-content" id="modal-form-login">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title text-center text-primary" id="myModalLabel">Iniciar sesión en LP3 Electronics</h4>
                </div>
            <form action="process/login.php" method="post" role="form" style="margin: 20px;" class="FormLP3" data-form="login">
                  <div class="form-group">
                      <label><span class="glyphicon glyphicon-user"></span>&nbsp;Nombre</label>
                      <input type="text" class="form-control" name="nombre-login" placeholder="Escribe tu nombre" required=""/>
                  </div>
                  <div class="form-group">
                      <label><span class="glyphicon glyphicon-lock"></span>&nbsp;Contraseña</label>
                      <input type="password" class="form-control" name="clave-login" placeholder="Escribe tu contraseña" required=""/>
                  </div>

                  <p>¿Cómo iniciaras sesión?</p>
                  <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" value="option1" checked>
                        Usuario
                    </label>
                 </div>
                 <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" value="option2">
                         Administrador
                    </label>
                 </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Iniciar sesión</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
                  </div>
                  <div class="ResFormL" style="width: 100%; text-align: center; margin: 0;"></div>
              </form>
          </div>
      </div>
    </div>
    <!-- Fin Modal login -->
    <div id="mobile-menu-list" class="hidden-sm hidden-md hidden-lg">
        <br>
        <h3 class="text-center tittles-pages-logo">LP3 Electronics</h3>
        <button class="btn btn-default button-mobile-menu" id="button-close-mobile-menu">
        <i class="fa fa-times"></i>
        </button>
        <br><br>
        <ul class="list-unstyled text-center">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="product.php">Productos</a></li>
            <li><a href="registration.php"><i class="fa fa-pencil-square" aria-hidden="true"></i>
Registro</a></li>        </ul>
    </div>
    <!-- Modal carrito -->
    <div class="modal fade modal-carrito" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="padding: 20px;">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <br>
            <p class="text-center"><i class="fa fa-shopping-cart fa-5x"></i></p>
            <p class="text-center">El producto se añadio al carrito</p>
            <p class="text-center"><button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Aceptar</button></p>
          </div>
      </div>
    </div>
    <!-- Fin Modal carrito -->
    
    <!-- Modal logout -->
    <div class="modal fade modal-logout" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="padding: 20px;">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <br>
            <p class="text-center">¿Quieres cerrar la sesión?</p>
            <p class="text-center"><i class="fa fa-exclamation-triangle fa-5x"></i></p>
            <p class="text-center">
                <a href="process/logout.php" class="btn btn-primary btn-sm">Cerrar la sesión</a>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
            </p>
          </div>
      </div>
    </div>
    <!-- Fin Modal logout -->    <div class="jumbotron" id="jumbotron-index">
      <h1><span class="tittles-pages-logo">LP3 Electronics</span> <small style="color: #fff;">UTIC CZU</small></h1>
      <p>
          Bienvenido a nuestra tienda en linea, aquí encontrara una gran variedad de artículos para el hogar.
      </p>
    </div>
    <section id="new-prod-index">
         <div class="container">
            <div class="page-header">
                <h1>Novedades <small>productos</small></h1>
            </div>
            <div class="row">
              
                        <div class="col-xs-12 col-sm-6 col-md-3">
                             <div class="thumbnail">
                               <a href="infoProd.php?CodigoProd=0001"><img src="assets/img-products/Camara Fujifilm Instax Mini 12 Instantanea.jpg"></a>
                               <div class="caption">
                                 <h3>Fujifilm</h3>
                                 <p>Cámara Fujifilm Instax Mini 12 Instantánea</p>
                                 <p>₲ 1.062.000</p>
                                 <p class="text-center">
                                     <a href="infoProd.php?CodigoProd=0001" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                     <button value="0001" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                 </p>

                               </div>
                             </div>
                         </div>     
                         
                        <div class="col-xs-12 col-sm-6 col-md-3">
                             <div class="thumbnail">
                               <a href="infoProd.php?CodigoProd=0002"><img src="assets/img-products/Speaker Amazon Echo Spot Alexa Smart 2024 con Reloj.jpg"></a>
                               <div class="caption">
                                 <h3>Amazon</h3>
                                 <p>Speaker Amazon Echo Spot Alexa Smart 2024 con Reloj</p>
                                 <p>₲ 850.000</p>
                                 <p class="text-center">
                                     <a href="infoProd.php?CodigoProd=0002" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                     <button value="0002" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                 </p>

                               </div>
                             </div>
                         </div>     
                         
                        <div class="col-xs-12 col-sm-6 col-md-3">
                             <div class="thumbnail">
                               <a href="infoProd.php?CodigoProd=0003"><img src="assets/img-products/Apple iPhone 15 Pro Max BE A.jpg"></a>
                               <div class="caption">
                                 <h3>Apple</h3>
                                 <p>Apple iPhone 15 Pro Max BE/A Super Retina XDR OLED</p>
                                 <p>₲ 14.697.000</p>
                                 <p class="text-center">
                                     <a href="infoProd.php?CodigoProd=0003" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                     <button value="0003" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                 </p>

                               </div>
                             </div>
                         </div>     
                         
                        <div class="col-xs-12 col-sm-6 col-md-3">
                             <div class="thumbnail">
                               <a href="infoProd.php?CodigoProd=0004"><img src="assets/img-products/Notebook MSI Cyborg 15 A13VE-218 15.6 Intel Core i7-13620H RTX 4050 6 GB.jpg"></a>
                               <div class="caption">
                                 <h3>MSI</h3>
                                 <p>Notebook MSI Cyborg 15.6" Core i7-13620H RTX 4050 6 GB</p>
                                 <p>₲ 12.870.000</p>
                                 <p class="text-center">
                                     <a href="infoProd.php?CodigoProd=0004" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Detalles</a>&nbsp;&nbsp;
                                     <button value="0004" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                 </p>

                               </div>
                             </div>
                         </div>     
                         <div class="clearfix"></div>  
            </div>
         </div>
    </section>
    <section id="reg-info-index">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 text-center">
                   <article style="margin-top:20%;">
                        <p><i class="fa fa-users fa-4x"></i></p>
                        <h3>Registrate</h3>
                        <p>Registrese y hagase cliente de <span class="tittles-pages-logo">LP3 Electronics</span> para recibir las mejores ofertas y descuentos especiales de nuestros productos.</p>
                        <p><a href="registration.php" class="btn btn-info btn-block">Registrarse</a></p>   
                   </article>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <img src="assets/img/Smart-TV-RegInfo.png" alt="Smart-TV" class="img-responsive">
                </div>
            </div>
        </div>
    </section>
    <section id="distribuidores-index">
        <div class="container">
            <div class="col-xs-12 col-sm-6">

            </div>
            <div class="col-xs-12 col-sm-6">

            </div>
            <div class="col-xs-12">
                <div class="page-header">
                  <h1>Nuestras <small style="color: #333;">Marcas</small></h1>
                </div>
                <br><br>
                <img src="assets/img/logos-marcas.png" alt="logos-marcas" class="img-responsive">
            </div>
        </div>
    </section>
    <footer>
    <h3 class="text-center">Siguenos en</h3><br>
    <ul class="list-unstyled text-center">
        <a href="#" class="social-icon all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Facebook">
            <img src="assets/icons/social-facebook.png" alt="facebook-icon">
        </a>
        <a href="#" class="social-icon all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Instagram">
            <img src="assets/icons/social-instagram.png" alt="instagram-icon">
        </a>
    </ul>
    <br><br><br>
    <h5 class="text-center tittles-pages-logo">LP3 Electronics &copy; 2024</h5>
</footer>
</body>
</html>