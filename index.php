<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include_once __DIR__.'/php/scripts/scriptsCSS.php';
    ?>
</head>
   
<body>
    <header class="bg-primary text-center">
        <?php
            include_once __DIR__.'/php/header.php';
        ?>
        <h1>Encabezado</h1>
    </header>

    <div class="bg-secondary text-center">
        
        <video id="background-video" autoplay loop muted poster="recursos/imagenes/imgFondo1.png">
            <source src="recursos/videos/video1.mp4" type="video/mp4">
        </video>
        
            <div class="custom-shape-divider-bottom-1634938778">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>

        
    </div>

    <div class="p-2">
        <?php
            include_once __DIR__.'/php/contacto.php';
        ?>
    </div>

    <?php
        include_once __DIR__.'/php/footer.php';    
        include __DIR__.'/php/scripts/scriptsJS.php'
    ?>    
</body>
</html>