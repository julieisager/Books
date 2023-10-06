<?php
require "settings/init.php";

$produkter = $db->sql("SELECT * FROM produkter");

?>

<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">

	<title>Sigende titel</title>

	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/styles.css" rel="stylesheet" type="text/css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <?php
    foreach ($produkter as $produkt){
    ?>

    <div class="container">
    <div class="row">
        <div class="col-12 col-md-6 bg-primary">
            <?php
            echo $produkt->prodTitle;
            ?>
        </div>

        <div class="col-12 col-md-6">
            <?php
            echo number_format($produkt->prodPrice, 2, ",", ".");
            ?>
        </div>
    </div>
    </div>
    <?php
    }
    ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>