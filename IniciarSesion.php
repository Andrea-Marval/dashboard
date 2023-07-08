<?php

    include('conexion.php');

if (isset($_POST['Usuario'])&& isset($_POST['Clave'])){ 

    function validade($data){

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validade($_POST['Usuario']);
    $Clave = validade($_POST['Clave']);

    if(empty($Usuario)){
        header("Location: index.php?error=El Usuario Es Requerido");
        exit();
    } elseif (empty($Clave)) {
        header("Location: index.php?error=La Clave Es Requerida");
        exit();
    }else{
        $Clave = md5($Clave);

        $Sql = "SELECT *FROM personal WHERE Usuario = '$Usuario' AND password='$Clave'";
        $result = mysql_query($conexion, $Sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
        }
    }
}

