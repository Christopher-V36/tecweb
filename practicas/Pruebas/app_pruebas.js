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

// FUNCIÓN CALLBACK DE LISTADO DE PRODUCTOS
function listarProductos(){
    $.ajax({
        url: './backend/product-list.php',
        type: 'GET',
        success: function(response){
            let products = JSON.parse(response);
            let template = '';
            products.forEach(product => {
                template += `
                    <tr productId="${product.id}">
                        <td>${product.id}</td>
                        <td>${product.nombre}</td>
                        <td>${product.marca}</td>
                        <td>${product.modelo}</td>
                        <td>${product.precio}</td>
                        <td>${product.unidades}</td>
                        <td>${product.detalles}</td>
                        <td>${product.imagen}</td>
                        <td>
                            <button class="product-delete btn btn-danger">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                `;
            });
            $('#products').html(template);
        }//<td><img src="${product.imagen}" alt="Imagen de ${product.modelo}" width="100"></td>
    });
}

// FUNCIÓN CALLBACK DE BUSQUEDA
$(function(e) {
    preventDefault(e);
    $('#search').keyup(function() {
        let search = $('#search').val();
        $.ajax({
            url: './backend/product-search.php',
            type: 'GET',
            data: {search},
            succes: function(response){
                let products = JSON.parse(response);
                let template = '';
                products.forEach(product => {
                    template += `
                        <tr productId="${product.id}">
                            <td>${product.id}</td>
                            <td>${product.nombre}</td>
                            <td>${product.marca}</td>
                            <td>${product.modelo}</td>
                            <td>${product.precio}</td>
                            <td>${product.unidades}</td>
                            <td>${product.detalles}</td>
                            <td>${product.imagen}</td>
                            <td>
                                <button class="product-delete btn btn-danger">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                    `;
                });
                $('#products').html(template);
            }
        })
    });
});

// FUNCIÓN CALLBACK DE BOTÓN "Agregar Producto"
function agregarProducto(e) {
    
}

// FUNCIÓN CALLBACK DE BOTÓN "Eliminar"
function eliminarProducto() {

}

// SE CREA EL OBJETO DE CONEXIÓN COMPATIBLE CON EL NAVEGADOR
function getXMLHttpRequest() {
    
}
