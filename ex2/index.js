//validar que tenga algo las entrada
const botonDelete = document.querySelector("#botonDelete");

//ponemos un evento para el boton

botonDelete.addEventListener("click",(e)=>{
    let matricula = document.getElementById("matriculaE").value.trim(); // Obtiene el valor y elimina espacios en blanco al principio y al final

    if (matricula === "") {
        alert("Por favor, ingresa una matrícula."); // Muestra un mensaje si el campo está vacío
        e.preventDefault(); // Evita que el formulario se envíe si el campo está vacío
    }
});