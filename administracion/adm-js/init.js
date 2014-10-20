window.onload = function()
{
    doc = document;
   
    ocultaTodo();//Oculto todos los divs PRINCIPAL, HISTORICO Y CONFIGURACION
    
    
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