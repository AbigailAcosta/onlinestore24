<!DOCTYPE html>
<html>
<head>
    <title>Administración de categorías</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/css/datatables.min.css" rel="stylesheet" />
    
    <script src="/semana4/sesion1/js/bootstrap.bundle.min.js"></script>
    <script src="/semana4/sesion1/js/datatables.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Administración de Categorías</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Edición</th>
                </tr>
            </thead>
            <tbody id="datos"></tbody>
        </table>

        <button type="button" id="btnAgregar" class="btn btn-success">Agregar</button>
        <hr />
        <button type="button" id="btnFinalizar" class="btn btn-danger">Finalizar</button>
    </div>

    <!-- Modal Editar Categoría -->
    <div class="modal fade" id="ModalEditar" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">Modal Categorías</div>
                <div class="modal-body">
                    <input type="hidden" id="Codigo" />
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Descripción:</label>
                            <input type="text" id="Descripcion" class="form-control" placeholder="" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnConfirmarAgregar" class="btn btn-success">Agregar</button>
                    <button type="button" id="btnModificar" class="btn btn-success">Modificar</button>
                    <button type="button" id="btnBorrar" class="btn btn-danger">Borrar</button>
                    <button type="button" id="btnCancelar" data-dismiss="modal" class="btn btn-warning">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Confirmar Borrado -->
    <div class="modal fade" id="ModalConfirmarBorrar" tabindex="-1" role="dialog">
        <div class="modal-dialog" style="max-width: 600px" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>¿Realmente quiere borrarlo?</h1>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnConfirmarBorrado" class="btn btn-danger">Confirmar</button>
                    <button type="button" id="btnCancelarDialogo" data-dismiss="modal" class="btn btn-warning">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var categoria;
            MostrarCategorias();

            // Botón para volver a la página principal
            $("#btnFinalizar").click(function () {
                window.location = "../../";
            });

            // Botón que muestra el diálogo de agregar
            $("#btnAgregar").click(function () {
                LimpiarFormulario();
                $("#btnConfirmarAgregar").show();
                $("#btnModificar").hide();
                $("#btnBorrar").hide();
                $("#ModalEditar").modal("show");
            });

            // Botón para cancelar en el modal de edición
            $("#btnCancelar").click(function () {
                $("#ModalEditar").modal("hide");
            });

            // Botón para cancelar en el modal de confirmación de borrado
            $("#btnCancelarDialogo").click(function () {
                $("#ModalConfirmarBorrar").modal("hide");
            });

            // Botón para confirmar agregar categoría
            $("#btnConfirmarAgregar").click(function () {
                RecolectarDatosFormulario();
                if (!EntradaFormularioCorrecto()) return;
                $("#ModalEditar").modal("hide");
                EnviarInformacion("agregar");
            });

            // Botón para mostrar confirmación de borrado
            $("#btnBorrar").click(function () {
                $("#ModalEditar").modal("hide");
                $("#ModalConfirmarBorrar").modal("show");
            });

            // Botón para confirmar borrado
            $("#btnConfirmarBorrado").click(function () {
                $("#ModalConfirmarBorrar").modal("hide");
                RecolectarDatosFormulario();
                EnviarInformacion("borrar");
            });

            // Botón para modificar categoría
            $("#btnModificar").click(function () {
                RecolectarDatosFormulario();
                if (!EntradaFormularioCorrecto()) return;
                $("#ModalEditar").modal("hide");
                EnviarInformacion("modificar");
            });

            // Mostrar categorías en la tabla
            function MostrarCategorias() {
                $.ajax({
                    type: "GET",
                    url: "categorias.php?accion=listar",
                    success: function (categorias) {
                        let filas = "";
                        for (let categoria of categorias) {
                            filas += "<tr><td>" + categoria.codigo + "</td><td>" + categoria.descripcion + "</td>";
                            filas += '<td><a class="btn btn-primary botoneditar" role="button" href="#" data-codigo="' + categoria.codigo + '">Editar</a> </td></tr>';
                        }

                        $("#datos").html(filas);

                        // Botón que muestra el diálogo de modificar y borrar
                        $(".botoneditar").click(function () {
                            $("#Codigo").val($(this).get(0).dataset.codigo);
                            RecolectarDatosFormulario();
                            RecuperarCategoria("recuperar");
                            $("#btnConfirmarAgregar").hide();
                            $("#btnModificar").show();
                            $("#btnBorrar").show();
                            $("#ModalEditar").modal("show");
                        });
                    },
                    error: function () {
                        alert("Hay un error en cargando...");
                    },
                });
            }

            // Funciones AJAX para enviar y recuperar datos del servidor
            function EnviarInformacion(accion) {
                // Completa aquí con la lógica para enviar los datos al servidor
            }

            function RecuperarCategoria(accion) {
                // Lógica para recuperar una categoría específica del servidor
            }

            function RecolectarDatosFormulario() {
                categoria = {
                    codigo: $("#Codigo").val(),
                    descripcion: $("#Descripcion").val(),
                };
            }

            function LimpiarFormulario() {
                $("#Codigo").val("");
                $("#Descripcion").val("");
            }

            function EntradaFormularioCorrecto() {
                if (categoria["descripcion"] == "") {
                    alert("La descripción no puede estar vacía.");
                    return false;
                }
                return true;
            }
        });
    document.addEventListener("DOMContentLoaded", function () {
        var categoria;
        MostrarCategorias();

        // Botón para volver a la página principal
        $("#btnFinalizar").click(function () {
            window.location = "../../";
        });

        // Botón que muestra el diálogo de agregar
        $("#btnAgregar").click(function () {
            LimpiarFormulario();
            $("#btnConfirmarAgregar").show();
            $("#btnModificar").hide();
            $("#btnBorrar").hide();
            $("#ModalEditar").modal("show");
        });

        // Botón para cancelar en el modal de edición
        $("#btnCancelar").click(function () {
            $("#ModalEditar").modal("hide");
        });

        // Botón para cancelar en el modal de confirmación de borrado
        $("#btnCancelarDialogo").click(function () {
            $("#ModalConfirmarBorrar").modal("hide");
        });

        // Botón para confirmar agregar categoría
        $("#btnConfirmarAgregar").click(function () {
            RecolectarDatosFormulario();
            if (!EntradaFormularioCorrecto()) return;
            $("#ModalEditar").modal("hide");
            EnviarInformacion("agregar");
        });

        // Botón para mostrar confirmación de borrado
        $("#btnBorrar").click(function () {
            $("#ModalEditar").modal("hide");
            $("#ModalConfirmarBorrar").modal("show");
        });

        // Botón para confirmar borrado
        $("#btnConfirmarBorrado").click(function () {
            $("#ModalConfirmarBorrar").modal("hide");
            RecolectarDatosFormulario();
            EnviarInformacion("borrar");
        });

        // Botón para modificar categoría
        $("#btnModificar").click(function () {
            RecolectarDatosFormulario();
            if (!EntradaFormularioCorrecto()) return;
            $("#ModalEditar").modal("hide");
            EnviarInformacion("modificar");
        });

        // Función para mostrar categorías en la tabla
        function MostrarCategorias() {
            $.ajax({
                type: "GET",
                url: "categorias.php?accion=listar",
                success: function (categorias) {
                    let filas = "";
                    for (let categoria of categorias) {
                        filas += "<tr><td>" + categoria.codigo + "</td><td>" + categoria.descripcion + "</td>";
                        filas += '<td><a class="btn btn-primary botoneditar" role="button" href="#" data-codigo="' + categoria.codigo + '">Editar</a> </td></tr>';
                    }
                    $("#datos").html(filas);

                    // Botón que muestra el diálogo de modificar y borrar
                    $(".botoneditar").click(function () {
                        $("#Codigo").val($(this).data("codigo"));
                        RecolectarDatosFormulario();
                        RecuperarCategoria("recuperar");
                        $("#btnConfirmarAgregar").hide();
                        $("#btnModificar").show();
                        $("#btnBorrar").show();
                        $("#ModalEditar").modal("show");
                    });
                },
                error: function () {
                    alert("Hay un error en cargando...");
                },
            });
        }

        // Función para enviar datos al servidor según la acción (agregar, modificar o borrar)
        function EnviarInformacion(accion) {
            $.ajax({
                type: "POST",
                url: "categorias.php?accion=" + accion,
                data: categoria,
                success: function (msg) {
                    MostrarCategorias();
                },
                error: function () {
                    alert("Hay un error en EnviarInformacion");
                },
            });
        }

        // Función para recuperar una categoría específica del servidor
        function RecuperarCategoria(accion) {
            $.ajax({
                type: "POST",
                url: "categorias.php?accion=" + accion,
                data: categoria,
                success: function (datos) {
                    $("#Descripcion").val(datos[0]["descripcion"]);
                },
                error: function () {
                    alert("Hay un error en RecuperarCategoria.!");
                },
            });
        }

        // Recolectar datos del formulario en el objeto `categoria`
        function RecolectarDatosFormulario() {
            categoria = {
                codigo: $("#Codigo").val(),
                descripcion: $("#Descripcion").val(),
            };
        }

        // Limpiar campos del formulario
        function LimpiarFormulario() {
            $("#Codigo").val("");
            $("#Descripcion").val("");
        }

        // Validar que el formulario tenga los datos requeridos
        function EntradaFormularioCorrecto() {
            if (categoria["descripcion"] == "") {
                alert("No puede estar vacía la descripción");
                return false;
            }
            return true;
        }
    });
</script>
</body>
</html>