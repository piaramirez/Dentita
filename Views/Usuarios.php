
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="<?php echo css(); ?>">
</head>
<body>
    <?php require_once 'Views/Content/MenuPerfil.php'; ?>
    <div class="anchoPerfil">
    <?php require_once 'Views/Content/BarraPerfil.php'; ?>
    <div class="Areausuarios">
       <div class="informativosText">
        <h1>Bienvenidos a Usuarios</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt id tenetur mollitia voluptates accusamus. Possimus quam iusto rerum eveniet aspernatur ex, impedit, similique sint fugit, at autem nobis. Nihil, vitae?
        </p>
       </div>

       <div class="cotenidoUsuarios">
       <?php   getModal('infoUsuarios'); ?>
            <div class="formulariosUsuarios">
               <button onclick="openModal();">TEst</button>
                Contenido tarido de db
            </div> 
       </div>
    </div>
    </div>
</body>
</html>