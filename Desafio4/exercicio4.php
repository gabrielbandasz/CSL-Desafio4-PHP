<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["media"])) {
  $n1 = filter_var($_POST["n1"], FILTER_VALIDATE_FLOAT);
  $n2 = filter_var($_POST["n2"], FILTER_VALIDATE_FLOAT);

  if ($n1 !== false && $n2 !== false) {

    $media = ($n1 + $n2) / 2;

    if ($media >= 7) {
      $sit = "Aprovado";
    } elseif ($media >= 4) {
      $sit = "Recuperação";
    } else {
      $sit = "Reprovado";
    }

    $resultado = "Média: " . number_format($media, 2) . " - $sit";

  } else {
    $resultado = "Digite valores válidos.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercício 4 - Média do Aluno</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<div class="header">
<h1>Exercício 4</h1>
<p>Cálculo da média de um aluno</p>
</div>

<div class="card">

<h3>Informe as notas</h3>

<form method="POST">

<input type="number" step="any" name="n1" placeholder="Nota 1">

<input type="number" step="any" name="n2" placeholder="Nota 2">

<button class="btn" name="media" type="submit">Calcular Média</button>

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

