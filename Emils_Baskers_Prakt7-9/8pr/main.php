<?php
$country = null;
$language = null;

if (isset($_POST['submit'])) {
    $country = $_POST['country'];
    $language = $_POST['language'];
    setcookie('country', $country);
    setcookie('language', $language);

    header('Location: index.php');
}
if (isset($_GET['delete']) && $_GET['delete'] == true) {
    setcookie('country', $country, time()-10);
    setcookie('language', $language, time()-10);

    header('Location: index.php');
}
if (isset($_GET['country']) && isset($_GET['language'])) {
    $country = $_GET['country'];
    $language = $_GET['language'];
    setcookie('country', $country);
    setcookie('language', $language);

    header('Location: index.php');
}

