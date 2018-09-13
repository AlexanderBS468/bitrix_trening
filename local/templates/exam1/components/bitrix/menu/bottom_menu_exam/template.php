<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<div class="item">
	<div class="title-block"><?=GetMessage("T_BOTTOM_EXAM_MENU_TITLE")?></div>
		<ul>
		<?
		foreach($arResult as $arItem):
			if($arItem["DEPTH_LEVEL"] > 1) 
				continue;
		?>
			<?if ($arItem["PERMISSION"] > "D"):?>
				<?if($arItem["SELECTED"]):?>
					<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
				<?else:?>
					<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
				<?endif?>
			<?endif?>
			
		<?endforeach?>
	</ul>
</div> 
<?endif?>
				
				
