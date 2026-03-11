<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["idade"])) {

  $ano = filter_var($_POST["ano"], FILTER_VALIDATE_INT);

  if ($ano !== false) {

    $idade = date("Y") - $ano;

    if ($idade >= 18 && $idade < 70) {
      $msg = "Voto Obrigatório";
    } elseif (($idade >= 16 && $idade < 18) || $idade >= 70) {
      $msg = "Voto Facultativo";
    } else {
      $msg = "Não pode votar";
    }

    $resultado = "Idade: $idade anos - $msg";

  } else {
    $resultado = "Digite um ano válido.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercício 5 - Verificar Idade</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<div class="header">
<h1>Exercício 5</h1>
<p>Verificação da situação do voto com base na idade</p>
</div>

<div class="card">

<h3>Informe o ano de nascimento</h3>

<form method="POST">

<input type="number" name="ano" placeholder="Ano de nascimento">

<button class="btn" name="idade" type="submit">Verificar</button>

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
