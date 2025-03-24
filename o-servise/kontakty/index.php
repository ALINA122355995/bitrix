<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><br>
 <br>
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