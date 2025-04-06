<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();


/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */


$this->setFrameMode(true);
?>
 <section class="portfolio-details section">

<div class="container">

  <div class="row gy-4">
 
	<div class="col-lg-8">
	  <div class="portfolio-details-slider">
			<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
	  </div>
	</div>

	<div class="col-lg-4">
	  <div class="portfolio-info">
		<h3><?=GetMessage('PROJECT')?></h3>
		<ul>
		  <li><strong><?=GetMessage('SEVICES')?></strong>: <?=$arResult["SECTION"]["NAME"]?></li>
			   <li><strong><?=GetMessage('BRANCH')?></strong>: <?=$arResult["PROPERTIES"]["BUSINESS_SECTOR"]["VALUE"]?></li>
		  <li><strong><?=GetMessage('COMPANY')?></strong>: <?=$arResult["PROPERTIES"]["CLIENT_NAME"]["VALUE"]?></li>
		</ul>
	  </div>
	  <div class="portfolio-description">
		<h2><?=$arResult["NAME"]?></h2>
		<p><?=$arResult["DETAIL_TEXT"]?></p>         
	  </div>
	  <div>
		<a href="#"><b><?=GetMessage('TO_THE_LIST')?></b></a>
	  </div>

	</div>

  </div>

</div>

</section>
