function datosvalidados(){
    document.getElementById("cedula").Value;
    document.getElementById("nombre").Value;
    document.getElementById("contraseña").Value;
    document.getElementById("correo").Value;
    document.getElementById("comentarios").Value;
    
    if (cedula === "" || nombre === "" || contrasena === "" || correo === "" || tipo === "" || comentarios === "") {
        alert("Por favor, llene todos los campos.");
        return false;
        }
        return true;
    
}
document.getElementById("registrar").onclick = datosvalidados;