<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $_db_host = "localhost";
    $_db_datenbank = "mydb";
    $_db_username = "web";
    $_db_passwort = "abcdefgh";
  
    $con = new mysqli($_db_host, $_db_username, $_db_passwort, $_db_datenbank);
  
    // $con = mysqli_connect("localhost","root","root","LoginSystem");
    // // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
