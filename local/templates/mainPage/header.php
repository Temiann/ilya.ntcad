<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>

<html>
    <head>
        <?$APPLICATION->ShowHead();?>
        <title><?$APPLICATION->ShowTitle();?></title>
        <?require $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/include/template/assets.php'; ?>
    </head>
<body class="body">
<?$APPLICATION->ShowPanel();?>
    <div class="wrapper">
    <?require $_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/include/template/header.php';?>
    <main class="main">
<!--        <div class="banner"></div>-->
        <?require $_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/include/template/header_main_menu.php';?>
        <?require $_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/include/template/header_catalog.php';?>