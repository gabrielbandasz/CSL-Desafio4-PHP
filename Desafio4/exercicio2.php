<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["retangulo"])) {
  $base = filter_var($_POST["base"], FILTER_VALIDATE_FLOAT);
  $altura = filter_var($_POST["altura"], FILTER_VALIDATE_FLOAT);

  if ($base !== false && $altura !== false) {
    $area = $base * $altura;
    $perimetro = 2 * ($base + $altura);
    $resultado = "Área: $area m² | Perímetro: $perimetro m";
  } else {
    $resultado = "Digite valores válidos.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercício 2 - Área do Retângulo</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<div class="header">
<h1>Exercício 2</h1>
<p>Cálculo da Área e Perímetro de um Retângulo</p>
</div>

<div class="card">

<h3>Informe os valores</h3>

<form method="POST">

<input type="number" step="any" name="base" placeholder="Base do retângulo">

<input type="number" step="any" name="altura" placeholder="Altura do retângulo">

<button class="btn" name="retangulo" type="submit">Calcular</button>

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
