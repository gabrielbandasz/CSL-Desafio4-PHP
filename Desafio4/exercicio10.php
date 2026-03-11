<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["fatorial"])) {

  $n = filter_var($_POST["fat"], FILTER_VALIDATE_INT);
  $f = 1;

  if ($n !== false && $n >= 0) {

    for ($i = 1; $i <= $n; $i++) {
      $f *= $i;
    }

    $resultado = "Fatorial de $n = $f";

  } else {
    $resultado = "Digite um número inteiro válido.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercício 10 - Fatorial</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<div class="header">
<h1>Exercício 10</h1>
<p>Cálculo do fatorial de um número</p>
</div>

<div class="card">

<h3>Digite um número</h3>

<form method="POST">

<input type="number" name="fat" placeholder="Número (ex: 5)" min="0">

<button class="btn" name="fatorial" type="submit">Calcular Fatorial</button>

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
