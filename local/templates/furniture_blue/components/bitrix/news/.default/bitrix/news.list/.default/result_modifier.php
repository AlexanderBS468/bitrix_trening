<?php
/**
 * Created by PhpStorm.
 * User: Техдиректор
 * Date: 19.10.2018
 * Time: 12:13
 */
$arResult['SPECIAL_DATE'] = $arResult["ITEMS"][0]['ACTIVE_FROM'];
$obj_comp = $this->GetComponent();
$obj_comp->SetResultCacheKeys(array(
	"SPECIAL_DATE",
));
