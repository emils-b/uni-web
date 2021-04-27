<!DOCTYPE html>
<html lang="lv" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Calculator</title>
</head>
<body>
<?php
//1. Variants
const VOWELS = ['a', 'ā', 'e', 'ē', 'i', 'ī', 'u', 'ū', 'o'];
$surnameT1 = null;
$sumT1 = null;
$weekT1 = null;
$returnT1 = null;

if (isset($_POST['submitT1'])) {
    $surnameT1 = $_POST['surname'];
    $sumT1 = $_POST['sum'];
    $weekT1 = $_POST['week'];
    $returnT1 = calculateT1($sumT1, $weekT1, $surnameT1);
}

function calculateT1($sum, $week, $surname): ?float
{
    if (!isset($surname[1])) {
        return null;
    }
    $coef = 0.10;
    if (in_array($surname[1], VOWELS)) {
        $coef = 0.15;
    }
    return $sum * pow((1 + $coef), $week);
}

?>
<div class="container p-3">
    <h3> 1. Variants</h3>
    <div class="col-4">
        <form action="" method="post">
            <div class="form-group">
                <label for="surname">Uzvārds:</label>
                <input type="text" class="form-control" id="surname" name="surname" value="<?= $surnameT1; ?>" required>
            </div>
            <div class="form-group">
                <label for="sum">Summa:</label>
                <input type="number" class="form-control" id="sum" name="sum" value="<?= $sumT1; ?>" required>
            </div>
            <div class="form-group">
                <label for="week">Nedēļas:</label>
                <input type="number" class="form-control" id="week" name="week" value="<?= $weekT1; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submitT1">Rēķināt</button>
        </form>
        <hr>
        <h3>Summa atmaksai</h3>
        <p><?= $returnT1; ?></p>
    </div>
    <hr>
</div>
<?php
//2. Variants
$name = null;
$sumT2 = null;
$weekT2 = null;
$returnT2 = null;
$weeklyIncrements = [];

if (isset($_POST['submitT2'])) {
    $name = $_POST['name'];
    $sumT2 = $_POST['sum'];
    $weekT2 = $_POST['week'];
    $returnT2 = calculateT2($sumT2, $weekT2, $name);
    $weeklyIncrements = getWeeklyIncrement($sumT2, $weekT2, $name);
}

function calculateT2($sum, $week, $name): float
{
    $coef = GetCoef($name);

    return $sum * pow((1 + $coef), $week);
}

function getWeeklyIncrement($sum, $week, $name): array
{
    $coef = GetCoef($name);
    $subTotal = $sum;
    $increments = [];
    for ($i = 0; $i < $week; $i++) {
        $increment = $subTotal * $coef;
        $subTotal += $increment;
        $increments[] = $increment;
    }

    return $increments;
}

function GetCoef($name): float
{
    $nameParts = explode(' ', $name);
    $isIncreased = false;

    foreach ($nameParts as $name) {
        if (!isset($name[1])) {
            continue;
        }

        $isIncreased = in_array($name[1], VOWELS);
    }

    return $isIncreased ? 0.15 : 0.10;
}

?>
<div class="container p-3">
    <h3> 2. Variants</h3>
    <div class="col-4">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Vārds Uzvārds:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $name; ?>" required>
            </div>
            <div class="form-group">
                <label for="sum">Summa:</label>
                <input type="number" class="form-control" id="sum" name="sum" value="<?= $sumT1; ?>" required>
            </div>
            <div class="form-group">
                <label for="week">Nedēļas:</label>
                <input type="number" class="form-control" id="week" name="week" value="<?= $weekT1; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submitT2">Rēķināt</button>
        </form>
        <hr>
        <p>Labdien <?= $name; ?></p>
        <p>Jūs aizņēmāties: <?= $sumT2; ?> EUR</p>
        <p>Summa ar procentiem būs jāatdod pēc
            <?php if ($weekT2 == 1) {
                echo $weekT2 . ' nedēļas';
            } else {
                echo $weekT2 . ' nedēļām';
            } ?>
        </p>
        <hr>
        <h3>Summa atmaksai</h3>
        <p><?= $returnT2; ?></p>
        <h5>Iknedēļas procentu maksājums</h5>
        <?php foreach ($weeklyIncrements as $increment) { ?>
            <p><?= $increment; ?></p>
        <?php } ?>
    </div>
</div>
</body>
</html>