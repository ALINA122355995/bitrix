<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?>

	
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
	
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>