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


<main id="main" class="main">

    <div class="pagetitle mb-4">
      <h1><?=GetMessage("Data")?></h1>
    </div><!-- End Page Title -->

    <section class="section">

      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
			
              <div class="d-flex py-4 px-4">
				
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th><?=GetMessage("NOMER")?></th>
                      <th><?=GetMessage("PRODUCT")?></th>
                      <th><?=GetMessage("PRODUCT_CATEGORY")?></th>
                      <th><?=GetMessage("CITY")?></th>
                      <th><?=GetMessage("QUANTITY")?></th>
                    </tr>
                  </thead>
                  <tbody>
				  <?foreach($arResult["ITEMS"] as $arItem):?>
                    <tr>
					
                      <td><?=$arItem["ID"]?></td>
                      <td><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["PROPERTIES"]["PRODUCT"]["VALUE"]?></a></td>
                      <td><?=$arItem["PROPERTIES"]["PRODUCT_CATEGORY"]["VALUE"]?></td>
                      <td><?=$arItem["PROPERTIES"]["CITY"]["VALUE"]?></td>
                      <td><?=$arItem["PROPERTIES"]["QUANTITY"]["VALUE"]?></td>
					 
                  </tr>
				  <?endforeach;?>
                  </tbody>
                </table>
              </div>
              <div class="d-flex py-2 px-4 flex-column">
                  <!--Pagination here-->
              </div>

            </div>
          </div>

        </div>
      </div>
 

    </section>

  </main><!-- End #main -->
