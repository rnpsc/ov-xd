<!DOCTYPE html>
<html lang="de">
<head>
    <!--
     * Design and development of this functional prototype 8
     * 2020 Ronny Puschmann
     * https://ronnypuschmann.de
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <title>Handbuch - Avity --- 14</title>
    <link rel="stylesheet" href="css/styles.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/colors.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/dev-17562.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/typography.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/tree.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/areas.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/header.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/breadcrumbs.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/modals.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/drawer.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/radi.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/mediaqueries.css?<?php echo time() ?>">

    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <!-- PLUGINS -->
    <link rel="stylesheet" href="plugins/legitRippleJS/ripple.min.css">
    <!-- FONTS and ICONS -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css"
          integrity="sha384-IIED/eyOkM6ihtOiQsX2zizxFBphgnv1zbe1bKA+njdFzkr6cDNy16jfIKWu4FNH" crossorigin="anonymous">
    <!-- Tiles Apple & MS -->

    <link rel="icon" sizes="144x144" href="img/icon-250.png">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="orgavision 2020">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icon-250.png">

    <meta name="msapplication-TileColor" content="#fff">
    <meta name="msapplication-TileImage" content="img/icon-250.png">

</head>
<body class="r ">
<div class="outerWrapper">
    <!-- HEADER -->
    <!-- HEADER -->
    <!-- HEADER -->
    <div class="header ">
        <div class="topBar pl-3 pl-md-3 pr-3 pr-md-4">
            <div class="topBar-wrapper">
                <div class="topBar-leftWrapper">
                    <div class="selectAppModule-wrap d-flex toggleDrawer align-items-center pl-2 pr-1 py-1 ">
                        <div class="selectedAppModule">Sunfire GmbH<i class="far fa-angle-down"></i></div>
                    </div>
                </div>
                <div class="topBar-centerWrapper d-none d-md-flex pr-3">
                    <div class="search d-flex align-items-center">
                        <div class="editableField d-flex flex-fill px-2 py-2" contenteditable="true" placeholder="Suche"></div>
                        <div class="searchIcon p-2"><i class="far fa-search"></i></div>
                    </div>
                </div>
                <div class="topBar-rightWrapper d-flex align-items-center">
                    <div class="searchIcon d-inline-flex d-md-none p-2 mr-2 toggleModalSearch"><i class="far fa-search"></i></div>
                    <div class="account"  tabindex="0" role="button" >
                        <div class="accountName returnCSS d-none d-md-block ">Mareike Ovid</div>
                        <div class="profileImage hasProfileImage">
                            <i class="far getsLighter fa-user-alt d-none"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navigationHeader d-flex d-md-none px-0">
            <div class="navigationHeader-wrapper">
                <div class="secondaryActions py-1">
                    <div class="menuItem tasks mx-3 px-2 py-1" tabindex="0">
                        <i class="far  fa-check-square mb-1"></i>
                        <span class="menuItem-label">Aufgaben</span>
                    </div>
                    <div class="menuItem information mx-3 px-2 py-1" tabindex="0">
                        <i class="far  fa-info-circle mb-1"></i>
                        <span class="menuItem-label">Information</span>
                    </div>

                    <div class="menuItem mx-3 px-2 py-1 toggleTree" tabindex="0">
                        <i class="far  fa-stream mb-1"></i>
                        <span class="menuItem-label ">Gliederung</span>
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
                        <div class="breadcrumb"><a href="#">orgavision</a>›&nbsp;&nbsp;<a href="#">Innovation und Technologie</a>›&nbsp;&nbsp;<a href="#">Learning Network</a>›&nbsp;&nbsp;<a href="#">A long title to bring the message home</a>›&nbsp;&nbsp;<a href="#">Some other ABC item</a>›&nbsp;&nbsp;<a href="#" class="active">Neuigkeiten</a>   </div>
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
                            <div class="folderItem-icon"><i class="far getsLighter fa-folder-open  d-none d-md-inline"></i><i class="far fa-chevron-left d-inline d-md-none mr-2"></i></div>
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
                        <!-- -->

                        <!-- ARTICLE ITEM -->
                        <div class="article-item hasTransition firstItem" tabindex="0">
                            <i class="far getsLighter fa-plus tertiaryActions first"></i>
                            <i class="far getsLighter fa-plus tertiaryActions second"></i>
                            <div class="article-wrapper-head-body">
                                <div class="head">
                                    <div class="title mui-h3">Schicht für Schicht zum fertigen Bauteil</div>
                                    <div class="ui">
                                        <i class="far getsLighter fa-eye overflow has-title" data-title="Ansehen"></i>
                                        <i class="far getsLighter fa-paper-plane overflow has-title"
                                           data-title="Teilen"></i>
                                        <i class="far getsLighter fa-pencil d-none overflow has-title"
                                           data-title="Bearbeiten"></i>
                                        <i class="far getsLighter fa-comments-alt overflow has-title"
                                           data-title="Kommentieren"></i>
                                        <i class="far fa-ellipsis-h has-title" data-title="Mehr..."></i>
                                    </div>
                                </div>
                                <div class="teasertext">Bei der Produktentstehung des DHAS haben die Entwickler von der
                                    Tierwelt gelernt: Wie die Schwanzflosse eines Fisches knickt die Struktur mit Fin
                                    Ray Effect® bei seitlichem Druck nicht weg, sondern wölbt sich um den Druckpunkt
                                    herum. Zwei flexible Bänder bilden die Grundstruktur des Greiffingers. Sie sind über
                                    Zwischenstege miteinander verbunden. Beim Greifen passt sich der stabile, aber
                                    gleichzeitig nachgiebige Greifer aus Polyurethan der Kontur eines Werkstückes
                                    problemlos an. Eine Kombination aus zwei oder mehreren DHAS Greiffingern schließt
                                    sich sanft um die Gegenstände und hält sie sicher, ohne sie zu beschädigen.
                                    Besonders geeignet ist der DHAS daher zum Greifen empfindlicher Objekte mit
                                    unregelmäßiger Oberfläche. Beispielsweise findet er in der Lebensmittelindustrie
                                    beim Sortieren von Obst und Gemüse Anwendung.
                                </div>
                            </div>
                        </div>
                        <!-- FOLDER ITEM -->
                        <div class="folderItem-holder ">
                            <i class="far getsLighter fa-plus tertiaryActions first"></i>
                            <i class="far getsLighter fa-plus tertiaryActions second"></i>
                            <div class="folderItem hasTransition" tabindex="0">
                                <div class="rippleAnimation levitate hasTransition "></div>
                                <div class="folderItem-icon"><i class="far getsLighter fa-folder"></i></div>
                                <div class="folderItem-text">Nachrichten für neue Mitarbeiter</div>
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
                                <div class="folderItem-text">Lernzentrum Play {Kommentieren am Ordner}</div>
                                <div class="folderItem-menu">
                                    <i class="far getsLighter fa-paper-plane overflow" data-title="Teilen"></i>
                                    <i class="far getsLighter fa-print overflow" data-title="Drucken"></i>
                                    <i class="far getsLighter fa-pencil d-none overflow" data-title="Bearbeiten"></i>
                                    <i class="far getsLighter fa-comments-alt overflow toggleComments hasTransition"
                                       data-title="Kommentieren"></i>
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
                                        <div class="commentArea hasTransition" contentEditable="true"
                                             placeholder="Kommentar hinzufügen"></div>
                                        <div class="commentActions">
                                            <div class="confirmButton commentBtn levitate hasTransition  legitRipple">
                                                Kommentieren
                                            </div>
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
                            <i class="far getsLighter fa-plus tertiaryActions first"></i>
                            <i class="far getsLighter fa-plus tertiaryActions second" title="explode on hide"></i>
                            <div class="article-wrapper-head-body">
                                <div class="head">
                                    <div class="title mui-h3">Übergeben von schwebenden Objekten</div>
                                    <div class="ui">
                                        <i class="far getsLighter fa-eye overflow has-title" data-title="Ansehen"></i>
                                        <i class="far getsLighter fa-paper-plane overflow has-title"
                                           data-title="Teilen"></i>
                                        <i class="far getsLighter fa-pencil d-none overflow has-title"
                                           data-title="Bearbeiten"></i>
                                        <i class="far getsLighter fa-comments-alt overflow has-title"
                                           data-title="Kommentieren"></i>
                                        <i class="far fa-ellipsis-h has-title" data-title="Mehr..."></i>
                                    </div>
                                </div>
                                <div class="teasertext">
                                    <p><b>Berührungsloser Transport über Systemgrenzen hinweg</b><br>
                                        Durch die schwebende Übergabe von Objekten über Systemgrenzen hinweg sind nicht
                                        nur längere Prozessketten ohne Berührung realisierbar. Sie ermöglicht auch einen
                                        wartungsarmen Einsatz in Umgebungen mit strengsten Reinheitsanforderungen.</p>
                                    <p>Mehrere Funktionen nur einem Kryostaten: das SupraMultitool veranschaulicht, wie
                                        mit einem einzigen System gleichzeitig verschiedene Automatisierungsaufgaben
                                        flexibel und berührungslos realisiert werden können. Zu sehen sind der stabile,
                                        lineare Transport und die sichere, kontaktlose Drehbewegung eines
                                        Werkstückträgers.

                                        SupraMultitool: mehrere Funktionen mit nur einem System
                                        Der Aufbau zeigt anschaulich die Vorteile einer supraleitenden Lagerung
                                        hinsichtlich Stabilität und Zuverlässigkeit gegenüber elektromagnetischen
                                        Lösungen. Im Exponat SupraMultitool setzt ein Handlingsystem einen
                                        Werkstückträger nacheinander auf zwei unterschiedliche Magnete mit verschiedenen
                                        Lagerungen und Bewegungen, um die flexiblen Anwendungsmöglichkeiten zu
                                        demonstrieren.</p>
                                </div>
                            </div>
                        </div>
                        <!-- ARTICLE ITEM -->
                        <div class="article-item hasTransition" tabindex="0">
                            <i class="far getsLighter fa-plus tertiaryActions first"></i>
                            <i class="far getsLighter fa-plus tertiaryActions second" title="explode on hide"></i>
                            <div class="article-wrapper-head-body">
                                <div class="head">
                                    <div class="title mui-h3">Verlustfreier Stromtransport {Bild}</div>
                                    <div class="ui">
                                        <i class="far getsLighter fa-eye overflow has-title" data-title="Ansehen"></i>
                                        <i class="far getsLighter fa-paper-plane overflow has-title"
                                           data-title="Teilen"></i>
                                        <i class="far getsLighter fa-pencil d-none overflow has-title"
                                           data-title="Bearbeiten"></i>
                                        <i class="far getsLighter fa-comments-alt overflow has-title"
                                           data-title="Kommentieren"></i>
                                        <i class="far fa-ellipsis-h has-title" data-title="Mehr..."></i>
                                    </div>
                                </div>
                                <div class="teasertext">
                                    <p>
                                        <b>Niedriger Energiebedarf</b><br>
                                        Der Antrieb nutzt den Effekt, dass Strom innerhalb eines entsprechend gekühlten
                                        Supraleiters verlustfrei transportiert wird. Dadurch lässt sich mit sehr hohen
                                        Strömen ein starkes Magnetfeld erzeugen. Der SupraMotor hat eine große
                                        Überlastfähigkeit und eignet sich gut für Anwendungen im Dauerbetrieb. Dank der
                                        widerstandsfreien, supraleitenden Spulen ist es zudem fast ausgeschlossen, dass
                                        er überhitzt.
                                    </p>
                                    <img src="img/00224-supramotor-2140x940px.jpg" width="100%" height="auto"
                                         style="margin-bottom: 0.375rem;border-radius: 2px;">
                                    <p>
                                        Besonders effektiv arbeitet der Motor bei niedrigen Drehzahlen mit sehr hohen
                                        Drehmomenten. Muss eine Last gehalten werden, verbraucht der Antrieb selbst bei
                                        maximalem Haltemoment keine Energie. Auch insgesamt ist der Energiebedarf
                                        gering: Während die Ausgangsleistung des Motors im zweistelligen
                                        Kilowatt-Bereich liegt, benötigt er für die Kühlung nur Energie im niedrigen
                                        dreistelligen Wattbereich.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- ARTICLE ITEM -->
                        <div class="article-item hasTransition" tabindex="0">
                            <i class="far getsLighter fa-plus tertiaryActions first"></i>
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
                                    <div class="title mui-h3">Das „plug & work“-Prinzip {Artikel mit Meta-Informationen
                                        zu Bearbeitung/Kenntnisnahme}
                                    </div>
                                    <div class="ui">
                                        <i class="far getsLighter fa-eye overflow has-title" data-title="Ansehen"></i>
                                        <i class="far getsLighter fa-paper-plane overflow has-title"
                                           data-title="Teilen"></i>
                                        <i class="far getsLighter fa-pencil d-none overflow has-title"
                                           data-title="Bearbeiten"></i>
                                        <i class="far getsLighter fa-comments-alt overflow has-title"
                                           data-title="Kommentieren"></i>
                                        <i class="far fa-ellipsis-h has-title" data-title="Mehr..."></i>
                                    </div>
                                </div>
                                <div class="teasertext">
                                    <p><b>Simplified Motion Series – So einfach wie nur möglich</b><br>
                                        Mit der Simplified Motion Series bieten wir sechs verschiedene elektrische
                                        Lösungen, die genau nach dem „plug & work“-Prinzip funktionieren. Die
                                        Integration erfolgt über zwei Standard-Rundsteckverbinder – ohne jede Software
                                        und ohne dass Systemparameter geladen oder eingegeben werden müssen. Sie
                                        erfüllen einfache Bewegungen mit einer reduzierten Auswahl an Parametern, die
                                        direkt auf dem Antrieb, aber auch aus der Ferne über IO-Link eingestellt werden
                                        können.

                                        Die Bewegung wird direkt auf dem Antrieb durch eine integrierte
                                        Controllereinheit ausgeführt, was wiederum Platz im Schaltschrank spart. Durch
                                        die Kombination von integriertem Motor mit Controller und Antrieb werden die
                                        Produkte als vollständig vormontierte und vorparametrierte Einheiten angeboten.

                                        Mit ihrer vereinfachten Funktionalität sind die Antriebe geeignet für einfache
                                        Bewegungen zwischen zwei mechanischen Endlagen. Zusätzlich bieten sie optimierte
                                        Bewegungs-Charakteristiken wie gedämpftes Aus- und Einfahren in die Endlagen
                                        oder eine vereinfachte Press- und Klemmfunktion.
                                    </p>
                                    <p>
                                        <b>Anlagen programmieren, konfigurieren und vernetzen</b> <br>
                                        Die Inbetriebnahme einer Fertigungslinie oder Maschine kann mit erheblichem
                                        Zeitaufwand und Kosten verbunden sein. Vor allem bei elektrischen Anwendungen
                                        müssen die Mitarbeiter Fachwissen und Software Know-How mitbringen. Das ist
                                        gerade bei Applikationen, die einfache Bewegungen ausführen, zu umständlich.
                                        Einige Produkte kommen jedoch ganz ohne eigene Software aus. Möglich macht es
                                        das sogenannte „plug & work“-Prinzip.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- ARTICLE ITEM -->
                        <div class="article-item hasTransition" tabindex="0">
                            <i class="far getsLighter fa-plus tertiaryActions first"></i>
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
                                    <div class="title mui-h3">Ausbau der Prüfkapazität mit Laborautomatisierung
                                        {Tabelle}
                                    </div>
                                    <div class="ui">
                                        <i class="far getsLighter fa-eye overflow has-title" data-title="Ansehen"></i>
                                        <i class="far getsLighter fa-paper-plane overflow has-title"
                                           data-title="Teilen"></i>
                                        <i class="far getsLighter fa-pencil d-none overflow has-title"
                                           data-title="Bearbeiten"></i>
                                        <i class="far getsLighter fa-comments-alt overflow has-title"
                                           data-title="Kommentieren"></i>
                                        <i class="far fa-ellipsis-h has-title" data-title="Mehr..."></i>
                                    </div>
                                </div>
                                <div class="teasertext">
                                    <p>
                                        <b>Berührungsloser Transport über Systemgrenzen hinweg</b><br>
                                        Technische Lösungen helfen dabei, die Testkapazitäten deutlich zu steigern. Das
                                        große Portfolio an Liquid-Handling-Lösungen ermöglicht Maschinenbauern für
                                        Laborgeräte und Diagnostikunternehmen, skalierbare In-vitro-Diagnostik
                                        (IVD)-Geräte mit hohem Durchsatz zu bauen. Mit Komponenten und intelligenten
                                        Subsystemen für das Labor bieten wir Automatisierungslösungen für typische
                                        Test-Workflows wie Handling von Probenröhrchen, Pipettieren und Dispensieren von
                                        Pufferlösungen oder RNA.
                                    </p>
                                    <div style="overflow-x:scroll; ">
                                        <table class="table table-bordered table-striped text-small mx-auto"
                                               style=" white-space: nowrap; ">
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
                            <i class="far getsLighter fa-plus tertiaryActions first"></i>
                            <i class="far getsLighter fa-plus tertiaryActions second" title="explode on hide"></i>
                            <div class="article-wrapper-head-body">
                                <div class="head">
                                    <div class="title mui-h3">Bionic Learning Network {Formate, Kommentieren am
                                        Artikel}
                                    </div>
                                    <div class="ui">
                                        <i class="far getsLighter fa-eye overflow has-title" data-title="Ansehen"></i>
                                        <i class="far getsLighter fa-paper-plane overflow has-title"
                                           data-title="Teilen"></i>
                                        <i class="far getsLighter fa-pencil d-none overflow has-title"
                                           data-title="Bearbeiten"></i>
                                        <i class="far getsLighter fa-comments-alt overflow has-title toggleComments"
                                           data-title="Kommentieren"></i>
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
                                        <div class="commentArea hasTransition" contentEditable="true"
                                             placeholder="Kommentar hinzufügen"></div>
                                        <div class="commentActions">
                                            <div class="confirmButton commentBtn levitate hasTransition  legitRipple">
                                                Kommentieren
                                            </div>
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
                            <i class="far getsLighter fa-plus tertiaryActions first"></i>
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
                                    <div class="title mui-h3">XR technologies exist along a spectrum, <span
                                                class="flagWord flagWordAdded" style="">progressively</span> blending
                                        virtual and physical realities
                                    </div>
                                    <div class="ui">
                                        <i class="far getsLighter fa-eye overflow has-title" data-title="Ansehen"></i>
                                        <i class="far getsLighter fa-paper-plane overflow has-title"
                                           data-title="Teilen"></i>
                                        <i class="far getsLighter fa-pencil d-none overflow has-title"
                                           data-title="Bearbeiten"></i>
                                        <i class="far getsLighter fa-comments-alt overflow has-title"
                                           data-title="Kommentieren"></i>
                                        <i class="far fa-ellipsis-h has-title" data-title="Mehr..."></i>
                                    </div>
                                </div>
                                <div class="teasertext">
                                    <p>
                                        <b>Hacking Reality</b><br>
                                        On one end, virtual reality (VR) immerses users in a completely virtual
                                        environment. VR’s ability to transport <span class="flagWord flagWordRemoved">the user into “another world”</span>
                                        is ideal for simulating a variety of scenarios, which may benefit fields from
                                        training personnel to treating the ill, visualizing product and architectural
                                        designs, hosting virtual events, or administering therapy.
                                    </p>
                                    <p>
                                        Conversely, augmented reality (AR) introduces virtual content to the physical
                                        environment. AR’s ability to transport content into our world leverages many of
                                        VR’s strengths while remaining grounded in physicality. Essentially, AR is akin
                                        to the CG effects and green screen techniques of the film industry in real time.
                                        Visualizing content <span class="flagWord flagWordAdded">within a physical context</span>
                                        is ideal for communicating information that natural language and traditional
                                        visual aids simply cannot convey.
                                    </p>
                                    <p>
                                        XR technology is becoming increasingly important in a world where the need to
                                        know intersects with the need to experience. The ability to take virtual content
                                        into the real life space around us benefits everyone regardless of their field.
                                        VR is already revolutionizing the entertainment and training industries, and it
                                        won’t be too long until other industries follow suit. <span
                                                class="flagWord flagWordChanged">Advancements in machine vision, the core</span>
                                        technology behind AR, are also opening up new possibilities for enhancing the
                                        physical world and augmenting human ability.
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
                                    <div class="title mui-h3">Forschungsprojekt BaSys 4.2 <span class="mimeType-label">PDF</span>
                                    </div>
                                    <div class="ui">
                                        <i class="far getsLighter fa-arrow-to-bottom overflow has-title"
                                           data-title="Download"></i>
                                        <i class="far getsLighter fa-eye overflow has-title" data-title="Ansehen"></i>
                                        <i class="far getsLighter fa-paper-plane has-title" data-title="Teilen"></i>
                                        <i class="far fa-ellipsis-h has-title" data-title="Mehr..."></i>
                                    </div>
                                </div>
                                <div class="teasertext">Portable Document Format (115,88 KB), Autor: Fernão de
                                    Magalhães
                                </div>
                            </div>
                        </div>
                        <!-- ARTICLE ITEM -->
                        <div class="article-item hasTransition" tabindex="0" id="itemWithFileUserNote">
                            <i class="far getsLighter fa-plus tertiaryActions first"></i>
                            <i class="far getsLighter fa-plus tertiaryActions second"></i>
                            <div class="article-wrapper-head-body">
                                <div class="head">
                                    <div class="title mui-h3">Whitepaper Automatisierte Abfallwirtschaft <span
                                                class="mimeType-label">DOCX</span></div>
                                    <div class="ui">
                                        <i class="far getsLighter fa-arrow-to-bottom overflow has-title"
                                           data-title="Download"></i>
                                        <i class="far getsLighter fa-eye overflow has-title" data-title="Ansehen"></i>
                                        <i class="far getsLighter fa-paper-plane has-title" data-title="Teilen"></i>
                                        <i class="far fa-ellipsis-h has-title" data-title="Mehr..."></i>
                                    </div>
                                </div>
                                <div class="teasertext">Microsoft-Word-2007-Dokument (21 KB), Autorin: Margarete
                                    Neumann
                                </div>
                                <div class="fileUserNote ">
                                    <i class="far fa-info-circle"></i>
                                    <span>{mui.overline based} Ebenso wie die Optimierung der Fahrzeuge, wird auch die Optimierung der Fahrrouten zukünftig an Bedeutung gewinnen. Was für die Logistik gilt, gilt auch für die Entsorgung: Die steigende Vernetzung, beispielsweise durch Abfall-Apps und intelligente Mülltonnen, wird massiv vorangetrieben. In der Tourenplanung setzen Entsorgungsunternehmen zunehmend auf Softwares zur Tourenoptimierung und digitales Kartenmaterial und profitieren so von der Anpassung an moderne, technische Standards. Die bedarfsgerechte Tourenplanung führt zu effizienteren Prozesse und damit auch zu einer erhöhten Planungssicherheit. Dies stärkt die Wettbewerbsfähigkeit eines Unternehmers und verschafft neue Wachstumschancen.</span>
                                </div>
                            </div>
                        </div>
                        <!-- -->

                    </div>
                </div>
            </div>
            <!-- CONTENT AREA RIGHT -->
            <!-- CONTENT AREA RIGHT -->
            <!-- CONTENT AREA RIGHT -->
            <div class="contentWrapper-right px-2 py-1 radi-4 bg night-50">
                <div class="secondaryActions d-none d-md-flex px-2 py-2">
                    <button class="secondaryActions-button">
                        <i class="far fa-stream" data-title="Gliederung"></i>
                        <span class="secondaryActions-lable">Gliederung <i class="far fa-angle-down "  style="opacity:0.5"></i></span>
                    </button>
                    <button class="secondaryActions-button">
                        <i class="far fa-check-square"></i>
                        <span class="secondaryActions-lable">Aufgaben</span>
                    </button>
                    <button class="secondaryActions-button">
                        <i class="far fa-info-circle"></i>
                        <span class="secondaryActions-lable">Info</span>
                    </button>
                </div>

                <!-- GLIEDERUNG / STRUCTURE -->
                <!-- GLIEDERUNG / STRUCTURE -->
                <!-- GLIEDERUNG / STRUCTURE -->
                <div class="structureWrapper">
                    <div class="modal-body explorer-body bg-white pr-2 pl-2 pl-md-0 scrollarea">
                        <div class="level-0 itemWithinFolder levitate hasTransition " tabindex="0"><i
                                    class="far getsLighter fa-align-left"></i>Herzlich willkommen
                        </div>
                        <div class="level-0 itemWithinFolder levitate hasTransition " tabindex="0"><i
                                    class="far getsLighter fa-align-left"></i>Vorwort der Geschäftsführung
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-folder mr-0"></i>Wegweiser für neue Mitarbeiter
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0"><i
                                        class="far getsLighter fa-align-left mr-0"></i>Einleitung
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0"><i
                                        class="far getsLighter fa-align-left mr-0"></i>QM ist wie einen Garten pflegen
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0"><i
                                        class="far getsLighter fa-align-left mr-0"></i>Leitbild und Werte <i
                                        class="far getsLighter fa-link ml-1"></i></div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0"><i
                                        class="far getsLighter fa-align-left mr-0"></i>Wichtige Rufnummern <i
                                        class="far getsLighter fa-link ml-1"></i></div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed ">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-folder"></i>Unternehmen
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-align-left"></i>Einleitung
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition  element" tabindex="0"
                                 role="button"><i class="far getsLighter fa-align-left"></i>Leitbild und Werte
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition  element " tabindex="0"
                                 role="button"><i class="far getsLighter fa-align-left"></i>Umwelt und Energie
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-align-left"></i>Unternehmensziele
                            </div>
                            <!-- Folder -->
                            <div class="folder level-1 closed">
                                <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                            class="far getsLighter fa-folder"></i>Organigramme
                                </div>
                                <div class="level-2 itemWithinFolder levitate hasTransition " tabindex="0"
                                     role="button"><i class="far getsLighter fa-sitemap"></i>Unternehmens-Organigramm
                                </div>
                                <div class="level-2 itemWithinFolder levitate hasTransition " tabindex="0"
                                     role="button"><i class="far getsLighter fa-sitemap"></i>Zentrale
                                </div>
                                <div class="level-2 itemWithinFolder levitate hasTransition " tabindex="0"
                                     role="button"><i class="far getsLighter fa-sitemap"></i>Produktionsstandorte
                                </div>
                                <div class="level-2 itemWithinFolder levitate hasTransition " tabindex="0"
                                     role="button"><i class="far getsLighter fa-sitemap"></i>Marketing
                                </div>
                                <div class="level-2 itemWithinFolder levitate hasTransition " tabindex="0"
                                     role="button"><i class="far getsLighter fa-sitemap"></i>Vertrieb
                                </div>
                                <div class="level-2 itemWithinFolder levitate hasTransition " tabindex="0"
                                     role="button"><i class="far getsLighter fa-sitemap"></i>Beauftragte
                                </div>
                            </div>
                            <!-- Folder -->
                            <div class="folder level-1 closed">
                                <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                            class="far getsLighter fa-folder"></i>Unternehmensstandorte
                                </div>
                                <div class="level-2 itemWithinFolder levitate hasTransition " tabindex="0"
                                     role="button"><i class="far getsLighter fa-align-left"></i>Übersicht
                                </div>
                                <div class="level-2 itemWithinFolder levitate hasTransition " tabindex="0"
                                     role="button"><i class="far getsLighter fa-sitemap"></i>Karlsfeld
                                </div>
                                <div class="level-2 itemWithinFolder levitate hasTransition " tabindex="0"
                                     role="button"><i class="far getsLighter fa-sitemap"></i>Barsbüttel
                                </div>
                                <!-- Folder -->
                                <div class="folder level-2 closed">
                                    <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                                class="far getsLighter fa-folder mr-0"></i>Neu-Ausrichtung und Umbau
                                    </div>
                                    <div class="level-3 itemWithinFolder levitate hasTransition  d-flex" tabindex="0"
                                         role="button"><i class="far getsLighter fa-align-left mr-0"></i>Inspire,
                                        empower communities thought provoking agile think tank data.
                                    </div>
                                    <div class="level-3 itemWithinFolder levitate hasTransition  d-flex" tabindex="0"
                                         role="button"><i class="far getsLighter fa-align-left mr-0"></i>Ökologische
                                        Gesamtzielsetzung: eine Perspektive für 2020
                                    </div>
                                </div>
                            </div>
                            <!-- Folder -->
                            <div class="folder level-1 closed">
                                <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                            class="far getsLighter fa-folder"></i>Projektgruppen
                                </div>
                                <div class="level-3 itemWithinFolder levitate hasTransition " tabindex="0"
                                     role="button"><i class="far getsLighter fa-align-left mr-0"></i>Ziele
                                </div>
                                <!-- Folder -->
                                <div class="folder level-2 closed">
                                    <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                                class="far getsLighter fa-folder mr-0"></i>KVP (kontinuierliche
                                        Verbesserungsprozesse)
                                    </div>
                                    <div class="level-3 itemWithinFolder levitate hasTransition  d-flex" tabindex="0"
                                         role="button"><i class="far getsLighter fa-align-left mr-0"></i>Inspire,
                                        empower communities thought provoking agile think tank data.
                                    </div>
                                    <div class="level-3 itemWithinFolder levitate hasTransition  d-flex" tabindex="0"
                                         role="button"><i class="far getsLighter fa-align-left mr-0"></i>Ökologische
                                        Gesamtzielsetzung: eine Perspektive für 2020
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed activeContent">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-folder"></i>Innovation und Technologie
                            </div>
                            <!-- Folder -->
                            <div class="folder level-1 closed activeContent">
                                <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                            class="far getsLighter fa-folder"></i>Learning Network
                                </div>
                                <!-- Folder -->
                                <div class="folder level-2 closed activeContent marked">
                                    <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                                class="far getsLighter fa-folder mr-0"></i>Neuigkeiten
                                    </div>
                                    <div class="level-3 itemWithinFolder levitate hasTransition  d-flex" tabindex="0"
                                         role="button"><i class="far getsLighter fa-align-left mr-0"></i>Inspire,
                                        empower communities thought provoking agile think tank data.
                                    </div>
                                    <div class="level-3 itemWithinFolder levitate hasTransition  d-flex" tabindex="0"
                                         role="button"><i class="far getsLighter fa-align-left mr-0"></i>Ökologische
                                        Gesamtzielsetzung: eine Perspektive für 2020
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed skeletonSpareContent">
                            <div class="folder-title levitate hasTransition d-flex align-items-center" tabindex="0"
                                 role="button"><i class="far getsLighter fa-folder mr-0"></i>Dienstanweisungen {skeleton
                                with ajax transition}
                            </div>
                            <div class="ajax">
                                <div class="level-1 itemWithinFolder skeleton loadingIndication hasTransition"
                                     tabindex="0" role="button"><i class="skeletonIcon"></i><span
                                            class="skeletonTitle"></span></div>
                            </div>
                        </div>
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-folder mr-0"></i>Wissensmanagement
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-align-left mr-0"></i> Einleitung
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-align-left mr-0"></i> Glossar
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-align-left mr-0"></i>Logins und Passwörter
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-align-left mr-0"></i> Konventionen und Schreibweisen
                            </div>
                            <!-- Folder -->
                            <div class="folder level-1 closed">
                                <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                            class="far getsLighter fa-folder"></i> Bedienungsanleitungen
                                </div>
                                <div class="level-2 itemWithinFolder levitate hasTransition " tabindex="0"
                                     role="button"><i class="far getsLighter fa-align-left"></i>Telefonanlage Sinus 205
                                </div>
                                <div class="level-2 itemWithinFolder levitate hasTransition " tabindex="0"
                                     role="button"><i class="far getsLighter fa-align-left"></i>ECOSYS P6021CDN /
                                    P6026CDN
                                </div>
                            </div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-folder mr-0"></i>Arbeitsschutz {skeleton}
                            </div>
                            <div class="level-1 itemWithinFolder skeleton loadingIndication hasTransition" tabindex="0"
                                 role="button"><i class="skeletonIcon"></i><span class="skeletonTitle"></span></div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-folder mr-0"></i>Qualitätsmanagement nach ISO
                                9001:2015
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-align-left mr-0"></i>Inhaltsverzeichnis
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-align-left mr-0"></i>1) Anwendungsbereich
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-align-left mr-0"></i>2) Normative Verweisungen
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-align-left mr-0"></i>3) Glossar
                            </div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-folder mr-0"></i>Energiemanagement nach ISO 50001
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-align-left mr-0"></i>Titelblatt
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-align-left mr-0"></i>Übersicht
                            </div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-folder mr-0"></i>Risikomanagement
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-align-left mr-0"></i>Risikokriterien
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-align-left mr-0"></i>Eintrittswahrscheinlichkeit
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-align-left mr-0"></i>Farblegende Risikograph
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-align-left mr-0"></i>Checkliste Risikomanagementh
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition  d-flex" tabindex="0"
                                 role="button"><i class="far getsLighter fa-file-pdf mr-0"></i>Schutz Kritischer
                                Infrastruktur: Risikomanagement im Krankenhaus
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-file-spreadsheet mr-0"></i>Risikodiagramm
                                Excel-Vorlage
                            </div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-folder mr-0"></i>Umweltmanagement
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-align-left mr-0"></i>Titelblatt
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-align-left mr-0"></i>Übersicht
                            </div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-folder mr-0"></i>IT-Sicherheitsmanagement
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-align-left mr-0"></i>Titelblatt
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition  d-flex" tabindex="0"
                                 role="button"><i class="far getsLighter fa-file-pdf mr-0"></i>Gesetzesblatt des
                                IT-Sicherheitsgesetz
                            </div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-folder mr-0"></i>Datenschutz
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-user-check mr-0"></i>Datenschutzbeauftragter (DSB) <i
                                        class="far getsLighter fa-link ml-1"></i></div>
                            <div class="level-1 itemWithinFolder levitate hasTransition  d-flex" tabindex="0"
                                 role="button"><i class="far getsLighter fa-file-word mr-0"></i>Mustervorlage
                                Verpflichtung Datenschutz, Fernmeldegeheimnis und Geschäftsgeheimnis
                            </div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-folder mr-0"></i>Notfallszenario
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-align-left mr-0"></i>Wichtige Notrufnummern
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-align-left mr-0"></i>Krankenhäuser in der Nähe
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-file-check mr-0"></i>Checkliste
                            </div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-folder mr-0"></i>Versorgungsunternehmen
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-folder mr-0"></i>Relevante Gesetze
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-folder mr-0"></i>Verbände
                            </div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-folder mr-0"></i>Gesundheitswesen
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-folder mr-0"></i>Zentren
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-folder mr-0"></i>Tätigkeiten
                            </div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-folder mr-0"></i>Rollen
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-user-check mr-0"></i>Alle Mitarbeiter
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-user-check mr-0"></i>Produktion
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-user-check mr-0"></i>Lager
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-user-check mr-0"></i>Neue Mitarbeiter
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-user-check mr-0"></i>Back-Office
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-user-check mr-0"></i>Ereignismanager
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-user-check mr-0"></i>Geschäftsführung
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-user-check mr-0"></i>Gesellschafter
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-user-check mr-0"></i>...
                            </div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-folder mr-0"></i>AnwenderInnen
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-user-circle mr-0"></i>Matthias Steinhaus
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-user-circle mr-0"></i>Hannah Koch
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-user-circle mr-0"></i>Martin Konrad
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-user-circle mr-0"></i>Lars Engel
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-user-circle mr-0"></i>Robert Hartmann
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-user-circle mr-0"></i>Dr. Susann Walter
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-user-circle mr-0"></i>Tom Kramer
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-user-circle mr-0"></i>Lena Simon
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-user-circle mr-0"></i>Dr. Stephan T. Kieburg
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-user-circle mr-0"></i>...
                            </div>
                        </div>
                        <!-- Folder -->
                        <div class="folder level-0 closed">
                            <div class="folder-title levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-folder mr-0"></i>Vorlagen
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-files-medical mr-0"></i>Protokoll
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-files-medical mr-0"></i>Prozessbeschreibung
                            </div>
                            <div class="level-1 itemWithinFolder levitate hasTransition " tabindex="0" role="button"><i
                                        class="far getsLighter fa-files-medical mr-0"></i>Blog-Eintrag
                            </div>
                        </div>
                        <!-- Other Elements -->
                        <div class="level-0 itemWithinFolder levitate hasTransition"><i
                                    class="far getsLighter fa-project-diagram"></i>BPMN Prozessdiagramm
                        </div>
                        <div class="level-0 itemWithinFolder levitate hasTransition"><i
                                    class="far getsLighter fa-file"></i>...
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal hideModal reviewModal">
    <div class="modalBackDrop"></div>
    <div class="modalBody">
        <div class="modalHeader">
            <div class="modalTitle"><span>Versionsvergleich</span> <i class="far fa-angle-right"></i> XR technologies
                exist along a spectrum, progressively blending virtual and physical realities
            </div>
            <div class="showHideModal"><i class="fal fa-times"></i></div>
        </div>
        <div class="modalPrimaryFunctions">
            <div class="modalPrimaryFunctionsWrapper">
                <div class="controls">
                    <div class="controlsLabel">Änderungen</div>
                    <div class="revisionBack backAndForthBtn levitate hasTransition "><i class="far fa-angle-left"></i>
                    </div>
                    <div class="revisionForth backAndForthBtn levitate hasTransition "><i
                                class="far fa-angle-right"></i></div>
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
                        On one end, virtual reality (VR) immerses users in a completely virtual environment. VR’s
                        ability to transport <span
                                class="flagWord flagWordRemoved flagWordHighlighted diff_1 hasTransition" tabindex="0">the user into “another world”</span>
                        is ideal for simulating a variety of scenarios, which may benefit fields from <span
                                class="flagWord flagWordRemoved diff_2 hasTransition" tabindex="0">training personnel to treating the ill,</span>
                        visualizing product and architectural designs, hosting virtual events, or administering therapy.
                        Conversely, augmented reality (AR) introduces virtual content to the physical environment. AR’s
                        ability to transport content into our world leverages many of VR’s strengths while remaining
                        grounded in physicality. Essentially, AR is akin to the CG effects and green screen techniques
                        of the film industry in real time. Visualizing content <span
                                class="flagWord flagWordAdded diff_3 hasTransition" tabindex="0">within a physical context</span>
                        is ideal for communicating information that natural language and traditional visual aids simply
                        cannot convey. XR technology is becoming increasingly important in a world where the need to
                        know intersects with the need to experience. The ability to take virtual content into the real
                        life space around us benefits everyone regardless of their field. VR is already revolutionizing
                        the entertainment and training industries, and it won’t be too long until other industries
                        follow suit. <span class="flagWord flagWordChanged diff_3 hasTransition" tabindex="0">Advancements in machine vision, the core technology behind AR, are also opening up new possibilities for enhancing the physical world and augmenting human ability.</span>
                    </p>
                </div>
                <div class="containedContentInVersion"></div>
            </div>
            <div class="versionSelectionWrapper">

            </div>
        </div>
    </div>
</div>


<div class="modal hideModal metadata ">
    <div class="modalBackDrop"></div>
    <div class="modalBody">
        <div class="modalHeader">
            <div class="modalTitle"><span>Meta-Tags bearbeiten</span> <i class="far fa-angle-right"></i> XR technologies
                exist along a spectrum, progressively blending virtual and physical realities
            </div>
            <div class="showHideModal"><i class="fal fa-times"></i></div>
        </div>
        <div class="modalContent">
            <div class="inputWrap">
                <input type="text" placeholder="Feldnamen eingeben" class="addFieldName">
            </div>
        </div>
    </div>
</div>

<div class="drawerBackDrop  d-block d-md-none"></div>
<div class="treeBackDrop  d-block d-md-none"></div>
<div class="modalDrawer ">
    <div class="drawerHead pl-3 pl-md-4 pr-2 pr-md-3 d-none">
        <div class="name">Wechseln zu...</div>
        <div class="logo d-none">
            <svg width="128px" height="22px" viewBox="0 0 128 22" version="1.1">
                <g id="Element-10" fill="#fff" fill-rule="nonzero">
                    <path d="M18.6972037,3.16505992 C18.6972037,3.15824234 18.7048735,3.14972037 18.707431,3.1429028 C18.7099867,3.13608522 13.2363249,0 13.1817843,0 L13.1817843,0 L13.1817843,0.0127829561 C13.1817843,0.0127829561 13.1817843,0.0213049268 13.1817843,0.0264181092 C10.133907,2.41965672 6.84953738,4.49530294 3.37981358,6.22103862 C2.27366178,6.77241012 1.15728362,7.28372836 0,7.75499334 L0.0426098535,7.77118509 L0.0426098535,14.1174967 L0.0426098535,14.1174967 C2.75846135,15.2497667 5.3801065,16.5959245 7.8828229,18.1432756 C9.70245586,19.2684383 11.4576085,20.4946837 13.1400266,21.816245 L13.1494008,21.8358455 C13.1494008,21.8358455 13.1442876,21.8358455 13.1451398,21.8409587 L13.1604794,21.8324368 L13.1724101,21.8409587 L13.1724101,21.8264714 L18.6750466,18.7150999 L18.6750466,18.7150999 C18.6614115,18.6954993 18.6469241,18.676751 18.6324368,18.6571505 L18.7023169,18.7150999 C18.0520116,13.5480499 18.0537295,8.31975068 18.707431,3.15312916 L18.6972037,3.16505992 Z M7.17379494,10.9456192 L7.1840213,10.9388016 C7.1840213,10.9388016 7.19339547,10.9388016 7.19254328,10.9388016 L7.18743009,10.9336884 C8.94806924,10.0099068 10.6439414,8.99920107 12.3636751,7.90668442 C12.3176565,8.92932091 12.2946471,9.95508211 12.2946471,10.983968 C12.2946471,11.9861518 12.3159521,12.9854949 12.3585619,13.9819973 C11.9026365,13.6845806 11.4373369,13.392277 10.9737417,13.1067909 C9.73067022,12.3398136 8.4640213,11.619423 7.17379494,10.9456192 Z M12.3698089,13.9996531 L12.3698089,13.9996531 L12.3868089,14.0106531 L12.3698089,13.9996531 Z" id="Shape"></path>
                    <path d="M31.0455393,16.7720905 C27.7901465,16.7720905 25.3358189,14.3680426 25.3358189,11.1799734 C25.3358189,7.99190413 27.7909987,5.58700399 31.0455393,5.58700399 C34.3000799,5.58700399 36.7671904,7.99105193 36.7671904,11.1799734 C36.7671904,14.3688948 34.3077497,16.7720905 31.0455393,16.7720905 Z M31.0455393,8.06689747 C29.2857523,8.06689747 28.0074567,9.37587217 28.0074567,11.1799734 C28.0074567,12.9840746 29.2857523,14.2930493 31.0455393,14.2930493 C32.8053262,14.2930493 34.0938482,12.9832224 34.0938482,11.1799734 C34.0938482,9.37672437 32.8095872,8.06689747 31.0455393,8.06689747 Z" id="Shape"></path>
                    <path d="M38.7400266,16.5036485 L38.7400266,5.85544607 L41.3264447,5.85544607 L41.3264447,6.68292943 C42.0082024,5.96537949 42.9703329,5.58700399 44.1284687,5.58700399 C44.8409055,5.58700399 45.3948336,5.68074567 45.9240479,5.88953395 L46.071478,5.94833555 L45.4425566,8.55094541 L45.2354727,8.44271638 C44.8230093,8.22711052 44.1864181,8.0882024 43.6162983,8.0882024 C42.2408522,8.0882024 41.3511585,9.09976032 41.3511585,10.6643941 L41.3511585,16.5036485 L38.7400266,16.5036485 Z" id="Path"></path>
                    <path d="M51.6141678,21.0015446 C49.9540879,21.0015446 48.2641811,20.531984 47.2031957,19.7760852 L47.0838881,19.6908655 L48.0409055,17.4623702 L48.2198668,17.5714514 C49.3115313,18.2353129 50.4850067,18.5864181 51.6141678,18.5864181 C53.574221,18.5864181 54.6948602,17.5339547 54.6948602,15.6991744 L54.6948602,15.3540346 C53.8963515,16.1525433 52.8072437,16.5573369 51.4565113,16.5573369 C50.1764139,16.541793 48.9551257,16.0174639 48.0622104,15.1000799 C47.3531824,14.3816778 46.5078029,13.0991212 46.5078029,11.0725965 C46.5078029,7.63909454 49.0234887,5.58700399 51.4565113,5.58700399 C52.7808256,5.58700399 53.8963515,6.00372836 54.6948602,6.79541944 L54.6948602,5.85800266 L57.3136618,5.85800266 L57.3136618,15.602024 C57.3136618,17.2407989 56.7861518,18.607723 55.7865246,19.554514 C54.7868975,20.5013049 53.3475366,21.0015446 51.6141678,21.0015446 Z M52.0325965,8.06689747 C50.3512117,8.06689747 49.1777364,9.30258322 49.1777364,11.0725965 C49.1777364,11.8941145 49.4470306,12.6474567 49.9370439,13.1928628 C50.4577364,13.7715047 51.1821039,14.0782956 52.0325965,14.0782956 C53.6875632,14.0782956 54.8883089,12.8136352 54.8883089,11.0725965 C54.8883089,9.33155792 53.6884154,8.06689747 52.0325965,8.06689747 L52.0325965,8.06689747 Z" id="Shape"></path>
                    <path d="M64.6169907,16.7720905 C61.5823169,16.7720905 59.2933156,14.3680426 59.2933156,11.1799734 C59.2933156,7.99190413 61.5823169,5.58700399 64.6169907,5.58700399 C65.8364847,5.58700399 66.8855393,6.00458056 67.6661518,6.79712383 L67.6661518,5.85544607 L70.274727,5.85544607 L70.274727,16.5079095 L67.6644474,16.5079095 L67.6644474,15.5721971 C66.8889481,16.3621838 65.8398935,16.7720905 64.6169907,16.7720905 Z M64.8854328,8.06689747 C63.1665513,8.06689747 61.9658056,9.34519308 61.9658056,11.1799734 C61.9658056,13.0147537 63.1665513,14.2930493 64.8854328,14.2930493 C66.6043142,14.2930493 67.8059121,13.0147537 67.8059121,11.1799734 C67.8059121,9.34519308 66.6051664,8.06689747 64.8854328,8.06689747 Z" id="Shape"></path>
                    <polygon id="Path" points="76.0875632 16.5036485 71.8078296 5.85544607 74.650759 5.85544607 77.5635686 13.4809055 80.475526 5.85544607 83.2536884 5.85544607 78.996964 16.5036485"></polygon>
                    <path d="M85.7190945,4.10929427 C85.2852761,4.1191738 84.8662814,3.95124685 84.5593654,3.64449184 C84.2524495,3.33773683 84.0843027,2.91883021 84.0939547,2.48500666 C84.0939547,1.90074656 84.4056537,1.36086795 84.9116378,1.06873789 C85.4176219,0.776607826 86.04102,0.776607826 86.547004,1.06873789 C87.0529881,1.36086795 87.3646959,1.90074656 87.3646959,2.48500666 C87.3661185,2.91994099 87.1925106,3.33716369 86.8829667,3.64270007 C86.5734228,3.94823645 86.1539733,4.11639297 85.7190945,4.10929427 L85.7190945,4.10929427 Z" id="Path"></path>
                    <rect id="Rectangle" x="84.4203462" y="5.85544607" width="2.61965379" height="10.6482024"></rect>
                    <path d="M93.3897204,16.7618642 C92.3832756,16.7618642 90.4573103,16.5854594 88.8730759,15.4051664 L88.7384288,15.3054594 L89.9741145,13.3053529 L90.1343276,13.4289214 C90.7487617,13.9010386 91.6776565,14.443036 93.4152863,14.443036 C94.7864714,14.443036 95.5730493,14.0518775 95.5730493,13.3692676 C95.5730493,12.8792543 95.0421305,12.5656458 93.9487617,12.4122503 L92.8715846,12.2716378 C90.4854328,11.9452463 89.2250333,10.8390945 89.2250333,9.07419441 C89.2250333,6.92921438 90.9234621,5.59637816 93.6564581,5.59637816 C95.295233,5.59637816 96.8095872,5.9917976 97.9174434,6.70934754 L98.0606125,6.80223702 L96.9195206,8.86881491 L96.7558988,8.76740346 C96.0945939,8.35664447 94.8478296,7.91520639 93.6752064,7.91520639 C92.5895073,7.91520639 91.9145672,8.31488682 91.9145672,8.95659121 C91.9145672,9.43978695 92.3176565,9.67073236 93.4553395,9.83946738 L94.5180293,9.99968043 C96.9894008,10.3550466 98.248103,11.4381891 98.248103,13.2184288 C98.2523569,15.3710786 96.3434354,16.7618642 93.3897204,16.7618642 Z" id="Path"></path>
                    <path d="M101.37992,4.10929427 C100.946176,4.11918271 100.527262,3.95123022 100.220479,3.64444741 C99.9136965,3.33766459 99.7457441,2.91875038 99.7556325,2.48500666 C99.7556325,1.58181886 100.487811,0.849640479 101.390999,0.849640479 C102.294186,0.849640479 103.026374,1.58181886 103.026374,2.48500666 C103.027801,2.92009126 102.854076,3.3374468 102.544346,3.64300859 C102.234616,3.94857037 101.814945,4.11662442 101.37992,4.10929427 Z" id="Path"></path>
                    <rect id="Rectangle" x="100.081172" y="5.85544607" width="2.6188016" height="10.6482024"></rect>
                    <path d="M110.291345,16.7720905 C107.035952,16.7720905 104.581625,14.3680426 104.581625,11.1799734 C104.581625,7.99190413 107.036804,5.58700399 110.291345,5.58700399 C113.545885,5.58700399 116.012996,7.99105193 116.012996,11.1799734 C116.012996,14.3688948 113.553555,16.7720905 110.291345,16.7720905 Z M110.291345,8.06689747 C108.531558,8.06689747 107.253262,9.37587217 107.253262,11.1799734 C107.253262,12.9840746 108.531558,14.2930493 110.291345,14.2930493 C112.051132,14.2930493 113.34221,12.9832224 113.34221,11.1799734 C113.34221,9.37672437 112.057949,8.06689747 110.291345,8.06689747 Z" id="Shape"></path>
                    <path d="M125.295979,16.5036485 L125.295979,10.5996272 C125.295979,9.00346205 124.4898,8.0882024 123.080266,8.0882024 C121.36735,8.0882024 120.600373,9.36053262 120.600373,10.6217843 L120.600373,16.5019441 L117.981571,16.5019441 L117.981571,5.85544607 L120.585885,5.85544607 L120.585885,6.77070573 C121.481545,5.79834887 122.684847,5.58700399 123.559201,5.58700399 C126.125166,5.58700399 127.917337,7.34423435 127.917337,9.85906791 L127.917337,16.5062051 L125.295979,16.5036485 Z" id="Path"></path>
                </g>
            </svg>
        </div>
        <div class="closeDrawer toggleDrawer"><i class="fal fa-times"></i></div>
    </div>
    <div class="drawerBody ">
            <div class="item px-3 px-md-4 py-3 d-none mb-3" style="border:none">
                <div class="mobileSecondaryActions">
                    <div class=" secondaryActions px-0 py-2 m-0"><i class="far fa-stream mr-2"></i>Gliederung </div>
                </div>
                <div class="mobileSecondaryActions">
                    <div class=" secondaryActions px-0 py-2 m-0"><i class="far fa-check-square mr-2"></i>Aufgaben </div>
                </div>
                <div class="mobileSecondaryActions">
                    <div class=" secondaryActions px-0 py-2 m-0"><i class="far fa-info-circle mr-2"></i>Information </div>
                </div>
            </div>
        <div class="item px-3 px-md-4 py-3">
            <div class="moduleTitle" style="color: #006EE6">Handbuch  <i class="fad fa-check-circle ml-1" style="color: #006EE6"></i></div>
            <div class="moduleDescription">Alle Informationen schnell und einfach finden.</div>
        </div>
        <div class="item px-3 px-md-4 py-3">
            <div class="moduleTitle">Ereignisse</div>
            <div class="moduleDescription">Erfassen und organisieren Sie Ereignisse wie Beschwerden, Fehler, Unfälle, Ideen und mehr.
            </div>
        </div>
        <div class="item px-3 px-md-4 py-3">
            <div class="moduleTitle">Maßnahmen</div>
            <div class="moduleDescription">Workflows entwerfen. Alle Tasks visualisiert. Komplettlösung. Prioritäten setzen.
            </div>
        </div>
    </div>
    <div class="drawerFooter">
        <div class="item px-3 px-md-4 py-3"><i class="fas fa-cogs mr-2"></i>Einstellungen</div>
    </div>
</div>

<div class="modalSearch pl-3 pr-3 d-flex d-md-none  align-items-center justify-content-between">
    <div class="editableField d-flex flex-fill px-2 py-2" contenteditable="true" placeholder="Suche"></div>
    <div class="toggleModalSearch ml-3"><i class="far fa-times"></i></div>
</div>

<!-- JS PLUGINS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="plugins/legitRippleJS/ripple.min.js"></script>
<!-- -->
<!-- -->
<!-- Tab-Accessibility | mouse or keyboard-->
<script>
    // Let the document know when the mouse is being used
    document.body.addEventListener('mousedown', function () {
        document.body.classList.add('using-mouse');
    });

    // Re-enable focus styling when Tab is pressed
    document.body.addEventListener('keydown', function (event) {
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
    $(".primaryActions .menuItem ").click(function () {
        $('.primaryActions .menuItem ').removeClass("active");
        $(this).addClass("active");
    });

    $(".secondaryActions .menuItem ").click(function () {
        $('.secondaryActions .menuItem ').removeClass("active");
        $(this).addClass("active");
    });
</script>
<!-- -->
<!-- -->
<!-- Draft and edit mode toggle | INTERACTION PATTERN -->
<script>
    $('.mode-switch').click(function () {
        $('body').toggleClass("draft");
        $(this).toggleClass("switch");
    });
</script>
<!-- -->
<!-- -->
<!-- TOGGLE DRAWER MENU -->
<script>
    if (window.matchMedia("(orientation: landscape)").matches) {
        $('body').toggleClass("landscape");
    }
</script>

<!-- -->
<!-- -->
<!-- TOGGLE DRAWER MENU -->
<script>
    $('.toggleDrawer').click(function () {
        $('.modalDrawer').toggleClass("open");
        $(this).toggleClass("active")
    });
</script>
<!-- -->
<!-- -->
<!-- TOGGLE TREE -->
<script>
    $('.toggleTree').click(function () {
        $('.contentWrapper-right').toggleClass("open");
        $('.modalDrawer').removeClass("open");
        $('.tasks').toggleClass("inactive");
        $('.information').toggleClass("inactive");
        $('.treeBackDrop').toggleClass("open");
    });
</script>
<!-- -->
<!-- -->
<!-- TOGGLE MODAL SEARCH -->
<script>
    $('.toggleModalSearch').click(function () {
        $('.modalSearch').toggleClass("open");
        $('.drawerBackDrop').toggleClass("open");
        $('.modalDrawer').removeClass("open");
    });
</script>
<!-- -->
<!-- -->
<!-- Breadcrumbs -->
<script>
    $('.levelUp').click(function () {
        $('.enteredFolder-breadcrumbs').addClass("active");
        $(this).addClass("active");
    });
    $('.closeBreadcrumbs').click(function () {
        $('.enteredFolder-breadcrumbs').removeClass("active");
        $('.levelUp').removeClass("active");
    });
</script>
<!-- -->
<!-- -->
<!-- MODAL open / close -->
<script>
    $('.showHideModal').click(function () {
        $(this).closest('.modal').toggleClass("hideModal");
        $('body').toggleClass("modalActive");
    });
</script>
<!-- -->
<!-- -->
<!-- SCROLLING BEHAVIOUR -->
<script>
    $(function () {
        var folderEntered = $(".folderItem.entered");
        $(".contentWrapper-left-scroll-area-barrier").scroll(function () {
            var scroll = $("body.landscape .contentWrapper-left-scroll-area-barrier").scrollTop();

            if (scroll >= 75) {
                folderEntered.addClass("scrolled");
            } else {
                folderEntered.removeClass("scrolled");
            }
        });
    });
</script>
<!-- -->
<!-- -->
<!-- MODALS | Review feature -->
<script>
    $(".reviewItem").dblclick(function () {
        $('.modal.reviewModal').toggleClass("hideModal");
        $('body').toggleClass("modalActive");
        $('.flagWordHighlighted').focus();
    });
    $('.modalPrimaryFunctions .useWidth').click(function () {
        $('i.toggleWidth').toggleClass("fa-circle");
    });

    $(".selectedVersionContent .flagWord").click(function () {
        $('.selectedVersionContent .flagWord').removeClass("flagWordHighlighted");
        $(this).addClass("flagWordHighlighted");
    });

    $(".revisionForth").click(function (event) {
        $('.selectedVersionContent').find('.flagWordHighlighted').next('.flagWord:first').addClass("flagWordHighlighted");
        $('.selectedVersionContent').find('.flagWordHighlighted:first').removeClass("flagWordHighlighted").focus();
    });

    $(".revisionBack").click(function (event) {
        $('.selectedVersionContent').find('.flagWordHighlighted').prev('.flagWord:last').addClass("flagWordHighlighted").focus();
        $('.selectedVersionContent').find('.flagWordHighlighted:last').removeClass("flagWordHighlighted");
    });


</script>
<!-- -->
<!-- -->
<!-- CONTENT Interaction pattern -->
<script>
    $('.folder-title-ui-wrapper').click(function () {
        $('.article-item').removeClass("active");
        $('.folderItem-holder').removeClass("active");
        $(this).addClass("active");
    });
    $('.article-item').click(function () {
        $('.folder-title-ui-wrapper').removeClass("active");
        $('.folderItem-holder').removeClass("active");
        $('.article-item').removeClass("active");
        $(this).addClass("active");
    });
    $('.folderItem-holder').click(function () {
        $('.folder-title-ui-wrapper').removeClass("active");
        $('.folderItem-holder').removeClass("active");
        $('.article-item').removeClass("active");
        $(this).addClass("active");
    });
</script>
<!-- -->
<!-- -->
<!-- caused interface changes by MODE toggle -->
<script>
    $('.mode-switch').click(function () {
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
    $(".folder .folder-title").click(function () {
        $(this).parent().toggleClass('closed');
        $(this).parent().toggleClass('active');
        $(this).find(".fa-folder").toggleClass('fa-folder-open');
    });
    $(".folder .folder-title").keypress(function (accessibility) {
        if (accessibility.which == 13) {
            $(this).parent().toggleClass('closed');
            $(this).parent().toggleClass("active");
            $(this).find(".fa-folder").toggleClass("fa-folder-open");
        }
    });
</script>
<!-- -->
<!-- -->
<!-- FILE EXPLORER ajax dummy -->
<script>
    $(".skeletonSpareContent").one('click', function () {
        $('.ajax').delay(2400).queue(function (nxt) {
            $(this).load('skeletonSpareContent.php');
            nxt();
        });
    });
</script>
<!-- -->
<!-- -->
<!-- CONFIRMATION AND PROCESS MANAGEMENT AT CONTENT ELEMENTS -->
<script>
    $('.confirm').click(function () {
        $(this).toggleClass("confirmed");
        $(this).parent().parent().delay(1400).fadeOut(560);
    });
</script>

<!-- -->
<!-- -->
<!-- COMMENTS AT FOLDER AND CONTENT ELEMENTS -->
<script>
    $(".toggleComments").click(function () {
        $(this).closest('.contentItem').children('.comments').toggleClass('hide');
        $(this).toggleClass("active");
        $(function () {
            var editable = $('[contenteditable]');
            setTimeout(function () {
                editable.trigger('focus');
            }, 100);
        });
    });
    $(".cancelButton.commentBtn").click(function () {
        $(this).closest('.contentItem').children('.comments').toggleClass('hide');
    });
</script>
<!-- -->
<!-- -->
<!-- RESPONSIVE BEHAVIOUR -->

<!-- -->
<!-- -->
<!-- MODAL | REVIEW interaction pattern -->
<script>
    $("body").on('click tap', '.revisionForth .revisionBack', function (e) {
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
    $('.extUI .showUIAreas-switch').click(function () {
        $('body').toggleClass("showUIAreas");
        $(this).toggleClass("active");
    });
</script>
<!-- -->
<!-- -->
<!-- Prototype features -->
<script>
    $('.blocks-switch').click(function () {
        $('html').toggleClass("blocks");
        $('html').removeClass("protodayswhiteboard");
        $('.usertest-mode').removeClass("active");
        $(this).toggleClass("active");
    });
    $('.usertest-mode').click(function () {
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
    $('.extUI .markMotion').click(function () {
        $('body').toggleClass("markMotion");
    });
</script>
<script>
    $("div.hasTransition").click(function () {
        var html = ["Computed styles"];

        var styleProps = $(this).css([
            "color", "background-color", "transition", "animation", "box-shadow", "background-image"
        ]);
        $.each(styleProps, function (prop, value) {
            html.push(prop + ": " + value);
        });

        $("#result").html(html.join("<br>"));
    });
</script>
<script>
    $("div.hasTransition").on("mouseover", function () {
        var html = ["CSS"];

        var styleProps = $(this).css([
            "color", "background-color", "transition", "animation", "background-image"
        ]);
        $.each(styleProps, function (prop, value) {
            html.push(prop + ": " + value);
        });

        $("#result").html(html.join("<br>"));
    });

</script>


</body>
</html>