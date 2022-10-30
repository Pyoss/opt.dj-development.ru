<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

$CLASSES_DIR = $_SERVER['DOCUMENT_ROOT'] . '/local/classes/';

// Тестируем необходимые классы (список не окончательный)
require_once $CLASSES_DIR . 'Dadata/Api.php';
require_once $CLASSES_DIR . 'Dadata/Request.php';

function getRealIP() {
    $ip = false;
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ips = explode (', ', $_SERVER['HTTP_X_FORWARDED_FOR']);
        for ($i = 0; $i < count($ips); $i++) {
            if (!preg_match("/^(10|172\\.16|192\\.168)\\./", $ips[$i])) {
                $ip = $ips[$i];
                break;
            }
        }
    }
    return ($ip ? : $_SERVER['REMOTE_ADDR']);
}

$dadata =  new \Dadata\Api();
$city = json_decode($dadata -> searchByIp(getRealIP()), true)['location']['value'];
print_r($city);
if (!$_POST){die();
}
CModule::IncludeModule('dj.bitrix24');

use DJScripts\Bitrix24;

$bx = new Bitrix24(9623667392, false, 'Новый запрос опт', 56);

if ($_POST['template'] === 'callback') {
    $message = 'Запросил обратный звонок: Телефон: ' . $_POST['phone'];
    if ($city){
        $message .= "\r\nИмя: " . $city;
    }
    mail('opt@dobriy-jar.ru', 'Обратный звонок Опт', $message);
    $bx->createCallbackLead($_POST['phone'], 'Заявка на обратный звонок Опт', false, false, false, $city);
}else if ($_POST['template'] === 'price') {
    $message = 'Запросил прайс: Телефон: ' . $_POST['phone'];
    if ($_POST['name']){

        $message.= "\r\nИмя: " . $_POST['name'];
    }
    $message .= "\r\nПочта: " . $_POST['email'];
    if ($city){
        $message .= "\r\nГород: " . $city;
    }
    mail('igork@dobriy-jar.ru', 'Получение Прайса Опт', $message);
    $bx->createCallbackLead($_POST['phone'], 'Заявка на получение прайса опт', 'Заявка на получение прайса опт',
        $_POST['name'] ,$_POST['email'], $city);
}
file_put_contents("/home/bitrix/ext_www/opt.dj-development.ru/post.log", print_r($_POST, true), FILE_APPEND );
