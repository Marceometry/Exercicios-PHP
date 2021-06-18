<a href="../">Início</a><br>
<a href="ex11.php">Exercício anterior</a>
<a href="ex13.php">Próximo Exercício</a>

<h3>Exercício 12</h3>
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