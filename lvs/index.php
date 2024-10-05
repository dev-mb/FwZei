<?php
// © Dev-MB | dev-mb.dev

function getFormattedDate($date) {
    $tag = sprintf('%02d', $date->format('d'));
    $monat = sprintf('%02d', $date->format('m'));
    return $monat.$tag;
}

function getIMG() {
    $today = new DateTime();
    $imgdate = clone $today;
    $imgsrc = ''; 

    $option = isset($_GET['day']) ? $_GET['day'] : '';

    if ($option === "tomorrow") {
        $imgdate->modify('+1 day');
        $imgsrc = 'https://www.mais.de/sachsenforst/wb_'.getFormattedDate($imgdate).'P.png';
    } elseif ($option === "secondday") {
        $imgdate->modify('+2 day');
        $imgsrc = 'https://www.mais.de/sachsenforst/wb_'.getFormattedDate($imgdate).'P0.png';
    } else {
        $imgsrc = 'https://www.mais.de/sachsenforst/wb_'.getFormattedDate($imgdate).'V.png';
    }

    // const date = getFormattedDate(imgdate);
    // Not sure what you want to do with this line in PHP since PHP doesn't have "const"

    echo '<img id="waldindex" src="'.$imgsrc.'" alt="Waldindex">';
    echo '<script>console.log("'.$imgsrc.'");</script>';
}

// Initialisierung beim Laden der Seite
getIMG();

// https://www.mais.de/sachsenforst/
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <!-- © Dev-MB | dev-mb.dev -->

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Dev-MB | SimulatorMB#9999">
        <meta name="publisher" content="Dev-MB | fwzei.app">

        <!--? Social site peresents -->

        <title>LVS-Display Zeithain</title>

        <!-- <link async="" rel="icon" href="./dist/img/logo.svg"> -->
        <link rel="stylesheet" href="./dist/css/style.min.css">

        <!-- <script src="https://kit.fontawesome.com/cbfa9ee1f5.js" crossorigin="anonymous"></script> -->
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
        
    </head>

    <body>
        
        <img id="waldindex">

    </body>

    <!-- <script type="text/javascript" src="./dist/js/main.js"></script> -->
</html>