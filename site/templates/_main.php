<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?=$seoDescription;?>">
    <meta name="keywords" content="<?=$seoKeywords;?>">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" crossorigin="anonymous" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp">
	<title><?=$seoTitle;?></title>
	<script> var mobiles = <?=$mobiles?>; </script>
</head>

<body class="js body <?=$page->template?>-tpl">
	<div id="vue"></div>
	<script src="<?= $config->urls->js ?>main.js"></script>
</body>
</html>