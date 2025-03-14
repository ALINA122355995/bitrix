<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О сервисе");
?><br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"bread_crumbs",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?><br>
 <br>

			 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/oservice.php"
	)
);?>
		
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>