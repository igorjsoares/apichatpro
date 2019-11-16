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
            <h1 class="m-0 text-dark">Preços / Créditos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Preços</li>
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

            <p>A API trabalha com o modelo de pacotes de créditos pré pago, onde <strong style="color: green;">cada crédito representa uma mensagem enviada</strong>, ou seja, não cobramos por mensagens recebidas.</p>
            <p>Quanto maior o pacote de créditos adquirido, menor o valor pago por crédito, podendo chegar a 4 centavos cada crédito, abaixo uma tabela com os valores:</p>
            <ul>
                <li>2.500 créditos • R$325,00 (R$0,13 por crédito)</li>
                <li>5.000 créditos • R$450,00 (R$0,09 por crédito)</li>
                <li>10.000 créditos • R$600,00 (R$0,06 por crédito)</li>
                <li>50.000 créditos • R$2.000,00 (R$0,04 por crédito)</li>
            </ul>
            <div class="callout callout-success">
                <h4>DICA</h4>
                <p>Os créditos não possuem data de validade, ou seja, não precisa ficar preocupado em consumir em um determinado espaço de tempo.</p>
            </div>
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
