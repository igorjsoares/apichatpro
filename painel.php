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
            <h1 class="m-0 text-dark">Painel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Painel</li>
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
            <div class="callout callout-success">
                <h4>Testes grátis</h4>

                <p>Para que tenha total segurança na nossa ferramenta, disponibilizamos 15 dias e 100 créditos grátis para testes.</p>
              </div>

                <p>Para testar siga os passos abaixo:</p>
              
                <ol>
                    <li>Acesse <a href="http://api.chatpro.com.br">api.chatpro.com.br</a></li>
                    <li>Clique no botão <strong>Teste grátis</strong></li>
                    <li>Preencher os dados corretamente, é importante colocar os dados corretamente, pois <strong> senha será enviada para WhatsApp do número informado </strong> e as notificações importantes para o e-mail informado.</li>
                    <li>Ao receber a senha por WhatsApp, clique no botão <strong>Login</strong> ou entre no endereço <a href="http://api.chatpro.com.br/painel">api.chatpro.com.br/painel</a></li>
                    <li>Coloque seu e-mail e a senha recebida.</li>
                </ol>
                <p>Esse é o primeiro passo para começar a utilizar a API, nos próximos tópicos explicaremos cada parte do painel, mas se já quiser efetuar um teste, siga os passos abaixo:</p>
                
                <ol>
                    <li>Abra no seu celular o aplicativo WhatsApp, em ajustes acesse WhatsApp web e leia o QRCode que está na tela do painel.</li>
                    <li>Espere alguns segundos e seu painel aparecerá conectado (caso demore mais de 1 minuto, atualize a página).</li>
                    <li>Com o status conectado, desça a barra de rolagem até o final, verá um campo de número é um campo de mensagem.</li>
                    <li>Coloque um número com DDD (que não seja o número conectado), coloque uma mensagem e clique em <strong>Enviar mensagem</strong>.</li>
                </ol>

                <p>Note que a mensagem será enviada no seu aparelho e o painel te retornará uma resposta da requisição, entre outras coisas, com ID da mensagem e status.</p>
                <p>Caso clique em <strong>Perfil</strong>, o painel irá executar o método /get_profile Que retorna para sua aplicação os dados do número inserido, inclusive a foto de  perfil (caso esses dados estejam disponíveis pro seu número)</p>
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
