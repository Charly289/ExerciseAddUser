<html>
    <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">   

    </head>
    <body>
    
<div class="topnav">
  <a href="">Home</a>
  <a href="">Principal</a>
  <a href="">Salir</a>  
</div>

<div class="row">
  <div class="column add"></div>
              <div class="column add center">
              <img  src="public\imagenes\add_user.png">

              <form name="form_data" id="form_data" >             

                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                
                <label for="ap">Apellido Paterno</label>
                <input type="text" id="ap" name="ap" placeholder="Apellido Paterno" required>
                
                <label for="am">Apellido Materno</label>
                <input type="text" id="am" name="am" placeholder="Apellido Materno" required>
                
                <label for="curp">Curp</label>
                <input type="text" id="curp" name="curp" placeholder="Curp" required>
                
                
                <label for="rfc">RFC</label>
                <input type="text" id="rfc" name="rfc" placeholder="RFC" required>
                
                <label for="sexo">Sexo </label>
                <select id="sexo" name="sexo">
                  <option value="hombre">Hombre</option>
                  <option value="mujer">Mujer</option>      
                </select>
                               
                <label for="fecha">Fecha de Nacimiento</label>
                <input type="date" id="fn" name="fn" placeholder="Fecha de Nacimiento" required>
                                    
              </div>  
              <div class="column add_der">
                <br>
                <br>                     
                <label for="banco">Institución Bancaria</label>
                <input type="text" id="banco" name="banco" placeholder="Banco" >
                
                <label for="entidad">Entidad Federativa</label>
                <input type="text" id="entidad" name="entidad" placeholder="Entidad Federativa" required>                
                
                <label for="sucursal">Sucursal</label>
                <input type="text" id="sucursal" name="sucursal" placeholder="Sucursal" required>                
                
                <label for="perfil">Perfil</label>
                <input type="text" id="perfil" name="perfil" placeholder="Perfil" required>                
                
                <label for="correo">Correo</label>
                <input type="text" id="correo" name="correo" placeholder="Correo" required>                
                
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Contraseña" required>                
                
                <label for="ine">INE</label>
                <input type="text" id="ine" name="ine" placeholder="INE" required>                
                
                <label for="solicitud">Formato de Solicitud</label>
                <input type="text" id="solicitud" name="solicitud" placeholder="Solicitud" required>
                <button type="submit" class="button button2" id="agregar" name="agregar" >Guadar Datos</button>               
                                
                </div>   
                  
                </form>
              </div>
              <div class="footer">
                <h2>Footer</h2>
              </div>  
              </body>    
              <script>                  
                $('#form_data').submit(function(e){                

              nombre = $('#nombre').val();
              ap = $('#ap').val();
              am = $('#am').val();
              curp = $('#curp').val();
              rfc = $('#rfc').val();
              sexo = $('#sexo').val();
              fn = $('#fn').val();
              banco = $('#banco').val();
              entidad = $('#entidad').val();
              sucursal = $('#sucursal').val();
              perfil = $('#perfil').val();
              correo = $('#correo').val();
              password = $('#password').val();
              ine = $('#ine').val();
              solicitud = $('#solicitud').val();

            const url='http://localhost/ejercicio/add_Controller.php';

            $.ajax({
                  headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },            
                    url:url,
                    data:{
                      nombre:nombre,
                      ap:ap,
                      am:am,
                      curp:curp,
                      rfc:rfc,
                      sexo:sexo,
                      fn:fn,
                      banco:banco,
                      entidad:entidad,
                      sucursal:sucursal,
                      perfil:perfil,
                      correo:correo,
                      password:password,
                      ine:ine,
                      solicitud:solicitud
                    },
                    type:"POST",
                    success: function(response){
                      alert("Datos Agregados");    
                      //clear();        
                    },
                    error: function() {
                alert('There was some error performing the AJAX call!');
              }  
                            
                });
        });
        function clear(){
                  $('#nombre').val('');
                  $('#ap').val('');
                  $('#am').val('');
                  $('#curp').val('');
                  $('#rfc').val('');
                  $('#sexo').val('');
                  $('#fn').val('');
                  $('#banco').val('');
                  $('#entidad').val('');
                  $('#sucursal').val('');
                  $('#perfil').val('');
                  $('#correo').val('');
                  $('#password').val('');
                  $('#ine').val('');
                  $('#solicitud').val('');
                }                
            </script>  
</html>
    