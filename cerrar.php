<?php
session_start();
if($_SESSION['DniPaciente']){
    session_destroy();
    echo '<script language= javascript>
    alert("Su session ha terminado correctamente")
    self.location= "login.php"
    </script>';
}
else{
    echo '<script language= javascript>
    alert("No ha iniviado ninguna session, por favor registrese")
    self.location= "login.php"
    </script>';
}
?>