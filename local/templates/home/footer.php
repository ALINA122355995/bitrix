<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="mb-5">
		  <h3 class="footer-heading mb-4"><?=GetMessage('About HomeSpace')?></h3>
            <?$APPLICATION->IncludeComponent(
	             "bitrix:main.include", 
	             ".default", 
	             array(
	             	"AREA_FILE_SHOW" => "file",
	             	"AREA_FILE_SUFFIX" => "inc",
	             	"EDIT_TEMPLATE" => "",
	             	"COMPONENT_TEMPLATE" => ".default",
	             	"PATH" => "/include/about_homespace.php"
	             ),
	             false
             );?>
          </div>
        </div>

        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="row mb-5">
            <div class="col-md-12">
              <h3 class="footer-heading mb-4"><?=GetMessage('Navigations')?></h3>
            </div>
        <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", Array(
	      "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
	    	"CHILD_MENU_TYPE" => "",	// Тип меню для остальных уровней
	    	"DELAY" => "N",	// Откладывать выполнение шаблона меню
	    	"MAX_LEVEL" => "1",	// Уровень вложенности меню
	    	"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
		    	0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
</div> 
</div>

        

        <div class="col-lg-4 mb-5 mb-lg-0">
		<h3 class="footer-heading mb-4"><?=GetMessage('Follow Us')?></h3>
        <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => "/include/follow_us.php"
	),
	false
);?>
 </div></div>

      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
        <?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => "/include/date.php"
	),
	false
);?>
        </div>

      </div>
    </div>
  </footer>

  </div>
  </div>
 <?php
use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.3.1.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-migrate-3.0.1.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-ui.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/popper.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/mediaelement-and-player.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.stellar.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.countdown.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.magnific-popup.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/bootstrap-datepicker.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/aos.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");
?>

</body>

</html>