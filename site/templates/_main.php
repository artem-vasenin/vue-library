<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?=$seoDescription;?>">
    <meta name="keywords" content="<?=$seoKeywords;?>">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" crossorigin="anonymous" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp">
	<title><?=$seoTitle;?></title>
	<script> var mobiles = <?=$mobiles?>; </script>
</head>

<body class="js body <?=$page->template?>-tpl">
	<div id="vue">
        <script>
            var pageObj = {
                title: "<?=$page->title?>"
            };
        </script>
    </div>
	<script src="<?= $config->urls->js ?>main.js"></script>
</body>
</html>