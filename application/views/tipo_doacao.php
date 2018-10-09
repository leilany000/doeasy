<head>
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png.png"/>

</head>
<body>

<style>
a{
  color: #4c3b4d;
}
tr{
  background-color: #61c9a8;
}
</style>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Adicione o que a ONG  precisa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('tipo_doacao/cadastrar')?>" method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Descrição</label>
            <input type="text" class="form-control" id="recipient-name" name="descricao">
          </div>
        </br>
          <div class="form-group">
          <label>Selecione a sua necessidade:</label>
            <select id="inputState" class="form-control" name="itens">
            <option value="alimento">Alimentos</option>
            <option value="vestuario">Vestuário</option>
            <option value="higiene">Higiene Pessoal</option>
            <option value="limpeza">Produtos de Limpeza</option>
            <option value="eletro">Eletrodomésticos</option>
            <option value="eletro2">Eletrônicos </option>
      </select>
    </div>
  </br>
    <div class="modal-footer">
          <button type="submit" class="btn btn-primary"> Enviar </button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal"> Fechar </button>
    </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <div class="row">
      <div class="col-sm-12 row">
        <h2 style="color: #a53860">Meus pedidos</h2>
      <button type="button" style="margin-left: 5px; border-color: #d76d77; " class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Adicionar </button>
        <hr class="col-sm-12">
      </div>

       <div class="col-sm-12 row">
            <table width="100%" class="table table-striped table-bordered bg-info text-white" id="dataTables-example">
              <thead>
                <tr>
                  <th class="col-sm-4">Descrição</th>
                  <th class="col-sm-4">Itens</th>   
                  <th class="col-sm-2">Excluir</th> 
                  <th class="col-sm-2">Editar</th> 
                </tr>
              </thead>

              <?php foreach($tipo as $i){ ?>
                <tbody class= "bg-white text-dark">
                <tr class="odd gradeX" >
                  <td><?= $i->descricao ?></td>
                  <td><?= $i->itens ?></td>
                  <td >
                    <a>
                      <b> <?php   $link = base_url('tipo_doacao/excluir/'.$i->id);
          echo "<a href='".$link."'>Excluir</a>"; ?> </b>
                    </a>
                  </td>
                  <td>
                    <a>
                      <b > <?php  $link = base_url('tipo_doacao/editar/'.$i->id);
          echo " <a href='".$link."'>Editar</a>"; ?> </b>
                    </a>
                  </td>
                </tr>
              </tbody>
        <?php } ?>
            </table>
          </div>
      </div>
</div>

<!--<?php
    
    foreach ($tipo as $i){
        echo $i->descricao." - ".$i->itens;
        $link = base_url('tipo_doacao/excluir/'.$i->id);
        echo "<a href='".$link."'>Excluir</a>";
        $link = base_url('tipo_doacao/editar/'.$i->id);
        echo " - <a href='".$link."'>Editar</a><br/>";
}
?>
-->

</body>
</html>

