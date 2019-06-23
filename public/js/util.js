const BASE_URL = "http://localhost:8080";

//Função que remove os erros
function clearErrors(){
    $(".is-invalid").removeClass("is-invalid");
    $(".help-block").html("");
}

//Função que exibe os erros no LOGIN
function showErrorsLogin(error_list){
    clearErrors();

    $.each(error_list, function(id, message){
        $(id).addClass("is-invalid");
        $(id).parent().siblings(".help-block").html(message)
    })
}

//Função que exibe os erros no CADASTRO
function showErrorsCadastro(error_list){
    clearErrors();

    $.each(error_list, function(id, message){
        $(id).addClass("is-invalid");
        $(id).siblings(".help-block").html(message)
    })
}

//Função que exibe os erros no MODAL (estando logado)
function showErrorsModal(error_list){
    clearErrors();

    $.each(error_list, function(id, message){
        $(id).addClass("is-invalid", "invalid-feedback");
        $(id).siblings(".help-block").html(message)
    })
}

//Função que exibe imagem de load
function loadingImg(message=""){
    return "<i class='fas fa-spinner fa-spin fa-3x' </i>&nbsp;" + message;
    }
