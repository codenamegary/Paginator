<?php

include "../src/Voodoo/Paginator.php";

$url = "http://mysite.com/hello-world/page/10";
$pagePattern = "/page/(:num)";
$totalItems = 150;
$totalPerPage = 10;

$builder = new Voodoo\Builders\BootstrapBuilder();
// Not necessary, will default to 'pagination' but you get the idea...
$builder->setOption('paginationClsName','pagination');

$paginator = new Voodoo\Paginator();
$paginator->setUrl($url, $pagePattern);
$paginator->setItems($totalItems, $totalPerPage);
$paginator->registerBuilder($builder);
?>

<html>
    <head>
        <link rel="stylesheet" href="./assets/paginator.css">
        <title>Paginator Example</title>
    </head>
    
    <body>
        <?php echo $paginator->getBuilder('bootstrap')->toHtml(); ?>
    </body>
</html>

<?php
// Alternate JSON implementation...
include "../src/Voodoo/Paginator.php";

$url = "http://mysite.com/hello-world/page/10";
$pagePattern = "/page/(:num)";
$totalItems = 150;
$totalPerPage = 10;

$builder = new Voodoo\Builders\BootstrapBuilder();
// Not necessary, will default to 'pagination' but you get the idea...
$builder->setOption('paginationClsName','pagination');

$paginator = new Voodoo\Paginator();
$paginator->setUrl($url, $pagePattern);
$paginator->setItems($totalItems, $totalPerPage);
$paginator->registerBuilder($builder);

header('Content-Type: application/json');
echo $paginator->getBuilder('bootstrap')->toJson();

?>


