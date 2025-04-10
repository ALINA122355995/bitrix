<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Присоединиться");
?>
<section class="content-page section">

<div class="container">
	<div class="row gy-5">

		<div class="col-lg-4">

<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"left_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "left_menu"
	),
	false
);?>
</div>

</div>

</div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>