window.onload = function()
{
    doc = document;
   //
    ocultaTodo();//Oculto todos los divs PRINCIPAL, HISTORICO Y CONFIGURACION
    
    //$("#modal-login-admin").show();
    $("#divProductos").show();
    
    prepara_eventos();
    //PreparaEventosUsuario();
};

function ocultaTodo()
{
    
    $('.pestana').hide(); 
}
;


function tabla_productos(){
    
}