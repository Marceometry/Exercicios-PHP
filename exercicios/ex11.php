<a href="../">Início</a><br>
<a href="ex10.php">Exercício anterior</a>
<a href="ex12.php">Próximo Exercício</a>

<h3>Exercício 11</h3>
<form action="" method="GET">
    Salário: R$<input type="number" name="salario" placeholder="Salário">
    <button type="submit">Calcular</button><br>
    <?php ?>
</form>
<?php 
    if($_GET) {
        $salario = $_GET['salario']; 

        if($salario < 550) {
            $salario = 550;
        }
        echo "Salário: R$", $salario;
    }
?>