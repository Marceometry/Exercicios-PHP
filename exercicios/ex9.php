<a href="../">Início</a><br>
<a href="ex8.php">Exercício anterior</a>
<a href="ex10.php">Próximo Exercício</a>

<h3>Exercício 9</h3>
<form action="" method="GET">
    Número: <input type="number" name="n" placeholder="Digite um número">
    <button type="submit">Enviar</button><br>
    <?php ?>
</form>
<?php 
    if($_GET) {
        $n = $_GET['n']; 
        
        if($n < 0) {
            $inteiro = "negativo";
        } else {
            $inteiro = "positivo";
        }
        echo "Número ", $n, " é ", $inteiro;
    }
?>