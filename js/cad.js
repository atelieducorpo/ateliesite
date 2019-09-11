var form = document.getElementById('cad');
var resposta = document.getElementById('resposta');

form.onsubmit = function() {

    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var telefone = document.getElementById('telefone').value;
    var assunto = document.getElementById('assunto').value;
    var mensagem = document.getElementById('mensagem').value;
    var agora = new Date(),
        dia  = agora.getDate().toString(),
        diaF = (dia.length == 1) ? '0'+dia : dia,
        mes  = (agora.getMonth()+1).toString(), //+1 pois no getMonth Janeiro começa com zero.
        mesF = (mes.length == 1) ? '0'+mes : mes,
        anoF = agora.getFullYear(),
        hora = agora.getHours(),
        min = agora.getMinutes();

    var data = `${anoF}-${mesF}-${diaF} ${hora}:${min}`;

   db.collection("contatos").add({
        nome: nome,
        email: email,
        assunto: assunto,
        telefone: telefone,
        mensagem: mensagem,
        data: data
    }).then(function(docRef) {
        console.log("Document written with ID: ", docRef.id);
        form.style.display = 'none';
        var nomes = nome.split(' ');
        resposta.innerHTML = `
        <h3>Olá ${nomes[0]}!</h3>
        <p>Seu contato foi enviado para a equipe do site.</p>
        <p>Obrigado...</p>        
        `;
        resposta.style.display = 'block';
    }).catch(function(error) {
        console.error("Error adding document: ", error);
    });


    return false;
}