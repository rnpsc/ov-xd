<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <title>Handbuch - orgavision</title>
    <link rel="stylesheet" href="styles/basics.css?<?php echo time() ?>">
    <link rel="stylesheet" href="styles/header.css?<?php echo time() ?>">
    <link rel="stylesheet" href="styles/color.css?<?php echo time() ?>">
    <link rel="stylesheet" href="styles/button.css?<?php echo time() ?>">
    <link rel="stylesheet" href="styles/typography.css?<?php echo time() ?>">
    <link rel="stylesheet" href="styles/radi.css?<?php echo time() ?>">
    <!-- supporting grid | bootstrap -->
    <link rel="stylesheet" href="styles/grid.min.css">
    <!-- FONTS and ICONS -->
    <link rel="stylesheet" href="typefaces/FiraGO_WEB_1001/FiraGO.css" crossorigin="anonymous">
    <link rel="stylesheet" href="typefaces/fontawesome-6-alpha/all.css" crossorigin="anonymous">
</head>
<body class="r">
<!-- WRAP -->
<div class="wrap d-flex flex-column bg night-100 w-100 h-100">
    <!-- HEADER -->
    <header class="d-flex justify-content-between bg sky-700 px-2 py-2 font-day font-size-150 font-weight-500">
        <!-- MODULE SELECT -->
        <div class="button px-2 py-2 bg sky-700 radi-3 cursor-pointer ">
            <span>A Most Splendid Enterprise</span>
            <i class="fa-solid fa-angle-down ml-1"></i>
        </div>
        <!-- END MODULE SELECT -->
        <!-- SEARCH -->
        <div class="search d-flex justify-content-between align-items-stretch">
            <div class="searchfield d-flex align-items-center" contenteditable="true" placeholder="Suche"></div>
            <span class="button d-flex align-items-center px-2 radi-3">
                <i class="fa-regular fa-magnifying-glass"></i>
            </span>
            <!-- MODAL SEARCH -->
            <div class="modalSearch">

            </div>
            <!-- END MODAL SEARCH -->
        </div>
        <!-- END SEARCH -->
        <!-- ACCOUNT MENU -->
        <div class="accountMenu d-flex align-items-center">
            <div class="button px-2 py-2 bg sky-700 radi-3 cursor-pointer ">
                <span>Ronny</span>
                <span></span>
            </div>
        </div>
        <!-- END ACCOUNT MENU -->
    </header>
    <!-- END HEADER -->
</div>
<!-- END WRAP -->
<!-- JS PLUGINS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>