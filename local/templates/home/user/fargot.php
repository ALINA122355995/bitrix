<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Забыли пароль");
?>
    <div class="site-section">
      <div class="container">
        <div class="row">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.forgotpasswd",
	"forgot_pas",
	Array(
		"AUTH_AUTH_URL" => "/avtorizatsiya.php",
		"AUTH_REGISTER_URL" => "/local/templates/home/user/registration.php"
	)
);?>
  </div>
      </div>
    </div>
	<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>