<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?$APPLICATION->ShowTitle()?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/local/templates/exam1_type2/assets/img/favicon.png" rel="icon">

  
  <!-- Template Main CSS File -->
  <link href="/local/templates/exam1_type2/assets/css/style.css" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <?php
	
  use Bitrix\Main\Page\Asset;
  $asset = Asset::getInstance();
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/vendor/bootstrap/css/bootstrap.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/vendor/bootstrap-icons/bootstrap-icons.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/main.css");
?>
    <div><?$APPLICATION->ShowHead();?><div>
</head>

<body> 
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/s2/statistic_na/dashbord/index.php" class="logo d-flex align-items-center">
        <img src="/local/templates/exam1_type2/assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Статистика</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">
      <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auch_forma", 
	array(
		"FORGOT_PASSWORD_URL" => "/s2/user/fargot.php",
		"PROFILE_URL" => "/s2/user/profile.php",
		"REGISTER_URL" => "/s2/user/registration.php",
		"SHOW_ERRORS" => "Y",
		"COMPONENT_TEMPLATE" => "auch_forma"
	),
	false
);?>
	      
        <?$APPLICATION->IncludeComponent(
        "bitrix:menu", 
        "catalog_vertical1", 
        array(
          "ALLOW_MULTI_SELECT" => "Y",
          "CHILD_MENU_TYPE" => "left",
          "DELAY" => "N",
          "MAX_LEVEL" => "2",
          "MENU_CACHE_GET_VARS" => array(
          ),
          "MENU_CACHE_TIME" => "3600",
          "MENU_CACHE_TYPE" => "A",
          "MENU_CACHE_USE_GROUPS" => "Y",
          "ROOT_MENU_TYPE" => "left",
          "USE_EXT" => "N",
          "COMPONENT_TEMPLATE" => "catalog_vertical1",
          "MENU_THEME" => "site"
        ),
        false
      );?>
   </ul></nav>
   <!-- End Header -->
   </header>

 
