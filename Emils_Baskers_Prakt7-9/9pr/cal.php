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
const CAL_PROTEIN = 4;
const CAL_FAT = 9;
const CAL_CARBOHYDRATES = 4;
$count = 0;
$products = [];
$allKcals = 0;

if (isset($_POST['submit-count'])) {
    $count = $_POST['count'];
}

if (isset($_POST['calculate'])) {
    $count = $_POST['count'];
    for ($i = 0; $i < $count; $i++) {
        $products[] = [
            'name' . $i => $_POST['name' . $i],
            'protein' . $i => $_POST['protein' . $i],
            'fat' . $i => $_POST['fat' . $i],
            'carbohydrates' . $i => $_POST['carbohydrates' . $i],
            'weight' . $i => $_POST['weight' . $i],
        ];
    }
    $products = calculate($count, $products);
    $allKcals = calculateAllKcals($count, $products);
}

function calculate(int $count, array $products): array
{
    for ($i = 0; $i < $count; $i++) {
        $kcalProt = $products[$i]['protein' . $i] * CAL_PROTEIN;
        $kcalFat = $products[$i]['fat' . $i] * CAL_FAT;
        $kcalCarbo = $products[$i]['carbohydrates' . $i] * CAL_CARBOHYDRATES;
        $products[$i]['kcal' . $i] = $kcalProt + $kcalFat + $kcalCarbo;
        $products[$i]['weightKcal' . $i] = $products[$i]['weight' . $i]
            ? $products[$i]['kcal' . $i] * ($products[$i]['weight' . $i] / 100)
            : null;
    }

    return $products;
}

function calculateAllKcals(int $count, array $products): int
{
    $sum = 0;
    for ($i = 0; $i < $count; $i++) {
        $sum += $products[$i]['kcal' . $i];
    }

    return $sum;
}

?>
<div class="container">
    <div class="col-4 p-3">
        <form action="" method="post">
            <div class="form-group">
                <p>Ievadiet produktu skaitu, kuriem vēlaties veikt aprēķinus:</p>
                <label for="count">Skaits:</label>
                <input type="number" class="form-control" id="count" name="count" value="<?= $count ?>" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit-count">Izveidot</button>
        </form>
    </div>
    <?php if ($count > 10) { ?>
        <div class="alert alert-danger" role="alert">
            Nedrīkst ievadīt vairāk par 10 produktiem!
        </div>
        <?php
    } else if ($count != 0 && $count <= 10) { ?>
        <div class="col-12 p-3">
            <p>Ievadiet produkta nosaukumu un uzturvielu daudzumu 100 gramos.</p>
            <form action="" method="post">
                <input type="number" name="count" value="<?= $count ?>" hidden>
                <?php for ($i = 0;
                           $i < $count;
                           $i++) {
                    ?>
                    <div class="form-group row">
                        <label for="<?= 'name' . $i ?>" class="col-2 col-form-label"><?= $i + 1; ?>. produkts:</label>
                        <div class="col-2">
                            <input type="text" class="form-control" id="<?= 'name' . $i ?>" name="<?= 'name' . $i ?>"
                                   value="<?= $products[$i]['name' . $i] ?? '' ?>" required>
                        </div>
                        <label for="<?= 'protein' . $i ?>" class="col-2 col-form-label">olbaltumvielas:</label>
                        <div class="col-2">
                            <input type="number" class="form-control" id="<?= 'protein' . $i ?>"
                                   name="<?= 'protein' . $i ?>"
                                   value="<?= $products[$i]['protein' . $i] ?? null ?>" required>
                        </div>
                        <label for="<?= 'fat' . $i ?>" class="col-1 col-form-label">tauki:</label>
                        <div class="col-2">
                            <input type="number" class="form-control" id="<?= 'fat' . $i ?>" name="<?= 'fat' . $i ?>"
                                   value="<?= $products[$i]['fat' . $i] ?? null ?>" required>
                        </div>
                        <label for="<?= 'carbohydrates' . $i ?>" class="col-2 col-form-label">ogļhidrāti:</label>
                        <div class="col-2">
                            <input type="number" class="form-control" id="<?= 'carbohydrates' . $i ?>"
                                   name="<?= 'carbohydrates' . $i ?>"
                                   value="<?= $products[$i]['carbohydrates' . $i] ?? null ?>" required>
                        </div>
                        <label for="<?= 'weight' . $i ?>" class="col-2 col-form-label">svars:</label>
                        <div class="col-2">
                            <input type="number" class="form-control" id="<?= 'weight' . $i ?>"
                                   name="<?= 'weight' . $i ?>"
                                   value="<?= $products[$i]['weight' . $i] ?? null ?>">
                        </div>
                    </div>
                    <?php if (isset($products[$i])) { ?>
                        <p><?= '100 gramos ' . $products[$i]['name' . $i] . ' ir ' . $products[$i]['kcal' . $i] . 'kcal.' ?></p>
                        <?php if (!is_null($products[$i] ?? ['weight'])) { ?>
                            <p><?= $products[$i]['weight' . $i] . ' gramos ' . $products[$i]['name' . $i] . ' ir '
                                . $products[$i]['weightKcal' . $i] . 'kcal.' ?></p>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
                <?php if ($allKcals != 0) { ?>
                    <hr>
                    <p><?= 'Visu produktu kcal uz 100 gramiem summa: ' . $allKcals . 'kcal.' ?></p>
                <?php } ?>
                <button type="submit" class="btn btn-primary" name="calculate">Aprēķināt</button>
            </form>
        </div>
    <?php } ?>
</div>
</body>
</html>
