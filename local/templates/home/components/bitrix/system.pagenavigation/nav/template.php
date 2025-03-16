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

if ($arResult["NavShowAlways"] && ($arResult["NavRecordCount"] == 0 || $arResult["NavPageCount"] == 1) && !$arResult["NavShowAll"]) {
    return;
}


$strNavQueryString = $arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "";
$strNavQueryStringFull = $arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "";
?>

    <div class="col-md-12 text-center">
        <div class="site-pagination">
          
            <?php if ($arResult["nStartPage"] > 1): ?>
                <a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>" 
                   class="<?=($arResult["NavPageNomer"] == 1) ? 'active' : ''?>">
                    1
                </a>
                <?php if ($arResult["nStartPage"] > 2): ?>
                    <span>...</span>
                <?php endif; ?>
            <?php endif; ?>

          
            <?php while ($arResult["nStartPage"] <= $arResult["nEndPage"]): ?>
                <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>" 
                   class="<?=($arResult["nStartPage"] == $arResult["NavPageNomer"]) ? 'active' : ''?>">
                    <?=$arResult["nStartPage"]?>
                </a>
                <?php $arResult["nStartPage"]++; ?>
            <?php endwhile; ?>

            
            <?php if ($arResult["nEndPage"] < $arResult["NavPageCount"]): ?>
                <?php if ($arResult["nEndPage"] < $arResult["NavPageCount"] - 1): ?>
                    <span>...</span>
                <?php endif; ?>
                <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>" 
                   class="<?=($arResult["NavPageNomer"] == $arResult["NavPageCount"]) ? 'active' : ''?>">
                    <?=$arResult["NavPageCount"]?>
                </a>
            <?php endif; ?>
        </div>
    </div>