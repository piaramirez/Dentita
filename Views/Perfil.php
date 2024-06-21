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
                    <div class="barraEstructura">
                        <h1>Próxima cita</h1>
                    </div>
                    <div class="recuadroinfo">
                        <p>19 de Julio del 2024 </p>
                        <p>14:00 pm</p>
                        <div class="barraBoton">
                            <p>Citas agendadas (4)</p>
                            <img src="<?php echo media(); ?>flechaAbajo.png" alt="Flecha hacia abajo" id="flechaDatosPerfil">
                        </div>
                    </div>   
                </div>
                <div class="cajaPerfil">
                   <div class="cards">
                        <div class="cardHeader">
                            <img src="<?php echo media(); ?>naruto.png" alt="">
                          
                        </div>
                        <div class="cardBody">
                            <div>
                                <p>Nombre: </p>
                                <p>Uzumaki Naruto</p>
                            </div>
                            <div>
                                <p>Día: </p>
                                <p>15 Julio 2024</p>
                            </div>
                            <div>
                                <p>Hora:</p>
                                <p>14:00 pm</p>
                            </div>
                            <div>
                                <p>Motivo:</p>
                                <p>Seguimiento a consulta</p>
                            </div>
                            <div>
                                <p>En proceso</p>
                            </div>
                            <div class="">
                                <button>Hola</button>
                            </div>
                        </div>
                   </div>
             </div>                        
            </div>
            <div class="mostrarContedidoCitasHoy" id="mostrarContedidoCitasHoy">
                <h2>Agenda de hoy:</h2>
               <div class="tablaCitasProgramadas">
                     <table class="tablePerfil">
                          <thead>
                            <tr>
                                 <th>Nombre</th>
                                 <th>Fecha</th>
                                 <th>Hora</th>
                                 <th>Motivo</th>
                                 <th>Estado</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                 <td>Uzumaki Naruto</td>
                                 <td>15 Julio 2024</td>
                                 <td>14:00 pm</td>
                                 <td>Seguimiento a consulta</td>
                                 <td>En proceso</td>
                            </tr>
                            <tr>
                                 <td>Sasuke Uchiha</td>
                                 <td>15 Julio 2024</td>
                                 <td>18:00 pm</td>
                                 <td>Consulta general</td>
                                 <td>En proceso</td>
                            </tr>
                            <tr>
                                 <td>Orochimaru</td>
                                 <td>15 Julio 2024</td>
                                 <td>12:00 pm</td>
                                 <td>Endodonce</td>
                                 <td>En proceso</td>
                            </tr>
                          </tbody>
                     </table>
               </div>
            </div>
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
