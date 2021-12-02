<?php 
    require('../../Controller/Conexion.php'); 
    if(!$user->is_logged_in())
    { 
        header('Location: ../auth/login.php'); 
        exit(); 
    }else if(!($user->rol($_SESSION['username'])=="Admin"))
    {
        header('Location: ../auth/memberpage.php'); 
        exit(); 
    }else if(!isset($_GET["id"])) exit();
    $id = $_GET["id"];
    $sentencia = $conn->prepare("SELECT * FROM members WHERE memberID = ?;");
    $sentencia->execute([$id]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
    if($persona === FALSE){
        header('Location: ../auth/memberpage.php'); 
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include_once '../../php/scripts/scriptsCSS.php';
        ?>
    </head>
   
    <body>
        <header class="bg-primary text-center">
            <?php
                include_once '../../php/header.php';
            ?>
            <div style="height: 150px;"></div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-11 col-sm-10 col-md-8 col-lg-6 edicionUsuario" style="margin: auto;">
                    <form id="frm-comment">
                        <div class="mb-3">
                            <input type="hidden" name="id" value="<?php echo $persona->memberID; ?>">
                            <input class="form-control" type="text" name="username" id="username" placeholder="Username" value="<?php echo $persona->username ?>" />
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="email" name="correo" id="correo" placeholder="Correo" value="<?php echo $persona->email ?>"/>
                        </div>
                        <div class="mb-3 form-group">
                            <label for="rol">Rol </label>
                            <select name="rol" class="form-control" id="rol">
                                <option value="1">Admin</option>
                                <option value="2">Personal</option>
                            </select>
                        </div>
                        <div class="mb-3 text-center">
                            <input type="button" class="btn btn-outline-primary" id="submitButton2" value="Actualizar" onclick="actualizarUsuario()">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="auxFooter">
            <?php
                include_once '../../php/footer.php';    
                include '../../php/scripts/scriptsJS.php'
            ?>
        </div>    
    </body>
</html>
<script src="../../js/funciones.js"></script>