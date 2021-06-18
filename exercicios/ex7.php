<a href="../">Início</a><br>
<a href="ex6.php">Exercício anterior</a>
<a href="ex8.php">Próximo Exercício</a>

<h3>Exercício 7</h3>
<form action="" method="GET">
    Produto: R$<input type="number" name="produto" placeholder="Valor do produto">
    Parcelas: <input type="number" name="parcelas" placeholder="Número de parcelas">
    <button type="submit">Calcular</button><br>
    <?php ?>
</form>
<?php 
    if($_GET) {
        $produto = $_GET['produto']; 
        $parcelas = $_GET['parcelas'];
        $vallorParcela = $produto / $parcelas;
        echo "Valor das parcelas: R$", $vallorParcela;
    }
?>