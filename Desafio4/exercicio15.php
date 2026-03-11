<?php  
$resultado = "";  

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["maior"])) {  

  $nums = $_POST["numeros"];  
  $numeros_validos = [];

  foreach ($nums as $n) {
    $n = filter_var($n, FILTER_VALIDATE_FLOAT);
    if ($n !== false) {
      $numeros_validos[] = $n;
    }
  }

  if (count($numeros_validos) > 0) {

    $maior = $numeros_validos[0];

    foreach ($numeros_validos as $n) {
      if ($n > $maior) {
        $maior = $n;
      }
    }

    $resultado = "Maior número: $maior";

  } else {
    $resultado = "Digite números válidos.";
  }
}
?>  

<!DOCTYPE html>  
<html>  
<head>
<meta charset="UTF-8">
<title>Exercício 15 - Maior Número</title>
<link rel="stylesheet" href="style.css">
</head>  

<body>  

<div class="container">

<div class="header">
<h1>Exercício 15</h1>
<p>Encontrar o maior número entre vários valores</p>
</div>

<div class="card">

<h3>Digite os números</h3>

<form method="POST">  

<input type="number" step="any" name="numeros[]" placeholder="Número 1">  
<input type="number" step="any" name="numeros[]" placeholder="Número 2">  
<input type="number" step="any" name="numeros[]" placeholder="Número 3">  
<input type="number" step="any" name="numeros[]" placeholder="Número 4">  
<input type="number" step="any" name="numeros[]" placeholder="Número 5">  

<button class="btn" name="maior" type="submit">Encontrar Maior</button>  

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
