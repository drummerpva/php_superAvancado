function editar(id) {
    $("#modal").modal("show");
    $.ajax({
        url: "editar.php",
        type: 'POST',
        data: {id: id},
        beforeSend: function (xhr) {
            $("#modal").find(".modal-body").html("Carregando...");
            $("#modal").modal("show");
        },
        success: function (html) {
            $("#modal").find(".modal-body").html(html);
            $("#modal").find(".modal-body").find("form").bind("submit", salvar);
        }
    });
}
function salvar(e) {
    e.preventDefault();
    var id = $(this).find("input[name=id]").val();
    var nome = $(this).find("input[name=nome]").val();
    var email = $(this).find("input[name=email]").val();
    $.ajax({
        url: "salvar.php",
        type: 'POST',
        data: {
            id: id,
            nome: nome,
            email: email
        },
        success: function (data, textStatus, jqXHR) {
            alert("Dados Alterados com sucesso!");
            window.location.href = window.location.href;
        }

    });

}


function excluir(id) {
    $("#modal").find(".modal-body").html("Tem Certeza que deseja excluir?<br/><button class='btn btn-success' onclick='excluirUsuario("+id+")'>Sim</button>&nbsp;<button class='btn btn-danger' data-dismiss='modal'>Não</button>");
    $("#modal").modal("show");

}

function excluirUsuario(id){
    $.ajax({
        url:"excluir.php",
        type: 'POST',
        data:{id:id},
        success: function (data, textStatus, jqXHR) {
            alert("Excluido com sucesso!");
            window.location.href = window.location.href;
        }
    });
}