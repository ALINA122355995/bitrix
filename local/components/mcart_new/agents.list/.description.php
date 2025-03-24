<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/*
 *  Задать имя компонента и Описание
 *  Разместить его в своем разделе в Визуальном редакторе
 */

 $arComponentDescription = array("NAME" => GetMessage("REALTY_AGENTS_COMPONENT_NAME"),
 "DESCRIPTION" => GetMessage("REALTY_AGENTS_COMPONENT_DESCRIPTION"),
 "ICON" => "/local/components/mcart/realty.agents/templates/.default/images/no-avatar.png",
 "SORT" => 20,
 "CACHE_PATH" => "Y",
 "PATH" => array(
     "ID" => "mcart",
     "NAME" => GetMessage("REALTY_AGENTS_SECTION"),
     "SORT" => 10,
     "CHILD" => array(
         "ID" => "realty_agents",
         "NAME" => GetMessage("REALTY_AGENTS_COMPONENT_NAME"),
         "SORT" => 20,

      ),
    ),
);?>