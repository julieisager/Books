<?php
require "settings/init.php";

if (!empty($_POST["data"])) {
    $data = $_POST["data"];

    $sql = "INSERT INTO produkter (prodTitle, prodDescription, prodPrice, prodAuthor, prodGenre, prodPages, prodDate, prodLanguage, prodPublisher, prodISBN) 
VALUES (:prodTitle, :prodDescription, :prodPrice, :prodAuthor, :prodGenre, :prodPages, :prodDate, :prodLanguage, :prodPublisher, :prodISBN)";
    $bind = [":prodTitle" => $data["prodTitle"], ":prodDescription" => $data["prodDescription"], ":prodPrice" => $data["prodPrice"],
        ":prodAuthor" => $data["prodAuthor"], ":prodGenre" => $data["prodGenre"], ":prodPages" => $data["prodPages"], ":prodDate" => $data["prodDate"], ":prodLanguage" => $data["prodLanguage"], ":prodPublisher" => $data["prodPublisher"], ":prodISBN" => $data["prodISBN"]
    ];

    $db->sql($sql, $bind, false);

    echo "Bogen er nu indsat. <a href='insert.php'>Indsæt en bog mere </a>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">

	<title>Indsæt til database</title>

	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/styles.css" rel="stylesheet" type="text/css">

	<meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/az2vfb59vcpux7eglotcizh950qh0bb2hr5i9arkeh3titrq/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>

<form method="post" action="insert.php">

    <div class="container">
    <div class="row">

        <div class="col-12 p-3">
            <h3>Indsæt bog til database</h3>
        </div>

        <div class="col-12 col-md-6 p-3">
            <div class="form-group">
                <label style="width: 80px" for="prodTitle">Bog titel</label>
                <input class="form-group" type="text" name="data[prodTitle]" id="prodTitle" placeholder="Bog titel" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-3">
            <div class="form-group">
                <label style="width: 80px"for="prodAuthor">Forfatter</label>
                <input class="form-group" type="text" name="data[prodAuthor]" id="prodAuthor" placeholder="Forfatter" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-3">
            <div class="form-group">
                <label style="width: 80px" for="prodPublisher">Forlag</label>
                <input class="form-group" type="text" name="data[prodPublisher]" id="prodPublisher" placeholder="Forlag" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-3">
            <div class="form-group">
                <label style="width: 80px" for="prodISBN">ISBN nr.</label>
                <input class="form-group" type="number" name="data[prodISBN]" id="prodISBN" placeholder="ISBN nr." value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-3">
            <div class="form-group">
                <label style="width: 80px" for="prodPages">Sidetal</label>
                <input class="form-group" type="number" name="data[prodPages]" id="prodPages" placeholder="Sidetal" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-3">
            <div class="form-group">
                <label style="width: 80px" for="prodDate">Dato</label>
                <input style="width: 190px" class="form-group" type="date" name="data[prodDate]" id="prodDate" placeholder="" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-3">
            <div class="form-group">
                <label style="width: 80px" for="prodGenre">Genre</label>
                <input class="form-group" type="text" name="data[prodGenre]" id="prodGenre" placeholder="Genre" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-3">
            <div class="form-group">
                <label style="width: 80px" for="prodLanguage">Sprog</label>
                <input class="form-group" type="text" name="data[prodLanguage]" id="prodLanguage" placeholder="Sprog" value="">
            </div>
        </div>

        <div class="col-12 col-md-6 p-3">
            <div class="form-group">
                <label style="width: 80px" for="prodPrice">Bog pris</label>
                <input class="form-group" type="number" step="0.1" name="data[prodPrice]" id="prodPrice" placeholder="Bog pris" value="">
            </div>
        </div>

        <div class="col-12 p-3">
            <label for="prodDescription">Produkt beskrivelse</label>
            <textarea class="form-control" name="data[prodDescription]" id="prodDescription"></textarea>
        </div>


        <div class="col-12 col-md-6 offset-md-6 p-3">
            <button class="form-control btn btn-primary" type="submit" id="btnSubmit">Opret produkt</button>
        </div>

    </div>
    </div>

</form>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script>

    tinymce.init({
        selector: 'textarea#prodDescription',
    });


</script>
</body>
</html>
