$(function(){
    $('#idAlmacen').on('change', cargarRecursos);
});

function cargarRecursos(){
    var idAlmacen = $(this).val();

    if(!project_id)
        $('#idRecurso').html('<option value="">Seleccione almacen</option>');  
    
    $.get('/api/almacen/'+project_id+'/recurso', function (data) {
        var html_select = '<option value="">Seleccione recurso bibliográfico</option>'; 
        for (var i = 0; i < data.length; i++){
            html_select += '<option value="'+data[i].idRecurso+'">'+data[i].titulo+'</option>';
        }
        $('#idRecurso').html(html_select);      
    });
}