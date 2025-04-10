<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?><main class="main">
<!-- Hero Section --><?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/templates/.default/include/main/hero.php"
	)
);?> 
		<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => "/local/templates/.default/include/main/featured-services.php"
	),
	false
);?><?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => "/local/templates/.default/include/main/about.php"
	),
	false
);?>
</main><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>