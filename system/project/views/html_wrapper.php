<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?> | <?php echo config::get('site_title'); ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
</head>
<body>

    <?php echo $page_layout; ?>

    <?php echo $footer; ?>

</body>
</html>