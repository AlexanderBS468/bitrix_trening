<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
global $APPLICATION;
// echo "<pre>";
// var_dump($arParams["DISPLAY_META_SPECIAL_DATE"]);
// var_dump($arResult["ITEMS"][0]['ACTIVE_FROM']);
// var_dump($arResult);
// var_dump($arResult);
// echo "</pre>";
// var_dump($arResult["MY_INFO"]);
if($arParams["DISPLAY_META_SPECIAL_DATE"] == "Y") {
	$APPLICATION->SetPageProperty("specialdate", $arResult['MY_INFO']);
}
?>