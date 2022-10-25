$(document).ready(function () {
    $('#conjuntos').submit(function (e) {

        const postData = {
            operacion: $('#operacion').val(),
            conjunto1: $('#conjunto1').val(),
            conjunto2: $('#conjunto2').val(),
        };

        let url = './backend.php';

        //console.log(postData);
        $.post(url, postData, function (resultado) {
            //console.log(resultado);
            $("#resultado").html(resultado);

        });
        e.preventDefault();
    });
});