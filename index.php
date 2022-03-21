<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oil-Sistem</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    

</head>
<body class="bg-secondary">

    <div class="bg-white shadow mx-auto w-100 px-5 py-3 text-center d-flex justify-content-between">
        <div>
            <a class="btn btn-primary"href="https://oil-sistem-dev.herokuapp.com">Home</a>
            <a class="btn btn-primary"href="https://oil-sistem-dev.herokuapp.com/ad_carros.php">Gerenciar Carros</a>
        </div>
            <button class="btn btn-primary" id="abrirModal">Abrir Modal</button>
            <button class="btn btn-secondary" id="fecharModal">Fechar Modal</button>
    </div>


    <div class="fundoModal" id="fundoModal">
        <div class="modalStag" id="modalStag">
            <h3>Modal Do Stag</h3>
            <p>Esse modal é para falar para o andré  que o stag sabe fazer modal!</p>
        </div>
    </div>
    <script src="modal.js"></script>
</body>
</html>