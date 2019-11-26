<?php

    $json = file_get_contents('php://input');
    $decoded = json_decode($json,true);
    
    ob_start();
    var_dump($decoded);
    $input = ob_get_contents();
    ob_end_clean();

    //Essa linha salva os retorno do webhook no arquivo mensagens dentro da pasta do arquivo no seu servidor
    //Para ver exemplos de retorno consulte o link https://gist.github.com/blennopardim/4774e3184a1c82ad80c3aa2f0364c39d
    file_put_contents('mensagens.log',$input.PHP_EOL,FILE_APPEND);

    //A partir dessa linha você poderá tratar como quiser os recebimentos dos dados, sanvando em banco de dados ou executando ações
   
?>