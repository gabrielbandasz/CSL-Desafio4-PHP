<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["consumo"])) {
  $dist = filter_var($_POST["distancia"], FILTER_VALIDATE_FLOAT);
  $comb = filter_var($_POST["combustivel"], FILTER_VALIDATE_FLOAT);

  if ($dist !== false && $comb !== false && $comb > 0) {
    $media = $dist / $comb;
    $resultado = "Consumo médio: " . number_format($media, 2) . " Km/L";
  } else {
    $resultado = "Digite valores válidos.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercício 3 - Consumo de Combustível</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<div class="header">
<h1>Exercício 3</h1>
<p>Cálculo do Consumo Médio de Combustível</p>
</div>

<div class="card">

<h3>Informe os dados da viagem</h3>

<form method="POST">

<input type="number" step="any" name="distancia" placeholder="Distância percorrida (Km)">

<input type="number" step="any" name="combustivel" placeholder="Combustível gasto (Litros)">

<button class="btn" name="consumo" type="submit">Calcular</button>

</form>

<?php if ($resultado != ""): ?>
<div class="result">
<?= $resultado ?>
</div>
<?php endif; ?>

<a class="voltar" href="index.php">⬅ Voltar para exercícios</a>

</div>

</div>

</body>
</html>
```
