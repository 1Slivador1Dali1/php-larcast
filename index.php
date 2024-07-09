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
    $read = true;
    $message = "";

    if ($read) {
        $message = "You have read \"<?php echo $name; ?>\"";
    }
    else {
        $message = 'You not have read "<?php echo $name; ?>"';
    }
    ?>

    <h1>
        
    </h1>
</body>
</html>