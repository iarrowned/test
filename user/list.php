<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

global $APPLICATION;
$APPLICATION->SetTitle("Новый раздел");

?>

<?php
$APPLICATION->IncludeComponent(
    'custom:task.list',
    '',
    [

    ]
);
?>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>