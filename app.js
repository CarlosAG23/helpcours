const formulario = document.querySelector('#formulario');

formulario.addEventListener('submit', function(e){
    e.preventDefault();
    email();
})

function email(){
    const datos = new FormData(formulario);
    fetch('correo.php', {
        method: 'POST',
        body: datos
    })
    .then(res => res.json())
    .then(res => {
        console.log(res);

        if('exito'){
            Swal.fire({
                icon: 'success',
                tittle: 'exitoss',
                text:'Mensaje enviado',
                footer:'Revise su correo'
                
            })
            formulario.reset();
            return false;
        }else{
            Swal.fire({
                icon: 'error',
                tittle: 'Error',
                text:'Mensaje no enviado',
                footer:'No Revise su correo'
            })
        }
    })
}