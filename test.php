<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Testing");
$APPLICATION->SetTitle("test");
?><pre><?var_dump($arResult)?></pre><?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	".default", 
	array(
		"EMAIL_TO" => "admin@admin.ru",
		"EVENT_MESSAGE_ID" => array(
			0 => "83",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
		),
		"USE_CAPTCHA" => "Y",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>