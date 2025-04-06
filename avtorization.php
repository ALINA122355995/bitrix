<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?>

	
<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth_form", 
	array(
		"FORGOT_PASSWORD_URL" => "/user/fargot.php",
		"PROFILE_URL" => "/user/profile.php",
		"REGISTER_URL" => "/user/registration.php",
		"SHOW_ERRORS" => "N",
		"COMPONENT_TEMPLATE" => "auth_form"
	),
	false
);?>
</div>
	
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>