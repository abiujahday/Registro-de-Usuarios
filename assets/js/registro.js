$(document).ready(function() {
    $("#btnRegistrar").click(function(e) {
        e.preventDefault();
        var user = $("#inputUser").val().trim();
        var pass = $("#inputPassword").val().trim();
        var nombre = $("#inputNombre").val().trim();
        var correo = $("#inputCorreo").val().trim();

        console.log(user + " " + pass + " " + nombre + " " + correo + " ");

        mostrarDato();
    }); //end #btnRegistrar

    async function mostrarDato() {
        const datos = new FormData(document.getElementById('formulario2'));

        await fetch('assets/data/registro.php', {
                method: 'POST',
                body: datos
            })
            .then(response => response.json())
            .then(response => {
                if (response.dato == 'ok') {
                    location.href = "index.html";
                } else {
                    alert("ERROR EN LOS DATOS");
                }
            })
            .catch(err => {
                console.log(err);
            });
    } //end mostrarDato
});