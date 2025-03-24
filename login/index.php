<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");

if (is_string($_REQUEST["backurl"]) && mb_strpos($_REQUEST["backurl"], "/") === 0)
{
  LocalRedirect($_REQUEST["backurl"]);
}?>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><?$APPLICATION->IncludeComponent(
  "bitrix:main.register", 
  "REGISTR", 
  array(
    "AUTH" => "Y",
    "REQUIRED_FIELDS" => array(
    ),
    "SET_TITLE" => "Y",
    "SHOW_FIELDS" => array(
    ),
    "SUCCESS_PAGE" => "",
    "USER_PROPERTY" => array(
      0 => "UF_TIPE",
    ),
    "USER_PROPERTY_NAME" => "",
    "USE_BACKURL" => "Y",
    "COMPONENT_TEMPLATE" => "REGISTR"
  ),
  false
);?>

<?$APPLICATION->IncludeComponent(
  "bitrix:system.auth.form", 
  "auch", 
  array(
    "COMPONENT_TEMPLATE" => "auch",
    "FORGOT_PASSWORD_URL" => "/local/templates/home/user/",
    "PROFILE_URL" => "/local/templates/home/user/profile.php",
    "REGISTER_URL" => "/local/templates/home/user/registration.php",
    "SHOW_ERRORS" => "N"
  ),
  false
);?>  

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>