<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <h1>Conversor de Moedas v2.0</h1>
    <?php
    //Cotacao do banco central
    $inicio = date("m-d-Y", strtotime("-7 days"));
    $fim = date("m-d-Y");
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);

    $cotacao = $dados["value"][0]["cotacaoCompra"];

    //Valor inserido pelo usuario
    $dinheiro = $_GET["valor"] ?? "0";

    //Equivalência em dólar
    $dolar = $dinheiro / $cotacao;

    //Formatação da moeda
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    echo "<p>Seus " . numfmt_format_currency($padrao, $dinheiro, "BRL") . " equivalem a US$ " . numfmt_format_currency($padrao, $dolar, "USD") . "</p>";


    ?>
    <button onClick="history.go(-1)">Voltar</button>
  </main>
</body>

</html>