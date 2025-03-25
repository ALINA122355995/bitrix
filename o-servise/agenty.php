<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Агенты");
?><?$APPLICATION->IncludeComponent(
	"mcart_new:agents.list", 
	"agents", 
	array(
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"HLBLOCK_TNAME" => "estate_agents",
		"PAGE_SIZE" => "2",
		"COMPONENT_TEMPLATE" => "agents"
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>