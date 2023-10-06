<?php

require "settings/init.php";

$produkter = $db->sql("SELECT * FROM produkter where prodId = 11");


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
        <div class="row mt-5">

            <div class="col-12 col-md-6 p-2">
                <?php
                echo $produkt->prodImage;
                /*help*/
                ?>
            </div>

            <div class="col-12 col-md-6 p-2">
                <h2>
                <?php
                echo $produkt->prodTitle;
                ?>
                </h2>

                <h4>
                <?php
                echo $produkt->prodAuthor;
                ?>
                </h4>

                <p>
                <?php
                echo number_format($produkt->prodPrice, 2, ",", ".");
                ?>
                DKK
                </p>

            </div>

            <div class="col-12 p-2 mb-3">

                <h5 class="mb-2">Beskrivelse</h5>

                <?php
                echo $produkt->prodDescription;
                ?>
            </div>


            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <h5>Mere information</h5>
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-6 p-3 mereinfo">
                                    <strong>Titel:</strong>
                                </div>

                                <div class="col-6 p-3 mereinfo">
                                    <?php
                                    echo $produkt->prodTitle;
                                    ?>
                                </div>

                                <div class="col-6 p-3 mereinfo">
                                    <strong>Forfatter:</strong>
                                </div>

                                <div class="col-6 p-3 mereinfo">
                                    <?php
                                    echo $produkt->prodAuthor;
                                    ?>
                                </div>


                                <div class="col-6 p-3 mereinfo">
                                    <strong>Pris:</strong>
                                </div>

                                <div class="col-6 p-3 mereinfo">
                                    <?php
                                    echo $produkt->prodPrice;
                                    ?>
                                    DKK
                                </div>

                                <div class="col-6 p-3 mereinfo">
                                    <strong>Udgivelsesdato:</strong>
                                </div>

                                <div class="col-6 p-3 mereinfo">
                                    <?php
                                    echo $produkt->prodDate;
                                    ?>
                                </div>

                                <div class="col-6 p-3 mereinfo">
                                    <strong>Forlag:</strong>
                                </div>

                                <div class="col-6 p-3 mereinfo">
                                    <?php
                                    echo $produkt->prodPublisher;
                                    ?>
                                </div>

                                <div class="col-6 p-3 mereinfo">
                                    <strong>Sider:</strong>
                                </div>

                                <div class="col-6 p-3 mereinfo">
                                    <?php
                                    echo $produkt->prodPages;
                                    ?>
                                </div>

                                <div class="col-6 p-3 mereinfo">
                                    <strong>ISBN:</strong>
                                </div>

                                <div class="col-6 p-3 mereinfo">
                                    <?php
                                    echo $produkt->prodISBN;
                                    ?>
                                </div>

                                <div class="col-6 p-3 mereinfo">
                                    <strong>Sprog:</strong>
                                </div>

                                <div class="col-6 p-3 mereinfo">
                                    <?php
                                    echo $produkt->prodLanguage;
                                    ?>
                                </div>

                                <div class="col-6 p-3 mereinfo">
                                    <strong>Udgave:</strong>
                                </div>

                                <div class="col-6 p-3 mereinfo">
                                    <?php
                                    echo $produkt->prodEdition;
                                    ?>
                                </div>

                                <div class="col-6 p-3 mereinfo">
                                    <strong>Genre:</strong>
                                </div>

                                <div class="col-6 p-3 mereinfo">
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

