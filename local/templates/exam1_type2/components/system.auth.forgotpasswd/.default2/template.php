<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?

if (!empty($arParams["~AUTH_RESULT"]))
{
	ShowMessage($arParams["~AUTH_RESULT"]);
}

?>


	  <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
          <div class="card mb-3">
            <div class="card-body">

	  <form name="bform" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>" class="row g-3" novalidate>
	  <div class="pt-4 pb-2">
                <p class="small">Что-то пошло не так / Все ок  <!--AUTH_RESULT-->  </p>
              </div>
	  		<div class="pt-4 pb-2">
                  <p class="small">Если вы забыли пароль, введите логин или E-Mail.<br />Контрольная строка для смены пароля будет выслана вам по E-Mail.</p>
                </div>
<?
if ($arResult["BACKURL"] <> '')
{
?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?
}
?>
	<input type="hidden" name="AUTH_FORM" value="Y">
	<input type="hidden" name="TYPE" value="SEND_PWD">

	<p><?echo GetMessage("sys_forgot_pass_label")?></p>

    			<div class="col-12">
                  <label for="yourUsername" class="form-label"><?=GetMessage("sys_forgot_pass_login1")?>/label>
                  <input id="yourUsername" class="form-control" type="text" name="USER_LOGIN" maxlength="50" value="" />
                </div>
      
                <div class="col-12">
                  <label for="yourEmail" class="form-label"><?echo GetMessage("sys_forgot_pass_note_email")?></label>
                  <input id="yourEmail" class="form-control" type="text" name="USER_EMAIL" maxlength="255" value="" />
                </div>




<?if($arResult["USE_CAPTCHA"]):?>
	<!-- IF USED CAPTCHA -->
<div class="col-12">
                  <label class="form-label"><?=$arResult["CAPTCHA_CODE"]?>
                  </label>
                  <div class="input-group has-validation">
                    <input required class="form-control" type="text" name="captcha_word" maxlength="50"  />
                    <div class="invalid-feedback"><?echo GetMessage("system_auth_captcha")?></div>
                  </div>
                </div>
                <div class="col-12">
                  <input type="hidden" name="captcha_sid" value="" /> <!-- CAPTCHA_CODE -->
                  <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /> <!-- IMG CAPTCHA_CODE -->
                </div>
                <!-- END CAPTCHA -->
<?endif?>





<div class="col-12">
                  <button 
                    class="btn btn-primary w-100" type="submit" name="send_account_info"><?=GetMessage("AUTH_SEND")?>
                  </button>
                </div>
      
                <div class="col-12">
                  <p class="small mb-0">
                    <b><a href="<?=$arResult["AUTH_AUTH_URL"]?>"><?=GetMessage("Go_back_to_authorization")?></a></b>
                  </p>
                </div>

<script>
document.bform.onsubmit = function(){document.bform.USER_EMAIL.value = document.bform.USER_LOGIN.value;};
document.bform.USER_LOGIN.focus();
</script>
</form>
</div></div></div></div>