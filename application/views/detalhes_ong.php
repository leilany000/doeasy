
<!DOCTYPE html>
<body>
  <div class="container-fluid" style="margin-top: 3rem;">
    <div class="row">
      <div class="col-sm-4">
        <img src="https://cdn.torontolife.com/wp-content/uploads/2017/08/toronto-house-for-sale-53-burnhamthorpe-crescent-1-1200x628.jpg" class="mx-auto d-block" style="width:100%; height:100%">
      </div>
      <div class="col-sm-8">
        <h2 style="text-align: center;"> <?= $ong[0]->nome ?> </h2>
        <h6> Nome: <?= $ong[0]->nome ?> </br>
email: <?= $ong[0]->email ?> </br>
endereco: <?= $ong[0]->endereco ?>  </h6>
</br>
<h5> Resumo: </h5>
        <h6> <?= $ong[0]->resumo ?> </h6>
      </br>
<h5> Redes sociais/Site: </h5>
<h6> <?= $ong[0]->redes ?></h6>
</br>
<a href="" class="btn btn-primary btn-block" style="background-color:#61C9A8; border-color: #61C9A8; color: white; align: center; width: 8em; heigth: 5em;"> Doar </a>

      </div>
    </div>
    
  </div>

