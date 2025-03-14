<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"bread_crumbs", 
	array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "bread_crumbs"
	),
	false
);?><br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"kontakt",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPONENT_TEMPLATE" => "kontakt",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/templates/home/components/bitrix/main.include/kontakt/template.php"
	)
);?><br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>