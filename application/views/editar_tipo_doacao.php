<head>
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png.png"/>
</head>
     <div class="modal-body">
        <form action="<?= base_url('tipo_doacao/atualizar/'.$tipo->id)?>" method="post">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Descrição</label>
            <input type="text" class="form-control" id="recipient-name" name="descricao" value=<?= $tipo->descricao?>>
          </div>
        </br>
          <div class="form-group">

          <label>Selecione a sua necessidade (<?= $tipo->itens?>):</label>
            <select id="inputState" class="form-control" name="itens">
            <option value="alimento" <?php if ($tipo->itens=="alimento"){echo "selected";}?> >Alimentos </option>
            <option value="vestuario" <?php if ($tipo->itens=="vestuario"){echo "selected";}?>>Vestuário</option>
            <option value="higiene">Higiene Pessoal</option>
            <option value="limpeza">Produtos de Limpeza</option>
            <option value="eletro">Eletrodomésticos</option>
            <option value="eletro2">Eletrônicos </option>
      </select>
    </div>
      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="border-color: #d76d77">Editar</button>
    </div>
  </form>
</div>