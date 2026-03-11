<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["converter"])) {
  $reais = filter_var($_POST["reais"], FILTER_VALIDATE_FLOAT);
  $cotacao = filter_var($_POST["cotacao"], FILTER_VALIDATE_FLOAT);
  if($reais !== false && $cotacao !== false && $cotacao > 0){
    $dolar = $reais / $cotacao;
    $resultado = "R$ ".number_format($reais,2,",",".")." equivalem a US$ ".number_format($dolar,2);
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Exercício 1 - Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Exercício 1 - Conversor de Moedas</h2>
    <div class="card">
      <form method="POST">
        <input type="number" step="0.01" name="reais" placeholder="Reais">
        <input type="number" step="0.01" name="cotacao" placeholder="Cotação dólar">
        <button name="converter" type="submit">Converter</button>
      </form>
      <div class="result"><?php echo $resultado; ?></div>
    </div>
    <a href="index.php">Voltar à lista</a>
  </div>
</body>
</html>