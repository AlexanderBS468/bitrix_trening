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
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="review-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	<div class="review-text">
		<div class="review-block-title">
			<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
				<?/*if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):*/?>
					<span class="review-block-name"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></span>
				<?/*else:?>
					<b><?echo $arItem["NAME"]?></b><br />
				<?endif;*/?>
			<?endif;?>
			<span class="review-block-description">
				<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
					<?echo ($arItem["DISPLAY_ACTIVE_FROM"] . "г., ")?>
				<?endif?>
				<?if(/*$arParams["PROPERTIES"]!="N" && */$arItem["PROPERTIES"]["POSITION"]["VALUE"]):?>
					<?echo ($arItem["PROPERTIES"]["POSITION"]["VALUE"] . ", ")?>
				<?endif?>
				<?if(/*$arParams["PROPERTIES"]!="N" && */$arItem["PROPERTIES"]["COMPANY"]["VALUE"]):?>
					<?echo ($arItem["PROPERTIES"]["COMPANY"]["VALUE"])?>
				<?endif?>
			</span>
			<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
				<div class="review-text-cont">
					<?echo $arItem["PREVIEW_TEXT"];?>
				</div>
			<?endif;?>
			
		</div>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?/*if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] /*&& $arResult["USER_HAVE_ACCESS"])):*/?>
				<div class="review-img-wrap">
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						/></a>
				</div>
			<?else:?>
				<div class="review-img-wrap">
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
					border="0"
					src="<?=SITE_TEMPLATE_PATH?>/img/no_photo.jpg"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="no_photo"
					title="no_photo"
					/>
				</div></a>
			<?/*endif;*/?>
		<?endif?>
		
		
		
		<?/*if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;*/?>
		</div>
	</div>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
