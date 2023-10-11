<?php

require "settings/init.php";

$produkter = $db->sql("SELECT * FROM produkter where prodId = :prodId", [":prodId" => $_GET["prodId"]]);


?>

<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">

	<title>Detalje side</title>

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
    <div class="row mt-3">

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-primary" href="index.html">Forside</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?php
                    echo $produkt->prodTitle;
                    ?>
                </li>
            </ol>
        </nav>

    </div>
</div>

    <div class="container">
        <div class="row mt-2 mb-5">

            <div class="col-12 col-md-6 p-2 d-flex justify-content-center align-self-center" style="height: 500px">
                <img src="uploads/<?php echo $produkt->prodImage; ?>">
            </div>


            <div class="col-12 col-md-6 p-2">
                <div class="" style="">
                    <h2>
                    <?php
                    echo $produkt->prodTitle;
                    ?>
                    </h2>
                </div>

                <div class="">
                    <h4>
                    Af
                    <?php
                    echo $produkt->prodAuthor;
                    ?>
                    </h4>
                </div>


                <div class="mt-3">
                    <h5 class="mb-2">Beskrivelse</h5>
                    <?php
                    echo $produkt->prodDescription;
                    ?>
                </div>

            </div>


            <div class="col-12 p-2 mb-2 mt-3">

                <h5 class="">Udligner information:</h5>

            </div>


            <div class="col-6 p-3 mereinfo">
                <strong>Titel:</strong>
            </div>

            <div class="col-6 p-3 text-end mereinfo">
                <?php
                echo $produkt->prodTitle;
                ?>
            </div>

            <div class="col-6 p-3 mereinfo">
                <strong>Forfatter:</strong>
            </div>

            <div class="col-6 p-3 text-end mereinfo">
                <?php
                echo $produkt->prodAuthor;
                ?>
            </div>


            <div class="col-6 p-3 mereinfo">
                <strong>Pris:</strong>
            </div>

            <div class="col-6 p-3 text-end mereinfo">
                <?php
                echo $produkt->prodPrice;
                ?>
                DKK
            </div>

            <div class="col-6 p-3 mereinfo">
                <strong>Udgivelsesdato:</strong>
            </div>

            <div class="col-6 p-3 text-end mereinfo">
                <?php
                echo $produkt->prodDate;
                ?>
            </div>

            <div class="col-6 p-3 mereinfo">
                <strong>Forlag:</strong>
            </div>

            <div class="col-6 p-3 text-end mereinfo">
                <?php
                echo $produkt->prodPublisher;
                ?>
            </div>

            <div class="col-6 p-3 mereinfo">
                <strong>Sider:</strong>
            </div>

            <div class="col-6 p-3 text-end mereinfo">
                <?php
                echo $produkt->prodPages;
                ?>
            </div>

            <div class="col-6 p-3 mereinfo">
                <strong>ISBN:</strong>
            </div>

            <div class="col-6 p-3 text-end mereinfo">
                <?php
                echo $produkt->prodISBN;
                ?>
            </div>

            <div class="col-6 p-3 mereinfo">
                <strong>Sprog:</strong>
            </div>

            <div class="col-6 p-3 text-end mereinfo">
                <?php
                echo $produkt->prodLanguage;
                ?>
            </div>

            <div class="col-6 p-3 mereinfo">
                <strong>Udgave:</strong>
            </div>

            <div class="col-6 p-3 text-end mereinfo">
                <?php
                echo $produkt->prodEdition;
                ?>
            </div>

            <div class="col-6 p-3 mereinfo">
                <strong>Genre:</strong>
            </div>

            <div class="col-6 p-3 text-end mereinfo">
                <?php
                echo $produkt->prodGenre;
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

