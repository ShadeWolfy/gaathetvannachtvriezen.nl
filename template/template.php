<?php include('../app/apicall.php'); ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <?php include('partials/header.php'); ?>
</header>

<main>
    <?php echo $mintemp;?>
</main>

<footer>
    <?php include('partials/footer.php'); ?>
</footer>
</body>
</html>
