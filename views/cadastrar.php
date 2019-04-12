<?php include 'views/partials/loginHead.html'; ?>
<body style="background-color: #D5B46A;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('public/assets/img/login_background.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-59">
						Cadastre-se
					</span>

					<div class="wrap-input100 validate-input" data-validate="Digite seu nome completo">
						<span class="label-input100">Nome</span>
						<input class="input100" type="text" name="nome" placeholder="Nome completo...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Digite um email válido email@exemplo.com.br">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="exemplo@email.com">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Digite um nome de Usuário Válido">
						<span class="label-input100">Nome de Usuário</span>
						<input class="input100" type="text" name="usuario" placeholder="Usuário...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Digite uma senha válida">
						<span class="label-input100">Senha</span>
						<input class="input100" type="password" name="senha" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "As senhas não são idênticas">
						<span class="label-input100">Repita a Senha</span>
						<input class="input100" type="password" name="senha2" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Cadastrar
							</button>
						</div>

						<a href="login" class="dis-block txt2 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Já tenho uma conta
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script src="public/theme/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="public/theme/login/vendor/animsition/js/animsition.min.js"></script>
	<script src="public/theme/login/vendor/bootstrap/js/popper.js"></script>
	<script src="public/theme/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="public/theme/login/vendor/select2/select2.min.js"></script>
	<script src="public/theme/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="public/theme/login/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="public/theme/login/vendor/countdowntime/countdowntime.js"></script>
	<script src="public/theme/login/js/main.js"></script>

</body>
</html>