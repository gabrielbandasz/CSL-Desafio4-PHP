<?php

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

/* ================= 1 CONVERSOR ================= */

if(isset($_POST["converter"])){

$reais = filter_var($_POST["reais"], FILTER_VALIDATE_FLOAT);
$cotacao = filter_var($_POST["cotacao"], FILTER_VALIDATE_FLOAT);

if($reais !== false && $cotacao !== false && $cotacao > 0){

$dolar = $reais / $cotacao;

$resultado = "R$ ".number_format($reais,2,",",".")." equivalem a US$ ".number_format($dolar,2);

}

}


/* ================= 2 AREA RETANGULO ================= */

if(isset($_POST["retangulo"])){

$base = filter_var($_POST["base"], FILTER_VALIDATE_FLOAT);
$altura = filter_var($_POST["altura"], FILTER_VALIDATE_FLOAT);

if($base !== false && $altura !== false){

$area = $base * $altura;
$perimetro = 2 * ($base + $altura);

$resultado = "Área: $area m² | Perímetro: $perimetro m";

}

}


/* ================= 3 CONSUMO ================= */

if(isset($_POST["consumo"])){

$dist = filter_var($_POST["distancia"], FILTER_VALIDATE_FLOAT);
$comb = filter_var($_POST["combustivel"], FILTER_VALIDATE_FLOAT);

if($dist !== false && $comb !== false && $comb>0){

$media = $dist/$comb;

$resultado = "Consumo médio: ".number_format($media,2)." Km/L";

}

}


/* ================= 4 MEDIA ALUNO ================= */

if(isset($_POST["media"])){

$n1 = filter_var($_POST["n1"], FILTER_VALIDATE_FLOAT);
$n2 = filter_var($_POST["n2"], FILTER_VALIDATE_FLOAT);

$media = ($n1+$n2)/2;

if($media>=7){

$sit="Aprovado";

}elseif($media>=4){

$sit="Recuperação";

}else{

$sit="Reprovado";

}

$resultado="Média: ".number_format($media,2)." - $sit";

}


/* ================= 5 IDADE ================= */

if(isset($_POST["idade"])){

$ano = filter_var($_POST["ano"], FILTER_VALIDATE_INT);

$idade = date("Y")-$ano;

if($idade>=18 && $idade<70){

$msg="Voto Obrigatório";

}elseif(($idade>=16 && $idade<18) || $idade>=70){

$msg="Voto Facultativo";

}else{

$msg="Não pode votar";

}

$resultado="Idade: $idade - $msg";

}


/* ================= 6 PAR OU IMPAR ================= */

if(isset($_POST["parimpar"])){

$num = filter_var($_POST["numero"], FILTER_VALIDATE_INT);

if($num%2==0){

$resultado="O número $num é PAR";

}else{

$resultado="O número $num é ÍMPAR";

}

}


/* ================= 7 DIA SEMANA ================= */

if(isset($_POST["dia"])){

$dia = $_POST["dia"];

switch($dia){

case 1: $resultado="1 - Domingo"; break;
case 2: $resultado="2 - Segunda"; break;
case 3: $resultado="3 - Terça"; break;
case 4: $resultado="4 - Quarta"; break;
case 5: $resultado="5 - Quinta"; break;
case 6: $resultado="6 - Sexta"; break;
case 7: $resultado="7 - Sábado"; break;

default: $resultado="Número inválido";

}

}


/* ================= 8 CALCULADORA ================= */

if(isset($_POST["calc"])){

$n1 = filter_var($_POST["num1"], FILTER_VALIDATE_FLOAT);
$n2 = filter_var($_POST["num2"], FILTER_VALIDATE_FLOAT);

$op = $_POST["op"];

switch($op){

case "somar":
$r = $n1+$n2;
$sim="+";
break;

case "subtrair":
$r = $n1-$n2;
$sim="-";
break;

case "multiplicar":
$r = $n1*$n2;
$sim="*";
break;

case "dividir":

if($n2==0){

$resultado="Erro: divisão por zero";
return;

}

$r=$n1/$n2;
$sim="/";

break;

}

$resultado="$n1 $sim $n2 = $r";

}


/* ================= 9 MES ================= */

if(isset($_POST["mes"])){

$mes=$_POST["mes"];

switch($mes){

case 1:$resultado="1 - Janeiro";break;
case 2:$resultado="2 - Fevereiro";break;
case 3:$resultado="3 - Março";break;
case 4:$resultado="4 - Abril";break;
case 5:$resultado="5 - Maio";break;
case 6:$resultado="6 - Junho";break;
case 7:$resultado="7 - Julho";break;
case 8:$resultado="8 - Agosto";break;
case 9:$resultado="9 - Setembro";break;
case 10:$resultado="10 - Outubro";break;
case 11:$resultado="11 - Novembro";break;
case 12:$resultado="12 - Dezembro";break;

default:$resultado="Mês inválido";

}

}


/* ================= 10 FATORIAL ================= */

if(isset($_POST["fatorial"])){

$n = filter_var($_POST["fat"], FILTER_VALIDATE_INT);

$f=1;

for($i=1;$i<=$n;$i++){

$f=$f*$i;

}

$resultado="Fatorial de $n = $f";

}


/* ================= 11 SOMATORIO ================= */

if(isset($_POST["soma"])){

$n = filter_var($_POST["sn"], FILTER_VALIDATE_INT);

$s=0;

for($i=1;$i<=$n;$i++){

$s+=$i;

}

$resultado="Soma de 1 até $n = $s";

}


/* ================= 12 PARES ================= */

if(isset($_POST["pares"])){

$ini = filter_var($_POST["ini"], FILTER_VALIDATE_INT);
$fim = filter_var($_POST["fim"], FILTER_VALIDATE_INT);

$lista="";

for($i=$ini;$i<=$fim;$i++){

if($i%2==0){

$lista.="$i ";

}

}

$resultado="Pares entre $ini e $fim: $lista";

}


/* ================= 13 MEDIA ARRAY ================= */

if(isset($_POST["mediaarray"])){

$notas=$_POST["notas"];

$s=0;

foreach($notas as $n){

$s+=$n;

}

$media=$s/count($notas);

$resultado="Média: ".number_format($media,2);

}


/* ================= 14 CHECKBOX ================= */

if(isset($_POST["compras"])){

if(isset($_POST["itens"])){

$lista="Itens selecionados:<br>";

foreach($_POST["itens"] as $i){

$lista.="$i <br>";

}

$resultado=$lista;

}

}


/* ================= 15 MAIOR ================= */

if(isset($_POST["maior"])){

$nums=$_POST["numeros"];

$maior=$nums[0];

foreach($nums as $n){

if($n>$maior){

$maior=$n;

}

}

$resultado="Maior número: $maior";

}

}

?>

<!DOCTYPE html>
<html>
<head>

<title>Desafio PHP</title>

<style>

body{
font-family:Arial;
background:#f4f4f4;
padding:40px;
}

.container{
max-width:900px;
margin:auto;
}

.card{
background:white;
padding:20px;
margin-bottom:20px;
border-radius:8px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

input,select{
width:100%;
padding:8px;
margin:5px 0;
}

button{
padding:8px 15px;
background:#16a34a;
color:white;
border:none;
cursor:pointer;
}

.result{
margin-top:20px;
font-weight:bold;
}

</style>

</head>

<body>

<div class="container">

<h1>Lista de Exercícios PHP</h1>

<div class="result">
<?php echo $resultado; ?>
</div>

<!-- 1 -->
<div class="card">
<h3>Conversor de Moedas</h3>
<form method="POST">
<input type="number" step="0.01" name="reais" placeholder="Reais">
<input type="number" step="0.01" name="cotacao" placeholder="Cotação dólar">
<button name="converter">Converter</button>
</form>
</div>

<!-- 2 -->
<div class="card">
<h3>Área Retângulo</h3>
<form method="POST">
<input type="number" name="base" placeholder="Base">
<input type="number" name="altura" placeholder="Altura">
<button name="retangulo">Calcular</button>
</form>
</div>

<!-- 3 -->
<div class="card">
<h3>Consumo Combustível</h3>
<form method="POST">
<input type="number" name="distancia" placeholder="Distância">
<input type="number" name="combustivel" placeholder="Combustível">
<button name="consumo">Calcular</button>
</form>
</div>

<!-- 4 -->
<div class="card">
<h3>Média Aluno</h3>
<form method="POST">
<input type="number" name="n1" placeholder="Nota 1">
<input type="number" name="n2" placeholder="Nota 2">
<button name="media">Calcular</button>
</form>
</div>

<!-- 5 -->
<div class="card">
<h3>Verificar Idade</h3>
<form method="POST">
<input type="number" name="ano" placeholder="Ano nascimento">
<button name="idade">Verificar</button>
</form>
</div>

<!-- 6 -->
<div class="card">
<h3>Par ou Ímpar</h3>
<form method="POST">
<input type="number" name="numero">
<button name="parimpar">Verificar</button>
</form>
</div>

<!-- 7 -->
<div class="card">
<h3>Dia da Semana</h3>
<form method="POST">
<input type="number" name="dia" min="1" max="7">
<button name="dia">Mostrar</button>
</form>
</div>

<!-- 8 -->
<div class="card">
<h3>Calculadora</h3>
<form method="POST">
<input type="number" name="num1">
<input type="number" name="num2">

<select name="op">
<option value="somar">Somar</option>
<option value="subtrair">Subtrair</option>
<option value="multiplicar">Multiplicar</option>
<option value="dividir">Dividir</option>
</select>

<button name="calc">Calcular</button>
</form>
</div>

<!-- 9 -->
<div class="card">
<h3>Mês</h3>
<form method="POST">
<input type="number" name="mes" min="1" max="12">
<button name="mes">Mostrar</button>
</form>
</div>

<!-- 10 -->
<div class="card">
<h3>Fatorial</h3>
<form method="POST">
<input type="number" name="fat">
<button name="fatorial">Calcular</button>
</form>
</div>

<!-- 11 -->
<div class="card">
<h3>Somatório</h3>
<form method="POST">
<input type="number" name="sn">
<button name="soma">Calcular</button>
</form>
</div>

<!-- 12 -->
<div class="card">
<h3>Pares Intervalo</h3>
<form method="POST">
<input type="number" name="ini" placeholder="Inicial">
<input type="number" name="fim" placeholder="Final">
<button name="pares">Mostrar</button>
</form>
</div>

<!-- 13 -->
<div class="card">
<h3>Média de 5 notas</h3>
<form method="POST">

<input type="number" name="notas[]">
<input type="number" name="notas[]">
<input type="number" name="notas[]">
<input type="number" name="notas[]">
<input type="number" name="notas[]">

<button name="mediaarray">Calcular</button>

</form>
</div>

<!-- 14 -->
<div class="card">
<h3>Lista de Compras</h3>
<form method="POST">

<label><input type="checkbox" name="itens[]" value="Arroz">Arroz</label><br>
<label><input type="checkbox" name="itens[]" value="Feijão">Feijão</label><br>
<label><input type="checkbox" name="itens[]" value="Leite">Leite</label><br>
<label><input type="checkbox" name="itens[]" value="Ovos">Ovos</label><br>

<button name="compras">Mostrar</button>

</form>
</div>

<!-- 15 -->
<div class="card">
<h3>Maior Número</h3>
<form method="POST">

<input type="number" name="numeros[]">
<input type="number" name="numeros[]">
<input type="number" name="numeros[]">
<input type="number" name="numeros[]">
<input type="number" name="numeros[]">

<button name="maior">Encontrar</button>

</form>
</div>

</div>

</body>
</html>