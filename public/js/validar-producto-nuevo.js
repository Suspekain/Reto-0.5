function validarProducto() {
  var nombre = document.getElementById("nombre").value;
  var descripcion = document.getElementById("descripcion").value;
  var imagen = document.getElementById("img").value;
  var stock = document.getElementById("stock").value;
  var enlace = document.getElementById("enlace").value;
  var valido = false;

  if (nombre != "" && descripcion != "" && imagen != "" && stock != "" && enlace != "") {
    if (descripcion.length <= 256) {
      valido = true;
    } else {
      alert("Descripcion demasiada larga!");
    }
  } else {
    alert("Se requieren todos los campos!");
  }

  if (valido) {
    console.log("subir archivo")
  }
}
