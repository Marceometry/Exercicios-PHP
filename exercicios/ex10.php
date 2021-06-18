<a href="../">Início</a><br>
<a href="ex9.php">Exercício anterior</a>
<a href="ex11.php">Próximo Exercício</a>

<h3>Exercício 10</h3>
<form action="" method="GET">
    Número: <input type="number" name="n" placeholder="Digite um número">
    <button type="submit">Enviar</button><br>
    <?php ?>
</form>
<?php 
    if($_GET) {
        $n = $_GET['n']; 

        if($n < 0) {
            $n = $n * -1;
        }
        echo "Número positivo: ", $n;
    }
?>