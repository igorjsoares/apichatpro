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
            <h1 class="m-0 text-dark">Métodos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Métodos</li>
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
            
                <div class="box">
                    <div class="box-header">
                    <h3 class="box-title">Métodos API ChatPro</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Método</th>
                                <th style="width: 40px">Tipo</th>
                                <th>Descrição</th>
                                <th>Corpo da requisição</th>
                            </tr>
                            <tr>
                                <td>/generate_qrcode</td>
                                <td><span class="badge bg-blue">GET</span></td>
                                <td>Gera um novo QRCode. <br>
                                    Com esse método é possgerar um QRCoded dentro do seu sistema, caso seja necessidade, fazendo com que seus clientes, consigam sincronizar o WhatsApp através de uma tela do seu sistema, sem ter que entrar no painel.
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>/status</td>
                                <td><span class="badge bg-blue">GET</span></td>
                                <td>Obtém o status da conexão do celular com a API <br>
                                    Com esse método, entre outras coisas, seu sistema será capaz de monitorar a conexão do celular, entendendo se ele está ou não conectado ao servidor, nível de bateria, rede etc.
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                    <!-- /.box-body -->
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
