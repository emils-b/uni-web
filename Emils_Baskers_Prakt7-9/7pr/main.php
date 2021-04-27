<?php
session_start();
include "session-fn.php";

if (isLoggedIn() != true) {
    header("Location: index.php");
    exit();
}
$fileCount = 10;
$isError = false;
$errorMessage = '';
$targetDir = "media/";

if (isset($_POST["submit"])) {
    for ($i = 0; $i < $fileCount; $i++) {
        $uploadOk = true;
        $errorMessage .= htmlspecialchars(basename($_FILES["file" . $i]["name"])) . "\n";

        $targetFile = $targetDir . basename($_FILES["file" . $i]["name"]);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "gif") {
            $errorMessage .= "Sorry, only JPG, PNG & GIF files are allowed. \n";
            echo "Sorry, only JPG, PNG & GIF files are allowed. \n";
            $uploadOk = false;
        }

        $check = getimagesize($_FILES["file" . $i]["tmp_name"]);
        if ($check == false) {
            $errorMessage .= "File is not an image. \n";
            echo "File is not an image. \n";
            $uploadOk = false;
        }

        if (file_exists($targetFile)) {
            $errorMessage .= "Sorry, file already exists. \n";
            echo "Sorry, file already exists. \n";
            $uploadOk = false;
        }
        if ($_FILES["file" . $i]["size"] > 3000000) {
            $errorMessage .= "Sorry, your file is too large.\n";
            echo "Sorry, your file is too large.\n";
            $uploadOk = false;
        }
        if (!$uploadOk) {
            $errorMessage .= "Sorry, your file was not uploaded.\n";

        }

        if (move_uploaded_file($_FILES["file" . $i]["tmp_name"], $targetFile) && $uploadOk) {
            $errorMessage .= "The file has been uploaded.";
        } else {
            $errorMessage .= "Sorry, there was an error uploading your file.";
        }
    }

    $isError = $isError ? true : ($uploadOk ? false : true);
}
?>
<html lang="lv" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>JS Prog</title>
</head>
<body>
<div class="container">
    <div class="col-12">
        <a href="logout.php" class="btn btn-danger float-right">Iziet</a>
    </div>

    <?php
    if ($isError) { ?>
        <div class="alert alert-danger" role="alert">
            <?=
            $errorMessage ?>
        </div>
    <?php } ?>

    <div class="d-flex justify-content-center">
        <form action="" method="post" enctype="multipart/form-data">
            <?php for ($i = 0;
                       $i < $fileCount;
                       $i++) { ?>
                <div class="form-group">
                    <label for="file<?= $i ?>">Augšuplādēt failu</label>
                    <input type="file" class="form-control-file" id="file<?= $i ?>" name="file<?= $i ?>">
                </div>
            <?php } ?>
            <div class="col text-center">
                <button type="submit" class="btn btn-primary" name="submit">Saglabāt</button>
            </div>
        </form>
    </div>
    <table>
        <?php
        $fileNames = scandir('media');
        $fileCounter = 0;

        for ($i = 0; $i < 3; $i++) { ?>
            <tr>
                <?php for ($j = 0; $j < 4; $j++) { ?>
                    <td><img src="media/<?= $fileNames[$fileCounter] ?>" alt="Attelu nevar atainot" width="200"
                             height="100"></td>
                    <?php
                    $fileCounter++;
                    if ($fileCounter > $fileCount) {
                        break;
                    }
                } ?>
            </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>