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
            <h1 class="m-0 text-dark">O que é a API ChatPro?</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">O que é?</li>
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
<!--
        <div class="">
            <iframe width="852" height="480" class="embed-responsive-item" src="dist/videos/API_Apresentacao_ExportWS.mp4" autostart="false" frameborder="0" allowfullscreen=""></iframe>
        </div>
-->
        <figure>
            <video poster="videos/cover.jpg" controls>
                <source src="dist/videos/API_Apresentacao_ExportWS.mp4" type="video/mp4" />
                <p>Seu navegador não suporta o elemento video HTML5.<br /> 
                Assista o video localmente <br /> <a href="PlymouthRoadrunnerCommercial.mp4">fazendo o download</a></p>
            </video>
        <figcaption>Video responsivo com HTML5 video</figcaption>
        </figure>

        <BR>

        <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">O que é API?</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <p>Para entender o que é a API ChatPro, primeiramente precisamos entender o que é uma API.</p>
              <blockquote>
                <p>API é um conjunto de rotinas e padrões ara acesso de dados de um aplicativo ou plataforma, é utilizada para comunicação entre sistemas, aplicativos ou plataformas. </p>
              </blockquote>

                <p>A API ChatPro é um conjunto de métodos que irá fazer com que o seu sistema, aplicativo ou plataforma ENVIE e RECEBA mensagens via Whatsapp.</p>

                <p>Com a API ChatPro seu sistema poderá de maneira automática ou não, enviar mensagens para clientes informando por exemplo o detalhamento de uma compra, podendo lembrar o paciente de uma consulta marcada no seu sistema, podendo enviar para o WhatsApp mensagens de rastreamento de encomentas, controle de logística, automação residencial e industrial, rastreamento veicular, criação de atendimento automático, entre várias outras possibilidades que podem ser alcançadas.</p>

                <p>Seu sistema também será capaz de receber as mensagens recebidas e fazer o que você quiser com elas, como por exemplo, você pode responder o cliente, dependendo da mensagem dele, pode salvar em banco de dados, pode alterar o status de uma transação... dentre várias possibilidades.</p>
                <BR>
                <div class="callout callout-info">
                <h4>Infinitas possibilidades</h4>

                <p>São muitas as possibilidades, invista na sua criatividade e deixe a comunicação com a gente.</p>
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
