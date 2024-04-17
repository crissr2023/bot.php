<?php
$token = '6897330725:AAFBf7eK4PzONlJKRgax5H5jfRwpVYL5tD0';  

$website = 'https://api.telegram.org/bot'.$token;

$input = file_get_contents('php://input');
$update = json_decode($input, true);

$chatid = $update['mensaje'][ 'chat']['id'];
$mensaje = $update['mensaje']['text'];

switch ($mensaje) {
    case 'start':   
        $response = 'me has iniciado';
        sendmensaje($chatid , $response);
    break;
        case'/info':
            $response = 'hola soy una entidad artificial';
            sendmensaje($chatid , $response);
    break;

        default:
        $response = 'no te he entendido';
        sendmensaje($chatid , $response);
        break;
}
function sendmensaje($chatid , $response) {
    $url = $GLOBALS ['https://github.com/crissr2023/bot.php'] .'/sendmensaje?chat_id='. $chatid .'&parse_mode=html&text='.urlencode($response);
    file_get_contents($url);    
    }
    ?>
