<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Capturando os dados do form retroalimentado
        $d1 = $_GET['divid'] ?? 0;
        $d2 = $_GET['divis'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="divid">Dividendo:</label>
            <input type="number" name="divid" id="divid" min="0" value="<?=$d1?>">
            <label for="divis">Divisor:</label>
            <input type="number" name="divis" id="divis" min="1" value="<?=$d2?>">
            <input type="submit" value="Dividir">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            $resultado = intdiv($d1, $d2);
            $resto = $d1 % $d2;
        ?>
        <table class="divisao">
            <tr>
                <td><?=$d1?></td>
                <td><?=$d2?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$resultado?></td>
            </tr>
        </table>
    </section>
</body>
</html>