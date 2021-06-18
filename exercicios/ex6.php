<a href="../">Início</a><br>
<a href="ex5.php">Exercício anterior</a>
<a href="ex7.php">Próximo Exercício</a>

<h3>Exercício 6</h3>
<form action="" method="GET">
    Pai: <input type="number" name="pai" placeholder="Idade do pai">
    Mãe: <input type="number" name="mae" placeholder="Idade da mãe">
    Eu: <input type="number" name="eu" placeholder="Minha idade">
    <button type="submit">Calcular Média</button><br>
    <?php ?>
</form>
<?php 
    if($_GET) {
        $pai = $_GET['pai']; 
        $mae = $_GET['mae']; 
        $filho = $_GET['eu'];
        $media = ($pai + $mae + $filho) / 3;
        echo "Média: ", $media, " anos";
    }
?>