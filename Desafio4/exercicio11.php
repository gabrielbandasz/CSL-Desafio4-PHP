<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["soma"])) {

  $n = filter_var($_POST["sn"], FILTER_VALIDATE_INT);
  $s = 0;

  if ($n !== false && $n >= 1) {

    for ($i = 1; $i <= $n; $i++) {
      $s += $i;
    }

    $resultado = "Soma de 1 até $n = $s";

  } else {
    $resultado = "Digite um número inteiro maior ou igual a 1.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercício 11 - Somatório</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<div class="header">
<h1>Exercício 11</h1>
<p>Cálculo do somatório de 1 até um número N</p>
</div>

<div class="card">

<h3>Digite um número</h3>

<form method="POST">

<input type="number" name="sn" placeholder="Número (ex: 10)" min="1">

<button class="btn" name="soma" type="submit">Calcular Somatório</button>

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
