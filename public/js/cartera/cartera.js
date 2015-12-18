$( document ).ready(function() {
   $('html, body').animate({
                    scrollTop: $("#total").offset().top
                    }, 500);
});


function ver_cartera(){
    var distribuidor = $('[data-id="subPicker_distri"]').text();
    $('#modal-loading').modal({
        backdrop: 'static',
        keyboard: false
        })
    $.ajax({
        url:'cartera/datos',
        data:{distribuidor:distribuidor},
        type:'GET',
        success: function(data){
            $('#modal-loading').modal("hide");
            $('#registros_container').html(data);
            $('html, body').animate({
                    scrollTop: $("#total").offset().top
                    }, 500);
        }
    });
}

function borrar_registro(elem){
    var id = elem.parentNode.parentNode.getAttribute('id');
    $('#modal-loading').modal({
        backdrop: 'static',
        keyboard: false
        })
    $.ajax({
        url:'cartera/eliminar',
        data:{id:id},
        type:'GET',
         success: function(data){
                if(data == 1){
                    $('.modal-header #modal-tittle').html('Exito');
                    $('.modal-body #modal-body').html("Registro eliminado. debe actualizar la página para ver el total actualizado");
                    $('#modal-content').modal('show'); 
                    $('#'+id).remove();
                }else{
                    $('.modal-header #modal-tittle').html('Error');
                    $('.modal-body #modal-body').html(data);
                    $('#modal-content').modal('show'); 
                }
                $('#modal-loading').modal("hide");
        }
    });
}

function actualizar_registro(elem){
    var id = elem.parentNode.parentNode.getAttribute('id');
    var fecha = $('#'+id+"_fecha").val();
    var descripcion = $('#'+id+"_descripcion").val();
    var cantidad = $('#'+id+"_cantidad").val();
    var valor = $('#'+id+"_valor").val().replace('$','').replace('.','').replace(',','');
    $('#modal-loading').modal({
        backdrop: 'static',
        keyboard: false
        })
    $.ajax({
        url:'cartera/actualizar',
        data:{id:id, fecha:fecha, descripcion:descripcion, cantidad:cantidad, valor:valor},
        type:'GET',
        success: function(data){
            if(data == 1){
                $('.modal-header #modal-tittle').html('Exito');
                $('.modal-body #modal-body').html("Registro actualizado. debe actualizar la página para ver el total actualizado");
                $('#modal-content').modal('show'); 
            }else if(data == -1){
                    $('.modal-header #modal-tittle').html('Error');
                    $('.modal-body #modal-body').html("Fecha en formato desconocido. Debe ser AAAA-MM-DD");
                    $('#modal-content').modal('show');  
            }else{
                $('.modal-header #modal-tittle').html('Error');
                $('.modal-body #modal-body').html(data);
                $('#modal-content').modal('show'); 
            }
            $('#modal-loading').modal("hide");
        }
    });
}