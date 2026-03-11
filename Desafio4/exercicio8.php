<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["calc"])) {

  $n1 = filter_var($_POST["num1"], FILTER_VALIDATE_FLOAT);
  $n2 = filter_var($_POST["num2"], FILTER_VALIDATE_FLOAT);
  $op = $_POST["op"] ?? "";

  if ($n1 !== false && $n2 !== false) {

    switch ($op) {

      case "somar":
        $r = $n1 + $n2;
        $sim = "+";
        break;

      case "subtrair":
        $r = $n1 - $n2;
        $sim = "-";
        break;

      case "multiplicar":
        $r = $n1 * $n2;
        $sim = "×";
        break;

      case "dividir":
        if ($n2 == 0) {
          $resultado = "Erro: divisão por zero.";
          $r = null;
          break;
        }
        $r = $n1 / $n2;
        $sim = "÷";
        break;

      default:
        $resultado = "Operação inválida.";
    }

    if (isset($r)) {
      $resultado = "$n1 $sim $n2 = $r";
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
<title>Exercício 8 - Calculadora</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<div class="header">
<h1>Exercício 8</h1>
<p>Calculadora simples com operações básicas</p>
</div>

<div class="card">

<h3>Digite os valores</h3>

<form method="POST">

<input type="number" step="any" name="num1" placeholder="Número 1">

<input type="number" step="any" name="num2" placeholder="Número 2">

<select name="op">
<option value="somar">Somar</option>
<option value="subtrair">Subtrair</option>
<option value="multiplicar">Multiplicar</option>
<option value="dividir">Dividir</option>
</select>

<button class="btn" name="calc" type="submit">Calcular</button>

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
