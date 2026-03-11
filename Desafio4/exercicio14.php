<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["compras"])) {

  if (isset($_POST["itens"])) {

    $lista = "<strong>Itens selecionados:</strong><br>";

    foreach ($_POST["itens"] as $i) {
      $lista .= "• $i <br>";
    }

    $resultado = $lista;

  } else {
    $resultado = "Nenhum item selecionado.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercício 14 - Lista de Compras</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<div class="header">
<h1>Exercício 14</h1>
<p>Selecionar itens para uma lista de compras</p>
</div>

<div class="card">

<h3>Escolha os produtos</h3>

<form method="POST">

<label><input type="checkbox" name="itens[]" value="Arroz"> Arroz</label><br><br>

<label><input type="checkbox" name="itens[]" value="Feijão"> Feijão</label><br><br>

<label><input type="checkbox" name="itens[]" value="Leite"> Leite</label><br><br>

<label><input type="checkbox" name="itens[]" value="Ovos"> Ovos</label><br><br>

<button class="btn" name="compras" type="submit">Mostrar Itens</button>

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
