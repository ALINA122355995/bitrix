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
 *
 *  _________________________________________________________________________
 * |	Attention!
 * |	The following comments are for system use
 * |	and are required for the component to work correctly in ajax mode:
 * |	<!-- items-container -->
 * |	<!-- pagination-container -->
 * |	<!-- component-end -->
 */

echo '<pre>';
print_r($arResult);
echo '</pre>';
$this->setFrameMode(true);

	?>
<main class="main">
<section class="portfolio section">
<div class="container">
<div class="row gy-4">
			<div class="col-lg-4">
			<?foreach($arResult["ITEMS"] as $arItem):?>
						<article>
						
							<div class="post-img">
								<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" class="img-fluid">
							</div>
							<div class="card-body">
								<h5 class="title"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h5>
								<p class="card-text"><?=$arItem["PREVIEW_TEXT"]?></p>
							</div>
							
						</article>
						<?endforeach;?>
					</div><!-- End list item -->
						
</div>
</div>
	</section>
			</main>



		<!-- items-container -->
	