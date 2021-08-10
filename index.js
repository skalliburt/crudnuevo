$( document ).ready(function() {
    $("#enviar").click(function(){
        var nombres = $("#nombres").val();
        var apellido = $("#apellido").val();
        var fecha = $("#fecha").val();
    
        $.ajax({
            url : 'datos.php',
            data : { nombres : nombres, apellido : apellido, fecha : fecha },
            type : 'POST',
            success : function(json) {
    
            }
        })
    });

    $("#eliminar").click(function(){
        var id = $("#id").val();
    
        $.ajax({
            url : 'eliminar.php',
            data : { id : id,},
            type : 'POST',
            success : function(json) {
                alert("dato eliminado")
            }
        })
    });

});



