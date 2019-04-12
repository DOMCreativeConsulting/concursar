	<body>
		<div class="row">
			<div class="wrap-contact100 filtro">
			<p class="login"><a href="login">Login</a></p>
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
										<?php foreach($disciplinas as $disciplina): ?>
										<option><?=utf8_encode($disciplina->valor)?></option>
										<?php endforeach; ?>
									</select>
								</div>

								<div class="col-lg-2 boxInput100">
									<i class="fa fa-comment"></i>
									<select name="assunto" class="selectInput100">
										<option value="">Assunto</option>
										<?php foreach($assuntos as $assunto): ?>
										<option><?=utf8_encode($assunto->valor)?></option>
										<?php endforeach; ?>
									</select>
								</div>

								<div class="col-lg-2 boxInput100">
									<i class="fa fa-table"></i>
									<select name="banca" class="selectInput100">
										<option value="">Banca</option>
										<?php foreach($bancas as $banca): ?>
										<option><?=utf8_encode($banca->valor)?></option>
										<?php endforeach; ?>
									</select>
								</div>

								<div class="col-lg-2 boxInput100">
									<i class="fa fa-home"></i>
									<select name="instituição" class="selectInput100">
										<option value="">Instituição</option>
										<?php foreach($instituicoes as $instituicao): ?>
										<option><?=utf8_encode($instituicao->valor)?></option>
										<?php endforeach; ?>
									</select>
								</div>

								<div class="col-lg-2 boxInput100">
									<i class="fa fa-calendar"></i>
									<select name="ano" class="selectInput100">
										<option value="">Ano</option>
										<option>2019</option>
										<option>2018</option>
										<option>2017</option>
										<option>2016</option>
										<option>2015</option>
										<option>2014</option>
										<option>2013</option>
										<option>2012</option>
										<option>2011</option>
										<option>2010</option>
										<option>2009</option>
										<option>2008</option>
										<option>2007</option>
										<option>2006</option>
										<option>2005</option>
										<option>2004</option>
										<option>2003</option>
										<option>2002</option>
										<option>2001</option>
										<option>2000</option>
										<option>1999</option>
										<option>1998</option>
										<option>1997</option>
										<option>1996</option>
										<option>1995</option>
										<option>1994</option>
									</select>
								</div>

								<div class="col-lg-2 boxInput100">
									<i class="fa fa-user"></i>
									<select name="cargo" class="selectInput100">
										<option value="">Cargo</option>
										<?php foreach($cargos as $cargo): ?>
										<option><?=utf8_encode($cargo->valor)?></option>
										<?php endforeach; ?>
									</select>
								</div>

								<div class="col-lg-2 boxInput100">
									<i class="fa fa-arrow-down"></i>
									<select name="nivel" class="selectInput100">
										<option value="">Nível</option>
										<option>Fundamental</option>
										<option>Médio</option>
										<option>Superior</option>
									</select>
								</div>

								<div class="col-lg-2 boxInput100">
									<i class="fa fa-pencil"></i>
									<select name="area_formacao" class="selectInput100">
										<option value="">Área de Formação</option>
										<?php foreach($areas_formacao as $area_formacao): ?>
										<option><?=utf8_encode($area_formacao->valor)?></option>
										<?php endforeach; ?>
									</select>
								</div>

								<div class="col-lg-2 boxInput100">
									<i class="fa fa-briefcase"></i>
									<select name="area_atuacao" class="selectInput100">
										<option value="">Área de Atuação</option>
										<?php foreach($areas_atuacao as $area_atuacao): ?>
										<option><?=utf8_encode($area_atuacao->valor)?></option>
										<?php endforeach; ?>
									</select>
								</div>

								<div class="col-lg-2 boxInput100">
									<i class="fa fa-angle-up"></i>
									<select name="dificuldade" class="selectInput100">
										<option value="">Dificuldade</option>
										<option>Fácil</option>
										<option>Médio</option>
										<option>Difícil</option>
										<option>Muito Difícil</option>
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
