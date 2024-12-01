<!DOCTYPE html>
<html lang="es">
<head>
    <title>Admin</title>
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
<script src="js/carrito.js"></script>    <script type="text/javascript" src="js/admin.js"></script>
</head>
<body id="container-page-configAdmin">
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
                         
                                    <a href="configAdmin.php" class="table-cell-td"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                        &nbsp;&nbsp;&nbsp;Administración</a>
                                    <a href="#" class="table-cell-td carrito-button-nav all-elements-tooltip" data-toggle="tooltip" data-placement="bottom" title="Ver carrito de compras">
                                        <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;&nbsp;Carrito
                                    </a>
                                    <a href="#" class="table-cell-td" data-toggle="modal" data-target=".modal-logout">
                                        <i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;admin
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
                
                    <a href="#"  id="button-login-xs" class="elements-nav-xs" data-toggle="modal" data-target=".modal-logout">
                        <i class="fa fa-user"></i>&nbsp; admin 
                    </a>            </div>
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
            <li><a href="configAdmin.php">Administración</a></li>        </ul>
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
    <!-- Fin Modal logout -->    <section id="prove-product-cat-config">
        <div class="container">
            <div class="page-header">
              <h1>Panel de administración <small class="tittles-pages-logo">LP3 Electronics</small></h1>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#Productos" role="tab" data-toggle="tab">Productos</a></li>
              <li role="presentation"><a href="#Proveedores" role="tab" data-toggle="tab">Proveedores</a></li>
              <li role="presentation"><a href="#Categorias" role="tab" data-toggle="tab">Categorías</a></li>
              <li role="presentation"><a href="#Admins" role="tab" data-toggle="tab">Admin</a></li>
              <li role="presentation"><a href="#Pedidos" role="tab" data-toggle="tab">Pedidos</a></li>
            </ul>
            <div class="tab-content">
                <!--==============================Panel productos===============================-->
                <div role="tabpanel" class="tab-pane fade in active" id="Productos">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <br><br>
                        <div id="add-product">
                            <h2 class="text-primary text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Agregar un producto nuevo</h2>
                            <form role="form" action="process/regproduct.php" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                <label>Código de producto</label>
                                <input type="text" class="form-control"  placeholder="Código" required maxlength="30" name="prod-codigo">
                              </div>
                              <div class="form-group">
                                <label>Nombre de producto</label>
                                <input type="text" class="form-control"  placeholder="Nombre" required maxlength="30" name="prod-name">
                              </div>
                              <div class="form-group">
                                <label>Categoría</label>
                                <select class="form-control" name="prod-categoria">
                                    <option value="C1">Cámaras</option><option value="C2">Multimedia</option><option value="C3">Móviles</option><option value="C4">Portátiles</option>                                </select>
                              </div>
                              <div class="form-group">
                                <label>Precio</label>
                                <input type="text" class="form-control"  placeholder="Precio" required maxlength="20" pattern="[0-9]{1,20}" name="prod-price">
                              </div>
                              <div class="form-group">
                                <label>Modelo</label>
                                <input type="text" class="form-control"  placeholder="Modelo" required maxlength="30" name="prod-model">
                              </div>
                              <div class="form-group">
                                <label>Marca</label>
                                <input type="text" class="form-control"  placeholder="Marca" required maxlength="30" name="prod-marca">
                              </div>
                              <div class="form-group">
                                <label>Unidades disponibles</label>
                                <input type="text" class="form-control"  placeholder="Unidades" required maxlength="20" pattern="[0-9]{1,20}" name="prod-stock">
                              </div>
                              <div class="form-group">
                                <label>Proveedor</label>
                                <select class="form-control" name="prod-codigoP">
                                    <option value="0001781">Apple</option><option value="0001782">Fujifilm</option><option value="0001783">Amazon</option><option value="0001784">MSI</option>                                </select>
                              </div>
                              <div class="form-group">
                                <label>Imagen de producto</label>
                                <input type="file" name="img">
                                <p class="help-block">Formato de imagenes admitido png, jpg, gif, jpeg</p>
                              </div>
                                <input type="hidden"  name="admin-name" value="admin">
                              <p class="text-center"><button type="submit" class="btn btn-primary">Agregar a la tienda</button></p>
                              <div id="res-form-add" style="width: 100%; text-align: center; margin: 0;"></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <br><br>
                        <div id="del-prod-form">
                            <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar un producto</h2>
                             <form action="process/delprod.php" method="post" role="form">
                                 <div class="form-group">
                                     <label>Productos</label>
                                     <select class="form-control" name="prod-code">
                                         <option value="0001">Fujifilm-Cámara Fujifilm Instax Mini 12 Instantánea-Instax mini 12</option><option value="0002">Amazon-Speaker Amazon Echo Spot Alexa Smart 2024 con Reloj-Echo Spot</option><option value="0003">Apple-Apple iPhone 15 Pro Max BE/A Super Retina XDR OLED-15 Pro Max</option><option value="0004">MSI-Notebook MSI Cyborg 15.6" Core i7-13620H RTX 4050 6 GB-A13VE-218  16GB/DDR5 512GB/SSD</option>                                     </select>
                                 </div>
                                 <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar</button></p>
                                 <br>
                                 <div id="res-form-del-prod" style="width: 100%; text-align: center; margin: 0;"></div>
                             </form>
                         </div>
                    </div>
                    <div class="col-xs-12">
                        <br><br>
                        <div class="panel panel-info">
                            <div class="panel-heading text-center"><i class="fa fa-refresh fa-2x"></i><h3>Actualizar datos de producto</h3></div>
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                  <thead class="">
                                      <tr>
                                          <th class="text-center">Código</th>
                                          <th class="text-center">Nombre</th>
                                          <th class="text-center">Categoría</th>
                                          <th class="text-center">Precio</th>
                                          <th class="text-center">Modelo</th>
                                          <th class="text-center">Marca</th>
                                          <th class="text-center">Unidades</th>
                                          <th class="text-center">Proveedor</th>
                                          <th class="text-center">Opciones</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      
                                                <div id="update-product">
                                                  <form method="post" action="process/updateProduct.php" id="res-update-product-1">
                                                    <tr>
                                                        <td>
                                                          <input class="form-control" type="hidden" name="code-old-prod" required="" value="0001">
                                                          <input class="form-control" type="text" name="code-prod" maxlength="30" required="" value="0001">
                                                        </td>
                                                        <td><input class="form-control" type="text" name="prod-name" maxlength="30" required="" value="Cámara Fujifilm Instax Mini 12 Instantánea"></td>
                                                        <td><select class="form-control" name="prod-category"><option value="C1">Cámaras</option><option value="C2">Multimedia</option><option value="C3">Móviles</option><option value="C4">Portátiles</option></select>
                                                        </td>
                                                        <td><input class="form-control" type="text-area" name="price-prod" required="" value="1062000.00"></td>
                                                        <td><input class="form-control" type="tel" name="model-prod" required="" maxlength="20" value="Instax mini 12"></td>
                                                        <td><input class="form-control" type="text-area" name="marc-prod" maxlength="30" required="" value="Fujifilm"></td>
                                                        <td><input class="form-control" type="text-area" name="stock-prod" maxlength="30" required="" value="23"></td>
                                                        <td><select class="form-control" name="prod-Prove"><option value="0001782">Fujifilm</option><option value="0001781">Apple</option><option value="0001783">Amazon</option><option value="0001784">MSI</option></select>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="submit" class="btn btn-sm btn-primary button-UPR" value="res-update-product-1">Actualizar</button>
                                                            <div id="res-update-product-1" style="width: 100%; margin:0px; padding:0px;"></div>
                                                        </td>
                                                    </tr>
                                                  </form>
                                                </div>
                                                
                                                <div id="update-product">
                                                  <form method="post" action="process/updateProduct.php" id="res-update-product-2">
                                                    <tr>
                                                        <td>
                                                          <input class="form-control" type="hidden" name="code-old-prod" required="" value="0002">
                                                          <input class="form-control" type="text" name="code-prod" maxlength="30" required="" value="0002">
                                                        </td>
                                                        <td><input class="form-control" type="text" name="prod-name" maxlength="30" required="" value="Speaker Amazon Echo Spot Alexa Smart 2024 con Reloj"></td>
                                                        <td><select class="form-control" name="prod-category"><option value="C2">Multimedia</option><option value="C1">Cámaras</option><option value="C3">Móviles</option><option value="C4">Portátiles</option></select>
                                                        </td>
                                                        <td><input class="form-control" type="text-area" name="price-prod" required="" value="850000.00"></td>
                                                        <td><input class="form-control" type="tel" name="model-prod" required="" maxlength="20" value="Echo Spot"></td>
                                                        <td><input class="form-control" type="text-area" name="marc-prod" maxlength="30" required="" value="Amazon"></td>
                                                        <td><input class="form-control" type="text-area" name="stock-prod" maxlength="30" required="" value="22"></td>
                                                        <td><select class="form-control" name="prod-Prove"><option value="0001783">Amazon</option><option value="0001781">Apple</option><option value="0001782">Fujifilm</option><option value="0001784">MSI</option></select>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="submit" class="btn btn-sm btn-primary button-UPR" value="res-update-product-2">Actualizar</button>
                                                            <div id="res-update-product-2" style="width: 100%; margin:0px; padding:0px;"></div>
                                                        </td>
                                                    </tr>
                                                  </form>
                                                </div>
                                                
                                                <div id="update-product">
                                                  <form method="post" action="process/updateProduct.php" id="res-update-product-3">
                                                    <tr>
                                                        <td>
                                                          <input class="form-control" type="hidden" name="code-old-prod" required="" value="0003">
                                                          <input class="form-control" type="text" name="code-prod" maxlength="30" required="" value="0003">
                                                        </td>
                                                        <td><input class="form-control" type="text" name="prod-name" maxlength="30" required="" value="Apple iPhone 15 Pro Max BE/A Super Retina XDR OLED"></td>
                                                        <td><select class="form-control" name="prod-category"><option value="C3">Móviles</option><option value="C1">Cámaras</option><option value="C2">Multimedia</option><option value="C4">Portátiles</option></select>
                                                        </td>
                                                        <td><input class="form-control" type="text-area" name="price-prod" required="" value="14697000.00"></td>
                                                        <td><input class="form-control" type="tel" name="model-prod" required="" maxlength="20" value="15 Pro Max"></td>
                                                        <td><input class="form-control" type="text-area" name="marc-prod" maxlength="30" required="" value="Apple"></td>
                                                        <td><input class="form-control" type="text-area" name="stock-prod" maxlength="30" required="" value="10"></td>
                                                        <td><select class="form-control" name="prod-Prove"><option value="0001781">Apple</option><option value="0001782">Fujifilm</option><option value="0001783">Amazon</option><option value="0001784">MSI</option></select>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="submit" class="btn btn-sm btn-primary button-UPR" value="res-update-product-3">Actualizar</button>
                                                            <div id="res-update-product-3" style="width: 100%; margin:0px; padding:0px;"></div>
                                                        </td>
                                                    </tr>
                                                  </form>
                                                </div>
                                                
                                                <div id="update-product">
                                                  <form method="post" action="process/updateProduct.php" id="res-update-product-4">
                                                    <tr>
                                                        <td>
                                                          <input class="form-control" type="hidden" name="code-old-prod" required="" value="0004">
                                                          <input class="form-control" type="text" name="code-prod" maxlength="30" required="" value="0004">
                                                        </td>
                                                        <td><input class="form-control" type="text" name="prod-name" maxlength="30" required="" value="Notebook MSI Cyborg 15.6" Core i7-13620H RTX 4050 6 GB"></td>
                                                        <td><select class="form-control" name="prod-category"><option value="C4">Portátiles</option><option value="C1">Cámaras</option><option value="C2">Multimedia</option><option value="C3">Móviles</option></select>
                                                        </td>
                                                        <td><input class="form-control" type="text-area" name="price-prod" required="" value="12870000.00"></td>
                                                        <td><input class="form-control" type="tel" name="model-prod" required="" maxlength="20" value="A13VE-218  16GB/DDR5 512GB/SSD"></td>
                                                        <td><input class="form-control" type="text-area" name="marc-prod" maxlength="30" required="" value="MSI"></td>
                                                        <td><input class="form-control" type="text-area" name="stock-prod" maxlength="30" required="" value="14"></td>
                                                        <td><select class="form-control" name="prod-Prove"><option value="0001781">Apple</option><option value="0001782">Fujifilm</option><option value="0001783">Amazon</option><option value="0001784">MSI</option></select>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="submit" class="btn btn-sm btn-primary button-UPR" value="res-update-product-4">Actualizar</button>
                                                            <div id="res-update-product-4" style="width: 100%; margin:0px; padding:0px;"></div>
                                                        </td>
                                                    </tr>
                                                  </form>
                                                </div>
                                                                                  </tbody>
                              </table>
                          </div>
                        </div>
                    </div>
                </div>
                </div>
                <!--==============================Panel Proveedores===============================-->
                <div role="tabpanel" class="tab-pane fade" id="Proveedores">
                    <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <br><br>
                        <div id="add-provee">
                            <h2 class="text-primary text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Agregar un proveedor</h2>
                            <form action="process/regprove.php" method="post" role="form">
                                <div class="form-group">
                                    <label>RUC</label>
                                    <input class="form-control" type="text" name="prove-RUC" placeholder="RUC proveedor" maxlength="30" required="">
                                </div>
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input class="form-control" type="text" name="prove-name" placeholder="Nombre proveedor" maxlength="30" required="">
                                </div>
                                <div class="form-group">
                                    <label>Dirección</label>
                                    <input class="form-control" type="text" name="prove-dir" placeholder="Dirección proveedor" required="">
                                </div>
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input class="form-control" type="tel" name="prove-tel" placeholder="Número telefónico" pattern="[0-9]{1,20}" maxlength="20" required="">
                                </div>
                                <div class="form-group">
                                    <label>Página web</label>
                                    <input class="form-control" type="text" name="prove-web" placeholder="Página web proveedor" required="">
                                </div>
                                <p class="text-center"><button type="submit" class="btn btn-primary">Añadir proveedor</button></p>
                                <br>
                                <div id="res-form-add-prove" style="width: 100%; text-align: center; margin: 0;"></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <br><br>
                        <div id="del-prove">
                            <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar un proveedor</h2>
                            <form action="process/delprove.php" method="post" role="form">
                                <div class="form-group">
                                    <label>Proveedores</label>
                                    <select class="form-control" name="RUC-prove">
                                        <option value="0001781">0001781 - Apple</option><option value="0001782">0001782 - Fujifilm</option><option value="0001783">0001783 - Amazon</option><option value="0001784">0001784 - MSI</option>                                    </select>
                                </div>
                                <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar proveedor</button></p>
                                <br>
                                <div id="res-form-del-prove" style="width: 100%; text-align: center; margin: 0;"></div>
                            </form>
                        </div>    
                    </div>
                    <div class="col-xs-12">
                        <br><br>
                        <div class="panel panel-info">
                            <div class="panel-heading text-center"><i class="fa fa-refresh fa-2x"></i><h3>Actualizar datos de proveedor</h3></div>
                          <div class="table-responsive">
                              <table class="table table-bordered">
                                  <thead class="">
                                      <tr>
                                          <th class="text-center">RUC</th>
                                          <th class="text-center">Nombre</th>
                                          <th class="text-center">Dirección</th>
                                          <th class="text-center">Telefono</th>
                                          <th class="text-center">Página web</th>
                                          <th class="text-center">Opciones</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      
                                                      <div id="update-proveedor">
                                                        <form method="post" action="process/updateProveedor.php" id="res-update-prove-1">
                                                          <tr>
                                                              <td>
                                                                <input class="form-control" type="hidden" name="RUC-prove-old" required="" value="0001781">
                                                                <input class="form-control" type="text" name="RUC-prove" maxlength="30" required="" value="0001781">
                                                              </td>
                                                              <td><input class="form-control" type="text" name="prove-name" maxlength="30" required="" value="Apple"></td>
                                                              <td><input class="form-control" type="text-area" name="prove-dir" required="" value="One Apple Park Way, Cupertino, California"></td>
                                                              <td><input class="form-control" type="tel" name="prove-tel" required="" maxlength="20" value="123456789"></td>
                                                              <td><input class="form-control" type="text-area" name="prove-web" maxlength="30" required="" value="apple.com"></td>
                                                              <td class="text-center">
                                                                  <button type="submit" class="btn btn-sm btn-primary button-UP" value="res-update-prove-1">Actualizar</button>
                                                                  <div id="res-update-prove-1" style="width: 100%; margin:0px; padding:0px;"></div>
                                                              </td>
                                                          </tr>
                                                        </form>
                                                      </div>
                                                      
                                                      <div id="update-proveedor">
                                                        <form method="post" action="process/updateProveedor.php" id="res-update-prove-2">
                                                          <tr>
                                                              <td>
                                                                <input class="form-control" type="hidden" name="RUC-prove-old" required="" value="0001782">
                                                                <input class="form-control" type="text" name="RUC-prove" maxlength="30" required="" value="0001782">
                                                              </td>
                                                              <td><input class="form-control" type="text" name="prove-name" maxlength="30" required="" value="Fujifilm"></td>
                                                              <td><input class="form-control" type="text-area" name="prove-dir" required="" value="Minato, Tokio, Japón"></td>
                                                              <td><input class="form-control" type="tel" name="prove-tel" required="" maxlength="20" value="123456789"></td>
                                                              <td><input class="form-control" type="text-area" name="prove-web" maxlength="30" required="" value="fujifilm.com"></td>
                                                              <td class="text-center">
                                                                  <button type="submit" class="btn btn-sm btn-primary button-UP" value="res-update-prove-2">Actualizar</button>
                                                                  <div id="res-update-prove-2" style="width: 100%; margin:0px; padding:0px;"></div>
                                                              </td>
                                                          </tr>
                                                        </form>
                                                      </div>
                                                      
                                                      <div id="update-proveedor">
                                                        <form method="post" action="process/updateProveedor.php" id="res-update-prove-3">
                                                          <tr>
                                                              <td>
                                                                <input class="form-control" type="hidden" name="RUC-prove-old" required="" value="0001783">
                                                                <input class="form-control" type="text" name="RUC-prove" maxlength="30" required="" value="0001783">
                                                              </td>
                                                              <td><input class="form-control" type="text" name="prove-name" maxlength="30" required="" value="Amazon"></td>
                                                              <td><input class="form-control" type="text-area" name="prove-dir" required="" value="Seattle, Washington, Estados Unidos"></td>
                                                              <td><input class="form-control" type="tel" name="prove-tel" required="" maxlength="20" value="123456789"></td>
                                                              <td><input class="form-control" type="text-area" name="prove-web" maxlength="30" required="" value="amazon.com"></td>
                                                              <td class="text-center">
                                                                  <button type="submit" class="btn btn-sm btn-primary button-UP" value="res-update-prove-3">Actualizar</button>
                                                                  <div id="res-update-prove-3" style="width: 100%; margin:0px; padding:0px;"></div>
                                                              </td>
                                                          </tr>
                                                        </form>
                                                      </div>
                                                      
                                                      <div id="update-proveedor">
                                                        <form method="post" action="process/updateProveedor.php" id="res-update-prove-4">
                                                          <tr>
                                                              <td>
                                                                <input class="form-control" type="hidden" name="RUC-prove-old" required="" value="0001784">
                                                                <input class="form-control" type="text" name="RUC-prove" maxlength="30" required="" value="0001784">
                                                              </td>
                                                              <td><input class="form-control" type="text" name="prove-name" maxlength="30" required="" value="MSI"></td>
                                                              <td><input class="form-control" type="text-area" name="prove-dir" required="" value="Distrito de Zhonghe, en la ciudad de Nueva Taipei, Taiwán"></td>
                                                              <td><input class="form-control" type="tel" name="prove-tel" required="" maxlength="20" value="123456789"></td>
                                                              <td><input class="form-control" type="text-area" name="prove-web" maxlength="30" required="" value="msi.com"></td>
                                                              <td class="text-center">
                                                                  <button type="submit" class="btn btn-sm btn-primary button-UP" value="res-update-prove-4">Actualizar</button>
                                                                  <div id="res-update-prove-4" style="width: 100%; margin:0px; padding:0px;"></div>
                                                              </td>
                                                          </tr>
                                                        </form>
                                                      </div>
                                                                                        </tbody>
                              </table>
                          </div>
                        </div>
                    </div>
                </div>
                </div>
                <!--==============================Panel Categorias===============================-->
                <div role="tabpanel" class="tab-pane fade" id="Categorias">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <br><br>
                            <div id="add-categori">
                                <h2 class="text-info text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Agregar categoría</h2>
                                <form action="process/regcategori.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Código</label>
                                        <input class="form-control" type="text" name="categ-code" placeholder="Código de categoria" maxlength="9" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input class="form-control" type="text" name="categ-name" placeholder="Nombre de categoria" maxlength="30" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Descripción</label>
                                        <input class="form-control" type="text" name="categ-descrip" placeholder="Descripcióne de categoria" required="">
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-primary">Agregar categoría</button></p>
                                    <br>
                                    <div id="res-form-add-categori" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <br><br>
                            <div id="del-categori">
                                <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar una categoría</h2>
                                <form action="process/delcategori.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Categorías</label>
                                        <select class="form-control" name="categ-code">
                                            <option value="C1">C1 - Cámaras</option><option value="C2">C2 - Multimedia</option><option value="C3">C3 - Móviles</option><option value="C4">C4 - Portátiles</option>                                        </select>
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar categoría</button></p>
                                    <br>
                                    <div id="res-form-del-cat" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <br><br>
                            <div class="panel panel-info">
                                <div class="panel-heading text-center"><i class="fa fa-refresh fa-2x"></i><h3>Actualizar categoría</h3></div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="">
                                            <tr>
                                                <th class="text-center">Código</th>
                                                <th class="text-center">Nombre</th>
                                                <th class="text-center">Descripción</th>
                                                <th class="text-center">Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                                      <div id="update-category">
                                                        <form method="post" action="process/updateCategory.php" id="res-update-category-1">
                                                          <tr>
                                                              <td>
                                                                <input class="form-control" type="hidden" name="categ-code-old" maxlength="9" required="" value="C1">
                                                                <input class="form-control" type="text" name="categ-code" maxlength="9" required="" value="C1">
                                                              </td>
                                                              <td><input class="form-control" type="text" name="categ-name" maxlength="30" required="" value="Cámaras"></td>
                                                              <td><input class="form-control" type="text-area" name="categ-descrip" required="" value="Haz fotos luminosas con facilidad"></td>
                                                              <td class="text-center">
                                                                  <button type="submit" class="btn btn-sm btn-primary button-UC" value="res-update-category-1">Actualizar</button>
                                                                  <div id="res-update-category-1" style="width: 100%; margin:0px; padding:0px;"></div>
                                                              </td>
                                                          </tr>
                                                        </form>
                                                      </div>
                                                      
                                                      <div id="update-category">
                                                        <form method="post" action="process/updateCategory.php" id="res-update-category-2">
                                                          <tr>
                                                              <td>
                                                                <input class="form-control" type="hidden" name="categ-code-old" maxlength="9" required="" value="C2">
                                                                <input class="form-control" type="text" name="categ-code" maxlength="9" required="" value="C2">
                                                              </td>
                                                              <td><input class="form-control" type="text" name="categ-name" maxlength="30" required="" value="Multimedia"></td>
                                                              <td><input class="form-control" type="text-area" name="categ-descrip" required="" value="Articulos de entretenimiento y diversión"></td>
                                                              <td class="text-center">
                                                                  <button type="submit" class="btn btn-sm btn-primary button-UC" value="res-update-category-2">Actualizar</button>
                                                                  <div id="res-update-category-2" style="width: 100%; margin:0px; padding:0px;"></div>
                                                              </td>
                                                          </tr>
                                                        </form>
                                                      </div>
                                                      
                                                      <div id="update-category">
                                                        <form method="post" action="process/updateCategory.php" id="res-update-category-3">
                                                          <tr>
                                                              <td>
                                                                <input class="form-control" type="hidden" name="categ-code-old" maxlength="9" required="" value="C3">
                                                                <input class="form-control" type="text" name="categ-code" maxlength="9" required="" value="C3">
                                                              </td>
                                                              <td><input class="form-control" type="text" name="categ-name" maxlength="30" required="" value="Móviles"></td>
                                                              <td><input class="form-control" type="text-area" name="categ-descrip" required="" value="Teléfonos celulares smartphones"></td>
                                                              <td class="text-center">
                                                                  <button type="submit" class="btn btn-sm btn-primary button-UC" value="res-update-category-3">Actualizar</button>
                                                                  <div id="res-update-category-3" style="width: 100%; margin:0px; padding:0px;"></div>
                                                              </td>
                                                          </tr>
                                                        </form>
                                                      </div>
                                                      
                                                      <div id="update-category">
                                                        <form method="post" action="process/updateCategory.php" id="res-update-category-4">
                                                          <tr>
                                                              <td>
                                                                <input class="form-control" type="hidden" name="categ-code-old" maxlength="9" required="" value="C4">
                                                                <input class="form-control" type="text" name="categ-code" maxlength="9" required="" value="C4">
                                                              </td>
                                                              <td><input class="form-control" type="text" name="categ-name" maxlength="30" required="" value="Portátiles"></td>
                                                              <td><input class="form-control" type="text-area" name="categ-descrip" required="" value="Portátiles para juegos, entretenimiento y productividad"></td>
                                                              <td class="text-center">
                                                                  <button type="submit" class="btn btn-sm btn-primary button-UC" value="res-update-category-4">Actualizar</button>
                                                                  <div id="res-update-category-4" style="width: 100%; margin:0px; padding:0px;"></div>
                                                              </td>
                                                          </tr>
                                                        </form>
                                                      </div>
                                                                                              </tbody>
                                    </table>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <!--==============================Panel Admins===============================-->
                <div role="tabpanel" class="tab-pane fade" id="Admins">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <br><br>
                            <div id="add-admin">
                                <h2 class="text-info text-center"><small><i class="fa fa-plus"></i></small>&nbsp;&nbsp;Agregar administrador</h2>
                                <form action="process/regAdmin.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input class="form-control" type="text" name="admin-name" placeholder="Nombre" maxlength="30"  required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Contraseña</label>
                                        <input class="form-control" type="password" name="admin-pass" placeholder="Contraseña" required="">
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-primary">Agregar administrador</button></p>
                                    <br>
                                    <div id="res-form-add-admin" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <br><br>
                            <div id="del-admin">
                                <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar administrador</h2>
                                <form action="process/deladmin.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Administradores</label>
                                        <select class="form-control" name="name-admin">
                                            <option value="admin">admin</option><option value="joarevalos">joarevalos</option><option value="mia">mia</option>                                        </select>
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar administrador</button></p>
                                    <br>
                                    <div id="res-form-del-admin" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12"></div>
                    </div>
                </div>
                <!--==============================Panel pedidos===============================-->
                <div role="tabpanel" class="tab-pane fade" id="Pedidos">
                    <div class="row">
                        <div class="col-xs-12">
                            <br><br>
                            <div id="del-pedido">
                                <h2 class="text-danger text-center"><small><i class="fa fa-trash-o"></i></small>&nbsp;&nbsp;Eliminar pedido</h2>
                                <form action="process/delPedido.php" method="post" role="form">
                                    <div class="form-group">
                                        <label>Pedidos</label>
                                        <select class="form-control" name="num-pedido">
                                                                                    </select>
                                    </div>
                                    <p class="text-center"><button type="submit" class="btn btn-danger">Eliminar pedido</button></p>
                                    <br>
                                    <div id="res-form-del-pedido" style="width: 100%; text-align: center; margin: 0;"></div>
                                </form>
                            </div>
                            <br><br>
                             <div class="panel panel-info">
                               <div class="panel-heading text-center"><i class="fa fa-refresh fa-2x"></i><h3>Actualizar estado de pedido</h3></div>
                              <div class="table-responsive">
                                  <table class="table table-bordered">
                                      <thead class="">
                                          <tr>
                                              <th class="text-center">#</th>
                                              <th class="text-center">Fecha</th>
                                              <th class="text-center">Cliente</th>
                                              <th class="text-center">Producto</th>
                                              <th class="text-center">Total</th>
                                              <th class="text-center">Estado</th>
                                              <th class="text-center">Opciones</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                                                                </tbody>
                                  </table>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
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