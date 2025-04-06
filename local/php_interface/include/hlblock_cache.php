<?php
use Bitrix\Main\Loader;
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Application;
use Bitrix\Main\Entity\Event;
use \Bitrix\Main\EventManager;

$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventManager->addEventHandler('', 'EstateagentsOnAfterAdd', 'OnAfterUpdate',);
$eventManager->addEventHandler('', 'EstateagentsOnAfterDelete', 'OnAfterUpdate');
$eventManager->addEventHandler('', 'EstateagentsOnAfterUpdate', 'OnAfterUpdate',);

function OnAfterUpdate(\Bitrix\Main\Entity\Event $event) {
    $entity = $event->getEntity();
    $tableName = $entity->getDBTableName();
    $taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
    $taggedCache->clearByTag('hlblock_table_name_' . $tableName);
}


