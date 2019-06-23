	<!-- Espaçamento entre o top e o bottom -->
	<section style="min-height: calc(100vh - 127px); margin-top:15px;" class="light-bg">
		<!-- Conteudo -->
		<div class="container">
			<div class="row">
				<div class="col-lg-offset-6 col-lg-12 text-center" style="margin-top:1%;">
					<!-- TITULO do Conteudo -->
					<div class="section-title">
						<h2 class="text-info"> Login </h2>
					</div>
                    <!-- Container de conteudo com Formulário -->
                    <div class="container col-lg-5" style="margin-top:1%;">
                        <!-- Formulário de cadastro -->
                        <form id="login_form" method="POST" class="border border-dark rounded" style="padding:10px;">

                            <!-- ID do Formulário -->
                            <input id="user_id" name="user_id" hidden>

                            <!-- Linha dos campos LOGIN / SENHA -->
                            <div class="form-row">
                                    
                                    <!-- tamanho da linha -->
                                    <!--inserir LOGIN -->
                                    <!-- LOCAL ONDE PODE APARECER O ERRO VINDO DO LOGIN.JS -->
                                    <div class="form-group col-lg-12">
                                        <input id="user_login" name="user_login" class="form-control rounded text-center" placeholder="Digite um usuario" maxlength="30">              
                                    </div>
                                    <span class="help-block" style="margin:auto;"></span> <!-- ALINHAR CASO HAJA ERRO -->

                                    <!-- tamanho da linha -->
                                    <!-- inserir SENHA -->
                                    <div class="form-group col-lg-12">
                                        <input type="password" id="password" name="password" class="form-control rounded text-center" placeholder="Senha" maxlength="100">                	
                                    </div>

                            </div>
                                    <!-- Botões -->
                                    <div class="form-group text-center">
                                    <!-- CADASTRAR -->
                                    <button class="btn btn-outline-dark" id="btn_cadastrar" onclick="window.location='<?php echo base_url('Cadastro');?>'">
                                    <i class="far fa-address-card"></i>&nbsp; 
                                        Cadastrar! 
                                    </button>
                                    &nbsp;
                                    &nbsp;
                                    <!-- Botão Logar -->
                                    <button type="submit" class="btn btn-outline-dark" id="btn_login"> 
                                    <i class="fas fa-sign-in-alt"></i> &nbsp; Logar 
                                    </button>
                                    </div>
                                    <span class="help-block"></span>
                            
                        </form>
                        <br>
                        <span class="help-block"></span>

                    </div>
                </div>
            </div>
		</div>

	</section>