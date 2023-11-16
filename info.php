<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Informações </title>
        <link rel="icon" type="imagem/png" href="imagens/MiaBoutique_logo.png" width="900" height="1000" />
        <link href="css/estilo.css" rel="stylesheet" />
        <link href="css/estiloInfo.css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta charset="utf-8">
        </script>
    </head>
<body>
    <script>
        /*ADICIONANDO ALERTA QUANDO A TABELA É CLICADA*/
        function message(x){
            alert ("Não é possível selecionar.");
        }

        /*MUDANDO A COR DOS NOMES QUANDO O MOUSE PASSA POR CIMA*/
        function MudarCor(){
            var nomes = document.getElementById("nomes");
            nomes.style.color = "#A0522D";
        }

        function CorNormal() {
            var nomes = document.getElementById("nomes");
            nomes.style.color = "black";
        }

    </script>

    <?php include('menu.php'); ?><!--include do arquivo do menu-->

    <section class="info">
        <div class="centro">
            <h1> Entenda nossos tamanhos </h1>
            <!--criando a tabela de tamanhos-->
            <table border="1">
                <tr onclick="message(this)">  <!--EVENTO QUE MOSTRA O ALERT QUANDO A TABELA É CLICADA-->
                    <th>Tamanho</th>
                    <th>Busto</th>
                    <th>Cintura</th>
                    <th>Quadril</th>
                </tr>
                <tr onclick="message(this)">
                    <td>PP / 36</td>
                    <td>78 - 84</td>
                    <td>62 - 66</td>
                    <td>90 - 94</td>
                </tr>
                <tr onclick="message(this)">
                    <td>P / 35</td>
                    <td>84 - 90</td>
                    <td>66 - 70</td>
                    <td>94 - 98</td>
                </tr>
                <tr onclick="message(this)">
                    <td>M / 40</td>
                    <td>90 - 96</td>
                    <td>70 - 74</td>
                    <td>98 - 102</td>
                </tr>
                <tr onclick="message(this)">
                    <td>G / 42</td>
                    <td>96 - 102</td>
                    <td>74 - 78</td>
                    <td>106 - 110</td>
                </tr>
                <tr onclick="message(this)">
                    <td>GG / 44</td>
                    <td>102 - 108</td>
                    <td>78 - 82</td>
                    <td>110 - 114</td>
                </tr>
            </table>
            <h1> Como tirar suas medidas antes de comprar </h1>
            <!--adicionando o vídeo-->
            <iframe id="video" height="315" src="https://www.youtube.com/embed/yrGezMWTCXw" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen></iframe>
        </div> <!-- centro -->
    </section> <!-- info -->
    <div class="footer-bottom">
        <div class="box">
          <a id="nomes" onmouseover="MudarCor()" onmouseout="CorNormal()"> &copy; | Site criado por Melissa Ribeiro</a>
          <!--EVENTOS PARA MUDAR A COR QUANDO O MOUSE PASSA POR CIMA E SAI-->
        </div>
      </div>
</body>
</html>