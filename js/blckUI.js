function DesbloquearPantalla() {
    $.unblockUI();
}
function Redireccionar(url) {
    window.location = url;
}
function BloquearPantalla() {
    $.blockUI(
    {
        message: '',
        css: { border: 'none', 'border-radius': '30px', padding: "0.2em", background: "none" }
    });

}
function MostrarMensaje(msj) {
    //$("#Lbl_MensajeError").html(msj);
    DesbloquearPantalla();
}
function MostrarMensaje1(msj) {
   // $("#Lbl_MensajeError1").html(msj);
    DesbloquearPantalla();
}