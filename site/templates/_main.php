<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?=$seoDescription;?>">
    <meta name="keywords" content="<?=$seoKeywords;?>">
	<link rel="stylesheet" type="text/css" href="<?=$config->urls->css?>styles.css">
	<script>var mobiles = <?=$mobiles?>;</script>
	<title><?=$seoTitle;?></title>
</head>

<body id="vue" class="js body <?=$page->template?>-tpl">

	<?php include("views/{$page->template}/{$page->template}.view.php"); ?>
	<script src="<?= $config->urls->js ?>main.js"></script>

</body>
</html>