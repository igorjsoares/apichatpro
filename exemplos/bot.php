<?php
{
    class whatsAppBot{
    //especificar instancia URL e token
    
    var $APIurl = 'SEUENDPOINT/api/v1/';
    var $token = 'SEUTOKEN';
    
    public function __construct(){
    //get the JSON body from the instance
    $json = file_get_contents('php://input');
    $decoded = json_decode($json,true);
    //write parsed JSON-body to the file for debugging
    ob_start();
    var_dump($decoded);
    $input = ob_get_contents();
    ob_end_clean();
    file_put_contents('input_requests.log',$input.PHP_EOL,FILE_APPEND);
    if(isset($decoded['Type']) && $decoded['Type'] == 'receveid_message'){
    //check every new message
    //delete excess spaces and split the message on spaces. The first word in the message is a command, other words are parameters
    $text = explode(' ',trim($decoded['Body']['Text']));
    file_put_contents('input.log',mb_strtolower($text, 'UTF-8').PHP_EOL,FILE_APPEND);
    //current message shouldn't be send from your bot, because it calls recursion
    if(!$decoded['Body']['Info']['FromMe']){
    //check what command contains the first word and call the function
    switch(mb_strtolower($text[0], 'UTF-8')){
    case 'hi':  {$this->welcome($decoded['Body']['Info']['RemoteJid'],false); break;}
        case '1': {$this->showChatId($decoded['Body']['Info']['RemoteJid']); break;}
        case '2':   {$this->time($decoded['Body']['Info']['RemoteJid']); break;}
        case '3':     {$this->me($decoded['Body']['Info']['RemoteJid']); break;}
        case '4':   {$this->file($decoded['Body']['Info']['RemoteJid'], $text[1]); break;}
        case 'ptt':     {$this->ptt($decoded['Body']['Info']['RemoteJid']); break;}
        case '6':    {$this->geo($message['chatId']); break;}
        case '7':  {$this->group($message['author']); break;}
        case '#':  {$this->welcome($decoded['Body']['Info']['RemoteJid'],true); break;}
        default:        {$this->welcome($decoded['Body']['Info']['RemoteJid'], true); break;}
        }}}}
    //this function calls function sendRequest to send a simple message
    //@param $chatId [string] [required] - the ID of chat where we send a message
    //@param $text [string] [required] - text of the message
    public function welcome($remoteJID, $noWelcome = false){
    $welcomeString = ($noWelcome) ? "Incorrect command\n" : "WhatsApp Demo Bot Empresa \n";
    $this->sendMessage($remoteJID,
    $welcomeString.
    "Oi! Eu sou o bot WhatsApp \n".
    "\n".
    "Vou lhe mostrar do que sou capaz!\n".
    "➖➖➖➖➖➖➖\n".
    "\n".
    "Comandos: \n".
    "1. remoteJID - mostra o remoteJID do chat atual \n".
    "2. tempo - hora do servidor show \n".
    "3. me - mostre seu apelido \n".
    "4. arquivo [formato] - obtém um arquivo. Formatos disponíveis: doc / gif / jpg / png / pdf / mp3 / mp4 \n".
    "5. ptt - obtém uma mensagem de voz \n".
    // "6. geo - obter uma localização \n".
    // "7. group - cria um grupo com o bot \n".
    "\n".
    "Comece a testar, estou esperando 👀 \n".
    "\n".
    "🔙 Para voltar ao menu, envie-me #"
    );
    }
    
    
    //sends Id of the current chat. it is called when the bot gets the command "chatId"
    //@param $chatId [string] [required] - the ID of chat where we send a message
    public function showChatId($remoteJID){
    $this->sendMessage($remoteJID,'remoteJID: '.$remoteJID);
    }
    //sends current server time. it is called when the bot gets the command "time"
    //@param $chatId [string] [required] - the ID of chat where we send a message
    public function time($chatId){
    $this->sendMessage($chatId,date('d.m.Y H:i:s'));
    }
    //sends your nickname. it is called when the bot gets the command "me"
    //@param $chatId [string] [required] - the ID of chat where we send a message
    //@param $name [string] [required] - the "senderName" property of the message
    public function me($remoteJID){
    $data = json_decode($this->sendRequest('get_profile', ['number' => $remoteJID]), true);
        if(empty($data['name']) && empty($data['pushname'])) {
            $this->sendMessage($remoteJID, "Não consegui achar seu nome ou apelido :(, me adicone na sua agenda...");
            if (!empty($data['eurl'])) {
                $this->sendMessage($remoteJID, "Mais achei uma foto;)");
                $this->sendRequest('send_message_file_from_url', ['number' => $remoteJID, 'url' => $data['eurl'], 'caption' => 'Sua foto do perfil']);
            }
            return;
        }
        if(isset($data['name'])) {
            $this->sendMessage($remoteJID, "Encontrei seu nome: $data->name");
        }
        if (isset($data['pushname'])) {
            $this->sendMessage($remoteJID, "Encontrei seu apelido: $data->pushname");
        }
    }
    // envia um arquivo. é chamado quando o bot recebe o comando "file"
    // @ param $ chatId [string] [obrigatório] - o ID do chat no qual enviamos uma mensagem
    // @ param $ format [string] [obrigatório] - formato de arquivo, dos parâmetros no corpo da mensagem (texto [1], etc)
    public function file($chatId,$format){
    $availableFiles = array( //criar os arquivos no servidor
    'doc' => 'arqu.doc',
    'gif' => 'arqu.gif',
    'jpg' => 'arqu.jpg',
    'png' => 'arqu.png',
    'pdf' => 'arqu.pdf',
    'mp4' => 'arqu.mp4',
    'mp3' => 'arqu.mp3'
    );
    if(isset($availableFiles[$format])){
    $data = array(
    'number'=>$chatId,
    'url'=>'URLDOARQUIVO'.$availableFiles[$format],
    'caption'=>'Este é o seu arquivo '.$availableFiles[$format]
    );
    $this->sendRequest('send_message_file_from_url', $data);}}
    // envia uma mensagem de voz. é chamado quando o bot recebe o comando "ptt"
    // @ param $ chatId [string] [obrigatório] - o ID do chat no qual enviamos uma mensagem
    public function ptt($chatId){
    $data = array(
    'url'=>'https://endereço da mensagem de voz .ogg',
    'number'=>$chatId
    );
    $this->sendRequest('send_message_file_from_url',$data);}
    //sends a location. it is called when the bot gets the command "geo"
    //@param $chatId [string] [required] - the ID of chat where we send a message
    public function geo($chatId){
    $data = array(
    'lat'=>-83.63473266,
    'lng'=>-33.38457547,
    'address'=>'Rua Aritana, Qd4 Lt 12',
    'chatId'=>$chatId
    );
    $this->sendRequest('sendLocation',$data);}
    //creates a group. it is called when the bot gets the command "group"
    //@param chatId [string] [required] - the ID of chat where we send a message
    //@param author [string] [required] - "author" property of the message
    public function group($author){
    $phone = str_replace('@c.us','',$author);
    $data = array(
    'groupName'=>'Grupo de de teste do Bot.',
    'phones'=>array($phone),
    'messageText'=>'Este é nosso grupo agora é só convidar mais pessoas!'
    );
    $this->sendRequest('group',$data);}
    public function sendMessage($remoteJID, $text){
        $data = array('number'=>$remoteJID,'menssage'=>$text);
        $this->sendRequest('send_message',$data);
    }
    public function sendRequest($method, $data){
    $url = $this->APIurl.$method;
    if(is_array($data)) { $data = json_encode($data);}
    $options = stream_context_create(['http' => [
    'method'  => 'POST',
    'header'  => "Content-type: application/json\r\nAuthorization: $this->token\r\n",
    'content' => $data]]);
    $response = file_get_contents($url,false,$options);
    file_put_contents('requests.log',$response.PHP_EOL,FILE_APPEND);
    return $response;
    }}
    //execute the class when this file is requested by the instance
    new whatsAppBot();}
    
    ?>