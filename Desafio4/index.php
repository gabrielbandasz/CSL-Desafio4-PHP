<?php
$sequenciais = range(1,3);
$condicionais = range(4,9);
$lacos = range(10,15);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lista de Exercícios PHP</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<div class="header">
<h1>Lista de Exercícios PHP</h1>
<p>Selecione um exercício para abrir.</p>
</div>

<!-- SEQUENCIAIS -->
<h2 class="section-title">Algoritmos Sequenciais</h2>
<div class="grid">
<?php foreach ($sequenciais as $i): ?>
<div class="card">
<h3>Exercício <?= $i ?></h3>
<a class="btn" href="exercicio<?= $i ?>.php">Abrir</a>
</div>
<?php endforeach; ?>
</div>

<!-- CONDICIONAIS -->
<h2 class="section-title">Comandos If / Switch</h2>
<div class="grid">
<?php foreach ($condicionais as $i): ?>
<div class="card">
<h3>Exercício <?= $i ?></h3>
<a class="btn" href="exercicio<?= $i ?>.php">Abrir</a>
</div>
<?php endforeach; ?>
</div>

<!-- LAÇOS -->
<h2 class="section-title">Laços de Repetição</h2>
<div class="grid">
<?php foreach ($lacos as $i): ?>
<div class="card">
<h3>Exercício <?= $i ?></h3>
<a class="btn" href="exercicio<?= $i ?>.php">Abrir</a>
</div>
<?php endforeach; ?>
</div>

</div>

</body>
</html>
```
