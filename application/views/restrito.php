	<!-- Espaçamento entre o top e o bottom -->
	<section style="min-height: calc(100vh - 127px); margin-top:15px;" class="light-bg">
		<!-- Conteudo -->
		<div class="container">
			<div class="row">
				<div class="col-lg-offset-6 col-lg-12 text-center" style="margin-top:2%;">
					<!-- TITULO do Conteudo -->
					<div class="section-title">
						<h2 class="text-info"> Bem-vindo! </h2>
						<!-- Botões -->
						<button id="btn_your_user" class="btn btn-warning" user_id="<?=$user_id ?>"><i class="fa fa-user"></i> Editar cadastro</button>
                        <button class="btn btn-warning" onclick="window.location='<?php echo base_url('Restrict/logoff');?>'"><i class="fas fa-sign-out-alt"></i> Sair</button>
                    </div>
                </div>
            </div>
		</div>
	</section>


<!-- MODAL -->
<div id="modal_usuario" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- TITULO DO MODAL -->
            <div class="modal-header">
				<h4 class="modal-title"> Usuário </h4>
				<button type="button" class="close" data-dismiss="modal">x</button>
            </div>

            <!-- CONTEUDO DO MODAL-->
            <div class="modal-body">
                <!-- INICIANDO FORMULARIO -->
                <form id="form_usuario" method="POST">

                    <input id="user_id" name="user_id" hidden>

                    <!-- CAMPO Login -->
                    <div class="form-group">
                        <div class="row">
                            <label class="col-lg-2 control-label" for="user_login">Login</label>
                            <div class="col-lg-10">
                                <input id="user_login" name="user_login" class="form-control" maxlength="30">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>

                    <!-- CAMPO NOME -->
                    <div class="form-group">
                        <div class="row">
                            <label class="col-lg-2 control-label" for="user_full_name">Nome completo</label>
                            <div class="col-lg-10">
                                <input id="user_full_name" name="user_full_name" class="form-control" maxlength="100">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>

                    <!-- CAMPO EMAIL -->
                    <div class="form-group">
                        <div class="row">
                            <label class="col-lg-2 control-label" for="user_email">E-mail</label>
                            <div class="col-lg-10">
                                <input id="user_email" name="user_email" class="form-control" maxlength="100">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>

                    <!-- CAMPO CONFIRMAR EMAIL -->
                    <div class="form-group">
                        <div class="row">
                            <label class="col-lg-2 control-label" for="user_email_confirm">Confirmar e-mail</label>
                            <div class="col-lg-10">
                                <input id="user_email_confirm" name="user_email_confirm" class="form-control" maxlength="100">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>

                    <!-- CAMPO SENHA -->
                    <div class="form-group">
                        <div class="row">
                            <label class="col-lg-2 control-label" for="password">Senha</label>
                            <div class="col-lg-10">
                                <input type="password" id="password" name="password" class="form-control">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>

                    <!-- CAMPO CONFIRMAR SENHA -->
                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-2 control-label" for="password_confirm">Confirmar senha</label>
                            <div class="col-sm-10">
                                <input type="password" id="password_confirm" name="password_confirm" class="form-control">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>

                    <!-- BOTÃO SALVAR -->
                    <div class="form-group text-center">
                        <button type="submit" id="btn_salvar_usuario" class="btn btn-success">
                            <i class="fa fa-save"></i>&nbsp; Salvar </i>
                        </button>
                        <span class="help-block"></span>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>