//Botão Editar Cadastro exibe as info do banco do usuario logado
$("#btn_your_user").click(function() {

    $.ajax ({
        type: "post",
        url: BASE_URL + "/Restrict/ajax_get_user_data",
        dataType: "json",
        data: {"user_id": $(this).attr("user_id")}, //USER_ID vira variavel no HTML

        success: function(response) { //response é a resposta da função ajax_get_user_data 
            $("#form_usuario")[0].reset(); //limpa o form usuario
            $.each(response["input"], function(id, value) { //chama os inputs preenchidos do controller que fez o select
                $("#"+id).val(value); //envia as informações para o form em seus respectivos ID's
            });
            $("#modal_usuario").modal(); // abre o modal
        }
    })
    return false;
})

//Botão salvar (do modal) ATUALIZA as info usuario logado
$("#form_usuario").submit(function() {

    $.ajax ({
        type: "post",
        url: BASE_URL + "/Restrict/ajax_save_user",
        dataType: "json",
        data: $(this).serialize(),

            beforeSend: function(){
                clearErrors();
            },

            success: function(response) { //response é a resposta da função ajax_save_user
                clearErrors();
                if(response["status"]){
                    $("#modal_usuario").modal("hide"); // abre o modal
            } else{
                showErrorsModal(response["error_list"]);
            }
        }
    })
    return false;  
})