<?php include('../app/apicall.php'); ?>

<?php
if($mintemp <= 0) {
    $class = 'vriezen';
} else {
    $class = 'dooien';
}


?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="<?php echo $class ;?>">
<header>
    <h1 class="title">Gaat het vannacht vriezen?</h1>
</header>

<?php
if ($class == 'vriezen') {
    include ('partials/vriezen.php');
} else {
    include ('partials/dooien.php');
}
?>

<footer>
    <p class="footer">Door: Joey Stinkens</p>
</footer>
</body>
</html>
