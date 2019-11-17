<?php

?>

<!DOCTYPE html>
<html>

<?php
include 'head.php';
?>

<body class="hold-transition sidebar-mini layout-fixed">

<?php
include 'header.php';

include 'menu.php';
?>

 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Documentação Interativa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Documentação interativa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div style="margin-left: 10px;" class="container-fluid">
       
       <!-- CONTEÚDO PRINCIPAL -->
        <div class="col-md-12">
          <div class="box box-solid">
            <!-- /.box-header -->
            <div class="box-body">
            <div>
            <img width="100%" src="dist/img/api/tela_painel.png" alt="">
            </div>

                <p>O painel é onde você tem o controle dos seus créditos, consumo e instâncias. </p>
                <p>Na barra superior tem acesso aos créditos da conta, e pode Comprar Créditos ou ver Histórico, tanto de pagamentos, quanto de consumo.</p>
                <div>
                <img width="100%" src="dist/img/api/tela_painel_sup.png" alt="">
                </div>
                <BR>
                <p>Mais abaixo temos as instâncias ativas  na conta, todas as instâncias que estiverem aqui, compartilharão o mesmo pacote de créditos. </p>
                <div> 
                <img width="100%" src="dist/img/api/tela_painel_inf.png" alt="">
                </div>
                <p>É neste espaço que estará todas as instâncias contratadas.</p>

                <p>No painel é onde fará todo o controle de consumo, créditos e instâncias.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  <?php
   include 'footer.php';
   include 'scripts.php'; 
  ?>

</body>
</html>
