<a href="../">Início</a><br>
<a href="ex7.php">Exercício anterior</a>
<a href="ex9.php">Próximo Exercício</a>

<h3>Exercício 8</h3>
<form action="" method="GET">
    Número 1: <input type="number" name="n1" placeholder="Número 1">
    Número 2: <input type="number" name="n2" placeholder="Número 2">
    <button type="submit">Calcular</button><br>
    <?php ?>
</form>
<?php 
    if($_GET) {
        $n1 = $_GET['n1']; 
        $n2 = $_GET['n2'];
        $soma = $n1 + $n2;
        $subt1 = $n1 - $n2;
        $subt2 = $n2 - $n1;
        $mult = $n1 * $n2;
        $div1 = $n1 / $n2;
        $div2 = $n2 / $n1;
        echo "Soma: $n1 + $n2 = ", $soma, "<br>";
        echo "Subtração: $n1 - $n2 = ", $subt1, "<br>";
        echo "Subtração: $n2 - $n1 = ", $subt2, "<br>";
        echo "Multiplicação: $n1 x $n2 = ", $mult, "<br>";
        echo "Divisão: $n1 : $n2 = ", $div1, "<br>";
        echo "Divisão: $n2 : $n1 = ", $div2;
    }
?>