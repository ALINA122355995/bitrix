<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Агенты");
?><?$APPLICATION->IncludeComponent(
	"mcart_new:agents.list", 
	".default", 
	array(
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"HLBLOCK_TNAME" => "Агенты по недвижимост",
		"PAGE_SIZE" => "10",
		"COMPONENT_TEMPLATE" => ".default"
	),
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>