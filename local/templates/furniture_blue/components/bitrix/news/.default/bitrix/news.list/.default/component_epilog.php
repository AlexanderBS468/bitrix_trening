<?php
/**
 * Created by PhpStorm.
 * User: AlexanderBS
 * Date: 19.10.2018
 * Time: 11:20
 */

if ($arParams['DISPLAY_SPECIALDATE'] == 'Y') {
	global $APPLICATION;
	$APPLICATION->SetPageProperty("specialdate", $arResult["SPECIAL_DATE"]);
}
