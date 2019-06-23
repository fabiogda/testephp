//Formulário da pagina LOGIN é enviado para cá
$(function(){

    //seletor que recebe as informações do formulário LOGIN
    $("#login_form").submit(function(){

        $.ajax({
            
            type: "post",
            url: BASE_URL + "/Restrict/ajax_login",
            dataType: "json",

            data: $(this).serialize(),

            beforeSend: function(){
                clearErrors();
                //aqui pode inserir imagem de load enquanto valida
            },

            success: function(json){

                if(json["status"] == 1){
                    clearErrors();
                    $("#btn_login").parent().parent().siblings(".help-block").html(loadingImg());
                    setTimeout(function(){window.location = BASE_URL + "/Home";}, 2000);
                }else{
                    showErrorsLogin(json["error_list"]);
                }
            },
            error: function(response){
                console.log(response);
            }
        })
        return false;
    })
})