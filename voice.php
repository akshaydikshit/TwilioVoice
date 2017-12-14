<?php

header('Content-Type: text/xml');
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

require_once './vendor/autoload.php';

use Twilio\Twiml;

$response = new Twiml();
switch ($_POST['SpeechResult']) {
    case 'cat':
        $response->say('Fetching Cat!');
        break;
    case 'number':
        $response->say('Fetching Number!');
        break;
}
?>

