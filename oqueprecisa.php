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
            <h1 class="m-0 text-dark">O que precisa?</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">O que precisa?</li>
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
            <div class="box-header with-border">
              <h3 class="box-title">O que é API?</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <p>Como o chat pro é uma API para implementação das metodologias de envio e recebimento do WhatsApp, ele necessita de uma aplicação que o embarcará.</p>
            <p>Para isso é necessário conhecimentos de desenvolvimento, ou seja, caso você não seja um desenvolvedor, precisará procurar o desenvolvedor do seu sistema para que ele possa integrar a API no sistema, site, app ou plataforma.</p>
            <p>Não é necessário conhecimentos aprofundados em programação, caso saiba na linguagem que tem costume programar, fazer requisições Http e manipular os dados das respostas, já conseguirá trabalhar com a API.</p>

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
