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
 <div class="site-blocks-cover overlay" style="background-image: url(/local/templates/home/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
		<?foreach($arResult["ITEMS"] as $arItem):?>
          <div class="col-md-10">
            <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">Property Details of</span>
            <h1 class="mb-2"><?=$arItem["NAME"]?></h1>
            <p class="mb-5"><strong class="h2 text-success font-weight-bold"><?=$arItem["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?></strong></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8" style="margin-top: -150px;">
            <div class="mb-5">
              <div class="slide-one-item home-slider owl-carousel">
                <div><img src="<?=$arItem["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?>" alt="Image" class="img-fluid"></div>
               
              </div>
            </div>
            <div class="bg-white">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3">$1,000,500</strong>
                </div>
                <div class="col-md-6">
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">2 <sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">2</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">7,000</span>
                    
                  </li>
                </ul>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Home Type</span>
                  <strong class="d-block">Condo</strong>
                </div>
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Year Built</span>
                  <strong class="d-block">2018</strong>
                </div>
                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Price/Sqft</span>
                  <strong class="d-block">$520</strong>
                </div>
              </div>
              <h2 class="h4 text-black">More Info</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.</p>
              <p>Nisi voluptatum error ipsum repudiandae, autem deleniti, velit dolorem enim quaerat rerum incidunt sed, qui ducimus! Tempora architecto non, eligendi vitae dolorem laudantium dolore blanditiis assumenda in eos hic unde.</p>
              <p>Voluptatum debitis cupiditate vero tempora error fugit aspernatur sint veniam laboriosam eaque eum, et hic odio quibusdam molestias corporis dicta! Beatae id magni, laudantium nulla iure ea sunt aliquam.</p>

              <div class="row mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3">Property Gallery</h2>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="images/img_1.jpg" class="image-popup gal-item"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="images/img_2.jpg" class="image-popup gal-item"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="images/img_3.jpg" class="image-popup gal-item"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="images/img_4.jpg" class="image-popup gal-item"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="images/img_5.jpg" class="image-popup gal-item"><img src="images/img_5.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="images/img_6.jpg" class="image-popup gal-item"><img src="images/img_6.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="images/img_7.jpg" class="image-popup gal-item"><img src="images/img_7.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="images/img_8.jpg" class="image-popup gal-item"><img src="images/img_8.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="images/img_1.jpg" class="image-popup gal-item"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="images/img_2.jpg" class="image-popup gal-item"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="images/img_3.jpg" class="image-popup gal-item"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="images/img_4.jpg" class="image-popup gal-item"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 pl-md-5">

            <div class="bg-white widget border rounded">

              <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
              <form action="" class="form-contact-agent">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" id="phone" class="form-control">
                </div>
                <div class="form-group">
                  <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                </div>
              </form>
            </div>

            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
            </div>

          </div>
          <?endforeach;?>
        </div>
      </div>
    </div>


<div class="news-detail">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3><?=$arResult["NAME"]?></h3>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && ($arResult["FIELDS"]["PREVIEW_TEXT"] ?? '')):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif($arResult["DETAIL_TEXT"] <> ''):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
	<br />
	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach;
	foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

		<?=$arProperty["NAME"]?>:&nbsp;
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>
		<br />
	<?endforeach;
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	?>
</div>
