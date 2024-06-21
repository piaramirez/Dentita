
/**
 * Función para crear el menu lateral
 */

let menuContraer =  document.getElementById('contrarerMenu');
let barraLateral= document.getElementById('Barralateral');
let bContraer = document.getElementById('btnContraer');
let nCitas = document.getElementById('BotonCrearUsuarios');
let bexp = document.getElementById('btnBuscarExpedientes');
let ulOptions = document.getElementById('listaenOpciones');
let bUser = document.getElementById('btnBuscarUser');
let contenedore= document.getElementById('contenedorEstructura');
menuContraer.addEventListener('click', function(){
    let bLateral = barraLateral.classList.toggle('Barralateral');
    if(bLateral == false){
        console.log('Barra lateral contraida');
        bContraer.classList.add('imgContraida');
        nCitas.classList.add('imgContraida');
        bexp.classList.add('imgContraida');
        bUser.classList.add('imgContraida');
        ulOptions.classList.add('borderNone');
        contenedore.classList.add('contenidoExp');

    }
    else if(bLateral == true){
        console.log('Barra lateral expandida');
        bContraer.classList.remove('imgContraida');
        nCitas.classList.remove('imgContraida');
        bexp.classList.remove('imgContraida');
        bUser.classList.remove('imgContraida');
        ulOptions.classList.remove('borderNone');
        contenedore.classList.remove('contenidoExp');


    }
    barraLateral.classList.toggle('barraContraida');
});




function openModal() {
    let modal = document.getElementById('modalCUsuarios');
    if (modal) {
        modal.style.display = "block";
        console.log("Modal abierto");
    } else {
        console.log("Modal no encontrado");
    }
}
function closeModal() {
    let modal = document.querySelector('#modalCUsuarios');
    if (modal) {
        modal.style.display = "none";
        console.log("Modal cerrado");
    } else {
        console.log("Modal no encontrado");
    }
}
document.getElementById('edadForm').addEventListener('change', function(){
    const cumple = new Date(this.value);
    const hoy = new Date();
    let edad= hoy.getFullYear() - cumple.getFullYear();
    const monthDifference = hoy.getMonth() - cumple.getMonth()
    if (monthDifference < 0 || (monthDifference === 0 && hoy.getDate() < cumple.getDate())) {
        edad--
    }
    const edadText = document.getElementById('Erroredad');
    edadText.textContent = `Edad: ${edad} años`;


}); 
document.getElementById('infoAlergias').addEventListener('change', function (){
    console.log('Alergias: ', this.value);
    if (this.value === 'Si') {
        infoAlergias.textContent= 'Si tienes alergias, por favor, notifícalo al personal de la cafetería';
    }else if (this.value === 'No') {
        console.log('No tienes alergias');
    }else if (this.value === ''){
        infoAlergias.textContent = 'Este campo es obligatorio';
    }
   //alert('Si tienes alergias, por favor, notifícalo al personal de la cafetería');
});