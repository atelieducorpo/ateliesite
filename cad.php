<?php require('_header.php') ?>

<div class="secao">
	<div class="container">
		&nbsp;
		

		<div id="resposta"></div>

		<form method="post" action="cad2.php" id="cad">

		<h2 class="mt-5">Faça contato</h2>

		<p>Preencha o formulário abaixo para entrar em contato conosco ou enviar sugestões e críticas.</p>

<p class="text-center text-danger small">Todos os campos devem ser preenchidos.</p>

			<div class="form-group">
				<label for="nome">Nome:</label>
				<input type="text" class="form-control" id="nome" placeholder="digite seu nome completo" name="nome" required value="joca da silva">
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" placeholder="Seu endereço de e-mail principal" name="email" required value="joca@joca">
			</div>                      
			<div class="form-group">
				<label for="telefone">Telefones:</label>
				<input type="text" class="form-control" id="telefone" placeholder="Exmplo: (21) 98765-4321" name="telefone" required value="98765432">
			</div>
			<div class="form-group">
				<label for="assunto">Assunto:</label>
				<input type="text" class="form-control" id="assunto" placeholder="Assunto do seu contato" name="assunto" required value="Assunto pessoal">
			</div>
			<div class="form-group">
				<label for="mensagem">Mensagem:</label>
				<textarea name="mensagem" id="mensagem" class="form-control rounded-0" rows="4" placeholder="Sua mensagem, sugestões ou críticas">qualquer coisa</textarea>
			</div>
			<div class="form-group">
				<label for="enviar"></label>
				<button type="submit" id="enviar" class="btn btn-warning">Enviar</button>
			</div>			
		</form>
	</div>
</div>



<?php require('_footer.php') ?>
<script src="js/cad.js"></script>