$("#pesquisa").bind('keyup',function(){
    var texto = $(this).val();
    if(texto.length >= 1){
        $.ajax({
            url:"busca.php",
            type:"POST",
            dataType: "json",
            data: {texto:texto},
            success:function(data){
                var html = "";
                for(var i in data){
                    html += "<li><a href='usuario.php?id="+data[i].id+"'>"+data[i].nome+"</a></li>";
                }
                
                $('#resultado').html(html);
                //$('#resultado').html(data);
            }
        });
    }
});