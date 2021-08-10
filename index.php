<?php


$host = "localhost";
$user = "root";
$pass = "";
$db = "nuevocrud";

$con = mysqli_connect($host, $user, $pass, $db)or die(mysql_error());
$con-> set_charset("utf8");

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <h1>crud</h1>
    <div class="row">
        <div class="col-md-4">
            <h2>Introduzca los datos</h2>
            <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombres</label>
                  <input type="text" class="form-control" id="nombres"  placeholder="Ingrese su nombre">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Apellidos</label>
                    <input type="text" class="form-control" id="apellido"  placeholder="Ingrese su apellido">
                 </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fecha"  placeholder="Ingrese su fecha">
                </div>
                <input type="submit" id="enviar" class="btn btn-primary" placeholder="crear"/>
              </form>


        </div>
        <div class="col-md-8">
            
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                     $sql = "SELECT id, nombres, apellidos, fecha FROM datos";
                     $resultado = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
                     while( $rows = mysqli_fetch_assoc($resultado) ) { 
                     ?>
                     <tr>
                        <td value="<?php echo $rows["id"]; ?>"><?php echo $rows["id"]; ?></td>
                        <td value=""><?php echo $rows["nombres"]; ?></td>
                        <td value=""><?php echo $rows["apellidos"]; ?></td>
                        <td value=""><?php echo $rows["fecha"]; ?></td>
                        <td><input  id="editar" class="btn btn-warning" placeholder="Editar"/></td>
                        
                     </tr>
                     
                     <?php }	?>

                </tbody>
              </table>
        </div>
    </div>



    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>

</html>