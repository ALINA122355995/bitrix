<?php
use Bitrix\Main\EventManager;
EventManager::getInstance()->addEventHandler(
    'main',
    'OnBeforeUserRegister',
    ['UserGroupHandler', 'onBeforeUserRegisterHandler']
);
class UserGroupHandler {
    public static function onBeforeUserRegisterHandler(&$arFields) {
        $BAYERGroupId = 6;
        $SELLERGroupId = 7;

        if (!isset($arFields["GROUP_ID"]) || !is_array($arFields["GROUP_ID"])) {
            $arFields["GROUP_ID"] = [];
        }


        $arFields["GROUP_ID"] = [];

        
        if (!empty($arFields["UF_TIPE"])) {
            if ($arFields["UF_TIPE"] == 21) {
                $arFields["GROUP_ID"][] = $BAYERGroupId;
            } 
            elseif ($arFields["UF_TIPE"] == 22) {
         $arFields["GROUP_ID"][] = $SELLERGroupId;
            }
        }
    }
}
?>
