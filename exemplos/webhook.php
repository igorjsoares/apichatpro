<?php

    $json = file_get_contents('php://input');
    $decoded = json_decode($json,true);
    
    ob_start();
    var_dump($decoded);
    $input = ob_get_contents();
    ob_end_clean();
    file_put_contents('input_requests.log',$input.PHP_EOL,FILE_APPEND);

    if(isset($decoded['Type']) && $decoded['Type'] == 'receveid_message'){
        
        $text = explode(' ',trim($decoded['Body']['Text']));
        file_put_contents('input.log',mb_strtolower($text, 'UTF-8').PHP_EOL,FILE_APPEND);
        
    }
?>