<html>
<head>
  <meta charset="UTF-8">
      <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png.png"/>

  <title></title>
</head>
<body>
  <form action="<?=base_url('ong/atualizar/'.$ongs->id)?>" method="post">
    Nome: <input type="text" name="nome" value="<?= $ongs->nome ?>">
    telefone: <input type="text" name="telefone" value="<?= $ongs->telefone ?>"><br>
    <button type="submit">Editar</button>
  </form>
</body>
</html>