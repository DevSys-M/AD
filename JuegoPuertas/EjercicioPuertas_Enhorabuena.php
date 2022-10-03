<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    </head>
    <body>
        <?php
        echo "<img onclick='first()' src='enhorabuena.jpg'>";
        
        ?>
        <br><br>
        <a href="EjercicioPuertas_1.php">Volver</a>
        <script>
        function first(){
            document.getElementByTag(img).action='EjercicioPuertas_1.php';
        }
        </script>
    </body>
</html>