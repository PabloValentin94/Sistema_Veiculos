<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="<?= FAVICON ?>">

        <link rel="stylesheet" type="text/css" href="/View/Modules/Fabricante/CSS/Cadastro.css">

        <title> Cadastro de Fabricantes </title>

    </head>

    <body>

        <fieldset>

            <div id="container">

                <legend style="color: #FFFFFF; font-weight: bolder"> Cadastro de Fabricantes </legend>

                <form method="post" action="/fabricante/cadastro/salvar" id="form">

                    <input type="hidden" name="id" value="<?= $model[0]->id ?>">

                    <label for="descricao"> Descrição: </label>
                    <input type="text" name="descricao" value="<?= $model[0]->descricao ?>" required>

                    <label for="marca"> Marca: </label>
                    <Select name="marca" required>

                        <option value="nenhum"> Selecione </option>

                        <?php foreach($model[1] as $marca): ?>

                            <option value="<?= $marca->id ?>"> <?= $marca->nome ?> </option>

                        <?php endforeach ?>

                    </Select>

                    <button type="submit"> SALVAR </button>

                </form>

            </div>

        </fieldset>
        
    </body>

</html>