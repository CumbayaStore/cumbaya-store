 <?php
        //sevidor
        $host="localhost";
        //ususario
        $user="root";
        //contrasena phpmyadmin
        $pw="";
        //base
        $bd="usuario";
        
        $conn=  mysql_connect($host, $user, $pw);
       // mysql_co
        if($conn){
            mysql_set_charset('utf8');
            mysql_select_db($bd);
           // print '<strong>Conectado correctamente a la base</strong>';
        }else{
            print '<strong>Error al conectar a la base</strong>'; 
        }
        ?>