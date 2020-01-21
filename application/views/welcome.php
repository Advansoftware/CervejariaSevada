.<!doctype html>
<html lang="en" style="background-color: black;">
  <head>
    <title>Cervejaria Sevda - Bem Vindo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/sevda.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
  </head>
  <body style="background-color: black; background-image: ;">

 
  <div class="container-fluid text-light text-center">
    <div class="row justify-content-center">
      <div class="col-md-3 col-sm-12 mt-5">
        <img src="<?=base_url();?>content/imagens/LOGOMARCA.png" alt="logo" class="img-fluid mt-5">
      </div>
    </div>
    <div class="row mt-5 justify-content-center">
      <div class="col-md-3 col-sm-12 text-center">
      <label for="idade">Digite Sua Data de Nascimento</label>
        <form class="form-inline">
          <div class="form-group mb-2 mt-2">
            <div class="row">
              <div class="col-md-6 col-sm-12 my-2">
               <input type="date" class="form-control" id="idade" placeholder="Data de Nascimento">
              </div>
              <div class="col-md-6 col-sm-12 my-2">
                <button type="submit" class="btn btn-success">Entrar No Site</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
      <div class="row mt-2 justify-content-center text-center">
        <div class="col-12">
        VOCÊ PRECISA TER MAIS DE 18 ANOS
      PARA ACESSAR ESTE SITE.
        </div>
    </div>

  </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>