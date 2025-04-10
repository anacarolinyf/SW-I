<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio01</title>
    <style>
        th, td {
            border: 5px solid #333;
            padding: 5px;
            text-align: center;
        }
        .par {
            background-color: rgb(255, 0, 162);
            color: white;
        }
        .impar {
            background-color: rgb(0, 225, 255);
            color: white;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <?php
            for ($col = 1; $col <= 4; $col++) {
                echo "<th>Coluna $col</th>";
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($linha = 1; $linha <= 8; $linha++) {
            $tipoLinha = ($linha % 2 === 0) ? "par" : "impar";
            echo "<tr class=\"$tipoLinha\">";
            
            for ($coluna = 1; $coluna <= 4; $coluna++) {
                echo "<td>LINHA {$linha} - COLUNA {$coluna}</td>";
            }
            
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
