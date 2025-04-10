<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();
?>

<!-- AUTH FORM -->
<?
if ($arResult['SHOW_ERRORS'] === 'Y' && $arResult['ERROR'] && !empty($arResult['ERROR_MESSAGE']))
{
	ShowMessage($arResult['ERROR_MESSAGE']);
}
?>
<?if($arResult["FORM_TYPE"] == "login"):?>
<div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
          <div class="card mb-3">
            <div class="card-body">
			<div class="pt-4 pb-2">
                <p class="text-center small">Пожалуйста, авторизуйтесь:</p>
            </div>
	<form class="row g-3 needs-validation" novalidate name="form_auth" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">

<?if($arResult["BACKURL"] <> ''):?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?endif?>
<?foreach ($arResult["POST"] as $key => $value):?>
	<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
<?endforeach?>
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="AUTH" />
	

	<div class="col-12">
              <label for="yourUsername" class="form-label"><?=GetMessage("AUTH_LOGIN")?>:<br /></label>
                <div class="input-group has-validation">
                  <input type="text" class="form-control" id="yourUsername" required name="USER_LOGIN" maxlength="255" value="">
                  <div class="invalid-feedback">Укажите логин!</div>
               
				<script>
				BX.ready(function() {
					var loginCookie = BX.getCookie("<?=CUtil::JSEscape($arResult["~LOGIN_COOKIE_NAME"])?>");
					if (loginCookie)
					{
						var form = document.forms["system_auth_form<?=$arResult["RND"]?>"];
						var loginInput = form.elements["USER_LOGIN"];
						loginInput.value = loginCookie;
					}
				});
			</script>
			 </div>
			 </div>
			  <div class="col-12">
			  <label for="yourPassword" class="form-label"><?=GetMessage("AUTH_PASSWORD")?>:<br /></label>
			  <input class="form-control" id="yourPassword" required type="password" name="USER_PASSWORD" maxlength="255" autocomplete="off">
			  <div class="invalid-feedback">Укажите пароль!</div>
<?if($arResult["SECURE_AUTH"]):?>
				<span class="bx-auth-secure" id="bx_auth_secure<?=$arResult["RND"]?>" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
					<div class="bx-auth-secure-icon"></div>
				</span>
				<noscript>
				<span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
					<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
				</span>
				</noscript>
<script>
document.getElementById('bx_auth_secure<?=$arResult["RND"]?>').style.display = 'inline-block';
</script>
<?endif?>
</div>
<?if ($arResult["STORE_PASSWORD"] == "Y"):?>

		<div class="col-12">
			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="USER_REMEMBER" name="USER_REMEMBER" value="Y" />
				<label for="USER_REMEMBER_frm" title="<?=GetMessage("AUTH_REMEMBER_ME")?>"><?echo GetMessage("AUTH_REMEMBER_SHORT")?></label>
			</div>
        </div>
<?endif?>
<?if ($arResult["CAPTCHA_CODE"]):?>
<!-- CAPTCHA -->
		<div class="col-12">
                <label class="form-label"><?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:<br /></label>
		<div class="input-group has-validation">	
			<input required class="form-control" type="text" name="captcha_word" maxlength="50" value="" />
			<div class="invalid-feedback">Заполните код</div>
			</div>
		</div>
		<div class="col-12">
			<input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
			<img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /><br /><br />
		</div>

<?endif?>
<!-- CAPTCHA -->
			<div class="col-12">
                <button class="btn btn-primary w-100" type="submit" name="Login"><?=GetMessage("AUTH_LOGIN_BUTTON")?></button>
            </div>
		<noindex>
              <div class="col-12">
                <p class="small mb-0">
				<?=GetMessage("AUTH_FORGOT_PASSWORD_2")?>
                  <a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" rel="nofollow">
				  <?=GetMessage("AUTH_FORGOT_PASSWORD_3")?>
                  </a>
                </p>
              </div>
        </noindex>
		</form>
	</div>
 </div>  
</div>
</div>


<?
elseif($arResult["FORM_TYPE"] == "otp"):
?>

<form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
<?if($arResult["BACKURL"] <> ''):?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?endif?>
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="OTP" />
	<table width="95%">
		<tr>
			<td colspan="2">
			<?echo GetMessage("auth_form_comp_otp")?><br />
			<input type="text" name="USER_OTP" maxlength="50" value="" size="17" autocomplete="off" /></td>
		</tr>
<?if ($arResult["CAPTCHA_CODE"]):?>
		<tr>
			<td colspan="2">
			<?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:<br />
			<input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
			<img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /><br /><br />
			<input type="text" name="captcha_word" maxlength="50" value="" /></td>
		</tr>
<?endif?>
<?if ($arResult["REMEMBER_OTP"] == "Y"):?>
		<tr>
			<td valign="top"><input type="checkbox" id="OTP_REMEMBER_frm" name="OTP_REMEMBER" value="Y" /></td>
			<td width="100%"><label for="OTP_REMEMBER_frm" title="<?echo GetMessage("auth_form_comp_otp_remember_title")?>"><?echo GetMessage("auth_form_comp_otp_remember")?></label></td>
		</tr>
<?endif?>
		<tr>
			<td colspan="2"><input type="submit" name="Login" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>" /></td>
		</tr>
		<tr>
			<td colspan="2"><noindex><a href="<?=$arResult["AUTH_LOGIN_URL"]?>" rel="nofollow"><?echo GetMessage("auth_form_comp_auth")?></a></noindex><br /></td>
		</tr>
	</table>
</form>

<?else:?>
 
     

<form action="<?=$arResult["AUTH_URL"]?>">
		<li class="nav-item dropdown pe-3">
				<a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
					<span class="d-none d-md-block dropdown-toggle ps-2"><?=$arResult["USER_LOGIN"]?></span>
				</a>
			
				<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
					<li class="dropdown-header">
						<h6><?=$arResult["USER_LOGIN"]?></h6>
					</li>
					<li><hr class="dropdown-divider"></li>
					<li>
					<a class="dropdown-item d-flex align-items-center" href="<?=$arResult["PROFILE_URL"]?>" title="<?=GetMessage("AUTH_PROFILE")?>"><i class="bi bi-person"><span></i><?=GetMessage("AUTH_PROFILE")?></span></a>
					</li>
					<li><hr class="dropdown-divider"></li>
					<li>
						
						<?foreach ($arResult["GET"] as $key => $value):?>
						<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
						<?endforeach?>
						<?=bitrix_sessid_post()?>
						<div class="col-12 mb-3 mt-3 d-flex justify-content-center">
							<input type="hidden" name="logout" value="yes" />
							<input class="btn btn-secondary btn-sm" type="submit" name="logout_butt" value="<?=GetMessage("AUTH_LOGOUT_BUTTON")?>" />
							
						</div>
					</li>
				</ul>
		</li>
	
</form>
<?endif?>
</div>
