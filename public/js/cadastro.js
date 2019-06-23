//Formulário da pagina CADASTRO é enviado para cá
$("#cadastro_form").submit(function() {

    $.ajax ({
        type: "post",
        url: BASE_URL + "/Restrict/ajax_save_user",
        dataType: "json",
        data: $(this).serialize(),

            beforeSend: function(){
                clearErrors();
                $("#btn_salvar_usuario").siblings(".help-block").html(loadingImg());
            },

            success: function(response) { //response é a resposta da função ajax_save_user
                clearErrors();
                if(response["status"]){
                   $("#btn_salvar_usuario").parent().parent().siblings(".help-block").html(loadingImg());
                   setTimeout(function(){window.location = BASE_URL + "/Home";}, 2000);
            } else{
                showErrorsCadastro(response["error_list"]);
            }
        }
    })
    return false;  
})