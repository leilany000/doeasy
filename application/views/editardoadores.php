<html>
<head>
  <meta charset="UTF-8">
      <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png.png"/>

  <title>Doeasy</title>
</head>
<body>
  <form action="<?=base_url('doadores/atualizar/'.$doadores->telefone)?>" method="post">
    Nome: <input type="text" name="nome" value="<?= $doadores->nome ?>">
    CPF: <input type="text" name="cpf" value="<?= $doadores->cpf ?>"><br>
    <button type="submit">Editar</button>
  </form>
</body>
</html>