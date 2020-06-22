<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>header owned by platform</header>
    <?php if(isset($_SERVER,$_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] == 'localhost') {
        /* Sand Box */
        include 'includes/sample.php';
    }else{
        /* Production */
        include 'build/hypothetical.php';
    } ?>
    <footer>footer owned by platform</footer>
</body>

</html>