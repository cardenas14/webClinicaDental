(function(){
    var actualizarH= function(){
        var fecha = new date(),
        mes = fecha.getMonth();
        var Mesp= document.getElementById('mes');
        var Meses=['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
        Mesp.textContent=Meses[mes];

    };
    actualizarH();
    var intervalo = setInterval(actualizarHora, 1000);
 
}())