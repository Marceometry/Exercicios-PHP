<a href="../">Início</a><br>
<a href="ex2.php">Exercício anterior</a>
<a href="ex4.php">Próximo Exercício</a>

<h3>Exercício 3</h3>
<?php $produto = 3500; $parcela = 11; ?>
<p>
    Produto: PC Gamer<br>
    Valor: R$<?php echo $produto;?> <br>
    Parcelas: <?php echo $parcela;?> vezes
</p>
<p><?php echo "Valor das parcelas: R$", $produto / $parcela; ?></p>