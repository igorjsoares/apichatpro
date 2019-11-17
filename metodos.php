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
                                <th style="width: 40px;">Tipo</th>
                                <th>Descrição</th>
                                <th style="width: 200px;">Corpo da requisição (Json)</th>
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
                            <tr>
                                <td>/reload</td>
                                <td><span class="badge bg-blue">GET</span></td>
                                <td>Reconecta a instância<br>
                                    Caso o sistema identifique que o celular está desconectado, chamando esse método, força uma reconexão do celular na instância.    
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>/contacts</td>
                                <td><span class="badge bg-blue">GET</span></td>
                                <td>Retorna a lista de contatos <br>
                                    Esse método retorna toda a lista de contatos do celular conectado.
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>/get_profile</td>
                                <td><span class="badge bg-green">POST</span></td>
                                <td>Obtém o perfil do WhatsApp de um número específico<br>
                                    Retorna se o número possui Whatsapp e obtem o nome e foto do WhatsApp desse número.
                                </td>
                                <td>
                                    <code>
                                        {<BR>
                                        "number": "string"<BR>
                                        }
                                    </code>
                                </td>
                            </tr>
                            <tr>
                                <td>/send_message</td>
                                <td><span class="badge bg-green">POST</span></td>
                                <td>Envia uma mensagem de texto<br>
                                    Envia para o número infomado uma mensagem de texto. Essa mensagem poderá conter texto formatado com os padrões do Whatsapp (como negrito entre *Negrito*), e emojis, copiando e colando emojis no corpo da mensagem.
                                </td>
                                <td>
                                    <code>
                                        {<br>
                                        "menssage": "string",<br>
                                        "number": "string"<br>
                                        }
                                    </code>
                                </td>
                            </tr>
                            <tr>
                                <td>/send_message_file_from_url</td>
                                <td><span class="badge bg-green">POST</span></td>
                                <td>Envia uma mensagem com arquivo em anexo<br>
                                    Com esse método é possível enviar qualquer tipo de arquivo em anexo, como imagem, áudio, vídeo, documentos .doc .xls .pdf, basta colocar o endereço do arquivo no campo URL da requisição, juntamente com o arquivo poderá enviar um texto na mesma mensagem no campo <strong>caption</strong> e será contato como 1 crédito apenas.    
                                </td>
                                <td>
                                    <code>
                                        {<br>
                                        "caption": "string",<br>
                                        "number": "string",<br>
                                        "url": "string"<br>
                                        }
                                    </code>
                                </td>
                            </tr>
                            <tr>
                                <td>/send_location</td>
                                <td><span class="badge bg-green">POST</span></td>
                                <td>Envia uma mensagem com uma localização<br>
                                    Este método envia uma localização via WhatsApp, basta informar a latitude <strong>(lat)</strong> e longetude <strong>(lng)</strong> de um determinado local (que poderá facilmente ser obtida no <a href="https://www.google.com.br/maps">Google maps</a>). <br>
                                    O campo <strong>address</strong> poderá escrever o endereço que aparecerá na mensagem, e o campo <strong>nome</strong> será onde colocará um nome do local (exemplo.: Restaurante Comida Boa)
                                </td>
                                <td>
                                    <code>
                                        {<br>
                                        "address": "string",<br>
                                        "lat": 0,<br>
                                        "lng": 0,<br>
                                        "name": "string",<br>
                                        "number": "string"<br>
                                        }
                                    </code>
                                </td>
                            </tr>
                            <tr>
                                <td>/webhook</td>
                                <td><span class="badge bg-green">POST</span></td>
                                <td>Seta o webhook que vai receber os eventos<br>
                                    Este método é capaz de setar o webhook, que é o arquivo que receberá os eventos do WhatsApp, como por exemplo as mensagens recebidas.
                                </td>
                                <td>
                                    <code>
                                        {<br>
                                        "webhook": "string"<br>
                                        }
                                    </code>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <div class="callout callout-danger">
                        <p>Para mais detalhes de cada método, por exemplo os possíveis retornos, acesse sua Documentação interativa dentro do seu Painel. </p>
                        <button href="docinterativa.php" class="btn btn-info">Informações sobre Documentação intertiva</button>
                    </div>
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
