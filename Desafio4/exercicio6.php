<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["parimpar"])) {

  $num = filter_var($_POST["numero"], FILTER_VALIDATE_INT);

  if ($num !== false) {

    if ($num % 2 == 0) {
      $resultado = "O número $num é PAR";
    } else {
      $resultado = "O número $num é ÍMPAR";
    }

  } else {
    $resultado = "Digite um número válido.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercício 6 - Par ou Ímpar</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<div class="header">
<h1>Exercício 6</h1>
<p>Verificação se um número é par ou ímpar</p>
</div>

<div class="card">

<h3>Digite um número</h3>

<form method="POST">

<input type="number" name="numero" placeholder="Digite um número inteiro">

<button class="btn" name="parimpar" type="submit">Verificar</button>

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
