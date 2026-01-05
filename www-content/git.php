<?php

$fileName = str_replace(
    ['/var/task/user/', '/index.php/', '/index.php'],
    '',
    $_SERVER['PHP_SELF'] ?? '',
);

$latestLog = git_latest_log();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File: <?= $fileName ?></title>
</head>
<body>
    <?=  file_get_contents(__DIR__.'/_partials/menu.view.php') ?>
    <h3>
        This is the "<?= $fileName ?>" file/path. Go to <a href="/">home</a>
    </h3>
    <pre><?= json_encode($latestLog, 64|JSON_PRETTY_PRINT) ?></pre>
</body>
</html>
