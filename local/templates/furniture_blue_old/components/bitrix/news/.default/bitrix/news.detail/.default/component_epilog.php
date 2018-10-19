<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
global $APPLICATION;
if(is_numeric($arParams["DISPLAY_PROPERTY_CANONICAL"])) {
	$APPLICATION->SetPageProperty("canonical", $arResult['MY_CANONICAL']);
	$APPLICATION->AddHeadString('<link rel="canonical" href="' . $arResult['MY_CANONICAL'] . '">',true);
}
?>