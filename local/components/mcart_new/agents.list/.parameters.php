<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$arComponentParameters = array(
    "GROUPS" => array(),
    "PARAMETERS" => array(
        // Параметр для названия таблицы Highload-блока
        "HLBLOCK_TNAME" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("MCART_AGENTS_LIST_HLBLOCK_TNAME"), // Название параметра
            "TYPE" => "STRING", // Тип поля
            "DEFAULT" => "", // Значение по умолчанию
        ),
        // Параметр для количества элементов на странице
        "PAGE_SIZE" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("MCART_AGENTS_LIST_PAGE_SIZE"), // Название параметра
            "TYPE" => "STRING", // Тип поля
            "DEFAULT" => "10", // Значение по умолчанию
        ),
        // Параметр времени кеширования
        "CACHE_TIME"  =>  ["DEFAULT"=>36000000], // Значение по умолчанию
    ),
);
       
/*
 * Нужно создать пареметры, можно посмотреть как это сделано в компоненте news.list
 * 1. Строка для Название таблицы (TABLE_NAME) Highload-блока. Ниже приведино в качестве примера
 * 2. Количество элементов для постраничной пагинации
 * 3. Кеширования(CACHE_TIME)
 */