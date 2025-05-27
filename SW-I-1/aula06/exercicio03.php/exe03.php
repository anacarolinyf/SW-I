<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Tabela de Produtos</title>
    <style>
        

        th, td {
            border: 5px solid #000;
            padding: 25px;
            text-align: center;
        }

        th {
            background-color: #000;
            color: white;
        }

        .Eletrônicos {
            background-color:rgb(255, 50, 163);
        }

        .Vestuario {
            background-color:rgb(255, 23, 185);
        }

       

        .Alimentos {
            background-color:rgb(89, 186, 255);
        }
    </style>
</head>
<body>

<?php
$produtos = [
    [
        'nome' => 'Sapato',
        'preco' => 200.00,
        'categoria' => 'Vestuario'
    ],
    [
        'nome' => 'Notebook',
        'preco' => 3500.0,
        'categoria' => 'Eletronicos'
    ],
    [
        'nome' => 'Macarrão',
        'preco' => 10.00,
        'categoria' => 'Alimentos'
    ],
    [
        'nome' => 'Patinete',
        'preco' => 150.00,
        'categoria' => 'Brinquedos'
    ],
    [
        'nome' => 'Livro',
        'preco' => 25.99,
        'categoria' => 'Leitura'
    ]
];
?>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produtos as $produto): 
            $classe = $produto['categoria'];
        ?>
            <tr class="<?= $classe ?>">
                <td><?= $produto['nome'] ?></td>
                <td><?= number_format($produto['preco'], 2, ',', '.') ?></td>
                <td><?= $produto['categoria'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>