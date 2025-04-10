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

				
					
<form action="/s2/search/" method="get">
<div class="search-form">
<input class="input-seach" type="text" name="q" />
<input class="button-seach" name="s" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>" /></a>
</div>
</form>
