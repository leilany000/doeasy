<html>
<head>
  <meta charset="UTF-8">
      <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png.png"/>

  <title></title>
</head>
<body>
  <center>
    <?php
      foreach ($doadores as $a) {
        echo $a->nome."-".$a->cpf."-". $a->telefone. $a->endereco;
        
        $link = base_url("doadores/excluir/". $a->cpf);
        echo "<a href='".$link."'>Excluir</a>";

        $link = base_url("doadores/editar/". $a->cpf);
        echo "<a href='".$link."'>Editar</a></br>";
      }
    ?>
  </center>
</body>
</html>