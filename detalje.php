<?php

require "settings/init.php";

$produkter = $db->sql("SELECT * FROM produkter where prodId = 14");


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
        <div class="row p-4">

            <div class="col-12">
                <?php
                echo $produkt->prodTitle;
                ?>
            </div>

            <div class="col-12">
                <?php
                echo $produkt->prodAuthor;
                ?>
            </div>

            <div class="col-12 ">
                <?php
                echo number_format($produkt->prodPrice, 2, ",", ".");
                ?>
            </div>

            <div class="col-12">
                <?php
                echo $produkt->prodImage;
                ?>
            </div>

            <div class="col-12">
                <?php
                echo $produkt->prodDescription;
                ?>
            </div>


            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                           Mere information
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-6 p-3 mereinfo">
                                    <strong>Titel:</strong>
                                </div>

                                <div class="col-6 p-3">
                                    <?php
                                    echo $produkt->prodTitle;
                                    ?>
                                </div>

                                <div class="col-6 p-3">
                                    <strong>Forfatter:</strong>
                                </div>

                                <div class="col-6 p-3">
                                    <?php
                                    echo $produkt->prodAuthor;
                                    ?>
                                </div>


                                <div class="col-6 p-3">
                                    <strong>Pris:</strong>
                                </div>

                                <div class="col-6 p-3">
                                    <?php
                                    echo $produkt->prodPrice;
                                    ?>
                                </div>

                                <div class="col-6 p-3">
                                    <strong>Udgivelsesdato:</strong>
                                </div>

                                <div class="col-6 p-3">
                                    <?php
                                    echo $produkt->prodDate;
                                    ?>
                                </div>

                                <div class="col-6 p-3">
                                    <strong>Forlag:</strong>
                                </div>

                                <div class="col-6 p-3">
                                    <?php
                                    echo $produkt->prodPublisher;
                                    ?>
                                </div>

                                <div class="col-6 p-3">
                                    <strong>Sider:</strong>
                                </div>

                                <div class="col-6 p-3">
                                    <?php
                                    echo $produkt->prodPages;
                                    ?>
                                </div>

                                <div class="col-6 p-3">
                                    <strong>ISBN:</strong>
                                </div>

                                <div class="col-6 p-3">
                                    <?php
                                    echo $produkt->prodISBN;
                                    ?>
                                </div>

                                <div class="col-6 p-3">
                                    <strong>Sprog:</strong>
                                </div>

                                <div class="col-6 p-3">
                                    <?php
                                    echo $produkt->prodLanguage;
                                    ?>
                                </div>

                                <div class="col-6 p-3">
                                    <strong>Udgave:</strong>
                                </div>

                                <div class="col-6 p-3">
                                    <?php
                                    echo $produkt->prodEdition;
                                    ?>
                                </div>

                                <div class="col-6 p-3">
                                    <strong>Genre:</strong>
                                </div>

                                <div class="col-6 p-3">
                                    <?php
                                    echo $produkt->prodGenre;
                                    ?>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                </div>



        </div>
    </div>
    <?php
}
?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

