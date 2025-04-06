<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title><?$APPLICATION->ShowTitle()?></title>
	<meta name="description" content="">
	<meta name="keywords" content="">

	<!-- Favicons -->
	<link href="local/templates/exam1_type1_dev/assets/assets/img/favicon.png" rel="icon">
	<link href="local/templates/exam1_type1_dev/assets/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <?php
use Bitrix\Main\Page\Asset;
$asset = Asset::getInstance();
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/vendor/bootstrap/css/bootstrap.min.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/vendor/bootstrap-icons/bootstrap-icons.css");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/vendor/aos/aos.css");

	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/main.css");
    ?>
    <div><?$APPLICATION->ShowHead();?><div>
</head>
<body class="scrolled">
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<header id="header" class="header d-flex align-items-center">
		<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

			<a href="#" class="logo d-flex align-items-center">
				<h1 class="sitename">Компания</h1>
			</a>
	
			<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_menu", 
	array(
		"ALLOW_MULTI_SELECT" => "Y",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "top_menu"
	),
	false
);?>
</div>
	</header>
