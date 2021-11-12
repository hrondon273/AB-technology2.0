<?php require('../../Controller/Conexion.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: ../auth/login.php'); exit(); }


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
        <h1>Encabezado</h1>
    </header>
<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			     
				<h2>Member only page - Welcome <?php echo htmlspecialchars($_SESSION['username'], ENT_QUOTES); ?></h2>
				<p><a href='../auth/logout.php'>Logout</a></p>
                <?php if($user->rol($_SESSION['username'])=="Admin"){
                    ?>
                   <h2>Eres Admin</h2>
                   <p><a href='../usuarios/listausuarios.php'>ver usuarios</a></p>
                   <p><a href='../comentarios/listacomentarios.php'>ver comentarios por aprobar</a></p>

                <?php
                    }?>
				<hr>

		</div>
	</div>


</div>
<?php
        include_once '../../php/footer.php';    
        include '../../php/scripts/scriptsJS.php'
    ?>    
</body>
</html>