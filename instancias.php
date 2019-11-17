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
            <h1 class="m-0 text-dark">Instâncias</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Instâncias</li>
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
            
                <p>Cada instância é a possibilidade de conexão de um número de WhatsApp. Caso o seu negócio necessite que tenha vários números compartilhando o mesmo pacote de créditos, é aqui que multiplicará os números.</p>
                <div><img src="dist/img/api/tela_painel_inf.png" width="90%" alt=""></div>
              <p>Cada instância é individual, tanto em infraestrutura quanto em credenciais de envio, ou seja só compartilham o mesmo pacote de créditos.</p>
              <p>Ao realizar uma recarga você terá 1 instância inclusa no seu painel, para instâncias adicionais, cada instância tem o custo mensal de R$ 50,00.</p>
              <p>Para solicitar instâncias adicionais, basta solicitar um link de pagamento ao suporte, informando a quantidade de instâncias adicionais necessita.</p>
                <BR>
                <h4>SITUAÇÃO</h4>
                <BR>
                <div><img src="dist/img/api/tela_instancia_situacao.png" width="90%" alt=""></div>
                <p>Neste espaço aparecerá o status da conexão do servidor da instância com o WhatsApp.</p>
                <div class="callout callout-danger">
                <p>Importante lembrar que para que a API funcione, o WhatsApp deve estar sincronizado com sua instância, atraves do QRcode.</p>
            </div>
            <p><h7>O WhatsApp não permite mais de uma conexão externa simultânea, sendo assim, não é possível estar conectado na API e acessar o Web Whatsapp.</h7></p>
              <p>Sugerimos que antes de sincronizar o número ao QrCode, acesse os ajustes do Whatsapp no aparelho > Whatsapp web > Sair de todas as sessões. Assim poderá ter uma conexão unica com o servidor.</p>
              <p>Para ler o QRCode acesse ajustes do seu aplicativo > Whatsapp Web > Escanear código QrCode (ou sinal de +).</p>
              <p>Após sincronizar o whatsapp, lendo o QRcode, aguarde até o status da sua instância mudar para <strong style="green">Conectado</strong> e ficar na cor verde (caso demore mais de 1 munitor, basta atualizar a pagina F5). No momento que sincroniza, o painel fez uma requisição (status) que trará as informações atuais da conexão, então, juntamente com a alteração de status, o painel traz na tela os dados do celular conectado como por exemplo bateria e rede. </p>
              
              <BR>
              <h4>CREDENCIAIS</H4>
              <BR>
              <div><img src="dist/img/api/tela_instancia_credenciais.png" width="90%" alt=""></div>
              <p>Esse é o espaço destinado às informações da instância, como:</p>
              <ul>
                <li><strong>Código: </strong>Esse é o código único da sua instância.</li>
                <li><strong>EndPoint: </strong>Esse é o prefixo do endereço que utilizará para acessar os métodos, cada instância tem um endereço diferente.</li>
                <li><strong>Token: </strong>Token é uma espécie de senha para acessar os métodos, deverá ser colocado no header da requisição, com Authorization, somente esse token combinado com o endpoint, mostrará ao servidor que é essa intância que está solicitando o método, portanto não divulgue o seu token.</li>
                <li><strong>Nome da instância: </strong>É o nome que aparecerá no painel, para controle pessoal das instâncias.</li>
                <li><strong>Webhook: </strong>Webhook é o endereço de um arquivo no seu servidor que receberá as requisições que o Whatsapp enviará, nessas requisições vem, entre outras coisas como status da mensagem, se foi lida ou não, vem também a mensagem recebida. A partir daí você pode tratar ela, por exemplo salvando em banco de dados para visualização.</li>
              </ul>

              <BR>
              <h4>DOCUMENTAÇÃO INTERATIVA</H4>
              <BR>
              <p>Nesse botão você encontrará a documentação no site Swagger, onde poderá realizar testes diretamente na documentação.</p>

              <BR>
              <h4>TESTES</H4>
              <BR>
              <P>Nesta área são realizados os primeios testes, o próprio painel chama as requisições. <strong style="color: red;"> ESTE ESPAÇO SÓ APARECERÁ OU FUNCIONARÁ COM O WHATSAPP SINCRONIZADO. </strong></P>
                <ul>
                <li>Para testar, basta colocar um número com DDD (que não seja o número sincronizado), inserir uma mensagem e clicar em <strong>Enviar mensagem</strong>.</li>
                <li>O painel fará a requisição send_message com os dados informados e mostrará na tela o retorno da requisição.</li>
                <p>Para ver dados do perfil do número inserido, basta clicar em <strong>Perfil</strong> o painel irá fazer a requisição ?profile?</p>
                </ul>
              
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
