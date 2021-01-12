<!DOCTYPE html>
<html lang="de">
<head>
<!--
 * Design and development of this functional prototype 8
 * Copyright 2020 Ronny Puschmann
 * https://ronnypuschmann.de
-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Prototype - 12 - tree in dialog</title>
    <link rel="stylesheet" href="css/styles.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/colors.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/dev-17562.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/typography.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/tree.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/areas.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/header.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/filetreeInDialog.css?<?php echo time() ?>">
    <!-- PLUGINS -->
    <link rel="stylesheet" href="plugins/legitRippleJS/ripple.min.css">
    <!-- FONTS and ICONS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-IIED/eyOkM6ihtOiQsX2zizxFBphgnv1zbe1bKA+njdFzkr6cDNy16jfIKWu4FNH" crossorigin="anonymous">
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

    <!-- CONTENT AREA -->
    <!-- CONTENT AREA -->
    <!-- CONTENT AREA -->
    <h3 style="width:450px; margin: 0 auto; text-align:left;padding: 2rem 0  1rem;">Styles für disabled (double click) und selected gelten nur für den Role/User-Picker-Dialog</h3>

    <div class="content">
        <div class="contentWrapper">
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
                        <!-- Folder -->
                        <div class="folder level-0 active">
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
                        <div class="folder level-0 closed <?php echo $_GET['entry'] ?> activeContent"  >
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder<?php echo $_GET['folder'] ?>"></i>Innovation und Technologie</div>
                            <!-- Folder -->
                            <div class="folder level-1 closed activeContent">
                                <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder"></i>Learning Network</div>
                                <!-- Folder -->
                                <div class="folder level-2 closed activeContent marked">
                                    <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>Neuigkeiten</div>
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
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-folder mr-0"></i>Vorlagen</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-files-medical mr-0"></i>Protokoll</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-files-medical mr-0"></i>Prozessbeschreibung</div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button" ><i class="far getsLighter fa-files-medical mr-0"></i>Blog-Eintrag</div>
                        </div>
                        <!-- Other Elements -->
                        <div class="level-0 itemWithinFolder levitate hasTransition"><i class="far getsLighter fa-project-diagram"></i>BPMN Prozessdiagramm</div>
                        <div class="level-0 itemWithinFolder levitate hasTransition"><i class="far getsLighter fa-file"></i>...</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="extUI">
    <a href="filetreeInDialog.php?helper=markMotion" class="hasTitle" data-title="Mark motion"><i class="fad fa-bow-arrow"></i></a>
    <a href="filetreeInDialog.php" class="getStarted hasTitle" data-title="Reset"><i class="fad fa-home"></i></a>
</div>

<div id="result">Styles (select an item)</div>

<!-- JS PLUGINS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="plugins/returnCSS/returnCSS.js"></script>
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
    $(".folder .itemWithinFolder").click(function(){
        $( ".folder .itemWithinFolder" ).removeClass("selected");
        $( this ).addClass("selected");
    });
    $( ".folder .itemWithinFolder" ).dblclick(function() {
        $( this ).addClass("disabled");
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
        var html = [ "CSS" ];

        var styleProps = $( this ).css([
            "color", "background-color", "transition", "animation", "background-image"
        ]);
        $.each( styleProps, function( prop, value ) {
            html.push( prop + ": " + value );
        });

        $( "#result" ).html( html.join( "<br>" ) );
    });
</script>


<script>
    $("div.hasTransition").on("mouseover", function () {
        var html = [ "CSS" ];

        var styleProps = $( this ).css([
            "color", "background-color", "transition", "animation", "background-image"
        ]);
        $.each( styleProps, function( prop, value ) {
            html.push( prop + ": " + value );
        });

        $( "#result" ).html( html.join( "<br>" ) );
    });

</script>


</body>
</html>