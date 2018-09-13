<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<nav class="nav">
	<div class="inner-wrap">
	    <div class="menu-block popup-wrap">
	        <a href="" class="btn-menu btn-toggle"></a>
	        <div class="menu popup-block">
	            <ul class="">
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li><a <?if(isset($arItem["PARAMS"]['TEXT_COLOR'])):?>class="color-<?=$arItem["PARAMS"]['TEXT_COLOR']?>"<?endif?> href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				<ul>
					<?if(isset($arItem["PARAMS"]["TEXT_MENU"])):?><div class="menu-text"><?=$arItem["PARAMS"]["TEXT_MENU"]?></div><?endif?>
		<?else:?>
			<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				<ul>
					<?if(isset($arItem["PARAMS"]["TEXT_MENU"])):?><div class="menu-text"><?=$arItem["PARAMS"]["TEXT_MENU"]?></div><?endif?>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li <?if($arItem["PARAMS"]['MAIN']):?>class="main-page"<?endif?>><a <?if(isset($arItem["PARAMS"]['TEXT_COLOR'])):?>class="color-<?=$arItem["PARAMS"]['TEXT_COLOR']?>"<?endif?> href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?/*else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif*/?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

				</ul>
                <a href="" class="btn-close"></a>
            </div>
            <div class="menu-overlay"></div>
        </div>
    </div>
</nav>
<?endif?>