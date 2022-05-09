<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Doenças da Mente</title>
</head>

<body>
    <div class="container">
        <div class="display-2">
            Doenças da Mente
        </div>

        <form class="form" action="./salvar_dados.php" method="GET">
            <div class="form-group">
                <label class="form-label" for="titulo">Titulo</label>
                <input type="text" class="form-control" name="titulo">
            </div>

            <div class="form-group">
                <label class="form-label" for="titulo">Descrição</label>
                <textarea class="form-control" name="descricao" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label class="form-label" for="titulo">CID</label>
                <input type="text" class="form-control" name="cid">
            </div>

            <input type="submit" class="btn btn-primary mt-3" value="Salvar">
        </form>
    </div>
</body>

</html>