<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["verificar"])) {

  $mes = filter_var($_POST["mes"], FILTER_VALIDATE_INT);

  if ($mes !== false) {

    switch ($mes) {
      case 1: $resultado = "1 - Janeiro"; break;
      case 2: $resultado = "2 - Fevereiro"; break;
      case 3: $resultado = "3 - Março"; break;
      case 4: $resultado = "4 - Abril"; break;
      case 5: $resultado = "5 - Maio"; break;
      case 6: $resultado = "6 - Junho"; break;
      case 7: $resultado = "7 - Julho"; break;
      case 8: $resultado = "8 - Agosto"; break;
      case 9: $resultado = "9 - Setembro"; break;
      case 10: $resultado = "10 - Outubro"; break;
      case 11: $resultado = "11 - Novembro"; break;
      case 12: $resultado = "12 - Dezembro"; break;
      default: $resultado = "Número inválido. Digite de 1 a 12.";
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
<title>Exercício 9 - Mês</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<div class="header">
<h1>Exercício 9</h1>
<p>Descobrir o mês pelo número</p>
</div>

<div class="card">

<h3>Digite um número de 1 a 12</h3>

<form method="POST">

<input type="number" name="mes" min="1" max="12" placeholder="Ex: 1">

<button class="btn" name="verificar" type="submit">Mostrar Mês</button>

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
