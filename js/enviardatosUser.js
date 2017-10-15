$(document).on('submit', '#fromResgistrar', function (event) {
    event.preventDefault();
    var datas = $(this).serialize();
    $.ajax({
        url: "http://localhost:8080/DistribuidosService/service/inserta_User.php",
        dataType: 'json',
        data: datas,
        type: 'POST'

    }).done(function (respuesta) {
        console.log(respuesta);
         window.location.href = 'Index.php';
    }).fail(function (resp) {
        console.log(resp.responseText);
    }).always(function () {
        console.log("completado");
    });
});
