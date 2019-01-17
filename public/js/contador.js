
function countdown(){
    var fecha=new Date('2019','04','24','08','00','00')
    var hoy=new Date()
    var dias=0
    var horas=0
    var minutos=0
    var segundos=0

    if (fecha>hoy){
            var diferencia=(fecha.getTime()-hoy.getTime())/1000
            dias=Math.floor(diferencia/86400)
            diferencia=diferencia-(86400*dias)
            horas=Math.floor(diferencia/3600)
            diferencia=diferencia-(3600*horas)
            minutos=Math.floor(diferencia/60)
            diferencia=diferencia-(60*minutos)
            segundos=Math.floor(diferencia)

         
                document.getElementById("dia").innerHTML=dias;
                document.getElementById("hora").innerHTML=horas;
                document.getElementById("minuto").innerHTML=minutos;
                document.getElementById("segundo").innerHTML=segundos;

    
            if (dias>0 || horas>0 || minutos>0 || segundos>0){
                    setTimeout("countdown()",1000);                
            }
    }
    else{
            document.getElementById('restante').innerHTML='<span class="element">' + dias + ' dias</span><span class="element">' + horas + ' horas</span><span class="element">' + minutos + ' minutos</span><span class="element">' + segundos + ' segundos</span>'
    }
}
        