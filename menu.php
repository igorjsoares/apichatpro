 
 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-warning elevation-4">
    <!-- Brand Logo -->
    <a href="https://api.chatpro.com.br" target="_blank" class="brand-link">
      <img src="dist/img/api/logo.png" alt="API ChatPro" class="brand-image">
      <span style="color: white;" class="brand-text font-weight-light">CP</span>
    </a>
<?php
    $arquivo = basename($_SERVER['PHP_SELF'],'.php');
    
    $Aapi = "";
    $oquee = "";
    $oqueprecisa = "";
    $comecar = "";
    $Conceitos = "";
    $painel = "";
    $precos = "";
    $instancias = "";
    $Testes = "";
    $metodos = "";
    $documentacao = "";
    $postman = "";
    $servidor = "";

    if($arquivo == "index"){
        $Aapi = "active";
        $oquee = "active";
    }
    elseif($arquivo == "oqueprecisa"){
        $Aapi = "active";
        $oqueprecisa = "active";
    }
    elseif($arquivo == "comecar"){
        $Aapi = "active";
        $comecar = "active";
    }
    elseif($arquivo == "painel"){
        $Conceitos = "active";
        $painel = "active";
    }
    elseif($arquivo == "preco"){
        $Conceitos = "active";
        $precos = "active";
    }
    elseif($arquivo == "instancias"){
        $Conceitos = "active";
        $instancias = "active";
    }
    elseif($arquivo == "metodos"){
        $Testes = "active";
        $metodos = "active";
    }
    elseif($arquivo == "docinterativa"){
        $Testes = "active";
        $documentacao = "active";
    }
    elseif($arquivo == "postman"){
        $Testes = "active";
        $postman = "active";
    }
    elseif($arquivo == "testeservidor"){
        $Testes = "active";
        $servidor = "active";
    }

 ?>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li style="width: -webkit-fill-available;" class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link <?=$Aapi;?>">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                A API
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php" class="nav-link <?=$oquee;?>">
                  <i class="fa fa-commenting-o nav-icon"></i>
                  <p>O que é?</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="oqueprecisa.php" class="nav-link <?=$oqueprecisa;?>">
                  <i class="fa fa-check-square-o nav-icon"></i>
                  <p>O que precisa?</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="comecar.php" class="nav-link <?=$comecar;?>">
                  <i class="fa fa-angle-right nav-icon"></i>
                  <p>Como começar?</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li style="width: -webkit-fill-available;" class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link <?=$Conceitos;?>">
              <i class="nav-icon fa fa-info-circle"></i>
              <p>
                Conceitos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="painel.php" class="nav-link <?=$painel;?>">
                  <i class="fa fa-television nav-icon"></i>
                  <p>Painel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="preco.php" class="nav-link <?=$precos;?>">
                  <i class="fa  fa-credit-card nav-icon"></i>
                  <p>Preços / Créditos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="instancias.php" class="nav-link <?=$instancias;?>">
                  <i class="fas fa-qrcode nav-icon"></i>
                  <p>Instâncias</p>
                </a>
              </li>
            </ul>
          </li>

          <li style="width: -webkit-fill-available;" class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link <?=$Testes;?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Testes / Implantações
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="metodos.php" class="nav-link <?=$metodos;?>">
                  <i class="fa fa-comments-o nav-icon"></i>
                  <p>Métodos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="docinterativa.php" class="nav-link <?=$documentacao;?>">
                  <i class="far fa-file-alt nav-icon"></i>
                  <p>Documentação interativa</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="postman.php" class="nav-link <?=$postman;?>">
                  <i class="fas fa-exchange-alt nav-icon"></i>
                  <p>Postman / Insomnia</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="testeservidor.php" class="nav-link <?=$servidor;?>">
                  <i class="fa fa-file-code-o nav-icon"></i>
                  <p>Testes no seu servidor</p>
                </a>
              </li>
            </ul>
          </li>

          
              
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
