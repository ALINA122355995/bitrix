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
		
          <div class="col-md-10">
            <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded"><?=GetMessage('Property Details of')?></span>
            <h1 class="mb-2"><?=$arResult["NAME"]?></h1>
            <p class="mb-5"><strong class="h2 text-success font-weight-bold"><?=$arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?></strong></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8" style="margin-top: -150px;">
            <div class="mb-5">
            <?if($arResult['DISPLAY_PROPERTIES']['GALLERY_IMAGES']['VALUE']):?>
              <div class="slide-one-item home-slider owl-carousel">
                <?if(count($arResult['DISPLAY_PROPERTIES']['GALLERY_IMAGES']['VALUE'])==1):?>
                  <div> <img src="<?=$arResult['DISPLAY_PROPERTIES']['GALLERY_IMAGES']['FILE_VALUE']['SRC']?>"></div>
                
                  <?else:?>
                    <?foreach($arResult['DISPLAY_PROPERTIES']['GALLERY_IMAGES']['FILE_VALUE'] as $arItem):?>   
                <div><img src="<?=$arItem['SRC']?>" alt="Image" class="img-fluid"></div>
                <?endforeach;?>
                <?endif?> 
             
                
              </div>
              <?endif?> 
            </div>
            <div class="bg-white">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3"><?=$arResult["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?></strong>
                </div>
                <div class="col-md-6">
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                  <li>
                    <span class="property-specs"><?=$arResult["DISPLAY_PROPERTIES"]["BEDS"]["NAME"]?></span>
                    <span class="property-specs-number"><?=$arResult["DISPLAY_PROPERTIES"]["BEDS"]["VALUE"]?><sup>+</sup></span>
                    
                  </li>
                  
                  <li>
                    <span class="property-specs"><?=$arResult["DISPLAY_PROPERTIES"]["BATHROOMS"]["NAME"]?></span>
                    <span class="property-specs-number"><?=$arResult["DISPLAY_PROPERTIES"]["BATHROOMS"]["VALUE"]?></span>
                    
                  </li>
                  <li>
                    <span class="property-specs"><?=$arResult["DISPLAY_PROPERTIES"]["FLOORS"]["NAME"]?></span>
                    <span class="property-specs-number"><?=$arResult["DISPLAY_PROPERTIES"]["FLOORS"]["VALUE"]?><sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs"><?=GetMessage('SQ FT')?></span>
                    <span class="property-specs-number"><?=GetMessage('7,000')?></span>
                    
                  </li>
                </ul>
                </div>
              </div>  
              <div class="row mb-5">
                <div class="col-md-6 col-lg text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text"><?=GetMessage('Home Type')?></span>
                  <strong class="d-block"><?=GetMessage('Condo')?></strong>
                </div>
                              
                <div class="col-md-6 col-lg text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text"><?=$arResult["DISPLAY_PROPERTIES"]["YEAR_OF_CONSTRUCTIONS"]["NAME"]?></span>
                  <strong class="d-block"><?=$arResult["DISPLAY_PROPERTIES"]["YEAR_OF_CONSTRUCTIONS"]["VALUE"]?></strong>
                </div>
                <div class="col-md-6 col-lg text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text"><?=$arResult["DISPLAY_PROPERTIES"]["PRICE_SQFT"]["NAME"]?></span>
                  <strong class="d-block"><?=GetMessage('$')?><?=$arResult["DISPLAY_PROPERTIES"]["PRICE_SQFT"]["VALUE"]?></strong>
                </div>
                <div class="col-md-6 col-lg text-left border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text"><?=GetMessage('Date of update')?></span>
                  <strong class="d-block"><?=$arResult["TIMESTAMP_X"]?></strong>
                </div>
              </div>
              <h2 class="h4 text-black"> <?=GetMessage('More Info')?></h2>
              <?=$arResult["DETAIL_TEXT"]?>
                        
              
              <?if($arResult['DISPLAY_PROPERTIES']['GALLERY_IMAGES']['VALUE']):?>
                <div class="row mt-5">
                <div class="col-12">
               <h2 class="h4 text-black mb-3"><?=$arResult["DISPLAY_PROPERTIES"]["GALLERY_IMAGES"]["NAME"]?></h2>
                </div>
               <?if(count($arResult['DISPLAY_PROPERTIES']['GALLERY_IMAGES']['VALUE'])==1):?>
               <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
              <a href="<?=$arResult['DISPLAY_PROPERTIES']['GALLERY_IMAGES']['FILE_VALUE']['SRC']?>" class="image-popup gal-item"><img src="<?=$arResult['DISPLAY_PROPERTIES']['GALLERY_IMAGES']['FILE_VALUE']['SRC']?>" alt="Image" class="img-fluid"></a>
</div>
               <?else:?>
                    <?foreach($arResult['DISPLAY_PROPERTIES']['GALLERY_IMAGES']['FILE_VALUE'] as $arItem):?>   
                      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="<?=$arItem['SRC']?>" class="image-popup gal-item"><img src="<?=$arItem['SRC']?>" alt="Image" class="img-fluid"></a>
                </div>
             
                <?endforeach;?>
                <?endif?> 
            
                </div>
                <?endif?>
                <?=$arResult["DISPLAY_PROPERTIES"]["EXTERNAL_LINKS"]["NAME"]?><br/>
                <?=$arResult['DISPLAY_PROPERTIES']['EXTERNAL_LINKS']['DISPLAY_VALUE']?><br/>
                <?if($arResult['DISPLAY_PROPERTIES']['ADDITIONAL_FILES']['VALUE']):?>
                <div class="row mt-5">
                <div class="col-12">
               <h2 class="h4 text-black mb-3"><?=$arResult["DISPLAY_PROPERTIES"]["ADDITIONAL_FILES"]["NAME"]?></h2>
                </div>
                <?if(count($arResult['DISPLAY_PROPERTIES']['ADDITIONAL_FILES']['VALUE'])==1):?>
               <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
              <a href="<?=$arResult['DISPLAY_PROPERTIES']['ADDITIONAL_FILES']['FILE_VALUE']['SRC']?>" class="image-popup gal-item"><img src="<?=$arResult['DISPLAY_PROPERTIES']['ADDITIONAL_FILES']['FILE_VALUE']['SRC']?>" alt="Image" class="img-fluid"></a>
</div>
               <?else:?>
                    <?foreach($arResult['DISPLAY_PROPERTIES']['ADDITIONAL_FILES']['FILE_VALUE'] as $arItem):?>   
                      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="<?=$arItem['SRC']?>" class="image-popup gal-item"><img src="<?=$arItem['SRC']?>" alt="Image" class="img-fluid"></a>
                </div>
             
                <?endforeach;?>
                <?endif?> 
            
                </div>
                <?endif?>
            
                
                </div>
               </div>
              
       
               
               
                           
     
      
            <div class="col-lg-4 pl-md-5">

            <div class="bg-white widget border rounded">

              <h3 class="h4 text-black widget-title mb-3"><?=GetMessage('Contact Agent')?></h3>
              <form action="" class="form-contact-agent">
                <div class="form-group">
                  <label for="name"><?=GetMessage('Name')?></label>
                  <input type="text" id="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email"><?=GetMessage('Email')?></label>
                  <input type="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="phone"><?=GetMessage('Phone')?></label>
                  <input type="text" id="phone" class="form-control">
                </div>
                <div class="form-group">
                  <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                </div>
              </form>
            </div>

            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3"><?=GetMessage('Paragraph')?></h3>
              <?=$arResult["PREVIEW_TEXT"]?>
            </div>

          </div>
        
        </div>
      </div>
    </div>


    