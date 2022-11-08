<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylelista.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Lista Pessoas</title>
</head>
<body>
    <h1 class="h1topo">Lista das Pessoas Cadastradas</h1>
    <table class="table table-dark table-striped">
    <thead>
        <tr>
            <th ></th>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Data Nascimento</th>
        </tr>
        </thead>
        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <a href="/pessoa/delete?id=<?= $item->id ?>" style="text-decoration: none;color: red;"><i class="bi bi-x-circle-fill"></i></a>
            </td>

            <td><?= $item->id ?></td>

            <td>
                <a href="/pessoa/form?id=<?= $item->id ?>" style="text-decoration: none;color: aqua;"><?= $item->nome ?></a>
            </td>

            <td><?= $item->cpf ?></td>
            <td><?= $item->data_nascimento ?></td>
        </tr>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>
    <a href="/pessoa/form"><button type="button" class="btn btn-dark" style="width: 200px;border-radius: 20px;">criar</button> </a>
    <a href="/"><button type="button" class="btn btn-dark" style="width: 200px;border-radius: 20px;">VOLTAR</button> </a>
</body>
</html>