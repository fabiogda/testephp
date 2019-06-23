<!-- Espaçamento entre o top e o bottom -->
	<section style="min-height: calc(100vh - 127px); margin-top:15px;" class="light-bg">
        <!-- Conteudo -->
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-6 col-lg-12 text-center" style="margin-top:1%;">
                    <!-- TITULO do Conteudo -->
                    <div class="section-title">
                        <h2 class="text-info"> Faça seu cadastro! </h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Container de conteudo com Formulário -->
        <div class="container col-lg-5">
            <!-- Formulário de cadastro -->
            <form id="cadastro_form" method="post" class="border border-dark rounded" style="padding:10px;">

                <!-- ID do Formulário -->
                <input id="user_id" name="user_id" hidden>

                <!-- linha -->
                <div class="form-row">
                        
                        <!-- tamanho da linha -->
                        <!--inserir LOGIN -->
                        <!-- LOCAL ONDE PODE APARECER O ERRO VINDO DO LOGIN.JS -->
                        <div class="form-group col-lg-12">
                            <input id="user_login" name="user_login" class="form-control rounded" placeholder="Digite um usuario" maxlength="30">              
                            <span class="help-block"></span>
                        </div>                        

                        <!-- tamanho da linha -->
                        <!--inserir NOME COMPLETO -->
                        <!-- LOCAL ONDE PODE APARECER O ERRO VINDO DO LOGIN.JS -->
                        <div class="form-group col-lg-12">
                            <input id="user_full_name" name="user_full_name" class="form-control rounded" placeholder="Digite seu nome completo" maxlength="100">              
                            <span class="help-block"></span>
                        </div>
                        
                        <!-- tamanho da linha -->
                        <!--inserir EMAIL -->
                        <!-- LOCAL ONDE PODE APARECER O ERRO VINDO DO LOGIN.JS -->
                        <div class="form-group col-lg-12">
                            <input id="user_email" name="user_email" class="form-control rounded" placeholder="Digite seu e-mail" maxlength="100">              
                            <span class="help-block"></span>
                        </div>
                    
                        <!-- tamanho da linha -->
                        <!--inserir EMAIL para CONFIRMAR -->
                        <!-- LOCAL ONDE PODE APARECER O ERRO VINDO DO LOGIN.JS -->
                        <div class="form-group col-lg-12">
                            <input id="user_email_confirm" name="user_email_confirm" class="form-control rounded" placeholder="Confirme seu email" maxlength="100">              
                            <span class="help-block"></span>
                        </div>
                        
                        <!-- tamanho da linha -->
                        <!-- inserir SENHA -->
                        <!-- LOCAL ONDE PODE APARECER O ERRO VINDO DO LOGIN.JS -->
                        <div class="form-group col-lg-6">
                                <input type="password" id="password" name="password" class="form-control rounded" placeholder="Senha" maxlength="100">
                                <span class="help-block"></span>                	
                        </div>                        

                        <!-- tamanho da linha -->
                        <!-- inserir SENHA para CONFIRMAR -->
                        <!-- LOCAL ONDE PODE APARECER O ERRO VINDO DO LOGIN.JS -->
                        <div class="form-group col-lg-6">
                            <input type="password" id="password_confirm" name="password_confirm" class="form-control rounded" placeholder="Confirme sua senha">                
                            <span class="help-block"></span>
                        </div>
                        
                </div>

                        <!-- Botão SALVAR -->
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-outline-dark" id="btn_salvar_usuario"> 
                                <i class="far fa-paper-plane"></i> &nbsp; Cadastrar 
                            </button>
                            <br><br>
                            <span class="help-block"></span>
                        </div>
                             
            </form>
            <br>
            <span class="help-block" style="margin-left:45%;"></span>

        </div>

	</section>