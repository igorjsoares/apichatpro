 <?php
    echo basename($_SERVER['PHP_SELF'],'.php');
 ?>
 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-warning elevation-4">
    <!-- Brand Logo -->
    <a href="https://api.chatpro.com.br" target="_blank" class="brand-link">
      <img src="dist/img/api/logo.png" alt="API ChatPro" class="brand-image">
      <span style="color: white;" class="brand-text font-weight-light">CP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                A API
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php" class="nav-link active">
                  <i class="fa fa-commenting-o nav-icon"></i>
                  <p>O que é?</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="oqueprecisa.php" class="nav-link">
                  <i class="fa fa-check-square-o nav-icon"></i>
                  <p>O que precisa?</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="comecar.php" class="nav-link">
                  <i class="fa fa-angle-right nav-icon"></i>
                  <p>Como começar?</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-info-circle"></i>
              <p>
                Conceitos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="painel.php" class="nav-link">
                  <i class="fa fa-television nav-icon"></i>
                  <p>Painel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="preco.php" class="nav-link">
                  <i class="fa  fa-credit-card nav-icon"></i>
                  <p>Preços / Créditos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="instancias.php" class="nav-link">
                  <i class="fas fa-qrcode nav-icon"></i>
                  <p>Instâncias</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Testes / Implantações
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="metodos.php" class="nav-link">
                  <i class="fa fa-comments-o nav-icon"></i>
                  <p>Métodos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="docinterativa.php" class="nav-link">
                  <i class="far fa-file-alt nav-icon"></i>
                  <p>Documentação interativa</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="postman.php" class="nav-link">
                  <i class="fas fa-exchange-alt nav-icon"></i>
                  <p>Postman / Insomnia</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="testeservidor.php" class="nav-link">
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