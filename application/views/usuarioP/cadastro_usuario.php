

  <head>

    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png.png"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Cadastro </title>

    <!-- Bootstrap core CSS-->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin.css');?>" rel="stylesheet">



</head>

<style type="text/css">
body {

    background-color: #d76d77;
    background: #d76d77; 
    background: -webkit-linear-gradient(to left, #d76d77, #A53860, #4C3B4D); 
    background: linear-gradient(to left, #d76d77, #A53860, #4C3B4D); 
    color:  #A53860;
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
    font-size: 0.875rem;
    font-weight: 400;
    height: 100%;
    line-height: 1.5;
    margin: 0;
    min-height: 100vh;
  }
  </style>
<html>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registrar-se</div>
        <div class="card-body">
          <form action="<?= base_url();?>usuario/Novo" method="POST">
            <p><?= $this->session->flashdata('msg2') ?></p>           


           <div class="form-group">
              <div class="form-label-group">
                <input type="txt" id="inputName" class="form-control" placeholder="Nome" required="required" name="nome">
                <label for="inputName">Nome</label>
              </div>
            </div>

            <div class="form-group">
              <div class="form-label-group">
                <input type="txt" id="inputLogin" class="form-control" placeholder="Login" required="required" name="login">
                <label for="inputLogin">Login</label>
              </div>
            </div>

            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" required="required" name="email">
                <label for="inputEmail">E-mail</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="txt" id="inputEndereco" class="form-control" placeholder="Endereço" required="required" name="endereco">
                <label for="inputEndereco">Endereço</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="txt" id="inputCPF" class="form-control" placeholder="CPF/CNPJ" required="required" name="cpf_cnpj">
                <label for="inputCPF">CPF/CNPJ</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="txt" id="inputTelefone" class="form-control" placeholder="Telefone" required="required" name="telefone">
                <label for="inputTelefone">Telefone</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">

                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                                            <label for="inputPassword">Senha</label>
                  </div>
  
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required" name="senha">
                    <label for="confirmPassword">Confirmar Senha</label>
                  </div>
                </div>
              </div>
            </div>
                   

              <div class="form-group">
              <div class="form-row">   
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input onchange="maisElementos()" type="radio" id="tipo_ong" class="form-control" name="tipo" value="O">
                    <label for="tipo_ong">ONG</label>
                  </div>
                </div>
            
            

                <div class="col-md-6">
                  <div class="form-label-group">
                    <input onchange="menosElementos()" type="radio" id="tipo_doador" class="form-control" name="tipo" value="D">
                    <label for="tipo_doador">Doador</label>
                  </div>
                </div>
              </div>

            </div>



            <div class="form-row"> 
                  <div class="col-md-12">
                    <div id="ong-elements" class="form-label-group">
                    </div>
                  </div>
                </div>

            <button type="submit" class="btn btn-primary btn-block" style="background-color:#A53860; border-color: #A53860; color: white">Cadastrar</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?= base_url('usuario/login');?>">Página de login</a>
            
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->

    <script type="text/javascript">
      function maisElementos(){
        seccao = document.getElementById('ong-elements');
        seccao.innerHTML = '</br> <h6 style="color: #696969; text-align: center;"> Adicione algumas informações extras sobre a ONG </h6> </br>  <textarea type="txt" id="resumo" class="form-control" placeholder="Resumo" required="required" name="resumo"></textarea> </br>  <p style="color:  #696969;"> rede social ou site: </p> <input type="txt" id="redes" class="form-control" placeholder="Redes" required="required" name="redes"> </br> <p style="color:  #696969;"> Descrição: </p> <input type="txt" id="descricao" class="form-control" placeholder="descricao" required="required" name="descricao"> </br>';

      }
      function menosElementos(){
        seccao = document.getElementById('ong-elements');
        seccao.innerHTML = '';

      }
    </script>

    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  </body>

</html>