<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
if (!$_POST){ die();}
file_put_contents("/home/bitrix/ext_www/best-hero/logs/post.log", print_r($_POST, true), FILE_APPEND );
