<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Забыли пароль");
?>
   
<?$APPLICATION->IncludeComponent("bitrix:main.auth.forgotpasswd", "fargot", Array(
	"AUTH_AUTH_URL" => "/avtorizatsiya.php",	// Страница для авторизации
		"AUTH_REGISTER_URL" => "/local/templates/home/user/registration.php",	// Страница для регистрации
	),
	false
);?>
  
	<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>