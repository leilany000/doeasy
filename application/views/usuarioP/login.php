  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS-->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin.css');?>" rel="stylesheet">

  </head>
  <style type="text/css">
/* config.css */

/* helpers/align.css */

.align {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

/* helpers/grid.css */

.grid {
  margin-left: auto;
  margin-right: auto;
  max-width: 320px;
  max-width: 20rem;
  width: 90%;
}


.btn{
  color:black;
}
/* helpers/hidden.css */

.hidden {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}

/* helpers/icon.css */

.icons {
  display: none;
}

.icon {
  display: inline-block;
  fill: #61c9a8;
  font-size: 16px;
  font-size: 1rem;
  height: 1em;
  vertical-align: middle;
  width: 1em;
}

/* layout/base.css */

* {
  -webkit-box-sizing: inherit;
          box-sizing: inherit;
}

html {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  font-size: 100%;
  height: 100%;
}

body {

  background-color: #d76d77;
    background: #d76d77; 
background: -webkit-linear-gradient(to left, #d76d77, #A53860, #4C3B4D); 
background: linear-gradient(to left, #d76d77, #A53860, #4C3B4D); 
  color: #4c3b4d;
  font-family: 'Open Sans', sans-serif;
  font-size: 14px;
  font-size: 0.875rem;
  font-weight: 400;
  height: 100%;
  line-height: 1.5;
  margin: 0;
  min-height: 100vh;
}

/* modules/anchor.css */

a {
  color: #eee;
  outline: 0;
  text-decoration: none;
}

a:focus,
a:hover {
  text-decoration: underline;
}

/* modules/form.css */

input {
  background-image: none;
  border: 0;
  color: inherit;
  font: inherit;
  margin: 0;
  outline: 0;
  padding: 0;
  -webkit-transition: background-color 0.3s;
  transition: background-color 0.3s;
}

input[type='submit'] {
  cursor: pointer;
}

.form {
  margin: -14px;
  margin: -0.875rem;
}

.form input[type='password'],
.form input[type='text'],
.form input[type='submit'] {
  width: 100%;
}

.form__field {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin: 14px;
  margin: 0.875rem;
}

.form__input {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

/* modules/login.css */

.login {
  color: #eee;
}

.login label,
.login input[type='text'],
.login input[type='password'],
.login input[type='submit'] {
  border-radius: 0.25rem;
  padding: 16px;
  padding: 1rem;
}

.login label {
  background-color: #4C3B4D;
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
  padding-left: 20px;
  padding-left: 1.25rem;
  padding-right: 20px;
  padding-right: 1.25rem;
}

.login input[type='password'],
.login input[type='text'] {
  background-color: white;
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}

.login input[type='password']:focus,
.login input[type='password']:hover,
.login input[type='text']:focus,
.login input[type='text']:hover {
  background-color: #d76d77;
}

.login input[type='submit'] {
  background-color: white;
  color: #4C3B4D;
  font-weight: 700;
  text-transform: uppercase;
}

.login input[type='submit']:focus,
.login input[type='submit']:hover {
  background-color: white;
}

/* modules/text.css */

p {
  margin-bottom: 24px;
  margin-bottom: 1.5rem;
  margin-top: 24px;
  margin-top: 1.5rem;
}

.text--center {
  text-align: center;
}

.btn{
  color: #fff
  text-color: #fff;
}

</style>

  </head>
   <script src="https://www.google.com/recaptcha/api.js"></script>



<body class="align">
  <div class="grid">
  <img src="<?=base_url("assets/img/1.png");?>" alt="Doeasy" style="width: 22.85em; height: 17em; margin-bottom: 20px; border-radius: 5px;">
    <p> <?=$this->session->flashdata("msg");?>
    </p>
<?php if ($this->session->flashdata('info')): ?>
  <?=$this->session->flashdata('info')?> 
<?php endif ?>
    <form class="form login" method="post" action= "<?=base_url("usuario/autenticar");?>" style="color:#4c3b4d">
      <div class="form__field">
        <label for="inputLogin"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#user"></use></svg><span class="hidden">Login</span></label>
        <input id="inputLogin" type="text" name="usuario" class="form__input" placeholder="Login" required="required" autofocus="autofocus">
      </div>
      <div class="form__field">
        <label for="inputPassword"><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#lock"></use></svg><span class="hidden">Senha</span></label>
        <input id="inputPassword" type="password" name="senha" class="form__input" placeholder="Senha" required="required">
      </div>
      <!--<div class="form__field">
          <a class="btn btn-primary btn-block" style="background-color:white; border-color:white; color: #d76d77" >Entrar</a>
      </div>-->
<div class="g-recaptcha" data-sitekey="6Lcgy3AUAAAAAAMGEDGwS6Af2bpmVnyhcX1PnRYR"></div>

       <br>
      <button type="submit"class="btn btn-primary btn-block" style="background-color:#d76d77; border-color: #d76d77; color: white;  width: 21em; align: center;">Entrar</button>

    </form>

<script type="text/javascript" src="<?=base_url('assets/js/api.js')?>"></script>
    <p class="text-center" style="color: white">Não é membro?<a class="d-block small mt-3" href="<?= base_url('usuario/cadastro');?>">Registrar</a>
        <svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="assets/images/icons.svg#arrow-right"></use></svg></p>
    <div class="text--center" style="margin:20px;">
      <a class="d-block small" href="forgot-password.html">Esqueceu a senha?</a>
    </div>
  </div>

  <svg xmlns="http://www.w3.org/2000/svg" class="icons"><symbol id="arrow-right" viewBox="0 0 1792 1792"><path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z"/></symbol><symbol id="lock" viewBox="0 0 1792 1792"><path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z"/></symbol><symbol id="user" viewBox="0 0 1792 1792"><path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z"/></symbol></svg>

    <!-- Bootstrap core JavaScript-->

    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  </body>

</html>