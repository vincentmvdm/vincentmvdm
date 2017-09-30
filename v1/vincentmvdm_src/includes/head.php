<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png?v=jw6eaWrlml">
        <link rel="icon" type="image/png" href="favicon/favicon-32x32.png?v=jw6eaWrlml" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon/favicon-16x16.png?v=jw6eaWrlml" sizes="16x16">
        <link rel="manifest" href="favicon/manifest.json?v=jw6eaWrlml">
        <link rel="mask-icon" href="favicon/safari-pinned-tab.svg?v=jw6eaWrlml" color="#006cd9">
        <link rel="shortcut icon" href="favicon/favicon.ico?v=jw6eaWrlml">
        <meta name="msapplication-config" content="favicon/browserconfig.xml?v=jw6eaWrlml">
        <meta name="theme-color" content="#ffffff">
        <?php
            date_default_timezone_set('America/Los_Angeles');
            echo "<!-- It is currently " . date('g:i a') . " in Seattle, the United States -->";
            date_default_timezone_set('Europe/Amsterdam');
            echo "\n" . "        <!-- and " . date('g:i a') . " in Groningen, the Netherlands. -->";
            echo "\n";
        ?>
        <title><?= $title; ?></title>
        <link href="../css/app.min.css" rel="stylesheet" inline>
        <script>
            document.createElement( "picture" );
        </script>
        <script src="../js/picturefill.min.js" inline></script>
    </head>
    <?php $page = basename($_SERVER['PHP_SELF'], '.php'); ?>
    <body class="page <?= $page; ?>">
        <?php include_once("includes/analyticstracking.php"); ?>
