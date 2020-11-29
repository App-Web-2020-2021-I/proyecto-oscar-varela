<nav class="MENU">
    <ul>
        <li id="contacto">
            <a id="icon" href="https://es-la.facebook.com/"><img src="./imagenes/facebook.png" alt="Icono Facebook"></a>
            <a id="icon" href="https://twitter.com"><img src="./imagenes/twitter.png" alt="Icono Twitter"></a>
            <a id="icon" href="https://www.instagram.com"><img src="./imagenes/instagram.png" alt="Icono Instagram"></a>
            <a id="icon" href="https://www.whatsapp.com/"><img src="./imagenes/whatsapp.png" alt="Icono Whatsapp"></a>
        </li>

        <li id="enlaces"> <a href="index.php">Inicio</a></li>
        <li id="enlaces"> <a href="reportajes.php">Reportajes</a></li>
        <li id="enlaces"> <a href="tratamientos.php">Tratamientos</a></li>
        <?php if (empty($_SESSION['nombre'])) : ?>
            <li id="enlaces"> <a href="signup.php">Registrarse</a></li>
            <li id="enlaces"> <a href="login.php">Ingresar</a></li>
        <?php else :?>
            <li id="enlaces"> <a href="login.php"><?php echo $_SESSION['nombre'] ?></a></li>  
        <?php endif ?>              
    </ul>
</nav>