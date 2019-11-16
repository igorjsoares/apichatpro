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
              <p>Cada instância é individual, tanto em infraestrutura quanto em credenciais de envio, ou seja só compartilham o mesmo pacote de créditos.</p>
              <p>Ao realizar uma recarga você terá 1 instância inclusa no seu painel, para instâncias adicionais, cada instância tem o custo mensal de R$ 50,00.</p>
              <p>Para solicitar instâncias adicionais basta solicitar um link de pagamento ao suporte, informando a quantidade de instâncias adicionais necessita.</p>
                <h2>SITUAÇÃO</H2>
                <p>Neste espaço aparecerá o status da conexão do servidor da instância com o WhatsApp.</p>
                <div class="callout callout-warnig">
                <p>Importante lembrar que para que a API funcione, o WhatsApp deve estar sincronizado com sua instância, atraves do QRcode.</p>
            </div>
            <p><h7>O WhatsApp não permite mais de uma conexão externa simultânea, sendo assim, não é possível estar conectado na API e acessar o Web Whatsapp.</h7></p>
              <p>Sugerimos que antes de sincronizar o número ao QrCode, acesse os ajustes do Whatsapp no aparelho > Whatsapp web > Sair de todas as sessões. Assim poderá ter uma conexão unica com o servidor.</p>
              <p>Para ler o QRCode acesse ajustes do seu aplicativo > Whatsapp Web > Escanear código QrCode (ou sinal de +).</p>
              <p>Após sincronizar o whatsapp, lendo o QRcode, aguarde até o status da sua instância mudar para Conectado e ficar na cor verde (caso demore mais de 1 munitor, basta atualizar a pagina F5). No momento que sincroniza, o painel fez uma requisição (status) que trará as informações atuais da conexão, então, juntamente com a alteração de status, o painel traz na tela os dados do celular conectado como por exemplo bateria e rede. </p>
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
