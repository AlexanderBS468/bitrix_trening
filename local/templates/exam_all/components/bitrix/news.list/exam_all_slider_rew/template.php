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
<div class="item-wrap">
	<div class="rew-footer-carousel">
<?/*if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;*/?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="item">
	<div class="side-block side-opin">
	<div class="inner-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="title">
			<div class="photo-block">
				<?if($arItem["PREVIEW_PICTURE"] == NULL):?>
					<img
						border="0"
						src="<?=SITE_TEMPLATE_PATH?>/img/no_photo_left_block.jpg"
						alt="no_photo"
						title="no_photo"
						/>
				<?else:?>
					<?
					$file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>49, 'height'=>49), BX_RESIZE_IMAGE_PROPORTIONAL, true);
					$img_resize = '<img src="' . $file['src'] . '" width="' . $file['WIDTH'] . '" height="' . $file['HEIGHT'] . '" />';
					echo "$img_resize";
					?>
				<?endif;?>
			</div>
			<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
				<div class="name-block">
					<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
				</div>				
			<?endif;?>
			
			<?if(($arItem["PROPERTIES"]['POSITION']['VALUE']) and ($arItem["PROPERTIES"]['COMPANY']['VALUE'])):?>
				<div class="pos-block">
					<?echo ($arItem["PROPERTIES"]['POSITION']['VALUE'] . ", " . $arItem["PROPERTIES"]['COMPANY']['VALUE'])?>
				</div>
			<?endif;?>
		</div>

		<div class="text-block">
			<?if($arItem["PREVIEW_TEXT"]):?>
				<?echo $arItem["PREVIEW_TEXT"];?>
			<?endif?>
		</div>

		<?/*if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
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
</div>
<?endforeach;?>
<?/*if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;*/?>
</div>
</div>