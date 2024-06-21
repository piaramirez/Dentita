<div class="modalEstructura" id="modalCUsuarios">
   <div class="modalContenido">
        <div class="headerModal">
            <h2>Crear usuario:</h2>
            <span class="close" onclick="closeModal();">&times;</span>
        </div>
        <div class="contenidoinfoModal">

<div class="areaCrearUsuarios" >
    
    <form class="formulariosUsuarios" id="formulariosUsuarios">
        <div class="barraFormulario">
            <div>
            <p>Tipo de privilegio</p>
                <input type="text" placeholder="NUEVO PACIENTE" readonly>
            </div>
            <div>   
                <p>Folio</p>
                <input type="text" placeholder="Folio">
            </div>

        </div>
        <div class="contenidoFormulario">
            <div class="grupContenidoForm">
                <label for="nombreForm">Nombre</label>
                <input type="text" name="nombreForm" id=""nombreForm>
            </div>
            <div class="grupContenidoForm">
                <label for="apellidoForm">Apellido</label>
                <input type="text" name="apellidoForm" id="apellidoForm">
            </div>
            <div class="grupContenidoForm">
                <label for="edadForm">Edad</label>
                <input type="date" name="edadForm" id="edadForm">
                <p class="" id="Erroredad"></p>
            </div>
            <div class="grupContenidoForm">
                <label for="infoAlergias">Alergias:</label>
                <select name="infoAlergias" id="infoAlergias">
                    <option value=" ">Selecciona una opción</option>
                    <option value="Si">Sí</option>
                    <option value="no">No</option>
                </select>
                <div class="" id="infoAlergias"></div>
            </div>
            <div class="grupContenidoForm">
                <label for="">Correo</label>
                <input type="text" name="" id="">
            </div>
            
            <div class="grupContenidoForm">
                <label for="">Correo</label>
                <input type="text" name="" id="">
            </div>
        </div>
    </form>
</div>
</div>
        </div>
   </div>
</div>