$(document).ready(function () {
    $('#enviar').click(function () {
        $.ajax({
            url: 'backend.php',
            type: "post",
            data: $("#conjuntos").serialize(),
            success: function (resultado) {
                $("#resultado").html(resultado);
            }
        })

    });
});