	<body>
		<div class="row">
			<div class="wrap-contact100 filtro">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<form class="contact100-form validate-form" method="post" action="questoesFiltradas">

							<div class="row aqui"><span class="contact100-form-title">Questões de Concurso</span></div>
							<div class="row">

								<div class="wrap-input100 validate-input bg1 col-lg-2">
									<i class="fa fa-search"></i>
									<input class="input100" type="text" name="tags" placeholder="Palavra Chave">
								</div>

								<div class="col-lg-2 boxInput100">
									<i class="fa fa-check"></i>
									<select name="modalidade" class="selectInput100">
										<option value="">Modalidade</option>
										<option>Múltipla-Escolha</option>
										<option>Certo ou Errado</option>
									</select>
								</div>
								
								<div class="col-lg-2 boxInput100">
									<i class="fa fa-book"></i>
									<select name="disciplina" class="selectInput100">
										<option value="">Disciplina</option>
										<?php foreach($disciplina as $campo): ?>
										<option><?=utf8_encode($campo->valor)?></option>
										<?php endforeach; ?>
									</select>
								</div>

								<div class="col-lg-2 boxInput100">
									<i class="fa fa-comment"></i>
									<select name="assunto" class="selectInput100">
										<option value="">Assunto</option>
										<option>Equações</option>
										<option>Ondas</option>
									</select>
								</div>

								<div class="col-lg-2 boxInput100">
									<i class="fa fa-table"></i>
									<select name="banca" class="selectInput100">
										<option value="">Banca</option>
										<option>ACAFE</option>
										<option>ACAPLAM</option>
									</select>
								</div>

								<div class="col-lg-2 boxInput100">
									<i class="fa fa-home"></i>
									<select name="instituição" class="selectInput100">
										<option value="">Instituição</option>
										<option>PUC-RS</option>
										<option>UFRGS</option>
									</select>
								</div>

								<div class="col-lg-2 boxInput100">
									<i class="fa fa-calendar"></i>
									<select name="ano" class="selectInput100">
										<option value="">Ano</option>
										<option>2019</option>
										<option value="2015">2015</option>
									</select>
								</div>

								<div class="col-lg-2 boxInput100">
									<i class="fa fa-user"></i>
									<select name="cargo" class="selectInput100">
										<option value="">Cargo</option>
										<option>Administrador</option>
										<option>Advogado</option>
									</select>
								</div>

								<div class="col-lg-2 boxInput100">
									<i class="fa fa-arrow-down"></i>
									<select name="nivel" class="selectInput100">
										<option value="">Nível</option>
										<option>Médio</option>
										<option>Superior</option>
									</select>
								</div>

								<div class="col-lg-2 boxInput100">
									<i class="fa fa-pencil"></i>
									<select name="area_formacao" class="selectInput100">
										<option value="">Área de Formação</option>
										<option>Administração</option>
										<option>Ártes</option>
									</select>
								</div>

								<div class="col-lg-2 boxInput100">
									<i class="fa fa-briefcase"></i>
									<select name="area_atuacao" class="selectInput100">
										<option value="">Área de Atuação</option>
										<option>Bancário</option>
										<option>Educação</option>
									</select>
								</div>

								<div class="col-lg-2 boxInput100">
									<i class="fa fa-angle-up"></i>
									<select name="dificuldade" class="selectInput100">
										<option value="">Dificuldade</option>
										<option>Fácil</option>
										<option>Difícil</option>
									</select>
								</div>

							</div>
							<div class="row">
								<div class="col-md-5"></div>
								<div class="container-contact100-form-btn col-lg-2">
									<button class="contact100-form-btn">
										<span>Filtrar <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i></span>
									</button>
								</div>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
