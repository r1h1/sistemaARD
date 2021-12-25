/*Funciones de JQuery y AJAX para poder
automatizar el recibo de datos*/

//FUNCION PARA TRAER LA CANTIDAD DE STOCK DEL PRODUCTO
function cantidadStock() {

  //TRAE LA EXISTENCIA DEL PRODUCTO
  $(document).ready(function () {
    $("#producto").val();
    recargarLista();

    $("#producto").change(function () {
      recargarLista();
    });
  });

  function recargarLista() {
    $.ajax({
      type: "POST",
      url: "../controlador/nuevaFactura/productos/existenciaProducto.php",
      data: "producto=" + $("#producto").val(),
      success: function (r) {
        $("#cantidad").html(r);
      },
    });
    
  }

  //FUNCION PARA CARGAR EL PRECIO DEL PRODUCTO
  $(document).ready(function () {
    $("#producto").val();
    recargarPrecioVenta();

    $("#producto").change(function () {
      recargarPrecioVenta();
    });
  });

  function recargarPrecioVenta() {
    $.ajax({
      type: "POST",
      url: "../controlador/nuevaFactura/productos/precioVenta.php",
      data: "producto=" + $("#producto").val(),
      success: function (r) {
        $("#precioventa").html(r);
      },
    });
  }


  //TRAE LA CANTIDAD DEL PRODUCTO
  $(document).ready(function () {
    $("#producto").val();
    recargarCantidadProducto();

    $("#producto").change(function () {
      recargarCantidadProducto();
    });
  });

  function recargarCantidadProducto() {
    $.ajax({
      type: "POST",
      url: "../controlador/nuevaFactura/productos/cantidadProducto.php",
      data: "producto=" + $("#producto").val(),
      success: function (r) {
        $("#cantidadAVender").html(r);
      },
    });    
  }


}




//FUNCION PARA TRAER LA INFORMACIÓN DEL NIT
function validarNIT() {

  //FUNCION PARA CARGAR EL NOMBRE COMPLETO CUANDO SE INGRESA UN NIT
  $(document).ready(function () {
    $("#ingresoNIT").val();
    recargarNombre();

    $("#ingresoNIT").change(function () {
      recargarNombre();
    });
  });

  function recargarNombre() {
    $.ajax({
      type: "POST",
      url: "../controlador/nuevaFactura/buscarNit/nombreNIT.php",
      data: "ingresoNIT=" + $("#ingresoNIT").val(),
      success: function (r) {
        $("#nombreNIT").html(r);
      },
    });
  }

  //FUNCION PARA CARGAR EL APELLIDO COMPLETO CUANDO SE INGRESA UN NIT
  $(document).ready(function () {
    $("#ingresoNIT").val();
    recargarApellido();

    $("#ingresoNIT").change(function () {
      recargarApellido();
    });
  });

  function recargarApellido() {
    $.ajax({
      type: "POST",
      url: "../controlador/nuevaFactura/buscarNit/apellidoNIT.php",
      data: "ingresoNIT=" + $("#ingresoNIT").val(),
      success: function (r) {
        $("#apellidoNIT").html(r);
      },
    });
  }

  //FUNCION PARA CARGAR LA DIRECCION CUANDO SE INGRESA UN NIT
  $(document).ready(function () {
    $("#ingresoNIT").val();
    recargarDireccion();

    $("#ingresoNIT").change(function () {
      recargarDireccion();
    });
  });

  function recargarDireccion() {
    $.ajax({
      type: "POST",
      url: "../controlador/nuevaFactura/buscarNit/direccionNIT.php",
      data: "ingresoNIT=" + $("#ingresoNIT").val(),
      success: function (r) {
        $("#direccionNIT").html(r);
      },
    });
  }

}