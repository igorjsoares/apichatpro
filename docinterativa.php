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
            
                <p>A documentação interativa foi escrita dentro da plataforma swagger que permite que façamos testes da Api diretamente na documentação. Sendo assim além de conhecer os métodos podemos também já testar o funcionamento deles.<br>
                Por esse motivo, cada instância tem seu endereço de documentação, por isso é necessário que acesse dentro do seu painel</p>
                <ol>
                <li>Entre no seu paniel e faça o login <a href="http://api.chatpro.com.br/painel">api.chatpro.com.br</a></li>
                <li>Acesse sua instância</li>
                <li>Certifique que o celular está sincronizado com a instância (instância com status <strong style="color? green">Conectado</strong></li>
                <li>Desça a barra de rolagem e clique no botão <strong>Acessar documentação interativa</strong></li>
                </ol>
                <p>Para que o Swagger utilize a API com as suas credenciais é necessário autorizar essa sessão com seu <strong>Token</strong>:</p>
                <ol>
                <li>Clique no cadeado verde escrito <strong style="color: green;">Authorize</strong> localizado no lado direito da plataforma Swagger.</li>
                <li>Volte à janela da sua instância e copie o seu <strong>Token</strong> que está em Credenciais.</li>
                <li>Retorne ao Swagger e cole o Token no campo Value:</li>
                <li>Clique em <strong style="color: green;">Authorize</strong></li>
                <li>Feche a pequena janela clicando em <strong>Close</strong></li>
                </ol> 
                <p>Pronto, um cadeado trancado aparecerá, isso quer dizer que essa sessão do seu navegador está devidamente autorizada a utilizar a API com o celular conectado e executar os métodos.</p>
                <div class="callout callout-info">
                    <p>Para sua segurança, assim que a janela do Swagger for fechada, o seu navegador perde a autorização. </p>
                </div>
                <bR>
                <p>Vamos fazer um teste no método <strong>/status</strong>, esse método retorna o status da conexão do WhatsApp com o servidor, clique na tabela no método /status, depois clique em <strong>Try it now</strong>  localizado no lado direito dentro do método. <bR>
                Nesse momento você vai chamar uma requisição do tipo Get > clique no botão <strong>Execute</strong> que apareceu logo abaixo.</p>
                <p>O Swagger traz como foi feita a requisição e traz a resposta da mesma, trazendo o status atual da conexão.</p>
                <br>
                <p>Agora vamos fazer um envio de mensagem pelo swagger, clique no método <strong>/send_message</strong> e clique em <strong>Try it now</strong>.</p>
                <div class="callout callout-info">
                    <p>Já esse método e do tipo POST, e tem um corpo da requisição, onde será informado o número e a mensagem.</p>
                </div>
                <p>Substitua as palavras string por um número de destino (em number) e coloque a mensagem (em message) > clique em <strong>Execute</strong>.</p>
                <p>A mensagem será enviada, o swagger também retornará como ele fez a requisição e a resposta que retornou.</p>
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
