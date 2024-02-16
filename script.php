<?php 

$paragraph = $_GET["paragraph"];

$badword = $_GET["badword"];

$censured_word = "***";

$new_paragraph = str_replace($badword, $censured_word, $paragraph);

?>

<html>
<!DOCTYPE html>

<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Francesco Pasquinoni">

    <title>PHP Badwords</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header>
        <h3 class="text-center">CENSURED Badwords</h3>
    </header>

    <h5>Badword: <?php echo $badword ?></h5>
    <p><?php echo $new_paragraph ?></p>
    <div>Lunghezza:<?php echo strlen($new_paragraph) ?></div>

</body>

</html>
