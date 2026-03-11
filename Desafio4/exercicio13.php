<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["mediaarray"])) {

  $notas = $_POST["notas"];
  $s = 0;
  $count = 0;

  foreach ($notas as $n) {
    $n = filter_var($n, FILTER_VALIDATE_FLOAT);
    if ($n !== false) {
      $s += $n;
      $count++;
    }
  }

  if ($count > 0) {
    $media = $s / $count;
    $resultado = "Média das notas: " . number_format($media, 2);
  } else {
    $resultado = "Digite notas válidas.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercício 13 - Média de Notas</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<div class="header">
<h1>Exercício 13</h1>
<p>Cálculo da média de 5 notas</p>
</div>

<div class="card">

<h3>Digite as notas</h3>

<form method="POST">

<input type="number" step="any" name="notas[]" placeholder="Nota 1">
<input type="number" step="any" name="notas[]" placeholder="Nota 2">
<input type="number" step="any" name="notas[]" placeholder="Nota 3">
<input type="number" step="any" name="notas[]" placeholder="Nota 4">
<input type="number" step="any" name="notas[]" placeholder="Nota 5">

<button class="btn" name="mediaarray" type="submit">Calcular Média</button>

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
