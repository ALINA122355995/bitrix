<?php
$arUrlRewrite=array (
  3 => 
  array (
    'CONDITION' => '#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/video/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1&videoconf',
    'ID' => 'bitrix:im.router',
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^/sellers/moi-obyavleniya/#CODE##',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/sellers/moi-obyavleniya/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/obyavleniya//#CODE##',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/obyavleniya/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/online/(/?)([^/]*)#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/company//#CODE##',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/vacancies.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^/company/#CODE##',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/novosti.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/services/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/services/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/products/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/products/index.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
);
