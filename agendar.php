<?php require('_header.php') ?>
<link rel="stylesheet" href="css/agendar.css">

<div class="container">

    <div class="pageWrap">

        <div id="msgFb"></div>

        <form action="#agendar" method="post" id="agendar" target="_none">
            Preencha o formulário abaixo para entrar em contato com a equipe do 'Atelie du corpo'.

            <div id="msgErroBox">
                <div id="msgErro"></div>
            </div>

            <p>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Seu nome completo.">
            </p>
            <p>
                <label for="email">E-mail:</label>
                <input type="text" name="email" id="email" placeholder="Seu e-mail principal.">
            </p>
            <p>
                <label for="servico">Tipo de serviço:</label>
                <input type="text" name="servico" id="servico" placeholder="Tipo de serviço" value="<?php echo $_GET['serv'] ?>">
            </p>
            <p>
                <label for="dataservico">Escolha a data e hora</label>
                <input type="datetime-local" name="dataservico" id="dataservico">
            </p>
            <p>
                <button class="btnDefault" type="submit" name="enviar" id="enviar">Enviar</button>
            </p>
        </form>

    </div>
</div>

<?php require('_footer.php') ?>
<script src="js/agendar.js"></script>