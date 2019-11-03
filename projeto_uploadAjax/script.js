//$("#form").bind("submit",function(e){
$("button").bind("click", function () {
    //e.preventDefault();
    /*var form = $("#form")[0];
     var data = new FormData(form);
     */
    var data = new FormData();
    var foto = $('#foto')[0].files;
    if (foto.length > 0) {
        data.append("nome",$("#nome").val());
        data.append("foto",foto[0]);
        $.ajax({
            type: "POST",
            url: "recebedor.php",
            data: data,
            contentType: false,
            processData: false,
            success: function (data) {
                alert(data);
            }
        });
    }
});