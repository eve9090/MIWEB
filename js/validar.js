var nombre = document.getElementById('nombre');
var correo = document.getElementById('correo');
var telefono = document.getElementById('telefono');
var mensaje = document.getElementById('mensaje');
var error = document.getElementById('error');
error.style.color = 'red';

function validarFormulario(){

    //window.alert("hola");
    console.log('Enviando formulario...');
    
    var mensajesERROR = [];

    if(nombre.value ===null || nombre.value ===''){
        mensajesERROR.push('Ingresa tu nombre');
    }
    if(correo.value ===null || correo.value ===''){
        mensajesERROR.push('Ingresa tu correo');
    }
    if(telefono.value ===null || telefono.value ===''){
        mensajesERROR.push('Ingresa tu telefono');
    }
    if(mensaje.value ===null || mensaje.value ===''){
        mensajesERROR.push('Ingresa tu mensaje');
    }
   error.innerHTML= mensajesERROR.join(', ');
    return false;
}

  