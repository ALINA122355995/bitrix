<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

	<div class="col-md-6 col-lg-6">

<ul class="list-unstyled">

		  <?$previousLevel = 0;foreach($arResult as $arItem):?>
  
  <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
    <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
  <?endif?>
  
  <?if ($arItem["IS_PARENT"]):?>
    <li> <?if($arItem["SELECTED"]):?>active<?endif?>">
                  <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
	</li>			
  
  <?else:?>
	</div> 
	</ul>
	<div class="col-md-6 col-lg-6">
	<ul class="list-unstyled">
    <?if ($arItem["PERMISSION"] > "D"):?>
      <li <?if ($arItem["SELECTED"]): ?>class="active"<?endif?>>
        
                  <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                </li>

    <?endif?>

  <?endif?>

  <?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1):?>
  <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
</div>   

<?endif?>










