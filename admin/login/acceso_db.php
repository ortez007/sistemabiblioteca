 <?php
    $dbhost = "localhost"; // Host de la BD
    $dbusername = "root"; // Usuario de la BD
    $dbuserpass = "elier12345javier"; // Contraseña de la BD
    $dbname = "sistemabiblioteca"; // Nombre de la BD
    
    //conectamos y seleccionamos db
    mysqli_connect($dbhost, $dbusername, $dbuserpass);
    mysqli_select_db($dbname);
?> 