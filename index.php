<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oil-Sistem</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="oil_sistem.js"></script>

</head>
<body class="bg-secondary">

    <h1 class="text-white text-center mb-0 mt-5"><b>OIL-SISTEM</b></h1>
    <p class="text-white text-center">Gerencie os modelos de carros aqui.</p>
    
    <div class="container container-lg bg-white rounded mt-5 px-3 py-4">

        <div class="form-row d-flex justify-content-between mb-3">
            <h5 class="h5"><b>Carros</b></h5>
            <button class="btn btn-success" id="createCarroBtn" type="button" data-bs-toggle="modal" data-bs-target="#createCarroModal">Novo Carro</button>
        </div>
        
        <table class="table table-bordered table-hover table-striped">

            <thead>
                <tr>
                    <td>Id</td>
                    <td class="w-75">Modelo</td>
                    <td>Ações</td>
                </tr>
            </thead>

            <tbody>

            </tbody>

            

        </table>

    </div>

    <div class="modal fade" id="createCarroModal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Novo carro</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="createCarroForm">
                    <div class="form-group">
                        <label for="carroInput">Modelo:</label>
                        <input type="text" id="carroInput" name="carro_name" class="form-control" placeholder="Ex: Palio, Celta, Gol pratinha...">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" form="createCarroForm" class="btn btn-success">Adicionar</button>
            </div>
          </div>
        </div>
      </div>

</body>
</html>