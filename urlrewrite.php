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
  28 => 
  array (
    'CONDITION' => '#^/o-servise/vakansii/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/o-servise/vakansii/index.php',
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
  32 => 
  array (
    'CONDITION' => '#^/s2/portfolio/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/s2/portfolio/index.php',
    'SORT' => 100,
  ),
  26 => 
  array (
    'CONDITION' => '#^/obyavleniya/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/obyavleniya/index.php',
    'SORT' => 100,
  ),
  29 => 
  array (
    'CONDITION' => '#^/s2/services/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/s2/services/index.php',
    'SORT' => 100,
  ),
  30 => 
  array (
    'CONDITION' => '#^/s2/products/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/s2/products/index.php',
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
  31 => 
  array (
    'CONDITION' => '#^/s2/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/s2/news/index.php',
    'SORT' => 100,
  ),
  14 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
);
