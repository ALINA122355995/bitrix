<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
?><?$APPLICATION->IncludeComponent(
	"mcart:mcart.iblockelement.like", 
	".default", 
	array(
		"CACHE_TIME" => "86400",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"ELEMENT_ID" => "",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "news"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>