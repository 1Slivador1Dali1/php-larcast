<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Demo</title>
</head>
<body>
    <?php
    $name = "Dark Matter";
    $read = false;
    $message = "";

    if ($read) {
        $message = "You have read \"$name\"";
    }
    else {
        $message = "You have not read \"$name\"";
    }

    $books = ["Dark Matter", "1984", "451F"];
    ?>

    <h1>
        <?= $message ?>
    </h1>   

    <ol>
    <?php 
    for ($i=0; $i < count($books); $i++) { 
        ?> <li><?= $books[$i] ?></li><?php
        // echo "<li>$books[$i]</li>";
    }
    ?>
    </ol>

    <ul>
        <?php foreach ($books as $book) 
        {
            ?> <li><?= $book ?></li><?php
        }
        ?>
    </ul>

    <ol>
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach ?>
    </ol>
    
</body>
</html>