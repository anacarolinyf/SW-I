<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Tabela Dinâmica</title>
    <style>
        
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        .par {
            background-color: rgb(255, 0, 123);
            color: white;
        }
        .impar {
            background-color: rgb(0, 174, 255);
            color: white;
        }
       
    </style>
</head>
<body>

<form method="post">
    <label for="linhas">Digite número de linhas:</label>
    <input type="number" name="linhas" id="linhas" min="1" required>
    
    <label for="colunas">Digite número de colunas:</label>
    <input type="number" name="colunas" id="colunas" min="1" required>
    
    <button type="submit">Gerar Tabela</button>
</form>

<?php
if (isset($_POST['linhas']) && isset($_POST['colunas'])) {
    $linhas = (int)$_POST['linhas'];
    $colunas = (int)$_POST['colunas'];

    echo "<table>";

    $i = 1;
    while ($i <= $linhas) {
        $classe = ($i % 2 === 0) ? 'par' : 'impar';
        echo "<tr class=\"$classe\">";
        
        $j = 1;
        while ($j <= $colunas) {
            echo "<td>Linha $i, Coluna $j</td>";
            $j++;
        }

        echo "</tr>";
        $i++;
    }

    echo "</table>";
}
?>

</body>
</html>