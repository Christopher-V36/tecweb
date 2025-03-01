<!DOCTYPE html >
<html>
  <head>
    <meta charset="utf-8" >
    <title>Registro de Productos</title>
    <style type="text/css">
      ol, ul { 
      list-style-type: none;
      }
    </style>
  </head>

  <body>
    <h1>Registro de Productos</h1>

    <form id="formularioTabla" action="http://localhost/tecweb/practicas/p08/p08-base/set_producto_v2.php" method="post">
      
      <fieldset>
        <h2>Carga el producto que desees</h2>
        <ul>
          <li><label for="form-name">   Nombre:      </label> <input type="text"   name="name"    id="form-name">   </li>
          <li><label for="form-brand">  Marca:       </label> <input type="text"   name="brand"   id="form-brand">  </li>
          <li><label for="form-model">  Modelo:      </label> <input type="text"   name="model"   id="form-model">  </li>
          <li><label for="form-price">  Precio:      </label> <input type="number" step="0.01" name="price" id="form-price"> </li>
          <li><label for="form-details">Detalles:    </label> <input type="text"   name="details" id="form-details"></li>
          <li><label for="form-units">  Unidades:    </label> <input type="number" name="units"   id="form-units">  </li>
          <li><label for="form-img">    Imagen (Url):</label> <input type="text"   name="img"     id="form-img">    </li>
        </ul>
      </fieldset>
      
      <p>
        <input type="submit" value="Carga de Producto">
        <input type="reset">
      </p>

      <script>
        function validarNombre(){
          let nombre = document.getElementById("form-name");
          return nombre.value.length > 0 && nombre.value.length <= 100;
        }
        
        function validarMarca(){
          let marca = document.getElementById("form-brand");
          return marca.value !== "";
        }
        
        function validarModelo(){
          let modelo = document.getElementById("form-model");
          return /^[A-Za-z0-9]+$/.test(modelo.value) && modelo.value.length <= 25;
        }
        
        function validarPrecio(){
          let precio = document.getElementById("form-price");
          return parseFloat(precio.value) > 99.99;
        }
        
        function validarDetalles(){
          let detalles = document.getElementById("form-details");
          return detalles.value.length <= 250;
        }
        
        function validarUnidades(){
          let unidades = document.getElementById("form-units");
          return parseInt(unidades.value) >= 0;
        }
        
        function validarImagen(){
          let imagen = document.getElementById("form-img");
          if(imagen.value.trim() === "") {
            imagen.value = "img/imagen.png";
          }
          return true;
        }
        
        document.getElementById("formularioTabla").addEventListener("submit", function(event) {
          if(!validarNombre()){
            alert("El nombre es obligatorio y debe tener 100 caracteres o menos.");
            event.preventDefault();
          }
          if(!validarMarca()){
            alert("Debe seleccionar una marca.");
            event.preventDefault();
          }
          if(!validarModelo()){
            alert("El modelo es obligatorio, solo puede contener caracteres alfanuméricos y debe tener 25 caracteres o menos.");
            event.preventDefault();
          }
          if(!validarPrecio()){
            alert("El precio debe ser mayor a 99.99.");
            event.preventDefault();
          }
          if(!validarDetalles()){
            alert("Los detalles deben tener 250 caracteres o menos.");
            event.preventDefault();
          }
          if(!validarUnidades()){
            alert("Las unidades deben ser un número mayor o igual a 0.");
            event.preventDefault();
          }
          validarImagen();
        });
      </script>

    </form>
  </body>
</html>