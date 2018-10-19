<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if(is_numeric($arParams["DISPLAY_PROPERTY_CANONICAL"])) {
// echo "<pre>";
// var_dump($arResult);
// echo "</pre>";	
	$arSelect = Array("ID", "NAME", "PROPERTY_NEWS_CANONICAL");
	$arFilter = Array("IBLOCK_ID"=>6, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "PROPERTY_NEWS_CANONICAL");
	$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);

	// $Element = array();
	while($obj = $res->Fetch())
	{
		// $Element[] = $obj;
		if (($arParams["DISPLAY_PROPERTY_CANONICAL"] == $obj['PROPERTY_NEWS_CANONICAL_VALUE']) && ($arParams["DISPLAY_PROPERTY_CANONICAL"] == $arResult['ID'])){
			$arResult['MY_CANONICAL'] = $obj['NAME'];
			$obj_comp = $this->GetComponent();
			$obj_comp->SetResultCacheKeys(array(
				"MY_CANONICAL",
			));
		}
	}
	// var_dump($Element);
// echo "</pre>";
	
}
?>