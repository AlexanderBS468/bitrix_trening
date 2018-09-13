<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<!-- <pre><?var_dump($arResult)?></pre> -->
<hr>
	<div class="review-block">
	<div class="review-text">
		<?if(isset($arResult["DETAIL_TEXT"])):?>
			<div class="review-text-cont">
				<?=$arResult["DETAIL_TEXT"]?>
			</div>
		<?endif;?>
		<?if(isset($arResult["NAME"])):?>
			<div class="review-autor">
			<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
				<?echo ($arResult["NAME"] . ", ")?>
			<?endif;?>
			<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
				<?echo ($arResult["DISPLAY_ACTIVE_FROM"] . "г., ")?>
			<?endif;?>
			<?if(/*$arParams["PROPERTIES"]!="N" && */$arResult["PROPERTIES"]["POSITION"]["VALUE"]):?>
				<?echo ($arResult["PROPERTIES"]["POSITION"]["VALUE"] . ", ")?>
			<?endif?>
			<?if(/*$arParams["PROPERTIES"]!="N" && */$arResult["PROPERTIES"]["COMPANY"]["VALUE"]):?>
				<?echo ($arResult["PROPERTIES"]["COMPANY"]["VALUE"])?>
			<?endif?>
			</div>
		<?endif;?>
	</div>
	<div style="clear: both;" class="review-img-wrap">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
			<img
				border="0"
				src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
				width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
				height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
				alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
				title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
				/>
		<?else:?>
				<img
					border="0"
					src="<?=SITE_TEMPLATE_PATH?>/img/no_photo.jpg"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="no_photo"
					title="no_photo"
					/>
		<?endif?>
	</div>
	</div>
	<?if($arResult["PROPERTIES"]["DOC"]['VALUE']):?>
		<div class="exam-review-doc">
			<p><?echo ($arResult["PROPERTIES"]["DOC"]["NAME"])?>:</p>
			<?foreach($arResult["PROPERTIES"]["DOC"]["VALUE"] as $arElement):?>
			<?
				$arDoc = CFile::GetByID($arElement);
				$doc = $arDoc->getNext();
				$name_file = current(explode('.', $doc["ORIGINAL_NAME"]));
				$name_file_all = $doc['ORIGINAL_NAME'];
			?>
			<div class="exam-review-item-doc">
				<img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png"><a target="_blank" href="<?=CFile::GetPath($arElement)?>"><?echo $name_file_all;?></a>
			</div>
			<?endforeach;?>			
		</div>
	<?endif?>
	
	<?/*if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
	<br />
	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach;
	foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

		<?=$arProperty["NAME"]?>:&nbsp;
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>
		<br />
	<?endforeach;
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	*/?>
<hr>