$(document).on('submit', '#fromlg', function (event) {
    event.preventDefault();
    var datas = $(this).serialize();
    $.ajax({
        url: "http://192.168.0.10:8080/DistribuidosService/service/Login.php",
        dataType: 'json',
        data: datas,
        type: 'POST'

    }).done(function (respuesta) {
        
        sessionStorage.setItem("Nombre", respuesta['nombre']);
        sessionStorage.setItem("Apellido", respuesta['apellido']);
         window.location.href = 'Index.php';
         console.log(respuesta);
    }).fail(function (resp) {
        console.log(resp.responseText);
    }).always(function () {
        console.log("completado");
    });
});
