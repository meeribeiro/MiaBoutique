
<section class="main">
    <div class="title">
        <h3>Adicionar Novo <span>Produto</span></h3>
    </div>
    <div class="centro">
        <form action="acao.php" method="GET">
    
            <div class="todosInputs">
                <div class="inputBox">
                    <label for="nome">Nome:</label>
                    <input id="nome" type="text" name="nome" placeholder="Nome do produto" required="required" onkeyup="maiuscula(this)">
                </div>
    
                <div class="inputBox">
                    <label for="text">Preço:</label>
                    <input id="tex" type="text" name="text" placeholder="Preço do produto" required="required" onkeyup="maiuscula(this)">
                </div>
    
                <div class="inputBox">
                    <label for="foto">Envie a foto do produto:</label>
                    <input id="foto" type="file" name="foto">
                </div>

                <div class="inputBox">
                    <label for="sobreVoce">Descrição do Produto:</label>
                    <textarea id="sobreVoce" name="sobreVoce" rows="5" cols="33" onblur="descricaoTextArea()"></textarea>
                </div>
                
                <div class="botaoEnviar">
                    <input type="submit" value="Enviar">
                </div>
            </div>
    
        </form>
    </div>
</section>
