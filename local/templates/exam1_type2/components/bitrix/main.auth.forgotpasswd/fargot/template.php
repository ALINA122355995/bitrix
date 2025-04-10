<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)
{
	die();
}

use \Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

\Bitrix\Main\Page\Asset::getInstance()->addCss(
	'/bitrix/css/main/system.auth/flat/style.css'
);

if ($arResult['AUTHORIZED'])
{
	echo Loc::getMessage('MAIN_AUTH_PWD_SUCCESS');
	return;
}
?>

<div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
          <div class="card mb-3">
            <div class="card-body">
      
              <!--IF AUTH_RESULT-->
              <div class="pt-4 pb-2">
                <p class="small">Что-то пошло не так / Все ок  <!--AUTH_RESULT-->  </p>
              </div>
              <!--END AUTH_RESULT-->
          
              <form  
                name="bform" method="post" target="_top" action="#" class="row g-3" novalidate
              >
      
                <div class="pt-4 pb-2">
                  <p class="small">Если вы забыли пароль, введите логин или E-Mail.<br />Контрольная строка для смены пароля будет выслана вам по E-Mail.</p>
                </div>
      
                <div class="col-12">
                  <label for="yourUsername" class="form-label">Логин</label>
                  <input id="yourUsername" class="form-control" type="text" name="USER_LOGIN" maxlength="50" value="" />
                </div>
      
                <div class="col-12">
                  <label for="yourEmail" class="form-label">E-Mail</label>
                  <input id="yourEmail" class="form-control" type="text" name="USER_EMAIL" maxlength="255" value="" />
                </div>
      
                <!-- IF USED CAPTCHA -->
                <div class="col-12">
                  <label class="form-label">Код на картинке
                  </label>
                  <div class="input-group has-validation">
                    <input required class="form-control" type="text" name="captcha_word" maxlength="50"  />
                    <div class="invalid-feedback">Заполните код</div>
                  </div>
                </div>
                <div class="col-12">
                  <input type="hidden" name="captcha_sid" value="" /> <!-- CAPTCHA_CODE -->
                  <img src="" width="180" height="40" alt="CAPTCHA" /> <!-- IMG CAPTCHA_CODE -->
                </div>
                <!-- END CAPTCHA -->
      
      
                <div class="col-12">
                  <button 
                    class="btn btn-primary w-100" type="submit" name="send_account_info">Выслать
                  </button>
                </div>
      
                <div class="col-12">
                  <p class="small mb-0">
                    <b><a href="#">Вернуться к авторизации</a></b>
                  </p>
                </div>
      
              </form>
      
  
            </div>
          </div>
          
        </div>
      </div>


<div class="bx-authform">

	<?if ($arResult['ERRORS']):?>
	<div class="alert alert-danger">
		<? foreach ($arResult['ERRORS'] as $error)
		{
			echo $error;
		}
		?>
	</div>
	<?elseif ($arResult['SUCCESS']):?>
	<div class="alert alert-success">
		<?= $arResult['SUCCESS'];?>
	</div>
	<?endif;?>

	<h3 class="bx-title"><?= Loc::getMessage('MAIN_AUTH_PWD_HEADER');?></h3>

	<p class="bx-authform-content-container"><?= Loc::getMessage('MAIN_AUTH_PWD_NOTE');?></p>

	<form  name="bform" method="post" target="_top" action="<?= POST_FORM_ACTION_URI;?>" class="row g-3" novalidate >
      
                <div class="pt-4 pb-2">
                  <p class="small">Если вы забыли пароль, введите логин или E-Mail.<br />Контрольная строка для смены пароля будет выслана вам по E-Mail.</p>
                </div>
    
		<div class="col-12">
				<label for="yourUsername" class="form-label"><?= Loc::getMessage('MAIN_AUTH_PWD_FIELD_LOGIN');?></label>
			<input id="yourUsername" class="form-control" type="text" name="USER_LOGIN" maxlength="50" value="<?= \htmlspecialcharsbx($arResult['LAST_LOGIN']);?>" />
			</div>
		</div>
		<div class="col-12">
                  <label for="yourEmail" class="form-label"><?= Loc::getMessage('MAIN_AUTH_PWD_FIELD_EMAIL');?></label>
                  <input id="yourEmail" class="form-control" type="text" name="USER_EMAIL" maxlength="255" value="<?= $arResult['FIELDS']['email'];?>" />
        </div>


 <!-- IF USED CAPTCHA -->
 <div class="col-12">
                  <label class="form-label">Код на картинке
                  </label>
                  <div class="input-group has-validation">
                    <input required class="form-control" type="text" name="captcha_word" maxlength="50"  />
                    <div class="invalid-feedback"><?= Loc::getMessage('MAIN_AUTH_PWD_FIELD_CAPTCHA');?></div>
                  </div>
                </div>
                <div class="col-12">
                  <input type="hidden" name="captcha_sid" value="<?= \htmlspecialcharsbx($arResult['CAPTCHA_CODE']);?>" /> <!-- CAPTCHA_CODE -->
                  <img src="<?= \htmlspecialcharsbx($arResult['CAPTCHA_CODE']);?>" width="180" height="40" alt="CAPTCHA" /> <!-- IMG CAPTCHA_CODE -->
                </div>
                <!-- END CAPTCHA -->

		<?if ($arResult['CAPTCHA_CODE']):?>
 <!-- IF USED CAPTCHA -->
 <div class="col-12">
                  <label class="form-label">Код на картинке
                  </label>
                  <div class="input-group has-validation">
                    <input required class="form-control" type="text" name="captcha_word" maxlength="50"  />
                    <div class="invalid-feedback"><?= Loc::getMessage('MAIN_AUTH_PWD_FIELD_CAPTCHA');?></div>
                  </div>
                </div>
                <div class="col-12">
                  <input type="hidden" name="captcha_sid" value="<?= \htmlspecialcharsbx($arResult['CAPTCHA_CODE']);?>" /> <!-- CAPTCHA_CODE -->
                  <img src="<?= \htmlspecialcharsbx($arResult['CAPTCHA_CODE']);?>" width="180" height="40" alt="CAPTCHA" /> <!-- IMG CAPTCHA_CODE -->
                </div>
<!-- END CAPTCHA -->
		<?endif;?>


		
      
                <div class="col-12">
                  <p class="small mb-0">
                    <b><a href="#">Вернуться к авторизации</a></b>
                  </p>
                </div>

				<div class="col-12">
                  <button 
                    class="btn btn-primary w-100" type="submit" name="<?= $arResult['FIELDS']['action'];?>"><?= Loc::getMessage('MAIN_AUTH_PWD_FIELD_SUBMIT');?>
                  </button>
                </div>

		<?if ($arResult['AUTH_AUTH_URL'] || $arResult['AUTH_REGISTER_URL']):?>
			<hr class="bxe-light">
			<noindex>
			<?if ($arResult['AUTH_AUTH_URL']):?>

				<div class="col-12">
                  <p class="small mb-0">
                    <b><a href="<?= $arResult['AUTH_AUTH_URL'];?>"><?= Loc::getMessage('MAIN_AUTH_PWD_URL_AUTH_URL');?></a></b>
                  </p>
                </div>
				
			<?endif;?>
			<?if ($arResult['AUTH_REGISTER_URL']):?>
				<div class="bx-authform-link-container">
					<a href="<?= $arResult['AUTH_REGISTER_URL'];?>" rel="nofollow">
						<?= Loc::getMessage('MAIN_AUTH_PWD_URL_REGISTER_URL');?>
					</a>
				</div>
			<?endif;?>
			</noindex>
		<?endif;?>

	</form>
	
      
  
	  </div>
	</div>
	
  </div>
</div>

<script>
	document.bform.<?= $arResult['FIELDS']['login'];?>.focus();
</script>
