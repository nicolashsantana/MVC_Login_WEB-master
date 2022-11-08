<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Lista Produtos</title>
</head>
<body>

<table class="table table-dark table-striped">
        <tr>
            <th></th>
            <th>Id</th>
            <th>Nome do Produto</th>
            <th>Código de Barras</th>
            <th>Descrição</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
            <a href="/pessoa/delete?id=<?= $item->id ?>" style="text-decoration: none;color: red;"><i class="bi bi-x-circle-fill"></i></a>
            <a href="/produto/form?id=<?= $item->id ?>" style="text-decoration: none;color: aqua;"><i class="bi bi-pencil-fill"></i></a>
            </td>

            <td><?= $item->id ?></td>

            <td>
                <a href="/produto/form?id=<?= $item->id ?>" style="text-decoration: none;color: aqua;"><?= $item->nome_produto ?></a>
            </td>
          
            <td><?= $item->codigo ?></td>
            <td><?= $item->descricao ?></td>
        </tr>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>
    <a href="/produto/form"><button type="button" class="btn btn-dark" style="width: 200px;border-radius: 20px;">CADASTRAR</button> </a>
    <a href="/"><button type="button" class="btn btn-dark" style="width: 200px;border-radius: 20px;">VOLTAR</button> </a>
</body>
</html>