<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult["ALL_ITEMS"]))
	return;

if (file_exists($_SERVER["DOCUMENT_ROOT"].$this->GetFolder().'/themes/'.$arParams["MENU_THEME"].'/colors.css'))
	$APPLICATION->SetAdditionalCSS($this->GetFolder().'/themes/'.$arParams["MENU_THEME"].'/colors.css');

CJSCore::Init();

$menuBlockId = "catalog_menu_".$this->randString();
?>
 <aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">

  <?foreach($arResult["MENU_STRUCTURE"] as $itemID => $arColumns):?> <!-- first level -->

    <?php
      $item = $arResult["ALL_ITEMS"][$itemID];
      $hasChildren = is_array($arColumns) && !empty($arColumns);

      $text = mb_strtolower($item["TEXT"]);
      switch ($text) {
        case 'дашборд': $icon = 'bi-grid'; break;
        case 'основные': $icon = 'bi-menu-button-wide'; break;
        case 'дополнительные': $icon = 'bi-files'; break;
        case 'пример раздела': $icon = 'bi-layout-text-window-reverse'; break;
        case 'профиль': $icon = 'bi-person'; break;
        case 'пустая страница': $icon = 'bi-file-earmark'; break;
        default: $icon = 'bi-circle'; break;
      }
    ?>

    <li class="nav-item">
      <?if ($hasChildren):?>
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#menu-<?=$itemID?>" role="button" aria-expanded="false">
          <i class="bi <?=$icon?>"></i><span><?=$item["TEXT"]?></span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul class="nav-content collapse" id="menu-<?=$itemID?>" data-bs-parent="#sidebar-nav">
      <?else:?>
        <a class="nav-link" href="<?=$item["LINK"]?>">
          <i class="bi <?=$icon?>"></i><span><?=$item["TEXT"]?></span>
        </a>
      <?endif?>
    </li>

    <?if ($hasChildren):?>
      <?foreach($arColumns as $key => $arRow):?>
        <?foreach($arRow as $itemIdLevel_2 => $arLevel_3):?>
          <li>
            <a class="nav-link" href="<?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["LINK"]?>">
              <i class="bi bi-circle"></i><span><?=$arResult["ALL_ITEMS"][$itemIdLevel_2]["TEXT"]?></span>
            </a>
          </li>

          <?if (is_array($arLevel_3) && !empty($arLevel_3)):?>
            <ul class="nav-content collapse show" style="padding-left: 20px;">
              <?foreach($arLevel_3 as $itemIdLevel_3):?>
                <li>
                  <a href="<?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["LINK"]?>">
                    <i class="bi bi-circle"></i>
                    <?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["TEXT"]?>
                  </a>
                  <?if ($arResult["ALL_ITEMS"][$itemIdLevel_3]["PARAMS"]["description"]):?>
                    <span><?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["PARAMS"]["description"]?></span>
                  <?endif;?>
                  <?if ($arResult["ALL_ITEMS"][$itemIdLevel_3]["PARAMS"]["picture_src"]):?>
                    <span><img src="<?=$arResult["ALL_ITEMS"][$itemIdLevel_3]["PARAMS"]["picture_src"]?>" alt=""></span>
                  <?endif;?>
                </li>
              <?endforeach;?>
            </ul>
          <?endif;?>

        <?endforeach;?>
      <?endforeach;?>
      </ul>
    <?endif;?>

  <?endforeach;?>
  </ul>
</aside>
