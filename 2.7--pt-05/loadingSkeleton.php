<!DOCTYPE html>
<html lang="de" >
<head>
<!--
 * Design and development of this functional prototype 8
 *  2020 Ronny Puschmann
 * https://ronnypuschmann.de
-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Prototype - Skeletons</title>

    <link rel="stylesheet" href="css/styles.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/colors.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/dev-17562.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/typography.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/tree.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/mediaqueries.css?<?php echo time() ?>">
    <link rel="stylesheet" href="typefaces/protodaysblocks/protodaysblocks.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/areas.css?<?php echo time() ?>">

    <!-- PLUGINS -->
    <link rel="stylesheet" href="plugins/legitRippleJS/ripple.min.css">
    <!-- FONTS and ICONS -->
    <link href="https://free.bboxtype.com/embedfonts/?family=FiraGO:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
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
                <div class="account"  tabindex="0" role="button" >
                    <div class="accountName returnCSS">Keli Kaiser</div>
                    <div class="profileImage hasProfileImage">
                        <i class="far getsLighter fa-user-alt d-none"></i>
                    </div>
                    <div class="accountMenu"></div>
                    <div class="userNotifications"></div>
                </div>
            </div>
        </div>
        <div class="navigationHeader">
            <div class="navigationHeader-wrapper">
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
                        <!-- -->
                        <div class="level-1 itemWithinFolder skeleton loadingIndication hasTransition" style="    padding:  1.5rem 0rem 0;" tabindex="0" role="button" ><i class="skeletonIcon" style="height: 1rem; width: 1rem; "></i><span class="skeletonTitle" style="height: 1rem"></span></div>

                        <div class="level-1 itemWithinFolder skeleton loadingIndication hasTransition" style="    padding:  0.75rem 0rem 0;" tabindex="0" role="button" ><i class="skeletonIcon" style="height: 1rem; width: 1rem; background-image:none "></i><span class="skeletonTitle" style="height: 2rem"></span></div>

                        <!-- ARTICLE ITEM -->
                        <!-- FOLDER ITEM -->
                        <!-- FOLDER ITEM -->
                        <!-- ARTICLE ITEM -->
                        <!-- ARTICLE ITEM -->
                        <!-- ARTICLE ITEM -->
                        <!-- ARTICLE ITEM -->
                        <!-- ARTICLE ITEM -->
                        <!-- ARTICLE ITEM -->
                        <!-- ARTICLE ITEM -->
                        <!-- ARTICLE ITEM -->
                        <!-- ARTICLE ITEM -->

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
                        <div class="level-1 itemWithinFolder skeleton loadingIndication hasTransition" style="padding-left:0" tabindex="0" role="button" ><i class="skeletonIcon"></i><span class="skeletonTitle"></span></div>
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





<script>
    import {Spinner} from 'spin.js';

    var opts = {
        lines: 20, // The number of lines to draw
        length: 6, // The length of each line
        width: 3, // The line thickness
        radius: 10, // The radius of the inner circle
        scale: 0.7, // Scales overall size of the spinner
        corners: 1, // Corner roundness (0..1)
        speed: 1, // Rounds per second
        rotate: 0, // The rotation offset
        animation: 'spinner-line-fade-quick', // The CSS animation name for the lines
        direction: 1, // 1: clockwise, -1: counterclockwise
        color: '#006ee6', // CSS color or array of colors
        fadeColor: 'transparent', // CSS color or array of colors
        top: '50%', // Top position relative to parent
        left: '50%', // Left position relative to parent
        shadow: '0 0 1px transparent', // Box-shadow for the lines
        zIndex: 2000000000, // The z-index (defaults to 2e9)
        className: 'spinner', // The CSS class to assign to the spinner
        position: 'absolute', // Element positioning
    };

    var target = document.getElementById('loading');
    var spinner = new Spinner(opts).spin(target);
</script>
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
            $(".getsLighter").addClass("fas");
            $(".getsLighter").removeClass("far");
            $(".secondaryActions .menuItem").removeClass("active");
            $(".primaryActions .primaryActionsOverflowMenuButton").addClass("active");

            // hiding areas in portrait view
            $( function () {
                var topBar = $( ".topBar" );
                $( ".contentWrapper-left-scroll-area-barrier" ).scroll( function () {
                    var scroll = $( ".contentWrapper-left-scroll-area-barrier" ).scrollTop();

                    if ( scroll >= 150 ) {
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