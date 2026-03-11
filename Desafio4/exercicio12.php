
<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["pares"])) {

  $ini = filter_var($_POST["ini"], FILTER_VALIDATE_INT);
  $fim = filter_var($_POST["fim"], FILTER_VALIDATE_INT);

  if ($ini !== false && $fim !== false) {

    if ($ini > $fim) {
      $resultado = "O número inicial deve ser menor que o final.";
    } else {

      $lista = "";

      for ($i = $ini; $i <= $fim; $i++) {
        if ($i % 2 == 0) {
          $lista .= "$i ";
        }
      }

      $resultado = "Pares entre $ini e $fim: $lista";
    }

  } else {
    $resultado = "Digite números válidos.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercício 12 - Números Pares</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<div class="header">
<h1>Exercício 12</h1>
<p>Mostrar números pares dentro de um intervalo</p>
</div>

<div class="card">

<h3>Informe o intervalo</h3>

<form method="POST">

<input type="number" name="ini" placeholder="Número inicial">

<input type="number" name="fim" placeholder="Número final">

<button class="btn" name="pares" type="submit">Mostrar Pares</button>

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
