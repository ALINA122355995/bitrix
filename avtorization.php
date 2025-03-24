<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?>

	
<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth_form", 
	array(
		"FORGOT_PASSWORD_URL" => "/local/templates/home/user/fargot.php",
		"PROFILE_URL" => "/local/templates/home/user/profile.php",
		"REGISTER_URL" => "/local/templates/home/user/registration.php",
		"SHOW_ERRORS" => "N",
		"COMPONENT_TEMPLATE" => "auth_form"
	),
	false
);?>
</div>
	
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>