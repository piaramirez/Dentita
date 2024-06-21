<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil | <?php echo $data['tag_page'] ?> </title>
    <link rel="stylesheet" href="<?php echo css(); ?>">
</head>
<body>
    <?php require_once 'Views/Content/MenuPerfil.php'; ?>
    <div class="anchoPerfil">
    <?php require_once 'Views/Content/BarraPerfil.php'; ?>
    <div class="contenedorEstructura" id="contenedorEstructura">
        <div class="infoContenido">
            <h1>Panel Beta:</h1>
            <p>Bienvenido al Sitema beta, en esta parte podrá ver:
                <ul>
                    <li>Próximas citas: Las citas que tiene en el dia en curso, así como ver las próximas del mes.</li>
                    <li>Últimos expedientes: Podrá ver la última receta o consulta que se generó en el expediente</li>
                    <li>Usuarios: Podrá ver a los usuarios qué ha visto recientemente</li>
                </ul>
            </p>
        </div>
        <div class="proximaCitas">
            <div class="contenidoEstructura">
                <div class="cajaPerfil">
                    <h1>Hola</h1>
                </div>
                <div class="cajaPerfil">
                   <div class="cards">
                        <div class="cardHeader">
                            <img src="<?php echo media(); ?>naruto.png" alt="">
                        </div>
                    <div class="cbpInfo">
                       <div>Uzumaki Naruto</div>
                       <div>5:00 pm</div>
                       <div>Seguimiento</div>
                       <div>Pendiete</div>
                       <div>ir a consulta</div>

                    </div>
                   </div>
                </div>
                
               
            </div>
            barra para ver en cuadto o lista
        </div>
        <div class="ultimoExpediente">
            En esta área van los últimos expedientes
        </div>
        <div class="ultimoExpediente">
          Haber que se me ocuerre
        </div>
        
    </div>
<?php require "Views/Content/RecursoJS.php"; ?>
</body>
</html>
