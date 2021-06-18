<a href="../">Início</a><br>
<a href="ex4.php">Exercício anterior</a>
<a href="ex6.php">Próximo Exercício</a>

<h3>Exercício 5</h3>
<form action="" method="GET">
    Pai: <input type="number" name="pai" placeholder="Idade do pai">
    Mãe: <input type="number" name="mae" placeholder="Idade da mãe">
    Filho: <input type="number" name="filho" placeholder="Idade do filho">
    <button type="submit">Calcular Média</button><br>
    <?php ?>
</form>
<?php 
    if($_GET) {
        $pai = $_GET['pai']; 
        $mae = $_GET['mae']; 
        $filho = $_GET['filho'];
        $media = ($pai + $mae + $filho) / 3;
        echo "Média: ", $media, " anos";
    }
?>