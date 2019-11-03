$("#form").bind("submit", function (e) {
    e.preventDefault();
    var email = $("input[name=email]").val();
    var senha = $("input[name=senha]").val();
    
    //var data = $(this).serialize();
    $.ajax({
        type:"POST",
        url:"login.php",
        data:{
            "email":email,
            "senha":senha
        },
        success:function(data){
            if(data == "S"){
                alert("Login ok!");
                //window.location.href = "pagina.php";
            }else if(data == "N"){
                alert("Usuário e/ou senha incorretos!");
            }
        }
    });
});