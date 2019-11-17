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
            <h1 class="m-0 text-dark">Postman / Insomnia</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Postman / Insomnia</li>
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
            <img width="100%" src="dist/img/api/logos_rest_client.png" alt="">
            </div>

                <p>Postman e Insomnia são APIs Rest Client, de forma simplificada, são programas utilizados para testar APIs, enviando requisições e recebendo as respostas.</p>
                <p>Os dois programas são bem parecidos, por isso vamos testar aqui somente o Postman, mas caso o programa instalado seja o Insomnia, a lógica é a mesma e você será capaz de testar também.</p>
                <p>Vamos fazer um teste com o método <strong>/status</strong></p>
                <div class="callout callout-danger">
                <p>Lembrando que para realizar qualquer teste com a API, o celular tem que estar <strong style="color: green">Conectado</strong> no QrCode do painel.</p>
                </div>
                <ol>
                    <li>Primeiramente faça o download e intale o Postman do site oficial <a href="http://www.getpostman.com">www.getpostman.com</a>.</li>
                    <li>Ao abrir o programa, vamos começar com uma nova requisição, clique em <strong>New</strong> > <strong>Request</strong>.</li>
                    <li>Em <strong>Request Name</strong> coloque <strong>Teste API Status</strong></li>
                    <li>Em <strong>Create Colletion</strong>, coloque API ChatPro, para criar uma colação de testes dessa API</li>
                    <li>Clique agora em <strong>Save to API ChatPro</strong></li>
                    <li>O método /status é do tipo GET, então ao lado esquerdo de <strong>Enter request Url</strong>, escolha a opção GET.</li>
                    <li>A URL da requisição é composta por [Seu EndPoint] + [/api/v1/] + [método (no caso /status)], então em <strong>Enter request Url</strong>, coloque <strong style="color: red">api.service.chatpro.com.br:374xx</strong>/api/v1/status (lembrando que o texto que está em vermelho deve ser substituido pelo seu endpoint).</li>
                    <li>Agora temos que preencher o header com o Token para autorizar essa requisição a utilizar a API, para isso clique abaixo do campo de url, em <strong>Headers</strong></li>
                    <li>Em Query Params, abaixo de KEY, escreva <strong>Autorization</strong> e lodo à frente, em VALUE, cole o token que está no seu painel.</li>
                    <li>Pronto, basta clicar no botão <strong>Send</strong>.</li>
                    <p>O Postman faz a requisição com o método status e retorna o status da conexão logo abaixo no formato Json, com informações importantes da conexão.</p>
                </ol>
                <p>Agora vamos testar o método <strong>/send_message</strong> e fazer o Postman enviar uma mensagem do seu Whatsapp automaticamente.</p>
                <ol>
                    <li>Vamos criar uma nova requisição, clicando novamente em <strong>New</strong> > <strong>Request</strong></li>
                    <li>Para essa requisição daremos o nome de Teste API Envio.</li>
                    <li>O método /send_message é do tipo POST, então terá que selecionar a opção POST do lado esquerdo da URL da requisição.</li>
                    <li>A URL da requisição nesse caso muda somente o método em comparação com a URL anterior, ficando <strong style="color: red">api.service.chatpro.com.br:374xx</strong>/api/v1/send_message (lembrando que o texto que está em vermelho deve ser substituido pelo seu endpoint).</li>
                    <li>Clique novamente em Headers e preencha com o KEY Authorize o VALUE com o Token.</li>
                    <li>A diferença nessa requisição é que ela tem um corpo (body) com o Json de parâmetros, para poder escrever o json, clique em <strong>Body</strong></li>
                    <li>Escolha o tipo <strong>Raw</strong></li>
                    <li>Escreva no corpo da requição o json infomado na documentação para esse método</li>
                    <code>
                        {<br>
                        "menssage": "string",<bR>
                        "number": "string"<br>
                        }
                    </code>
                    <li>Troque a palavra String em frente a menssage por um texto qualquer (o texto da mensagem), e a palavra String em frente ao number, pelo número com DDD que receberá a mensagem (aconselhável não enviar para o próprio número conectado)</li>
                    <li>Pronto, basta clicar no botão <strong>Send</strong>.</li>
                    <p>O Postman faz a requisição com o método e retorna a resposta com status, ID da mensagem e o timestamp.</p>
                </ol>
                

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
