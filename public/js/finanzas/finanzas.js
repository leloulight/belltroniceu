var datosDiagrama=[
            {
                value: 1,
                color:"gray",
                highlight: "gray",
            }
        ];
        
var options = {
    segmentShowStroke : true,
    segmentStrokeColor : "#fff",
    segmentStrokeWidth : 2,
    percentageInnerCutout : 50,
    animationSteps : 100,
    animationEasing : "easeOutBounce",
    animateRotate : true,
    animateScale : false,
    responsive:true,
    maintainAspectRatio:false,
    tooltipTemplate: "<%if (label){%><%=label%>: <%}%>$<%= addCommas(value) %>",
    multiTooltipTemplate: "$<%= addCommas(value) %>",
}
var ctx = document.getElementById("canvasHistorial").getContext("2d");
var diagramaPrepVsLibre = new Chart(ctx).Doughnut(datosDiagrama, options);  
// MORADO - AZUL - VERDE - AMARILLO - ROJO - NARANJA - ROSADO - AGUAMARINA - VERDE SUAVE - MAGENTA - CAFE - AMARRILLO - MORADO -AZUL - VERDE - ROJO
var colors = ['#BDAEC6', '#C1DAD6', '#89E894', '#FFFF66', '#E86850', '#ffb366', '#ff9999', '#66d9ff', '#99ff66', '#F49AC2', '#836953', '#FDFD96', '#B19CD9', '#C1DAD6', '#89E894', '#E86850'];

function consultar_distribuidor_admin(){
    var distribuidor = $('[data-id="subPicker_distri"]').text();
    var periodo = $('[data-id="subPicker_periodo"]').text();
    $('#modal-loading').modal({
        backdrop: 'static',
        keyboard: false
        })
    datos_distribuidor(distribuidor, periodo);
}

function consultar_distribuidor(){
    var periodo = $('[data-id="subPicker_periodo"]').text();
    $('#modal-loading').modal({
        backdrop: 'static',
        keyboard: false
        })
    datos_distribuidor(null, periodo);
}

function datos_distribuidor(distribuidor, periodo){
    $.ajax({
        url:'diagrama/comisiones',
        data:{distribuidor:distribuidor, periodo:periodo},
        type:'GET',
        success: function(data){
            var datos = new Map();
            var datosDiagrama = [];
            var totalPrepago = 0;
            var totalLibre = 0;
            var html = "";
            var aux;
            if(data.length == 0){
                $('#valores_subs').html('<label style="color:red;font-size:18px">No tienes ganancias registradas</label>');
                $('#modal-loading').modal('hide');
                return;
            }
            for (var i = 0; i < data.length; i++){
                if(!datos.has(data[i].nombre)){
                    aux = [0,0];
                }else{
                    aux = datos.get(data[i].nombre);
                }
                if(data[i].tipo == 1){
                    aux[0] = Math.floor(data[i].valor*0.62);
                }else{
                    aux[1] = Math.ceil(data[i].valor*0.49);
                }
                datos.set(data[i].nombre,aux);
            }
            var i = 0;
            datos.forEach(function(values, key) {
                html += '<div class="historial_container" style="background: ' + colors[i] + '">' + '<label style="min-width:200px">'  + key + '</label><label class="historial_label" style="margin-right:10px;">$' + addCommas(values[0]) + '</label><label class="historial_label"> $' + addCommas(values[1]) + '</label></div><br>';
                totalPrepago += values[0];
                totalLibre += values[1];
                i++;
            }, datos)
            
            var retencionPrepago = Math.floor(totalPrepago * 0.01);
            var retencionLibre = Math.floor(totalLibre * 0.01);
            var reteIcaPrepago = Math.floor(totalPrepago * 0.00413);
            var reteIcaLibre = Math.floor(totalLibre * 0.00413);
            html += '<h3 class="section-heading text-muted" style="color:black;margin-bottom:20px">SUBTOTAL</h3><hr><label class="historial_label_total">$' + addCommas(totalPrepago) + '</label><label class="historial_label_total">$' + addCommas(totalLibre) + '</label>';
            html += '<h3 class="section-subheading text-muted" style="color:black;margin-bottom:20px">RETENCION</h3><hr><label class="historial_label_total">$' + addCommas(retencionPrepago) + '</label><label class="historial_label_total">$' + addCommas(retencionLibre) + '</label>';
            html += '<h3 class="section-subheading text-muted" style="color:black;margin-bottom:20px">RETEICA</h3><hr><label class="historial_label_total">$' + addCommas(reteIcaPrepago) + '</label><label class="historial_label_total">$' + addCommas(reteIcaLibre) + '</label>';
            
            totalPrepago -= (retencionPrepago + reteIcaPrepago);
            totalLibre -= (retencionLibre + reteIcaLibre);
            
            html += '<h3 class="section-heading text-muted" style="color:black;margin-bottom:20px">TOTAL A PAGAR</h3><hr><label class="historial_label_total">$' + addCommas(totalPrepago+totalLibre) + '</label>';
            var total=totalPrepago+totalLibre;
            datosDiagrama.push(
                        {
                            value: totalLibre,
                            color:"#85C1F5",
                            highlight: "#4A789C",
                            label: "Libre",
                        }
                    );
            datosDiagrama.push(
                        {
                            value: totalPrepago,
                            color:"#7FCA9F",
                            highlight: "#3f654f",
                            label: "Prepago",
                        }
                    );
            $('#valores_subs').html(html);
            diagramaPrepVsLibre.destroy();
            var ctx = document.getElementById("canvasHistorial").getContext("2d");
            diagramaPrepVsLibre = new Chart(ctx).Doughnut(datosDiagrama, options);
            $('#modal-loading').modal('hide');
        }
    });  
}


function addCommas(nStr)
{
    nStr += '';
    var x = nStr.split('.');
    var x1 = x[0];
    var x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}