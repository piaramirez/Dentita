<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['tag_page'];?></title>
    <link rel="stylesheet" href="<?php echo css(); ?>">
</head>
<body>
    <div class="bodyLogin">
       <div class="headLogin">
        <div class="logoHead">
            <img src="<?php echo media(); ?>logo.png" alt="Logo de empresa">
        </div>
       </div>
        <div class="contenidoLogin">
            <form>
                <div class="grupoLogin">
                    <label for="Usuario">Usuario:</label>
                    <input type="text" name="" id="">
                </div>
                <div class="grupoLogin">
                    <label for="password">Contraseña:</label>
                    <input type="password" name="" id="">
                </div>
                <div class="barraLogin">
                    <a href="/Dentista/Perfil">Login</a>
                </div>
                <div class="infoLogin">
                    <div id="errorLogin"></div>
                    <div class="">
                    <a href="">Olvidé la contraseña:</a>
                    <p>Maqueta por Antonio Ramírez</p>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</body>
</html>