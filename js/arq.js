/*MUDANDO AS FOTOS DOS PRODUTOS USANDO ONMOUSEOVER E ONMOUSEOUT*/
function secundariaProduto(id, foto) {
    document.getElementById(id).src = foto;
}
function principalProduto(id, foto) {
    document.getElementById(id).src = foto;
}
function enviarForm() {/*FUNÇÃO PARA APARECER ESSA MENSAGEM QUANDO A CANDIDATA ENVIAR O FORMULÁRIO*/
    alert("Obrigada por se candidatar!");
}
function maiuscula(palavra) { /*DEIXA O QUE O USUARIO DIGITAR EM MAIUSCULO*/
    newPa = palavra.value.toUpperCase();
    palavra.value = newPa;
}
function descricaoTextArea() { /*MENSAGEM DA FUNÇÃO ONBLUR*/
    alert("Esse campo é livre para falar sobre o que achar importante!");
}
function esgotado(){/*MENSAGEM QUANDO ALGUM PRODUTO É CLICADO*/
    prompt("\nProduto esgotado!\nDigite seu email para saber quando o produto estiver de volta em estoque.\n");
}