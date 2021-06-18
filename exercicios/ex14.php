<a href="../">Início</a><br>
<a href="ex13.php">Exercício anterior</a>

<?php if (isset($_GET['n1']) && isset($_GET['n2'])): 
    $sum = ($_GET['n1'] + $_GET['n2']) / 2;
?>
<?php if ($sum > 6 ) {
    echo "APROVADO";
} else if ($sum < 6 && $sum > 3) {
    echo "EXAME";
} else if ($sum < 3) {
    echo "REPROVADO";
} else {
    echo "NOTA INVÁLIDA";
}
?>
<?php else: ?>
<h3>Exercício 14</h3>
<form action="14.php" method="GET">
    Primeira nota: <input type="number" name="n1" placeholder="Número 1">
    Segunda nota: <input type="number" name="n2" placeholder="Número 2">
    <input type="submit" value="Submit">
</form>
<?php endif; ?>