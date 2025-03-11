// JSON BASE A MOSTRAR EN FORMULARIO
var baseJSON = {
    "precio": 0.0,
    "unidades": 1,
    "modelo": "XX-000",
    "marca": "NA",
    "detalles": "NA",
    "imagen": "\img\imagen.png"
  };

function init() {
    /**
     * Convierte el JSON a string para poder mostrarlo
     * ver: https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Global_Objects/JSON
     */
    var JsonString = JSON.stringify(baseJSON,null,2);
    document.getElementById("description").value = JsonString;

    // SE LISTAN TODOS LOS PRODUCTOS
    listarProductos();
}

listarProductos = () => {
    var productos = JSON.parse(localStorage.getItem("productos"));
    var lista = document.getElementById("listaProductos");
    lista.innerHTML = "";
    if (productos != null) {
        productos.forEach((producto, index) => {
            var item = document.createElement("li");
            item.innerHTML = producto.modelo + " - " + producto.marca + " - " + producto.precio;
            lista.appendChild(item);
        });
    }
}

