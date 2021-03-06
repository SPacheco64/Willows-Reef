<!-- 
Content: Feeding Videos Playlist Page
Developer: Sergio Pacheco 
-->

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Willow's Reef | Feeding Videos</title>
        <link rel = "shortcut icon" type = "image/ico" href = "/images/ico/favicon.ico"/>

        <meta name = "description" content = "The Willow's Reef feeding video playlist is a helpful resource that gives tips on how best to feed your fish and coral! Coming Soon.">
        <meta name = "keywords" content = "Willow's Reef, Aquarium, Aquarist, Fish Food, Coral Feast, RhodoFeast, AminoFeast, FrozenFeast">
        <meta name = "author" content = "Sergio Pacheco">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Bootstrap JS-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
       
        <!-- Modernizer JS to Recognize Webp Browser Support -->
        <script src = "/js/modernizr-custom.js"></script>

        <!-- Custom Site CSS -->
        <link rel = "stylesheet" href = "/css/site-styling.css">

        <!-- AOS CSS Animations Includes-->
        <link href = "https://unpkg.com/aos@2.3.1/dist/aos.css" rel = "stylesheet">
        <script src = "https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <!-- Font Awesome script for Icons -->
        <script src = "https://kit.fontawesome.com/b8159c5824.js" crossorigin = "anonymous"></script>

        <!-- Custom PHP for Sending Messages -->
        <?php
            include("/php/message-retrieval.php")
        ?>
    </head>

    <body class = "no-scroll-all">
        <button onclick = "topFunction()" id = "scrollToTopBtn">
            <i class = "fas fa-chevron-up"></i>
            <span class = "sr-only">Back to Top</span>
        </button>

        <!-- Global Header Section populated by JS -->
        <div id = "globalHeader">&nbsp;</div>

        <!-- Main Content Container -->
        <div id = "pageContent">
            <!-- Overlay for Mobile Dropdown -->
            <div id = "screenOverlay">&nbsp;</div>

            <!-- Overlay for Coming-soon Pop-Up -->
            <div id = "popupOverlay" class = "active">&nbsp;</div>

            <div class = "coming-soon-pop" data-aos = "zoom-in" data-aos-once = "true">
                <div class = "section-header">
                    COMING SOON
                </div>
                <div class = "pop-blurb">
                    Stay tuned for our upcoming Feeding Video Player that will share a playlist of
                    videos that provide helpful feeding tips and guides.
                </div>
                <div>
                    <a href = "https://www.willowsreef.com" class = "link-button">
                        Return to Home
                    </a>
                </div>
            </div>

            <div id = "mediaSection" class = "container-fluid blurred">
                <h2 class = "section-header mt-4">Feeding Video Playlist</h2>

                <div class = "text-center mb-4">
                    Add text-blurb here about Feeding Instructions, or something like that.<br>
                    Be sure to follow us on our 
                    <span>
                        <a class = "text-decoration-none yt-red" target = "_blank" href = "https://www.youtube.com/channel/UCTXiB_prj_rgMFAIBdVbURg" rel = "noopener norferrer">
                            <i class = "fab fa-youtube"></i>
                            YouTube channel
                        </a>
                    </span>
                    for more quality content!
                </div>

                <!-- YouTube Playlist iFrame -->
                <iframe style = "pointer-events: none;" id = "videoPlayer" width = "900" height = "506" src = "https://www.youtube.com/embed/iWcAysmC5JQ" title = "YouTube video player" frameborder = "0" allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <!-- Global Footer Section populated by JS -->
        <div id = "globalFooter">&nbsp;</div>

    </body>

    <!-- Custom Site JS -->
    <script src = "/js/site-js.js"></script>
</html>