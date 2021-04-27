<?php
$countries = ['Latvija', 'Igaunija', 'Lietuva'];
$languages = ['Latviešu', 'Igauņu', 'Lietuviešu'];
$selectedCountry = null;
$selectedLanguage = null;

if (isset($_COOKIE['country'])) {
    $selectedCountry = $_COOKIE['country'];
}

if (isset($_COOKIE['language'])) {
    $selectedLanguage = $_COOKIE['language'];
}

?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>8pr.d</title>
</head>
<body>
<div class="container p-3">
    <div class="col-4">
        <form action="main.php" method="post">
            <div class="form-group">
                <label for="country">Valsts:</label>
                <select class="form-control" id="country" name="country">
                    <?php foreach ($countries as $country) {?>
                    <option value="<?= $country ?>" <?= $selectedCountry == $country ? "selected" : ""; ?>><?= $country ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="language">Valoda:</label>
                <select class="form-control" id="language" name="language">
                    <?php foreach ($languages as $language) {?>
                        <option value="<?= $language ?>" <?= $selectedLanguage == $language ? "selected" : ""; ?>><?= $language ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Saglabāt</button>
        </form>
    </div>
    <hr>
    <a href="main.php?country=Latvija&language=Latviešu">Uzstādīt LV</a>
    <hr>
    <a href="main.php?delete=true">Dzēst Cookies</a>
</div>
</body>
</html>