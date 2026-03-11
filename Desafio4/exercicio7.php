<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["verificar"])) {

  $dia = filter_var($_POST["dia"], FILTER_VALIDATE_INT);

  if ($dia !== false) {

    switch ($dia) {
      case 1: $resultado = "1 - Domingo"; break;
      case 2: $resultado = "2 - Segunda-feira"; break;
      case 3: $resultado = "3 - Terça-feira"; break;
      case 4: $resultado = "4 - Quarta-feira"; break;
      case 5: $resultado = "5 - Quinta-feira"; break;
      case 6: $resultado = "6 - Sexta-feira"; break;
      case 7: $resultado = "7 - Sábado"; break;
      default: $resultado = "Número inválido. Digite de 1 a 7.";
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
<title>Exercício 7 - Dia da Semana</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<div class="header">
<h1>Exercício 7</h1>
<p>Descobrir o dia da semana pelo número</p>
</div>

<div class="card">

<h3>Digite um número de 1 a 7</h3>

<form method="POST">

<input type="number" name="dia" min="1" max="7" placeholder="Ex: 1">

<button class="btn" name="verificar" type="submit">Mostrar Dia</button>

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
