<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?if (!empty($arResult)):?>
<div class="col-4 col-md-4 col-lg-8" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
     <nav class="site-navigation text-right text-md-right" role="navigation">

              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                  class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

              <ul class="site-menu js-clone-nav d-none d-lg-block">
        
<?$previousLevel = 0;foreach($arResult as $arItem):?>
  
  <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
    <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
  <?endif?>
  
  <?if ($arItem["IS_PARENT"]):?>
    <li class="has-children <?if($arItem["SELECTED"]):?>active<?endif?>">
                  <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                 <ul class="dropdown">
  
  <?else:?>

    <?if ($arItem["PERMISSION"] > "D"):?>
      <li <?if ($arItem["SELECTED"]): ?>class="active"<?endif?>>
        
                  <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                </li>

    <?endif?>

  <?endif?>

  <?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>
</ul>
<?if ($previousLevel > 1):?>
  <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
    </nav>
  
</div>
<?endif?>