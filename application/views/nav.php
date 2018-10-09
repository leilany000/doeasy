<head>
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png.png"/>
</head>
<style>
.sidebar {
    background-color: #d76d77;
    background: #4c3b4d; 
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

.navbar-dark{
    background-color: #d76d77;
    background: #A53860; 
    color:  #A53860;
}

.btn{
    background-color: #d76d77;
    background: #d76d77; 

}
.btn:hover{
    background-color: #61c9a8;
    background: #61c9a8; 

}
</style> 
<nav class="navbar navbar-expand navbar-dark bg-dark static-top" style="background-color: #d76d77; background: #d76d77; color: #A53860;">

      <a class="navbar-brand mr-1" href="<?=base_url();?>">  <img src="<?=base_url("assets/img/2.png");?>" alt="Doeasy" style="width: 6em; height: 4em; 
       border-radius: 5px;"> </a>
</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="O que deseja procurar?" aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" style="background:#D76D77; border-color: #D76D77;" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <!--<li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
          -->
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <!--<a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>-->
            <a class="dropdown-item" href=""><?= $this->session->userdata('usuario')->nome?></a>
            <a class="dropdown-item" href="<?=base_url();?>" data-toggle="modal" data-target="#logoutModal">Sair</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <!--<li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Perfil</span>
          </a>
        </li>
       
       <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>

        -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('perfil_ong')?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Perfil</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('solicitacoes')?>">
         <i class="fas fa-fw fa-user-friends"></i>
            <span>Solicitações</span></a>
        </li>
      
      <?php 
        if ($this->session->userdata('usuario')->tipo != 'D'){ 
          echo "<li class='nav-item'>
          <a class='nav-link' href='". base_url('tipo_doacao/listar') .
          
          "'><i class='fas fa-fw fa-clipboard-list'></i>
            <span>Pedidos</span></a>
        </li> ";
         } 
      ?>
          
            <?php 
        if ($this->session->userdata('usuario')->tipo != 'O'){ 
          echo "<li class='nav-item'>
          <a class='nav-link' href='". base_url('feed_instituicoes') .
          
          "'><i class='fas fa-fw fa-rss'></i>
            <span> Seu Feed</span></a>
        </li> ";
         } 
      ?>

      </ul>
