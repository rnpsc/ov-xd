<!DOCTYPE html>
<html lang="de" >
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Prototype - 11</title>
    <link rel="stylesheet" href="css/grid-orgavision.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/styles.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/colors.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/dev-17562.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/typography.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/tree.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/mediaqueries.css?<?php echo time() ?>">
    <link rel="stylesheet" href="typefaces/protodaysblocks/protodaysblocks.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/areas.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/radi.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/border.css?<?php echo time() ?>">

    <!-- Tiles Apple & MS -->

    <link rel="icon" sizes="144x144" href="img/icon-250.png">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="orgavision 2020">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icon-250.png">

    <meta name="msapplication-TileColor" content="#fff">
    <meta name="msapplication-TileImage" content="img/icon-250.png">

    <!-- PLUGINS -->
    <link rel="stylesheet" href="plugins/legitRippleJS/ripple.min.css">
    <!-- FONTS and ICONS -->
    <link rel="stylesheet" href="typefaces/FiraGO_WEB_1001/FiraGO.css" crossorigin="anonymous">

    <link rel="stylesheet" href="typefaces/fontawesome-6-alpha/all.css" crossorigin="anonymous">
    <link href="https://free.bboxtype.com/embedfonts/?family=FiraMono:400" rel="stylesheet">

    <script>
        // @see https://docs.headwayapp.co/widget for more configuration options.
        var HW_config = {
            selector: ".userNotifications", // CSS selector where to inject the badge
            account:  "7z59Qx"
        }
    </script>
    <script async src="https://cdn.headwayapp.co/widget.js"></script>
</head>
<body class="r <?php echo $_GET['helper'] ?> <?php echo $_GET['tinymce'] ?>">
<div class="outerWrapper">
    <!-- HEADER -->
    <!-- HEADER -->
    <!-- HEADER -->
    <div class="header">
        <div class="topBar">
            <div class="topBar-wrapper ">
                <div class="topBar-leftWrapper">
                    <div class="brandWrapper ">
                        <div class="logo">S</div>
                        <div class="companyName returnCSS" >Sunfire GmbH</div>
                    </div>
                    <div class="search hasTransition">
                        <input type="text" placeholder="Suchen" aria-label="Suche">
                        <div class="searchButton"><i class="far getsLighter fa-search"></i></div>
                    </div>
                </div>
                <div class="account mr-2"  tabindex="0" role="button" >
                    <div class="accountName returnCSS mr-3">Keli Kaiser</div>
                    <div class="profileImage hasProfileImage radi-100">
                        <i class="far getsLighter fa-user-alt d-none"></i>
                    </div>
                    <div class="accountMenu ml-1"><i class="fa-regular fa-angle-down"></i> </div>
                    <div class="userNotificationsX"></div>
                </div>
            </div>
        </div>
        <div class="navigationHeader">
            <div class="navigationHeader-wrapper">
                <div class="navigationHeader-wrapperLeft">
                    <nav class="primaryActions" aria-label="Hauptnavigation">
                        <div class="menuItem active ">
                            <div class="menuItem-label levitate hasTransition " tabindex="0">Handbuch</div>
                            <div class="highlightBorder hasTransition"></div>
                        </div>
                        <div class="menuItem ">
                            <div class="menuItem-label levitate hasTransition " tabindex="0">Neuigkeiten</div>
                            <div class="highlightBorder hasTransition"></div>
                        </div>
                        <div class="menuItem ">
                            <div class="menuItem-label levitate hasTransition " tabindex="0">Ereignisse</div>
                            <div class="highlightBorder hasTransition"></div>
                        </div>
                        <div class="primaryActionsOverflowMenuButton active ">
                            <i class="far getsLighter fa-angle-down"></i> <span class="buttonLabel">Handbuch</span>
                            <div class="highlightBorder hasTransition"></div>
                        </div>
                    </nav>
                    <div class="mode-switch " style="display: flex; align-items: center" tabindex="0" role="button"  >
                        <div class="draft-label hasTransition" role="button"><span class=" hasTransition ">Entwurf</span></div>
                        <div class="read-label hasTransition" role="button"><span class=" hasTransition ">Lesen</span></div>
                    </div>
                </div>

                <div class="secondaryActions ">
                    <div class="menuItem active" tabindex="0">
                        <i class="far getsLighter fa-stream"></i>
                        <span class="menuItem-label">Gliederung</span>
                        <div class="highlightBorder hasTransition"></div>
                    </div>
                    <div class="menuItem" tabindex="0">
                        <i class="far getsLighter fa-check-square"></i>
                        <span class="menuItem-label">Aufgaben</span>
                        <div class="highlightBorder hasTransition"></div>
                    </div>
                    <div class="menuItem" tabindex="0">
                        <i class="far getsLighter fa-info-circle"></i>
                        <span class="menuItem-label">Info</span>
                        <div class="highlightBorder hasTransition"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT AREA -->
    <!-- CONTENT AREA -->
    <!-- CONTENT AREA -->
    <div class="content">
        <div class="contentWrapper">
            <!-- CONTENT AREA LEFT -->
            <!-- CONTENT AREA LEFT -->
            <!-- CONTENT AREA LEFT -->
            <div class="contentWrapper-left">
                <div class="contentWrapper-left-sticky-header">
                    <div class="breadcrumb-modeSwitch-wrapper">
                        <!-- BREADCRUMB -->
                        <div class="breadcrumb"><a href="#">orgavision</a>&nbsp;&nbsp;›&nbsp;&nbsp;<a href="#">Innovation und Technologie</a>&nbsp;&nbsp;›&nbsp;&nbsp;<a href="#">Learning Network</a>&nbsp;&nbsp;›&nbsp;&nbsp;<a href="#">A long title to bring the message home</a>&nbsp;&nbsp;›&nbsp;&nbsp;<a href="#">Some other ABC item</a>&nbsp;&nbsp;›&nbsp;&nbsp;<a href="#" class="active">Neuigkeiten</a>   </div>
                        <!-- BREADCRUMB -->
                        <div class="mode-switch " style="display: flex; align-items: center" tabindex="0" role="button"  >
                            <div class="draft-label hasTransition" role="button"><span class="levitate hasTransition ">Entwurf</span></div>
                            <div class="read-label hasTransition" role="button"><span class="levitate hasTransition ">Lesen</span></div>
                        </div>
                    </div>

                    <!-- ENTERED FOLDER -->
                    <!-- FOLDER ITEM -->
                    <div class="folderItem-holder ">
                        <div class="folderItem entered hasTransition" tabindex="0">
                            <div class="folderItem-icon"><i class="far getsLighter fa-folder-open"></i></div>
                            <div class="folderItem-text">Neuigkeiten </div>
                            <div class="rippleAnimation levitate hasTransition "></div>
                            <div class="folderItem-menu" >
                                <i class="far getsLighter fa-wrench overflow d-none" data-title="Einstellungen" tabindex="0"></i>
                                <i class="far getsLighter fa-globe-africa overflow d-none" data-title="Veröffentlichung starten" tabindex="0"></i>
                                <i class="far getsLighter fa-paper-plane overflow" data-title="Teilen" tabindex="0"></i>
                                <i class="far getsLighter fa-print overflow" data-title="Drucken" tabindex="0"></i>
                                <i class="far fa-ellipsis-h" data-title="Mehr..." tabindex="0"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- CONTENT ITEMS WITHIN LEFT CONTENT AREA -->
                <!-- CONTENT ITEMS WITHIN LEFT CONTENT AREA -->
                <!-- CONTENT ITEMS WITHIN LEFT CONTENT AREA -->
                <div class="contentWrapper-left-scroll-area-barrier">
                    <div class="contentWrapper-left-scroll-area-child">
                        <!-- ARTICLE ITEM -->
                        <div class="article-item hasTransition networkParticipant-item networkParticipant-item-A" tabindex="0" id="person">
                            <i class="far getsLighter fa-plus tertiaryActions first"></i>
                            <i class="far getsLighter fa-plus tertiaryActions second"></i>
                            <div class="article-wrapper-head-body">
                                <div class="head">
                                    <div class="title mui-h3">Ellen Schilling</div>
                                    <div class="ui">
                                        <i class="far getsLighter fa-square-caret-down overflow has-title" data-title="Aufklappen"></i>
                                        <i class="far getsLighter  overflow fa-paper-plane has-title" data-title="Teilen"></i>
                                        <i class="far getsLighter fa-print overflow has-title" data-title="Drucken"></i>
                                        <i class="far fa-ellipsis-h has-title" data-title="Mehr..."></i>
                                    </div>
                                </div>
                                <div class="teasertext networkParticipant-item networkParticipant-item-A memberContact-item closed">
                                    <div class="d-flex flex-grow-1 flex-column-reverse flex-md-row justify-content-stretch align-items-stretch align-items-md-center">
                                        <div class="d-flex flex-grow-1 flex-column">
                                            <div class="teasingRow d-flex flex-row flex-md-row flex-grow-1 flex-wrap">
                                                <div class="memberContact-profileData-wrap mb-2 mb-md-0" >
                                                    <div class="memberContact-profileData-row d-flex  flex-wrap">
                                                        <div class="memberContact-profileData-label d-flex flex-grow-0 justify-content-between align-items-center mr-0 mr-sm-3 flex-basis-none"><span class="nowrap d-none d-sm-flex">E&#8209;Mail  </span><span class="mobileLabel d-flex align-items-center d-sm-none bg night-200 font-night-600 radi-3">E&#8209;Mail </span></div>
                                                        <div class="memberContact-profileData-value d-flex flex-grow-1 justify-content-end justify-content-md-start align-items-center  "><a href="#">ellen.schilling@greenleaf.io</a></div>
                                                    </div>
                                                    <div class="memberContact-profileData-row d-flex  flex-wrap">
                                                        <div class="memberContact-profileData-label d-flex flex-grow-0 justify-content-start align-items-center mr-0 mr-sm-3"><span class="nowrap d-none d-sm-flex">Telefon</span><span class="mobileLabel d-flex align-items-center d-sm-none bg night-200 font-night-600 radi-3">Telefon</span></div>
                                                        <div class="memberContact-profileData-value d-flex flex-grow-1 justify-content-end justify-content-md-start align-items-center  "><span class="nowrap">+49 (0)30 33 44 55 66</span></div>
                                                    </div>
                                                    <div class="memberContact-profileData-row d-flex border-none flex-wrap">
                                                        <div class="memberContact-profileData-label d-flex flex-grow-0 justify-content-start align-items-center mr-0 mr-sm-3" ><span class="nowrap d-none d-sm-flex">Position</span><span class="mobileLabel d-flex align-items-center d-sm-none bg night-200 font-night-600 radi-3">Position</span></div>
                                                        <div class="memberContact-profileData-value d-flex flex-grow-1 justify-content-end justify-content-md-start align-items-center ">Geschäftsführerin</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="memberContact-profileImage-wrap d-flex flex-grow-0 align-content-start justify-content-center justify-content-md-start pt-2 pr-0 pb-2 pl-3 pt-md-1 pr-md-0 pb-md-0 pl-md-3 ml-sm-3 mr-md-0 ">
                                            <div class="memberContact-profileImage "><img src="img/woman-3.png" class="img-fluid radi-8 radi-sm-4"></div>
                                        </div>
                                    </div>
                                    <div class="additionalInformation d-flex flex-sm-row mt-4 flex-grow-1 flex-wrap ">
                                        <div class="additionalInformation-allData flex-grow-1">
                                            <div class="additionalInformation-title mb-2 font-size-140"><span class=" font-weight-500"><i class="fa-regular fa-building mr-2"></i>Geschäftliche Informationen</span></div>
                                            <div class="d-flex flex-grow-1 flex-column">
                                                <div class="teasingRow d-flex flex-row flex-md-row flex-grow-1 flex-wrap">
                                                    <div class="memberContact-profileData-wrap mb-2 mb-md-0" >
                                                        <div class="memberContact-profileData-row d-flex flex-wrap flex-sm-nowrap ">
                                                            <div class="memberContact-profileData-label d-flex flex-grow-0 justify-content-between align-items-center mr-0 mr-sm-3 flex-basis-none"><span class="nowrap d-none d-sm-flex">Abteilung</span><span class="mobileLabel d-flex align-items-center d-sm-none bg night-200 font-night-600 radi-3">Abteilung</span></div>
                                                            <div class="memberContact-profileData-value d-flex flex-grow-1 justify-content-end justify-content-md-start align-items-center  ">Geschäftsführung</div>
                                                        </div>
                                                        <div class="memberContact-profileData-row d-flex flex-wrap">
                                                            <div class="memberContact-profileData-label d-flex flex-grow-0 justify-content-start align-items-center mr-0 mr-sm-3"><span class="nowrap d-none d-sm-flex">Telefax</span><span class="mobileLabel d-flex align-items-center d-sm-none bg night-200 font-night-600 radi-3">Telefax</span></div>
                                                            <div class="memberContact-profileData-value d-flex flex-grow-1 justify-content-end justify-content-md-start align-items-center  "><span class="nowrap">+49 (0)30 33 44 55 67</span></div>
                                                        </div>
                                                        <div class="memberContact-profileData-row d-flex flex-wrap">
                                                            <div class="memberContact-profileData-label d-flex flex-grow-0 justify-content-start align-items-center mr-0 mr-sm-3" ><span class="nowrap d-none d-sm-flex">Mobil</span><span class="mobileLabel d-flex align-items-center d-sm-none bg night-200 font-night-600 radi-3">Mobil</span></div>
                                                            <div class="memberContact-profileData-value d-flex flex-grow-1 justify-content-end justify-content-md-start align-items-center ">+49 (0)171 44 66 88</div>
                                                        </div>
                                                        <div class="memberContact-profileData-row d-flex  flex-wrap">
                                                            <div class="memberContact-profileData-label d-flex flex-grow-0 justify-content-between  mr-0 mr-sm-3 flex-basis-none"><span class="nowrap d-none d-sm-flex">Adresse  </span><span class="mobileLabel d-flex align-items-center d-sm-none bg night-200 font-night-600 radi-3">Adresse </span></div>
                                                            <div class="memberContact-profileData-value d-flex flex-grow-1 justify-content-end justify-content-md-start align-items-center text-align-right text-align-lg-left">Rudi-Dutschke-Str. 202<br>10117, Berlin<br>Deutschland</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="roleInformation additionalInformation d-flex flex-sm-row mt-4 flex-grow-1 flex-wrap ">
                                        <div class="roles-allData flex-grow-1">
                                            <div class="additionalInformation-title mb-3 font-size-140"><span class=" font-weight-500"><i class="fa-regular fa-user-tag mr-2"></i>Zugeordnete Rollen</span></div>
                                            <div class="d-flex flex-grow-1 flex-wrap justify-content-center justify-content-md-start">
                                                <div class="chip radi-20 px-2 py-0 mr-2 mb-2 pointer"><i class="fa-solid fa-user-tag mr-2 d-none"></i>Alle Mitarbeiter</div>
                                                <div class="chip radi-20 px-2 py-0 mr-2 mb-2 pointer"><i class="fa-solid fa-user-tag mr-2 d-none"></i>Arbeitssicherheitsunterweisung 2019</div>
                                                <div class="chip radi-20 px-2 py-0 mr-2 mb-2 pointer"><i class="fa-solid fa-user-tag mr-2 d-none"></i>Design Board</div>
                                                <div class="chip radi-20 px-2 py-0 mr-2 mb-2 pointer"><i class="fa-solid fa-user-tag mr-2 d-none"></i>Ereignismanager</div>
                                                <div class="chip radi-20 px-2 py-0 mr-2 mb-2 pointer"><i class="fa-solid fa-user-tag mr-2 d-none"></i>Geschäftsführung</div>
                                                <div class="chip radi-20 px-2 py-0 mr-2 mb-2 pointer"><i class="fa-solid fa-user-tag mr-2 d-none"></i>Gesellschafter</div>
                                                <div class="chip radi-20 px-2 py-0 mr-2 mb-2 pointer"><i class="fa-solid fa-user-tag mr-2 d-none"></i>Handbuch Administrator</div>
                                                <div class="chip radi-20 px-2 py-0 mr-2 mb-2 pointer"><i class="fa-solid fa-user-tag mr-2 d-none"></i>Marketing Board</div>
                                                <div class="chip radi-20 px-2 py-0 mr-2 mb-2 pointer"><i class="fa-solid fa-user-tag mr-2 d-none"></i>Produktmanagement</div>
                                                <div class="chip radi-20 px-2 py-0 mr-2 mb-2 pointer"><i class="fa-solid fa-user-tag mr-2 d-none"></i>Product Board</div>
                                                <div class="chip radi-20 px-2 py-0 mr-2 mb-2 pointer"><i class="fa-solid fa-user-tag mr-2 d-none"></i>Recruiter</div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                        <!-- ARTICLE ITEM -->
                        <div class="article-item hasTransition networkParticipant-item networkParticipant-item-B" tabindex="0" id="person">
                            <i class="far getsLighter fa-plus tertiaryActions first"></i>
                            <i class="far getsLighter fa-plus tertiaryActions second"></i>
                            <div class="article-wrapper-head-body">
                                <div class="head">
                                    <div class="title mui-h3">Carla Wildner</div>
                                    <div class="ui">
                                        <i class="far getsLighter fa-square-caret-down overflow has-title" data-title="Aufklappen"></i>
                                        <i class="far getsLighter  overflow fa-paper-plane has-title" data-title="Teilen"></i>
                                        <i class="far getsLighter fa-print overflow has-title" data-title="Drucken"></i>
                                        <i class="far fa-ellipsis-h has-title" data-title="Mehr..."></i>
                                    </div>
                                </div>
                                <div class="teasertext networkParticipant-item networkParticipant-item-B memberContact-item closed">
                                    <div class="d-flex flex-grow-1 flex-column-reverse flex-md-row justify-content-stretch align-items-stretch align-items-md-center">
                                        <div class="d-flex flex-grow-1 flex-column">
                                            <div class="teasingRow d-flex flex-row flex-md-row flex-grow-1 flex-wrap">
                                                <div class="memberContact-profileData-wrap mb-2 mb-md-0" >
                                                    <div class="memberContact-profileData-row d-flex  flex-wrap">
                                                        <div class="memberContact-profileData-label d-flex flex-grow-0 justify-content-between align-items-center mr-0 mr-sm-3 flex-basis-none"><span class="nowrap d-none d-sm-flex">E&#8209;Mail  </span><span class="mobileLabel d-flex align-items-center d-sm-none bg night-200 font-night-600 radi-3 ">E&#8209;Mail </span></div>
                                                        <div class="memberContact-profileData-value d-flex flex-grow-1 justify-content-end justify-content-md-start align-items-center  "><a href="#">carla.wildner@supplierofallgoodsataplacefarfarfaraway.com</a></div>
                                                    </div>
                                                    <div class="memberContact-profileData-row d-flex  flex-wrap">
                                                        <div class="memberContact-profileData-label d-flex flex-grow-0 justify-content-start align-items-center mr-0 mr-sm-3"><span class="nowrap d-none d-sm-flex">Telefon</span><span class="mobileLabel d-flex align-items-center d-sm-none bg night-200 font-night-600 radi-3">Telefon</span></div>
                                                        <div class="memberContact-profileData-value d-flex flex-grow-1 justify-content-end justify-content-md-start align-items-center  "><span class="nowrap">+01 (0)22 33 44 55 77</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="memberContact-profileImage-wrap d-flex flex-grow-0 align-content-start justify-content-center justify-content-md-start pt-2 pr-0 pb-2 pl-3 pt-md-1 pr-md-0 pb-md-0 pl-md-3 ml-sm-3 mr-md-0 ">
                                            <div class="memberContact-profileImage" ><img src="img/user-profile-card-placeholder-grey.svg" class="radi-8 radi-sm-4 img-fluid"> </div>
                                        </div>
                                    </div>
                                    <div class="additionalInformation d-flex flex-sm-row mt-4 flex-grow-1 flex-wrap ">
                                        <div class="additionalInformation-allData flex-grow-1">
                                            <div class="additionalInformation-title mb-2 font-size-140"><span class=" font-weight-500"><i class="fa-regular fa-building mr-2"></i>Geschäftliche Informationen</span></div>
                                            <div class="d-flex flex-grow-1 flex-column">
                                                <div class="teasingRow d-flex flex-row flex-md-row flex-grow-1 flex-wrap">
                                                    <div class="memberContact-profileData-wrap mb-2 mb-md-0" >
                                                        <div class="memberContact-profileData-row d-flex flex-wrap flex-sm-nowrap ">
                                                            <div class="memberContact-profileData-value d-flex flex-grow-1 justify-content-end justify-content-md-start align-items-center  ">Nicht erfasst</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="additionalInformation d-flex flex-sm-row mt-4 flex-grow-1 flex-wrap ">
                                        <div class="additionalInformation-allData flex-grow-1">
                                            <div class="additionalInformation-title mb-2 font-size-140"><span class=" font-weight-500"><i class="fa-regular fa-note mr-2"></i>Beschreibung</span></div>
                                            <div class="d-flex flex-grow-1 flex-column">
                                                <div class="teasingRow d-flex flex-row flex-md-row flex-grow-1 flex-wrap">
                                                    <div class="memberContact-profileData-wrap mb-2 mb-md-0" >
                                                        <div class="memberContact-profileData-row d-flex flex-wrap flex-sm-nowrap ">
                                                            <div class="memberContact-profileData-value d-flex flex-grow-1 justify-content-end justify-content-md-start align-items-center  ">Unsere AnsprechpartnerIn für Zulieferer aus Australien.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="roleInformation additionalInformation d-flex flex-sm-row mt-4 flex-grow-1 flex-wrap ">
                                        <div class="roles-allData flex-grow-1">
                                            <div class="additionalInformation-title mb-3 font-size-140"><span class=" font-weight-500"><i class="fa-regular fa-user-tag mr-2"></i>Zugeordnete Rollen</span></div>
                                            <div class="d-flex flex-grow-1 flex-wrap justify-content-center justify-content-md-start">
                                                <div class="chip radi-20 px-2 py-0 mr-2 mb-2 pointer disabled"><i class="fa-solid fa-user-tag mr-2 d-none"></i>Keine</div>

                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                        <!-- ARTICLE ITEM -->
                        <div class="article-item hasTransition networkParticipant-item networkParticipant-item-A" tabindex="0" id="person">
                            <i class="far getsLighter fa-plus tertiaryActions first"></i>
                            <i class="far getsLighter fa-plus tertiaryActions second"></i>
                            <div class="article-wrapper-head-body">
                                <div class="head">
                                    <div class="title mui-h3">Dr. Malin Quist</div>
                                    <div class="ui">
                                        <i class="far getsLighter fa-square-caret-down overflow has-title" data-title="Aufklappen"></i>
                                        <i class="far getsLighter  overflow fa-paper-plane has-title" data-title="Teilen"></i>
                                        <i class="far getsLighter fa-print overflow has-title" data-title="Drucken"></i>
                                        <i class="far fa-ellipsis-h has-title" data-title="Mehr..."></i>
                                    </div>
                                </div>
                                <div class="teasertext networkParticipant-item networkParticipant-item-A memberContact-item closed">
                                    <div class="d-flex flex-grow-1 flex-column-reverse flex-md-row justify-content-stretch align-items-stretch align-items-md-center">
                                        <div class="d-flex flex-grow-1 flex-column">
                                            <div class="teasingRow d-flex flex-row flex-md-row flex-grow-1 flex-wrap">
                                                <div class="memberContact-profileData-wrap mb-2 mb-md-0" >
                                                    <div class="memberContact-profileData-row d-flex  flex-wrap">
                                                        <div class="memberContact-profileData-label d-flex flex-grow-0 justify-content-between align-items-center mr-0 mr-sm-3 flex-basis-none"><span class="nowrap d-none d-sm-flex">E&#8209;Mail  </span><span class="mobileLabel d-flex align-items-center d-sm-none bg night-200 font-night-600 radi-3">E&#8209;Mail </span></div>
                                                        <div class="memberContact-profileData-value d-flex flex-grow-1 justify-content-end justify-content-md-start align-items-center  "><a href="#">malin.quist@greenleaf.io</a></div>
                                                    </div>
                                                    <div class="memberContact-profileData-row d-flex  flex-wrap">
                                                        <div class="memberContact-profileData-label d-flex flex-grow-0 justify-content-start align-items-center mr-0 mr-sm-3"><span class="nowrap d-none d-sm-flex">Telefon</span><span class="mobileLabel d-flex align-items-center d-sm-none bg night-200 font-night-600 radi-3">Telefon</span></div>
                                                        <div class="memberContact-profileData-value d-flex flex-grow-1 justify-content-end justify-content-md-start align-items-center  "><span class="nowrap">+49 (0)40 22 33 44 55</span></div>
                                                    </div>
                                                    <div class="memberContact-profileData-row d-flex border-none flex-wrap">
                                                        <div class="memberContact-profileData-label d-flex flex-grow-0 justify-content-start align-items-center mr-0 mr-sm-3" ><span class="nowrap d-none d-sm-flex">Position</span><span class="mobileLabel d-flex align-items-center d-sm-none bg night-200 font-night-600 radi-3">Position</span></div>
                                                        <div class="memberContact-profileData-value d-flex flex-grow-1 justify-content-end justify-content-md-start align-items-center ">CIO</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="memberContact-profileImage-wrap d-flex flex-grow-0 align-content-start justify-content-center justify-content-md-start pt-2 pr-0 pb-2 pl-3 pt-md-1 pr-md-0 pb-md-0 pl-md-3 ml-sm-3 mr-md-0 ">
                                            <div class="memberContact-profileImage "><img src="img/lian-mundo.jpg" class="img-fluid radi-8 radi-sm-4"></div>
                                        </div>
                                    </div>
                                    <div class="additionalInformation d-flex flex-sm-row mt-4 flex-grow-1 flex-wrap ">
                                        <div class="additionalInformation-allData flex-grow-1">
                                            <div class="additionalInformation-title mb-2 font-size-140"><span class=" font-weight-500"><i class="fa-regular fa-building mr-2"></i>Geschäftliche Informationen</span></div>
                                            <div class="d-flex flex-grow-1 flex-column">
                                                <div class="teasingRow d-flex flex-row flex-md-row flex-grow-1 flex-wrap">
                                                    <div class="memberContact-profileData-wrap mb-2 mb-md-0" >
                                                        <div class="memberContact-profileData-row d-flex flex-wrap flex-sm-nowrap ">
                                                            <div class="memberContact-profileData-label d-flex flex-grow-0 justify-content-between align-items-center mr-0 mr-sm-3 flex-basis-none"><span class="nowrap d-none d-sm-flex">Abteilung</span><span class="mobileLabel d-flex align-items-center d-sm-none bg night-200 font-night-600 radi-3">Abteilung</span></div>
                                                            <div class="memberContact-profileData-value d-flex flex-grow-1 justify-content-end justify-content-md-start align-items-center  ">Geschäftsführung</div>
                                                        </div>
                                                        <div class="memberContact-profileData-row d-flex flex-wrap flex-sm-nowrap ">
                                                            <div class="memberContact-profileData-label d-flex flex-grow-0 justify-content-between align-items-center mr-0 mr-sm-3 flex-basis-none"><span class="nowrap d-none d-sm-flex">Abteilung 2</span><span class="mobileLabel d-flex align-items-center d-sm-none bg night-200 font-night-600 radi-3">Abteilung 2</span></div>
                                                            <div class="memberContact-profileData-value d-flex flex-grow-1 justify-content-end justify-content-md-start align-items-center  ">Kommunikation</div>
                                                        </div>
                                                        <div class="memberContact-profileData-row d-flex flex-wrap flex-sm-nowrap ">
                                                            <div class="memberContact-profileData-label d-flex flex-grow-0 justify-content-between align-items-center mr-0 mr-sm-3 flex-basis-none"><span class="nowrap d-none d-sm-flex">Standort</span><span class="mobileLabel d-flex align-items-center d-sm-none bg night-200 font-night-600 radi-3">Standort</span></div>
                                                            <div class="memberContact-profileData-value d-flex flex-grow-1 justify-content-end justify-content-md-start align-items-center  ">Hamburg</div>
                                                        </div>
                                                        <div class="memberContact-profileData-row d-flex flex-wrap">
                                                            <div class="memberContact-profileData-label d-flex flex-grow-0 justify-content-start align-items-center mr-0 mr-sm-3"><span class="nowrap d-none d-sm-flex">Telefax</span><span class="mobileLabel d-flex align-items-center d-sm-none bg night-200 font-night-600 radi-3">Telefax</span></div>
                                                            <div class="memberContact-profileData-value d-flex flex-grow-1 justify-content-end justify-content-md-start align-items-center  "><span class="nowrap">+49 (0)40 33 44 55 67</span></div>
                                                        </div>
                                                        <div class="memberContact-profileData-row d-flex flex-wrap">
                                                            <div class="memberContact-profileData-label d-flex flex-grow-0 justify-content-start align-items-center mr-0 mr-sm-3" ><span class="nowrap d-none d-sm-flex">Mobil</span><span class="mobileLabel d-flex align-items-center d-sm-none bg night-200 font-night-600 radi-3">Mobil</span></div>
                                                            <div class="memberContact-profileData-value d-flex flex-grow-1 justify-content-end justify-content-md-start align-items-center ">+49 (0)171 22 33 44</div>
                                                        </div>
                                                        <div class="memberContact-profileData-row d-flex flex-wrap">
                                                            <div class="memberContact-profileData-label d-flex flex-grow-0 justify-content-start align-items-center mr-0 mr-sm-3" ><span class="nowrap d-none d-sm-flex">Twitter @ </span><span class="mobileLabel d-flex align-items-center d-sm-none bg night-200 font-night-600 radi-3">Instant Messenger</span></div>
                                                            <div class="memberContact-profileData-value d-flex flex-grow-1 justify-content-end justify-content-md-start align-items-center ">Twitter @ mquist</div>
                                                        </div>
                                                        <div class="memberContact-profileData-row d-flex  flex-wrap">
                                                            <div class="memberContact-profileData-label d-flex flex-grow-0 justify-content-between  mr-0 mr-sm-3 flex-basis-none"><span class="nowrap d-none d-sm-flex">Adresse</span><span class="mobileLabel d-flex align-items-center d-sm-none bg night-200 font-night-600 radi-3">Adresse </span></div>
                                                            <div class="memberContact-profileData-value d-flex flex-grow-1 justify-content-end justify-content-md-start align-items-center text-align-right text-align-sm-left">Am Pier 1a<br>20095, Hamburg<br>Deutschland</div>
                                                        </div>
                                                        <div class="memberContact-profileData-row d-flex flex-wrap">
                                                            <div class="memberContact-profileData-label d-flex flex-grow-0 justify-content-start align-items-center mr-0 mr-sm-3" ><span class="nowrap d-none d-sm-flex">The Other Instant Messenger</span><span class="mobileLabel d-flex align-items-center d-sm-none bg night-200 font-night-600 radi-3">TheOtherOtherInstantMessanger (Bsp: langes Label)</span></div>
                                                            <div class="memberContact-profileData-value d-flex flex-grow-1 justify-content-end justify-content-md-start align-items-center ">@ m.quist</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="roleInformation additionalInformation d-flex flex-sm-row mt-4 flex-grow-1 flex-wrap ">
                                        <div class="roles-allData flex-grow-1">
                                            <div class="additionalInformation-title mb-3 font-size-140"><span class=" font-weight-500"><i class="fa-regular fa-user-tag mr-2"></i>Zugeordnete Rollen</span></div>
                                            <div class="d-flex flex-grow-1 flex-wrap justify-content-center justify-content-md-start">
                                                <div class="chip radi-20 px-2 py-0 mr-2 mb-2 pointer"><i class="fa-solid fa-user-tag mr-2 d-none"></i>All Members</div>
                                                <div class="chip radi-20 px-2 py-0 mr-2 mb-2 pointer"><i class="fa-solid fa-user-tag mr-2 d-none"></i>Boardgame Geeks Board</div>
                                                <div class="chip radi-20 px-2 py-0 mr-2 mb-2 pointer"><i class="fa-solid fa-user-tag mr-2 d-none"></i>Com Board</div>
                                                <div class="chip radi-20 px-2 py-0 mr-2 mb-2 pointer"><i class="fa-solid fa-user-tag mr-2 d-none"></i>Future Events</div>
                                                <div class="chip radi-20 px-2 py-0 mr-2 mb-2 pointer"><i class="fa-solid fa-user-tag mr-2 d-none"></i>Jedi Recruiter</div>
                                                <div class="chip radi-20 px-2 py-0 mr-2 mb-2 pointer"><i class="fa-solid fa-user-tag mr-2 d-none"></i>Lantern Board</div>

                                                <div class="chip radi-20 px-2 py-0 mr-2 mb-2 pointer"><i class="fa-solid fa-user-tag mr-2 d-none"></i>Lecture Department</div>
                                                <div class="chip radi-20 px-2 py-0 mr-2 mb-2 pointer"><i class="fa-solid fa-user-tag mr-2 d-none"></i>Many Hats</div>
                                                <div class="chip radi-20 px-2 py-0 mr-2 mb-2 pointer"><i class="fa-solid fa-user-tag mr-2 d-none"></i>Peoples Board</div>

                                                <div class="chip radi-20 px-2 py-0 mr-2 mb-2 pointer"><i class="fa-solid fa-user-tag mr-2 d-none"></i>The Board Hard to Pronounce</div>

                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>

                        <!-- ARTICLE ITEM -->
                        <div class="article-item hasTransition" tabindex="0">
                            <i class="far getsLighter fa-plus tertiaryActions first"></i>
                            <i class="far getsLighter fa-plus tertiaryActions second"></i>
                            <div class="article-wrapper-head-body">
                                <div class="head">
                                    <div class="title mui-h3">Schicht für Schicht zum fertigen Bauteil</div>
                                    <div class="ui">
                                        <i class="far getsLighter fa-eye overflow has-title" data-title="Ansehen"></i>
                                        <i class="far getsLighter fa-paper-plane overflow has-title" data-title="Teilen"></i>
                                        <i class="far getsLighter fa-pencil d-none overflow has-title" data-title="Bearbeiten"></i>
                                        <i class="far getsLighter fa-comments-alt overflow has-title" data-title="Kommentieren"></i>
                                        <i class="far fa-ellipsis-h has-title" data-title="Mehr..."></i>
                                    </div>
                                </div>
                                <div class="teasertext">Bei der Produktentstehung des DHAS haben die Entwickler von der Tierwelt gelernt: Wie die Schwanzflosse eines Fisches knickt die Struktur mit Fin Ray Effect® bei seitlichem Druck nicht weg, sondern wölbt sich um den Druckpunkt herum. Zwei flexible Bänder bilden die Grundstruktur des Greiffingers. Sie sind über Zwischenstege miteinander verbunden. Beim Greifen passt sich der stabile, aber gleichzeitig nachgiebige Greifer aus Polyurethan der Kontur eines Werkstückes problemlos an. Eine Kombination aus zwei oder mehreren DHAS Greiffingern schließt sich sanft um die Gegenstände und hält sie sicher, ohne sie zu beschädigen. Besonders geeignet ist der DHAS daher zum Greifen empfindlicher Objekte mit unregelmäßiger Oberfläche. Beispielsweise findet er in der Lebensmittelindustrie beim Sortieren von Obst und Gemüse Anwendung.</div>
                            </div>
                        </div>
                        <!-- FOLDER ITEM -->
                        <div class="folderItem-holder ">
                            <i class="far getsLighter fa-plus tertiaryActions first"></i>
                            <i class="far getsLighter fa-plus tertiaryActions second"></i>
                            <div class="folderItem hasTransition" tabindex="0">
                                <div class="rippleAnimation levitate hasTransition "></div>
                                <div class="folderItem-icon"><i class="far getsLighter fa-folder"></i></div>
                                <div class="folderItem-text">Nachrichten für neue Mitarbeiter </div>
                                <div class="folderItem-menu">
                                    <i class="far getsLighter fa-paper-plane overflow" data-title="Teilen"></i>
                                    <i class="far getsLighter fa-print overflow" data-title="Drucken"></i>
                                    <i class="far getsLighter fa-pencil d-none overflow" data-title="Bearbeiten"></i>
                                    <i class="far getsLighter fa-comments-alt overflow" data-title="Kommentieren"></i>
                                    <i class="far getsLighter fa-folder-open overflow" data-title="Öffnen"></i>
                                    <i class="far fa-ellipsis-h" data-title="Mehr..."></i>
                                </div>
                            </div>
                        </div>
                        <!-- FOLDER ITEM -->
                        <div class="folderItem-holder contentItem">
                            <i class="far getsLighter fa-plus tertiaryActions first"></i>
                            <i class="far getsLighter fa-plus tertiaryActions second"></i>
                            <div class="folderItem hasTransition" tabindex="0">
                                <div class="rippleAnimation levitate hasTransition "></div>
                                <div class="folderItem-icon"><i class="far getsLighter fa-folder"></i></div>
                                <div class="folderItem-text">Lernzentrum Play {Kommentieren am Ordner} </div>
                                <div class="folderItem-menu">
                                    <i class="far getsLighter fa-paper-plane overflow" data-title="Teilen"></i>
                                    <i class="far getsLighter fa-print overflow" data-title="Drucken"></i>
                                    <i class="far getsLighter fa-pencil d-none overflow" data-title="Bearbeiten"></i>
                                    <i class="far getsLighter fa-comments-alt overflow toggleComments hasTransition" data-title="Kommentieren"></i>
                                    <i class="far getsLighter fa-folder-open overflow" data-title="Öffnen"></i>
                                    <i class="far fa-ellipsis-h" data-title="Mehr..."></i>
                                </div>
                            </div>
                            <div class="comments hide hasTransition">
                                <div class="commentTitle"></div>
                                <div class="commentBodyWrap">
                                    <div class="commentBodyColumn-1">
                                        <div class="profileImage hasProfileImage"></div>
                                    </div>
                                    <div class="commentBodyColumn-2">
                                        <div class="commentArea hasTransition" contentEditable="true" placeholder="Kommentar hinzufügen"></div>
                                        <div class="commentActions">
                                            <div class="confirmButton commentBtn levitate hasTransition  legitRipple">Kommentieren</div>
                                            <div class="cancelButton commentBtn ">Abbrechen</div>
                                            <form>
                                                <select class="commentCause">
                                                    <option>Kommentar</option>
                                                    <option>Hinweis</option>
                                                    <option>Korrektur</option>
                                                    <option>---</option>
                                                    <option>Fehler unkritisch</option>
                                                    <option>Fehler kritisch</option>
                                                    <option>Fehler sehr kritisch</option>
                                                </select>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ARTICLE ITEM -->
                        <div class="article-item hasTransition" tabindex="0">
                            <i class="far getsLighter fa-plus tertiaryActions first" ></i>
                            <i class="far getsLighter fa-plus tertiaryActions second" title="explode on hide"></i>
                            <div class="article-wrapper-head-body">
                                <div class="head">
                                    <div class="title mui-h3">Übergeben von schwebenden Objekten</div>
                                    <div class="ui">
                                        <i class="far getsLighter fa-eye overflow has-title" data-title="Ansehen"></i>
                                        <i class="far getsLighter fa-paper-plane overflow has-title" data-title="Teilen"></i>
                                        <i class="far getsLighter fa-pencil d-none overflow has-title" data-title="Bearbeiten"></i>
                                        <i class="far getsLighter fa-comments-alt overflow has-title" data-title="Kommentieren"></i>
                                        <i class="far fa-ellipsis-h has-title" data-title="Mehr..."></i>
                                    </div>
                                </div>
                                <div class="teasertext">
                                    <p><b>Berührungsloser Transport über Systemgrenzen hinweg</b><br>
                                        Durch die schwebende Übergabe von Objekten über Systemgrenzen hinweg sind nicht nur längere Prozessketten ohne Berührung realisierbar. Sie ermöglicht auch einen wartungsarmen Einsatz in Umgebungen mit strengsten Reinheitsanforderungen.</p>
                                    <p>Mehrere Funktionen nur einem Kryostaten: das SupraMultitool veranschaulicht, wie mit einem einzigen System gleichzeitig verschiedene Automatisierungsaufgaben flexibel und berührungslos realisiert werden können. Zu sehen sind der stabile, lineare Transport und die sichere, kontaktlose Drehbewegung eines Werkstückträgers.

                                        SupraMultitool: mehrere Funktionen mit nur einem System
                                        Der Aufbau zeigt anschaulich die Vorteile einer supraleitenden Lagerung hinsichtlich Stabilität und Zuverlässigkeit gegenüber elektromagnetischen Lösungen. Im Exponat SupraMultitool setzt ein Handlingsystem einen Werkstückträger nacheinander auf zwei unterschiedliche Magnete mit verschiedenen Lagerungen und Bewegungen, um die flexiblen Anwendungsmöglichkeiten zu demonstrieren.</p>
                                </div>
                            </div>
                        </div>
                        <!-- ARTICLE ITEM -->
                        <div class="article-item hasTransition" tabindex="0">
                            <i class="far getsLighter fa-plus tertiaryActions first" ></i>
                            <i class="far getsLighter fa-plus tertiaryActions second" title="explode on hide"></i>
                            <div class="article-wrapper-head-body">
                                <div class="head">
                                    <div class="title mui-h3">Verlustfreier Stromtransport {Bild}</div>
                                    <div class="ui">
                                        <i class="far getsLighter fa-eye overflow has-title" data-title="Ansehen"></i>
                                        <i class="far getsLighter fa-paper-plane overflow has-title" data-title="Teilen"></i>
                                        <i class="far getsLighter fa-pencil d-none overflow has-title" data-title="Bearbeiten"></i>
                                        <i class="far getsLighter fa-comments-alt overflow has-title" data-title="Kommentieren"></i>
                                        <i class="far fa-ellipsis-h has-title" data-title="Mehr..."></i>
                                    </div>
                                </div>
                                <div class="teasertext">
                                    <p>
                                        <b>Niedriger Energiebedarf</b><br>
                                        Der Antrieb nutzt den Effekt, dass Strom innerhalb eines entsprechend gekühlten Supraleiters verlustfrei transportiert wird. Dadurch lässt sich mit sehr hohen Strömen ein starkes Magnetfeld erzeugen. Der SupraMotor hat eine große Überlastfähigkeit und eignet sich gut für Anwendungen im Dauerbetrieb. Dank der widerstandsfreien, supraleitenden Spulen ist es zudem fast ausgeschlossen, dass er überhitzt.
                                    </p>
                                    <img src="img/00224-supramotor-2140x940px.jpg" width="100%" height="auto" style="margin-bottom: 0.375rem;border-radius: 2px;">
                                    <p>
                                        Besonders effektiv arbeitet der Motor bei niedrigen Drehzahlen mit sehr hohen Drehmomenten. Muss eine Last gehalten werden, verbraucht der Antrieb selbst bei maximalem Haltemoment keine Energie. Auch insgesamt ist der Energiebedarf gering: Während die Ausgangsleistung des Motors im zweistelligen Kilowatt-Bereich liegt, benötigt er für die Kühlung nur Energie im niedrigen dreistelligen Wattbereich.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- ARTICLE ITEM -->
                        <div class="article-item hasTransition" tabindex="0">
                            <i class="far getsLighter fa-plus tertiaryActions first" ></i>
                            <i class="far getsLighter fa-plus tertiaryActions second" title="explode on hide"></i>
                            <div class="article-wrapper-head-body">
                                <div class="article-meta">
                                    <div class="articleMeta-stacked">
                                        <div class="meta-wrap-left">
                                            <span class="status-message">Bearbeitung abgeschlossen</span>
                                            <span class="timeStamp">seit 06.09.2021 14:14</span>
                                        </div>
                                        <span class="version">Version 2.3</span>
                                    </div>
                                    <div class="articleMeta-stacked overdue ">
                                        <div class="meta-wrap-left ">
                                            <span class="status-message">In Kenntnisnahme</span>
                                            <span class="timeStamp">überfällig seit: 03.06.2021 10:10</span>
                                            <span class="openTasks">0/2 Aufgaben</span>
                                        </div>
                                        <span class="version">Version 2.2</span>
                                    </div>
                                </div>
                                <div class="head">
                                    <div class="title mui-h3">Das „plug & work“-Prinzip {Artikel mit Meta-Informationen zu Bearbeitung/Kenntnisnahme}</div>
                                    <div class="ui">
                                        <i class="far getsLighter fa-eye overflow has-title" data-title="Ansehen"></i>
                                        <i class="far getsLighter fa-paper-plane overflow has-title" data-title="Teilen"></i>
                                        <i class="far getsLighter fa-pencil d-none overflow has-title" data-title="Bearbeiten"></i>
                                        <i class="far getsLighter fa-comments-alt overflow has-title" data-title="Kommentieren"></i>
                                        <i class="far fa-ellipsis-h has-title" data-title="Mehr..."></i>
                                    </div>
                                </div>
                                <div class="teasertext">
                                    <p><b>Simplified Motion Series – So einfach wie nur möglich</b><br>
                                        Mit der Simplified Motion Series bieten wir sechs verschiedene elektrische Lösungen, die genau nach dem „plug & work“-Prinzip funktionieren. Die Integration erfolgt über zwei Standard-Rundsteckverbinder – ohne jede Software und ohne dass Systemparameter geladen oder eingegeben werden müssen. Sie erfüllen einfache Bewegungen mit einer reduzierten Auswahl an Parametern, die direkt auf dem Antrieb, aber auch aus der Ferne über IO-Link eingestellt werden können.

                                        Die Bewegung wird direkt auf dem Antrieb durch eine integrierte Controllereinheit ausgeführt, was wiederum Platz im Schaltschrank spart. Durch die Kombination von integriertem Motor mit Controller und Antrieb werden die Produkte als vollständig vormontierte und vorparametrierte Einheiten angeboten.

                                        Mit ihrer vereinfachten Funktionalität sind die Antriebe geeignet für einfache Bewegungen zwischen zwei mechanischen Endlagen. Zusätzlich bieten sie optimierte Bewegungs-Charakteristiken wie gedämpftes Aus- und Einfahren in die Endlagen oder eine vereinfachte Press- und Klemmfunktion.
                                    </p>
                                    <p>
                                        <b>Anlagen programmieren, konfigurieren und vernetzen</b> <br>
                                        Die Inbetriebnahme einer Fertigungslinie oder Maschine kann mit erheblichem Zeitaufwand und Kosten verbunden sein. Vor allem bei elektrischen Anwendungen müssen die Mitarbeiter Fachwissen und Software Know-How mitbringen. Das ist gerade bei Applikationen, die einfache Bewegungen ausführen, zu umständlich. Einige Produkte kommen jedoch ganz ohne eigene Software aus. Möglich macht es das sogenannte „plug & work“-Prinzip.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- ARTICLE ITEM -->
                        <div class="article-item hasTransition" tabindex="0">
                            <i class="far getsLighter fa-plus tertiaryActions first" ></i>
                            <i class="far getsLighter fa-plus tertiaryActions second" title="explode on hide"></i>
                            <div class="article-wrapper-head-body">
                                <div class="article-meta hasTransition">
                                    <div class="articleMeta-stacked">
                                        <div class="meta-wrap-left">
                                            <span class="timeStamp">Bis 06.08.2021 11:22</span>
                                            <span class="button confirm">Zur Kenntnis nehmen</span>
                                        </div>
                                        <span class="version">Version 9.3</span>
                                    </div>
                                </div>
                                <div class="head">
                                    <div class="title mui-h3">Ausbau der Prüfkapazität mit Laborautomatisierung {Tabelle}</div>
                                    <div class="ui">
                                        <i class="far getsLighter fa-eye overflow has-title" data-title="Ansehen"></i>
                                        <i class="far getsLighter fa-paper-plane overflow has-title" data-title="Teilen"></i>
                                        <i class="far getsLighter fa-pencil d-none overflow has-title" data-title="Bearbeiten"></i>
                                        <i class="far getsLighter fa-comments-alt overflow has-title" data-title="Kommentieren"></i>
                                        <i class="far fa-ellipsis-h has-title" data-title="Mehr..."></i>
                                    </div>
                                </div>
                                <div class="teasertext">
                                    <p>
                                        <b>Berührungsloser Transport über Systemgrenzen hinweg</b><br>
                                        Technische Lösungen helfen dabei, die Testkapazitäten deutlich zu steigern. Das große Portfolio an Liquid-Handling-Lösungen ermöglicht Maschinenbauern für Laborgeräte und Diagnostikunternehmen, skalierbare In-vitro-Diagnostik (IVD)-Geräte mit hohem Durchsatz zu bauen. Mit Komponenten und intelligenten Subsystemen für das Labor bieten wir Automatisierungslösungen für typische Test-Workflows wie Handling von Probenröhrchen, Pipettieren und Dispensieren von Pufferlösungen oder RNA.
                                    </p>
                                    <div style="overflow-x:scroll; ">
                                        <table class="table table-bordered table-striped text-small mx-auto" style=" white-space: nowrap; ">
                                            <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>TH 2</th>
                                                <th>TH 3</th>
                                                <th>TH 4</th>
                                                <th>TH 5</th>
                                                <th>TH 15</th>
                                                <th>TH 25</th>
                                                <th>TH 35</th>
                                                <th>TH 45</th>
                                                <th>TH 55</th>
                                                <th>TH 65</th>
                                                <th>TH 75</th>
                                                <th>TH 85</th>
                                                <th>TH 95</th>
                                                <th>TH 105</th>
                                                <th>TH 205</th>
                                                <th>TH 205</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>190728</td>
                                                <td>89393</td>
                                                <td>93893</td>
                                                <td>84993</td>
                                                <td>38912</td>
                                                <td>23499</td>
                                                <td>92993</td>
                                                <td>08843</td>
                                                <td>19945</td>
                                                <td>98478</td>
                                                <td>44883</td>
                                                <td>38894</td>
                                                <td>38893</td>
                                                <td>89438</td>
                                                <td>38834</td>
                                                <td>38993</td>
                                                <td>56785</td>
                                            </tr>
                                            <tr>
                                                <td>190728</td>
                                                <td>84888</td>
                                                <td>29934</td>
                                                <td>38849</td>
                                                <td>38849</td>
                                                <td>28849</td>
                                                <td>28894</td>
                                                <td>38894</td>
                                                <td>38894</td>
                                                <td>19949</td>
                                                <td>28884</td>
                                                <td>38845</td>
                                                <td>10984</td>
                                                <td>99849</td>
                                                <td>28885</td>
                                                <td>38885</td>
                                                <td>18849</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ARTICLE ITEM -->
                        <div class="article-item contentItem hasTransition" id="tinymceFormats" tabindex="0">
                            <i class="far getsLighter fa-plus tertiaryActions first" ></i>
                            <i class="far getsLighter fa-plus tertiaryActions second" title="explode on hide"></i>
                            <div class="article-wrapper-head-body">
                                <div class="head">
                                    <div class="title mui-h3">Bionic Learning Network {Formate, Kommentieren am Artikel}</div>
                                    <div class="ui">
                                        <i class="far getsLighter fa-eye overflow has-title" data-title="Ansehen"></i>
                                        <i class="far getsLighter fa-paper-plane overflow has-title" data-title="Teilen"></i>
                                        <i class="far getsLighter fa-pencil d-none overflow has-title" data-title="Bearbeiten"></i>
                                        <i class="far getsLighter fa-comments-alt overflow has-title toggleComments" data-title="Kommentieren"></i>
                                        <i class="far fa-ellipsis-h has-title" data-title="Mehr..."></i>
                                    </div>
                                </div>
                                <div class="teasertext">
                                    <h1>Intelligentes Zusammenspiel verschiedenster Komponenten<br><span class="pre">{h1} font-size: 26px; line-height: 31px;  font-weight: 600; letter-spacing: -.24px;</span></h1>
                                    <h2>BionicFinWave — Unterwasserroboter mit einzigartigem Flossenantrieb<br><span class="pre">{h2} font-size: 22px; line-height: 28px; font-weight: 600; letter-spacing: .16px;</span></h2>

                                    <h3>Automatisierungslösungen für die Prozessindustrie | AquaJellies 2.0
                                        Autonomes Verhalten im Kollektiv<br><span class="pre">{h3} font-size: 18px; line-height: 25px; font-weight: 600; letter-spacing: .24px;</span>

                                    </h3>
                                    <p class="leadtext">
                                        Meeresstrudelwurm, Sepia und Großnilhecht haben eines gemeinsam: Um sich fortzubewegen, erzeugen sie mit ihren Längsflossen eine durchgängige Welle, die sich entlang ihrer gesamten Länge voranschiebt. Mit dieser so genannten undulierenden Flossenbewegung manövriert sich auch der BionicFinWave durch ein Rohrsystem aus Acrylglas. Dabei kann der autonome Unterwasserroboter über Funk mit der Außenwelt kommunizieren und Daten – wie die erfassten Sensorwerte für Temperatur und Druck – an ein Tablet übertragen.<br>
                                        <span class="pre">{h3.leadtext} font-size: 18px; line-height: 28px; font-weight: 400; letter-spacing: -.12px;</span>
                                    </p>

                                    <p class="mui-body1">
                                        Die Längsflossen der natürlichen Vorbilder verlaufen von Kopf bis Schwanz und befinden sich entweder am Rücken, am Bauch oder an beiden Seiten des Körpers. Mit der wellenförmigen Bewegung der Flossen schieben die Fische das Wasser nach hinten, wodurch ein Vorwärtsschub entsteht. Umgekehrt können die Tiere so auch rückwärts schwimmen und je nach Wellenmuster für Auftrieb, Abtrieb oder gar Seitenschub sorgen.<br>
                                        <span class="pre">{body} font-size: 15px; line-height: 25px; font-weight: 400;  letter-spacing: -0.12px;</span>
                                    </p>
                                    <p class="mui-h4">
                                        Flexible Silikonflossen für naturgetreue Schwimmmanöver<br>
                                        <span class="pre">{h4} font-size: 15px; line-height: 25px; font-weight: 600; letter-spacing: 0.16px; </span>
                                    </p>
                                    <p class="mui-body1">
                                        Der BionicFinWave nutzt zur Fortbewegung seine beiden Seitenflossen. Sie sind komplett aus Silikon gegossen und kommen ohne Verstrebungen oder andere Stützelemente aus. Dadurch sind sie äußerst nachgiebig und können so die flüssigen Wellenbewegungen der biologischen Vorbilder naturgetreu umsetzen.
                                    </p>
                                    <p class="mui-body1">
                                        Dazu sind die beiden Flossen links und rechts jeweils an neun kleinen Hebelarmen befestigt. Diese wiederum werden von zwei Servomotoren angetrieben, die im Körper des Unterwasserroboters sitzen. Zwei anliegende Kurbelwellen übertragen die Kraft auf die Hebel, sodass sich die beiden Flossen individuell bewegen lassen. So können sie unterschiedliche Wellenmuster generieren, die sich besonders für eine langsame und präzise Fortbewegung eignen und Wasser weniger aufwirbeln als beispielsweise ein konventioneller Schraubenantrieb.
                                    </p>
                                    <img src="img/00447-bionicfinwave-2140x940px.jpg" width="100%" height="auto" style="margin-bottom: 0.375rem;border-radius: 2px;" alt="Wellenförmiger Antrieb: die undulierende Bewegung der flexiblen Silikonflossen">
                                    <figcaption>Wellenförmiger Antrieb: die undulierende Bewegung der flexiblen Silikonflossen<br><span class="pre" style="text-align:left;">{figcaption} font-size: 13px; line-height: 18px; font-weight: 400; letter-spacing: 0.16px; color: #616161; padding-bottom: 0.75rem; margin-bottom: 0.75rem; text-align: center;</span></figcaption>
                                    <p>
                                        Um eine Kurven zu schwimmen, bewegt sich beispielsweise die äußere Flosse schneller als die innere – vergleichbar mit den Ketten eines Baggers. Ein dritter Servomotor am Kopf des <a href="#" style="font-weight:500; color: #006EE6; text-decoration: none">BionicFinWave</a> <span class="pre" style="text-align:left;">{link} font-weight:500; color: #006EE6; text-decoration: none</span> steuert die Biegung des Körpers, mit deren Hilfe er nach oben und unten schwimmen kann. Damit die Kurbelwellen entsprechend flexibel und biegsam sind, sitzt zwischen jedem Hebelsegment ein Kardangelenk. Dazu wurden die Kurbelwellen inklusive der Gelenke und des Pleuels aus Kunststoff in einem Stück im 3D-Druck-Verfahren gefertigt.

                                    </p>
                                    <blockquote style="font-family: Georgia; border-left: solid 3px #eee; padding-left: 1rem;font-size: 1.125rem; margin: 1rem 0;">With the bionic technology platform, our Bionic Learning Network is once again creating impetus for the future work with autonomous robots and new drive technologies used in liquid media.</blockquote> <span class="pre">{blockquote} font-family: Georgia, sans-serif {fallback: FiraGO}; border-left: solid 3px #eee;padding-left: 1rem;font-size: 1.125rem;margin: 1rem 0;</span>
                                </div>
                            </div>
                            <div class="comments hide hasTransition">
                                <div class="commentTitle"></div>
                                <div class="commentBodyWrap">
                                    <div class="commentBodyColumn-1">
                                        <div class="profileImage hasProfileImage"></div>
                                    </div>
                                    <div class="commentBodyColumn-2">
                                        <div class="commentArea hasTransition" contentEditable="true" placeholder="Kommentar hinzufügen"></div>
                                        <div class="commentActions">
                                            <div class="confirmButton commentBtn levitate hasTransition  legitRipple">Kommentieren</div>
                                            <div class="cancelButton commentBtn ">Abbrechen</div>
                                            <form>
                                                <select class="commentCause">
                                                    <option>Kommentar</option>
                                                    <option>Hinweis</option>
                                                    <option>Korrektur</option>
                                                    <option>---</option>
                                                    <option>Fehler unkritisch</option>
                                                    <option>Fehler kritisch</option>
                                                    <option>Fehler sehr kritisch</option>
                                                </select>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ARTICLE ITEM -->
                        <div class="article-item reviewItem hasTransition" tabindex="0">
                            <i class="far getsLighter fa-plus tertiaryActions first" ></i>
                            <i class="far getsLighter fa-plus tertiaryActions second" title="explode on hide"></i>
                            <div class="article-wrapper-head-body">
                                <div class="article-meta">
                                    <div class="articleMeta-stacked">
                                        <div class="meta-wrap-left">
                                            <span class="timeStamp">Bis 07.11.2021 14:14</span>
                                            <span class="button review">Jetzt prüfen</span>
                                        </div>
                                    </div>
                                    <div class="articleMeta-stacked">
                                        <div class="meta-wrap-left">
                                            <span class="status-message">In Prüfung</span>
                                            <span class="timeStamp">bis 07.11.2021 14:14</span>
                                        </div>
                                        <span class="version">Version 4.2</span>
                                    </div>
                                </div>


                                <div class="legend">
                                    <div class="keyRemoved">
                                        <span class="keyFlag"></span>
                                        <div class="keyLabel">entfernt</div>
                                    </div>
                                    <div class="keyChanged">
                                        <span class="keyFlag"></span>
                                        <div class="keyLabel">geändert</div>
                                    </div>
                                    <div class="keyAdded">
                                        <span class="keyFlag"></span>
                                        <div class="keyLabel">hinzugefügt</div>
                                    </div>
                                </div>
                                <div class="head">
                                    <div class="title mui-h3">XR technologies exist along a spectrum, <span class="flagWord flagWordAdded" style="">progressively</span> blending virtual and physical realities</div>
                                    <div class="ui">
                                        <i class="far getsLighter fa-eye overflow has-title" data-title="Ansehen"></i>
                                        <i class="far getsLighter fa-paper-plane overflow has-title" data-title="Teilen"></i>
                                        <i class="far getsLighter fa-pencil d-none overflow has-title" data-title="Bearbeiten"></i>
                                        <i class="far getsLighter fa-comments-alt overflow has-title" data-title="Kommentieren"></i>
                                        <i class="far fa-ellipsis-h has-title" data-title="Mehr..."></i>
                                    </div>
                                </div>
                                <div class="teasertext">
                                    <p>
                                        <b>Hacking Reality</b><br>
                                        On one end, virtual reality (VR) immerses users in a completely virtual environment. VR’s ability to transport <span class="flagWord flagWordRemoved">the user into “another world”</span> is ideal for simulating a variety of scenarios, which may benefit fields from training personnel to treating the ill, visualizing product and architectural designs, hosting virtual events, or administering therapy.
                                    </p>
                                    <p>
                                        Conversely, augmented reality (AR) introduces virtual content to the physical environment. AR’s ability to transport content into our world leverages many of VR’s strengths while remaining grounded in physicality. Essentially, AR is akin to the CG effects and green screen techniques of the film industry in real time. Visualizing content <span class="flagWord flagWordAdded">within a physical context</span> is ideal for communicating information that natural language and traditional visual aids simply cannot convey.
                                    </p>
                                    <p>
                                        XR technology is becoming increasingly important in a world where the need to know intersects with the need to experience. The ability to take virtual content into the real life space around us benefits everyone regardless of their field. VR is already revolutionizing the entertainment and training industries, and it won’t be too long until other industries follow suit. <span class="flagWord flagWordChanged">Advancements in machine vision, the core</span> technology behind AR, are also opening up new possibilities for enhancing the physical world and augmenting human ability.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- ARTICLE ITEM -->
                        <div class="article-item hasTransition" tabindex="0">
                            <i class="far getsLighter fa-plus tertiaryActions first"></i>
                            <i class="far getsLighter fa-plus tertiaryActions second"></i>
                            <div class="article-wrapper-head-body">
                                <div class="head">
                                    <div class="title mui-h3">Forschungsprojekt BaSys 4.2 <span class="mimeType-label" >PDF</span></div>
                                    <div class="ui">
                                        <i class="far getsLighter fa-arrow-to-bottom overflow has-title" data-title="Download"></i>
                                        <i class="far getsLighter fa-eye overflow has-title" data-title="Ansehen"></i>
                                        <i class="far getsLighter fa-paper-plane has-title" data-title="Teilen"></i>
                                        <i class="far fa-ellipsis-h has-title" data-title="Mehr..."></i>
                                    </div>
                                </div>
                                <div class="teasertext">Portable Document Format (115,88 KB), Autor: Fernão de Magalhães</div>
                            </div>
                        </div>
                        <!-- ARTICLE ITEM -->
                        <div class="article-item hasTransition" tabindex="0" id="itemWithFileUserNote">
                            <i class="far getsLighter fa-plus tertiaryActions first"></i>
                            <i class="far getsLighter fa-plus tertiaryActions second"></i>
                            <div class="article-wrapper-head-body">
                                <div class="head">
                                    <div class="title mui-h3">Whitepaper Automatisierte Abfallwirtschaft <span class="mimeType-label" >DOCX</span></div>
                                    <div class="ui">
                                        <i class="far getsLighter fa-arrow-to-bottom overflow has-title" data-title="Download"></i>
                                        <i class="far getsLighter fa-eye overflow has-title" data-title="Ansehen"></i>
                                        <i class="far getsLighter fa-paper-plane has-title" data-title="Teilen"></i>
                                        <i class="far fa-ellipsis-h has-title" data-title="Mehr..."></i>
                                    </div>
                                </div>
                                <div class="teasertext">Microsoft-Word-2007-Dokument (21 KB), Autorin: Margarete Neumann</div>
                                <div class="fileUserNote ">
                                    <i class="far fa-info-circle"></i>
                                    <span>{mui.overline based} Ebenso wie die Optimierung der Fahrzeuge, wird auch die Optimierung der Fahrrouten zukünftig an Bedeutung gewinnen. Was für die Logistik gilt, gilt auch für die Entsorgung: Die steigende Vernetzung, beispielsweise durch Abfall-Apps und intelligente Mülltonnen, wird massiv vorangetrieben. In der Tourenplanung setzen Entsorgungsunternehmen zunehmend auf Softwares zur Tourenoptimierung und digitales Kartenmaterial und profitieren so von der Anpassung an moderne, technische Standards. Die bedarfsgerechte Tourenplanung führt zu effizienteren Prozesse und damit auch zu einer erhöhten Planungssicherheit. Dies stärkt die Wettbewerbsfähigkeit eines Unternehmers und verschafft neue Wachstumschancen.</span>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <!-- CONTENT AREA RIGHT -->
            <!-- CONTENT AREA RIGHT -->
            <!-- CONTENT AREA RIGHT -->
            <div class="contentWrapper-right">
                <div class="editStructure hasTransition">
                    <div class="btn"> <i class="far getsLighter fa-pen"></i> Gliederung bearbeiten</div>
                </div>
                <!-- GLIEDERUNG / STRUCTURE -->
                <!-- GLIEDERUNG / STRUCTURE -->
                <!-- GLIEDERUNG / STRUCTURE -->
                <div class="structureWrapper">
                    <div class="modal-body explorer-body bg-white ml-1 mr-1 pr-0 pt-0 pb-4 pl-1 pr-1 mb-0 scrollarea" >
                        <div class="level-0 itemWithinFolder levitate hasTransition " tabindex="0"><i class="far getsLighter fa-align-left"></i>Herzlich willkommen</div>
                        <div class="level-0 itemWithinFolder levitate hasTransition " tabindex="0"><i class="far getsLighter fa-align-left"></i>Vorwort der Geschäftsführung</div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i class="far getsLighter fa-folder mr-0"></i>Wegweiser für neue Mitarbeiter</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0"><i class="far getsLighter fa-align-left mr-0"></i>Einleitung</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0"><i class="far getsLighter fa-align-left mr-0"></i>QM ist wie einen Garten pflegen</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0"><i class="far getsLighter fa-align-left mr-0"></i>Leitbild und Werte <i class="far getsLighter fa-link ml-1"></i></div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0"><i class="far getsLighter fa-align-left mr-0"></i>Wichtige Rufnummern <i class="far getsLighter fa-link ml-1"></i></div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed <?php echo $_GET['entry'] ?>">
                            <div class="folder-title levitate hasTransition "  tabindex="0" role="button" ><i class="far getsLighter fa-folder<?php echo $_GET['folder'] ?>"></i>Unternehmen</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left"></i>Einleitung</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition  element" tabindex="0" role="button" ><i class="far getsLighter fa-align-left"></i>Leitbild und Werte</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition  element <?php echo $_GET['entry'] ?>"  tabindex="0" role="button" ><i class="far getsLighter fa-align-left"></i>Umwelt und Energie</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left"></i>Unternehmensziele</div>
                            <!-- Folder -->
                            <div class="folder level-1 closed">
                                <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder"></i>Organigramme</div>
                                <div class="level-2 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-sitemap"></i>Unternehmens-Organigramm</div>
                                <div class="level-2 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-sitemap"></i>Zentrale</div>
                                <div class="level-2 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-sitemap"></i>Produktionsstandorte</div>
                                <div class="level-2 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-sitemap"></i>Marketing</div>
                                <div class="level-2 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-sitemap"></i>Vertrieb</div>
                                <div class="level-2 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-sitemap"></i>Beauftragte</div>
                            </div>
                            <!-- Folder -->
                            <div class="folder level-1 closed">
                                <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder"></i>Unternehmensstandorte</div>
                                <div class="level-2 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left"></i>Übersicht</div>
                                <div class="level-2 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-sitemap"></i>Karlsfeld</div>
                                <div class="level-2 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-sitemap"></i>Barsbüttel</div>
                                <!-- Folder -->
                                <div class="folder level-2 closed">
                                    <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>Neu-Ausrichtung und Umbau</div>
                                    <div class="level-3 itemWithinFolder levitate hasTransition  d-flex" tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>Inspire, empower communities thought provoking agile think tank data. </div>
                                    <div class="level-3 itemWithinFolder levitate hasTransition  d-flex" tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>Ökologische Gesamtzielsetzung: eine Perspektive für 2020</div>
                                </div>
                            </div>
                            <!-- Folder -->
                            <div class="folder level-1 closed">
                                <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder"></i>Projektgruppen</div>
                                <div class="level-3 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>Ziele</div>
                                <!-- Folder -->
                                <div class="folder level-2 closed">
                                    <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>KVP (kontinuierliche Verbesserungsprozesse)</div>
                                    <div class="level-3 itemWithinFolder levitate hasTransition  d-flex" tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>Inspire, empower communities thought provoking agile think tank data. </div>
                                    <div class="level-3 itemWithinFolder levitate hasTransition  d-flex" tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>Ökologische Gesamtzielsetzung: eine Perspektive für 2020</div>
                                </div>
                            </div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0  active activeContent"  >
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder fa-folder-open"></i>Innovation und Technologie</div>
                            <!-- Folder -->
                            <div class="folder level-1 active activeContent">
                                <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder fa-folder-open"></i>Learning Network</div>
                                <!-- Folder -->
                                <div class="folder level-2 active activeContent marked">
                                    <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder fa-folder-open mr-0"></i>Neuigkeiten</div>
                                    <div class="level-3 itemWithinFolder levitate hasTransition  d-flex" tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>Inspire, empower communities thought provoking agile think tank data. </div>
                                    <div class="level-3 itemWithinFolder levitate hasTransition  d-flex" tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>Ökologische Gesamtzielsetzung: eine Perspektive für 2020</div>
                                </div>
                            </div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed skeletonSpareContent">
                            <div class="folder-title levitate hasTransition d-flex align-items-center" tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>Dienstanweisungen {skeleton with ajax transition}</div>
                            <div class="ajax">
                                <div class="level-1 itemWithinFolder skeleton loadingIndication hasTransition" tabindex="0" role="button" ><i class="skeletonIcon"></i><span class="skeletonTitle"></span></div>
                            </div>
                        </div>
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>Wissensmanagement</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i> Einleitung</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i> Glossar</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>Logins und Passwörter</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i> Konventionen und Schreibweisen</div>
                            <!-- Folder -->
                            <div class="folder level-1 closed">
                                <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder"></i> Bedienungsanleitungen</div>
                                <div class="level-2 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left"></i>Telefonanlage Sinus 205</div>
                                <div class="level-2 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left"></i>ECOSYS P6021CDN / P6026CDN</div>
                            </div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>Arbeitsschutz {skeleton}</div>
                            <div class="level-1 itemWithinFolder skeleton loadingIndication hasTransition" tabindex="0" role="button" ><i class="skeletonIcon"></i><span class="skeletonTitle"></span></div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>Qualitätsmanagement nach ISO 9001:2015</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>Inhaltsverzeichnis</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>1) Anwendungsbereich</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>2) Normative Verweisungen</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>3) Glossar</div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>Energiemanagement nach ISO 50001</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>Titelblatt</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>Übersicht</div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>Risikomanagement</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>Risikokriterien</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>Eintrittswahrscheinlichkeit</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>Farblegende Risikograph</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>Checkliste Risikomanagementh</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition  d-flex" tabindex="0" role="button" ><i class="far getsLighter fa-file-pdf mr-0"></i>Schutz Kritischer Infrastruktur: Risikomanagement im Krankenhaus</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-file-spreadsheet mr-0"></i>Risikodiagramm Excel-Vorlage</div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>Umweltmanagement</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>Titelblatt</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>Übersicht</div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>IT-Sicherheitsmanagement</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>Titelblatt</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition  d-flex" tabindex="0" role="button" ><i class="far getsLighter fa-file-pdf mr-0"></i>Gesetzesblatt des IT-Sicherheitsgesetz</div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>Datenschutz</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-user-check mr-0"></i>Datenschutzbeauftragter (DSB) <i class="far getsLighter fa-link ml-1"></i></div>
                            <div class="level-1 itemWithinFolder levitate hasTransition  d-flex" tabindex="0" role="button" ><i class="far getsLighter fa-file-word mr-0"></i>Mustervorlage Verpflichtung Datenschutz, Fernmeldegeheimnis und Geschäftsgeheimnis</div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>Notfallszenario</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>Wichtige Notrufnummern</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-align-left mr-0"></i>Krankenhäuser in der Nähe</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-file-check mr-0"></i>Checkliste</div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>Versorgungsunternehmen</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>Relevante Gesetze</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>Verbände</div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>Gesundheitswesen</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>Zentren</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>Tätigkeiten</div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>Rollen</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-user-check mr-0"></i>Alle Mitarbeiter</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-user-check mr-0"></i>Produktion</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-user-check mr-0"></i>Lager</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-user-check mr-0"></i>Neue Mitarbeiter</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-user-check mr-0"></i>Back-Office</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-user-check mr-0"></i>Ereignismanager</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-user-check mr-0"></i>Geschäftsführung</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-user-check mr-0"></i>Gesellschafter</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-user-check mr-0"></i>...</div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>AnwenderInnen</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-user-circle mr-0"></i>Matthias Steinhaus</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-user-circle mr-0"></i>Hannah Koch</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-user-circle mr-0"></i>Martin Konrad</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-user-circle mr-0"></i>Lars Engel</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-user-circle mr-0"></i>Robert Hartmann</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-user-circle mr-0"></i>Dr. Susann Walter</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-user-circle mr-0"></i>Tom Kramer</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-user-circle mr-0"></i>Lena Simon</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-user-circle mr-0"></i>Dr. Stephan T. Kieburg</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-user-circle mr-0"></i>...</div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>Vorlagen</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-files-medical mr-0"></i>Protokoll</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-files-medical mr-0"></i>Prozessbeschreibung</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-files-medical mr-0"></i>Blog-Eintrag</div>
                        </div>
                        <!-- Other Elements -->
                        <div class="level-0 itemWithinFolder levitate hasTransition"><i class="far getsLighter fa-project-diagram"></i>BPMN Prozessdiagramm</div>
                        <div class="level-0 itemWithinFolder levitate hasTransition"><i class="far getsLighter fa-file"></i>...</div>
                        <div class="d-none" style="display: flex; justify-content: center; align-content: center; align-items: center; height: 64px;">
                            <div class="spinner-border m-5" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal hideModal<?php echo $_GET['review'] ?> reviewModal">
    <div class="modalBackDrop"></div>
    <div class="modalBody">
        <div class="modalHeader">
            <div class="modalTitle"><span>Versionsvergleich</span> <i class="far fa-angle-right"></i> XR technologies exist along a spectrum, progressively blending virtual and physical realities</div>
            <div class="showHideModal"><i class="fal fa-times"></i></div>
        </div>
        <div class="modalPrimaryFunctions">
            <div class="modalPrimaryFunctionsWrapper">
                <div class="controls">
                    <div class="controlsLabel">Änderungen</div>
                    <div class="revisionBack backAndForthBtn levitate hasTransition "><i class="far fa-angle-left"></i></div>
                    <div class="revisionForth backAndForthBtn levitate hasTransition "><i class="far fa-angle-right"></i></div>
                    <div class="revisionCount">0 von 0</div>
                </div>
                <div class="legend">
                    <div class="keyRemoved">
                        <span class="keyFlag"></span>
                        <div class="keyLabel">entfernt</div>
                    </div>
                    <div class="keyChanged">
                        <span class="keyFlag"></span>
                        <div class="keyLabel">geändert</div>
                    </div>
                    <div class="keyAdded">
                        <span class="keyFlag"></span>
                        <div class="keyLabel">hinzugefügt</div>
                    </div>
                </div>
            </div>
            <div class="useWidth d-none"><i class="far fa-check-circle toggleWidth"></i> Breite nutzen</div>
        </div>
        <div class="compareVersionsBlock">
            <div class="comparingVersionsWrapper">
                <div class="useWidthBtn"><i class="far fa-compress-wide"></i></div>
                <div class="selectedVersionContent">
                    <p>
                        <b>Hacking Reality</b><br>
                        On one end, virtual reality (VR) immerses users in a completely virtual environment. VR’s ability to transport <span class="flagWord flagWordRemoved flagWordHighlighted diff_1 hasTransition" tabindex="0">the user into “another world”</span> is ideal for simulating a variety of scenarios, which may benefit fields from <span class="flagWord flagWordRemoved diff_2 hasTransition" tabindex="0">training personnel to treating the ill,</span>  visualizing product and architectural designs, hosting virtual events, or administering therapy.
                        Conversely, augmented reality (AR) introduces virtual content to the physical environment. AR’s ability to transport content into our world leverages many of VR’s strengths while remaining grounded in physicality. Essentially, AR is akin to the CG effects and green screen techniques of the film industry in real time. Visualizing content <span class="flagWord flagWordAdded diff_3 hasTransition" tabindex="0">within a physical context</span> is ideal for communicating information that natural language and traditional visual aids simply cannot convey.    XR technology is becoming increasingly important in a world where the need to know intersects with the need to experience. The ability to take virtual content into the real life space around us benefits everyone regardless of their field. VR is already revolutionizing the entertainment and training industries, and it won’t be too long until other industries follow suit. <span class="flagWord flagWordChanged diff_3 hasTransition" tabindex="0">Advancements in machine vision, the core technology behind AR, are also opening up new possibilities for enhancing the physical world and augmenting human ability.</span>
                    </p>
                </div>
                <div class="containedContentInVersion"></div>
            </div>
            <div class="versionSelectionWrapper">

            </div>
        </div>
    </div>
</div>

<div class="extUI">

    <a href="index.php?helper=markMotion" class="hasTitle" data-title="Mark motion"><i class="fad fa-bow-arrow"></i></a>
    <a href="index.php?review=1" class="hasTitle" data-title="Open review dialog"><i class="fad fa-check-double"></i></a>
    <span class="showUIAreas-switch hasTitle" data-title="Show areas"><i class="fad fa-info getsLighter"></i></span>
    <span class="blocks-switch hasTitle" data-title="Blocks"><i class="fad fa-shapes"></i></span>
    <a href="." class="getStarted hasTitle" data-title="Reset"><i class="fad fa-home"></i></a>
</div>
<div id="result">Styles (select an item)</div>

<!-- JS PLUGINS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="plugins/legitRippleJS/ripple.min.js"></script>
<script src="plugins/returnCSS/returnCSS.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>





<!-- -->
<!-- -->
<!-- Tab-Accessibility | mouse or keyboard-->
<script>
    // Let the document know when the mouse is being used
    document.body.addEventListener('mousedown', function() {
        document.body.classList.add('using-mouse');
    });

    // Re-enable focus styling when Tab is pressed
    document.body.addEventListener('keydown', function(event) {
        if (event.keyCode === 9) {
            document.body.classList.remove('using-mouse');
        }
    });
</script>

<!-- -->
<!-- -->
<!-- Ripple | https://www.npmjs.com/package/react-ripples | design ROI: Branded Interactions -->
<script>
    //ripple custom options
    $(".levitate").ripple({
        scaleMode: false,
        maxDiameter: "110%"
    });
</script>
<!-- -->
<!-- -->
<!-- Primary and secondary menu | INTERACTION PATTERN -->
<script>
    $( ".primaryActions .menuItem " ).click(function() {
        $( '.primaryActions .menuItem ').removeClass( "active" );
        $( this ).addClass( "active" );
    });

    $( ".secondaryActions .menuItem " ).click(function() {
        $( '.secondaryActions .menuItem ').removeClass( "active" );
        $( this ).addClass( "active" );
    });
</script>
<!-- -->
<!-- -->
<!-- Draft and edit mode toggle | INTERACTION PATTERN -->
<script>
    $('.mode-switch').click(function(){
        $('body').toggleClass("draft");
        $(this).toggleClass("switch");
    });
</script>
<!-- -->
<!-- -->
<!-- user / role item open and close -->
<script>
    $('.networkParticipant-item-A .fa-square-caret-down').click(function(){
        $(this).parent().parent().parent().find('.memberContact-item').toggleClass("closed");
        $(this).toggleClass("fa-square-caret-up");
    });
    $('.networkParticipant-item-A .title').click(function(){
        $(this).parent().parent().parent().find('.memberContact-item').toggleClass("closed");
        $(this).parent().find('.fa-square-caret-down').toggleClass("fa-square-caret-up");
    });
</script>
<script>
    $('.networkParticipant-item-B .fa-square-caret-down').click(function(){
        $(this).parent().parent().parent().find('.memberContact-item').toggleClass("closed");
        $(this).toggleClass("fa-square-caret-up");
    });
    $('.networkParticipant-item-B .title').click(function(){
        $(this).parent().parent().parent().find('.memberContact-item').toggleClass("closed");
        $(this).parent().find('.fa-square-caret-down').toggleClass("fa-square-caret-up");
    });
</script>
<!-- -->
<!-- -->
<!-- MODAL open / close -->
<script>
    $('.showHideModal').click(function(){
        $('.modal').toggleClass("hideModal");
        $('body').toggleClass("modalActive");
    });
</script>
<!-- -->
<!-- -->
<!-- MODALS | Review feature -->
<script>
    $( ".reviewItem" ).dblclick(function() {
        $('.modal.reviewModal').toggleClass("hideModal");
        $('body').toggleClass("modalActive");
        $('.flagWordHighlighted').focus();
    });
    $('.modalPrimaryFunctions .useWidth').click(function(){
        $('i.toggleWidth').toggleClass("fa-circle");
    });

    $( ".selectedVersionContent .flagWord" ).click(function() {
        $( '.selectedVersionContent .flagWord').removeClass( "flagWordHighlighted" );
        $( this ).addClass( "flagWordHighlighted" );
    });

    $( ".revisionForth" ).click( function( event ) {
        $('.selectedVersionContent').find('.flagWordHighlighted').next('.flagWord:first').addClass( "flagWordHighlighted" );
        $('.selectedVersionContent').find('.flagWordHighlighted:first').removeClass( "flagWordHighlighted" ).focus();
    });

    $( ".revisionBack" ).click( function( event ) {
        $('.selectedVersionContent').find('.flagWordHighlighted').prev('.flagWord:last').addClass( "flagWordHighlighted" ).focus();
        $('.selectedVersionContent').find('.flagWordHighlighted:last').removeClass( "flagWordHighlighted" );
    });



</script>
<!-- -->
<!-- -->
<!-- CONTENT Interaction pattern -->
<script>
    $('.folder-title-ui-wrapper').click(function(){
        $( '.article-item').removeClass( "active" );
        $( '.folderItem-holder').removeClass( "active" );
        $(this).addClass("active");
    });
    $('.article-item').click(function(){
        $( '.folder-title-ui-wrapper').removeClass( "active" );
        $( '.folderItem-holder').removeClass( "active" );
        $( '.article-item').removeClass( "active" );
        $(this).addClass("active");
    });
    $('.folderItem-holder').click(function(){
        $( '.folder-title-ui-wrapper').removeClass( "active" );
        $( '.folderItem-holder').removeClass( "active" );
        $( '.article-item').removeClass( "active" );
        $(this).addClass("active");
    });
</script>
<!-- -->
<!-- -->
<!-- caused interface changes by MODE toggle -->
<script>
    $('.mode-switch').click(function(){
        $('.fa-comments-alt').toggleClass("d-none");
        $('.fa-pencil').toggleClass("d-none");
        $('.fa-print').toggleClass("d-none");
        $('.fa-wrench').toggleClass("d-none");
        $('.fa-globe-africa').toggleClass("d-none");
    });
</script>
<!-- -->
<!-- -->
<!-- FILE EXPLORER interaction pattern -->
<script>
    $( ".folder .folder-title" ).click(function() {
        $(this).parent().toggleClass( 'closed' );
        $(this).parent().toggleClass( 'active' );
        $(this).find( ".fa-folder" ).toggleClass( 'fa-folder-open' );
    });
    $( ".folder .folder-title" ).keypress(function(accessibility) {
        if(accessibility.which == 13) {
            $(this).parent().toggleClass( 'closed' );
            $(this).parent().toggleClass( "active" );
            $(this).find( ".fa-folder" ).toggleClass( "fa-folder-open" );
        }
    });
</script>
<!-- -->
<!-- -->
<!-- FILE EXPLORER ajax dummy -->
<script>
    $(".skeletonSpareContent").one('click', function(){
        $('.ajax').delay(2400).queue(function( nxt ) {
            $(this).load('skeletonSpareContent.php');
            nxt();
        });
    });
</script>
<!-- -->
<!-- -->
<!-- CONFIRMATION AND PROCESS MANAGEMENT AT CONTENT ELEMENTS -->
<script>
    $('.confirm').click(function(){
        $(this).toggleClass("confirmed");
        $(this).parent().parent().delay(1400).fadeOut(560);
    });
</script>
<!-- -->
<!-- -->
<!-- SCROLLING BEHAVIOUR -->
<script>
    $( function () {
        var folderEntered = $( ".folderItem.entered" );
        $( ".contentWrapper-left-scroll-area-barrier" ).scroll( function () {
            var scroll = $( ".contentWrapper-left-scroll-area-barrier" ).scrollTop();

            if ( scroll >= 75 ) {
                folderEntered.addClass( "scrolled" );
            } else {
                folderEntered.removeClass( "scrolled" );
            }
        } );
    } );
</script>
<!-- -->
<!-- -->
<!-- COMMENTS AT FOLDER AND CONTENT ELEMENTS -->
<script>
    $( ".toggleComments" ).click(function() {
        $(this).closest('.contentItem').children('.comments').toggleClass( 'hide' );
        $(this).toggleClass( "active" );
        $(function() {
            var editable = $('[contenteditable]');
            setTimeout(function() {
                editable.trigger('focus');
            }, 100);
        });
    });
    $( ".cancelButton.commentBtn" ).click(function() {
        $(this).closest('.contentItem').children('.comments').toggleClass( 'hide' );
    });
</script>
<!-- -->
<!-- -->
<!-- RESPONSIVE BEHAVIOUR -->
<script>
    if (window.matchMedia("(orientation: portrait)").matches) {
        // changing icons form regular to solid in portrait view
        window.onload = function() {
            $(".secondaryActions .menuItem").removeClass("active");
            $(".primaryActions .primaryActionsOverflowMenuButton").addClass("active");

            // hiding areas in portrait view
            $( function () {
                var topBar = $( ".topBar" );
                $( ".contentWrapper-left-scroll-area-barrier" ).scroll( function () {
                    var scroll = $( ".contentWrapper-left-scroll-area-barrier" ).scrollTop();

                    if ( scroll >= 350 ) {
                        topBar.addClass( "hide" );
                    } else {
                        topBar.removeClass( "hide" );
                    }
                } );
            } );
        };
    }
</script>
<!-- -->
<!-- -->
<!-- MODAL | REVIEW interaction pattern -->
<script>
    $("body").on('click tap', '.revisionForth .revisionBack', function(e) {
        e.preventDefault();
        var elem = $(this).parent().attr("class");
        var data = $("." + elem).next(".flagWord").attr("data-key");
        alert(data);
    });
</script>
<!-- -->
<!-- -->
<!-- Prototype features -->
<script>
    $('.extUI .showUIAreas-switch').click(function(){
        $('body').toggleClass("showUIAreas");
        $(this).toggleClass("active");
    });
</script>
<!-- -->
<!-- -->
<!-- Prototype features -->
<script>
    $('.blocks-switch').click(function(){
        $('html').toggleClass("blocks");
        $('html').removeClass("protodayswhiteboard");
        $('.usertest-mode').removeClass("active");
        $(this).toggleClass("active");
    });
    $('.usertest-mode').click(function(){
        $('html').toggleClass("protodayswhiteboard");
        $('html').removeClass("blocks");
        $('.blocks-switch').removeClass("active");
        $(this).toggleClass("active");
    });
</script>
<!-- -->
<!-- -->
<!-- Prototype features -->
<script>
    $('.extUI .markMotion').click(function(){
        $('body').toggleClass("markMotion");
    });
</script>
<script>
    $( "div.hasTransition" ).click(function() {
        var html = [ "Styles" ];

        var styleProps = $( this ).css([
            "color", "background-color", "transition", "animation", "box-shadow", "background-image"
        ]);
        $.each( styleProps, function( prop, value ) {
            html.push( prop + ": " + value );
        });

        $( "#result" ).html( html.join( "<br>" ) );
    });
</script>



</body>
</html>