<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-Xh60/CkQoPOWDdYTDqeRdPCVs1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamEt4HK8yyUHUSCcJHgXloTyT2Q=="
    crossorigin="anonymous" referrerpolicy="no-referer"/>
    <title>inicio de sesion</title>
</head>
<body>
    <form section="InciarSesion.php" method="POST"> 
    <h1>INICIAR SESION</h1>
    <hr> 
       <?php
            if(isset($_GET['error'])) {
            ?>
            <p class="error">
                <?php 
                    echo $_GET['error'] 
                
                ?>
            </p>
        <?php
            } 
        ?>    
    <hr>
    <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" name="Usuario" placeholder="Nombre de Usuario">

        <i class="fa-solid fa-unlock"></i>
        <label>Contraseña</label>
        <input type="password" name="Contraseña" placeholder="Contraseña">
        </hr>
        <button type="submit">Iniciar Sesion</button>
        <a href="CrearCuenta.php">Crear Cuenta</a>

    </form>

</body>
</html>