<?php require('_header.php') ?>
<link rel="stylesheet" href="css/agendar.css">

<div class="container">

    <div class="pageWrap">

        <div id="msgFb"></div>

        <form action="#agendar" method="post" id="agendar" target="_none">
            Preencha o formulário para agendar o seu serviço.

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
            <label for="dataservico">Escolhe a data</label>
        <input type="date" name="data do serviço" id="dataservico" placeholder="Data do serviço.">

        <label for="horario">Escolha o horário</label>
        <select name="horarioservico" id="horarioservico">
            <option value="08:00">08:00</option>
            <option value="08:00">09:00</option>
            <option value="08:00">10:00</option>
            <option value="08:00">11:00</option>
            <option value="08:00">13:00</option>
            <option value="08:00">14:00</option>
            <option value="08:00">15:00</option>
            <option value="08:00">16:00</option>
            <option value="08:00">17:00</option>

        </select>
        
            </p>
            <p>
                <button class="btnDefault" type="submit" name="enviar" id="enviar">Enviar</button>
            </p>
        </form>

    </div>
</div>

<?php require('_footer.php') ?>
<script src="js/agendar.js"></script>