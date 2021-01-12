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
    <title>Prototype - 12</title>
    <link rel="stylesheet" href="css/styles.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/colors.css?<?php echo time() ?>"> 
    <link rel="stylesheet" href="css/dev-17562.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/typography.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/tree.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/mediaqueries.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/areas.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/header.css?<?php echo time() ?>"> 
    <link rel="stylesheet" href="css/breadcrumbs.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/measureManagement.css?<?php echo time() ?>">
    <!-- PLUGINS -->
    <link rel="stylesheet" href="plugins/legitRippleJS/ripple.min.css">
    <!-- FONTS and ICONS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-IIED/eyOkM6ihtOiQsX2zizxFBphgnv1zbe1bKA+njdFzkr6cDNy16jfIKWu4FNH" crossorigin="anonymous">

    <!-- BOOTSTRAP -->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">



</head>
<body class="r measureManagement">
<div class="outerWrapper">
    <div class="mainPanelLeft-fixed">
    </div>
    <!-- HEADER -->
    <!-- HEADER -->
    <!-- HEADER -->
    <div class="header mainPanelTop-fixed ">
            <div class="topBar-wrapper" >
                <div class="topBar-leftWrapper">
                    <div class="selectAppModule-wrap">
                        <div class="selectedAppModule">Maßnahmen<i class="far fa-angle-down"></i></div>
                        <ul class="appModuleList">
                            <li class="appModuleList-item ">
                                <div class="appModuleList-wrap">
                                    <div class="appModuleList-iconLabelWrap">
                                        <div class="appModuleList-icon">
                                            <i class="far fa-book-heart"></i>
                                        </div>
                                        <div class="appModuleList-text">
                                            <div class="appModuleList-headline">Ihr Handbuch</div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="appModuleList-item">
                                <div class="appModuleList-wrap">
                                    <div class="appModuleList-iconLabelWrap">
                                        <div class="appModuleList-icon">
                                            <i class="far fa-calendar-week"></i>
                                        </div>
                                        <div class="appModuleList-text">
                                            <div class="appModuleList-headline">Ereignisse</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="appModuleList-item selected">
                                <div class="appModuleList-wrap">
                                    <div class="appModuleList-iconLabelWrap">
                                        <div class="appModuleList-icon">
                                            <i class="far fa-clipboard-list-check"></i>
                                        </div>
                                        <div class="appModuleList-text">
                                            <div class="appModuleList-headline">Maßnahmen</div>
                                            <div class="appModuleList-moduleDescription">Korrektur- und Vorbeuge-Maßnahmen abbilden und effizient organisieren. </div>
                                        </div>
                                    </div>
                                </div>
                        
                            </li>
                            <li class="appModuleList-item">
                                <div class="appModuleList-wrap">
                                    <div class="appModuleList-iconLabelWrap">
                                        <div class="appModuleList-icon">
                                            <i class="far fa-water-rise"></i>
                                        </div>
                                        <div class="appModuleList-text">
                                            <div class="appModuleList-headline">Risiko</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="topBar-rightWrapper d-flex">
                    <div class="navIcon">
                        <i class="far fa-search" data-title="Suche"></i>
                    </div>

                    <div class="accountMenu profileImage">
                        <span class="accountMenu-initials">PT</span>
                    </div> 
                </div>
            </div>
        
    </div>
    <!-- CONTENT AREA -->
    <!-- CONTENT AREA -->
    <!-- CONTENT AREA -->
    
    <div class="content">
        <div class="contentWrapper">
            <div class="measureManagement-items">
                
            </div>

        </div>
    </div>
</div>








<!-- JS PLUGINS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="plugins/returnCSS/returnCSS.js"></script>
<!-- JS, Popper.js, and jQuery -->
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
<!-- Breadcrumbs -->
<script>
    $('.levelUp').click(function(){
        $('.enteredFolder-breadcrumbs').addClass("active");
        $(this).addClass("active");
    });
    $('.closeBreadcrumbs').click(function(){
        $('.enteredFolder-breadcrumbs').removeClass("active");
        $('.levelUp').removeClass("active");
    });
</script>
<!-- -->
<!-- -->
<!-- MODAL open / close -->
<script>
    $('.showHideModal').click(function(){
        $( this ).closest( '.modal' ).toggleClass("hideModal");
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
        var html = [ "Computed styles" ];

        var styleProps = $( this ).css([
            "color", "background-color", "transition", "animation", "box-shadow", "background-image"
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