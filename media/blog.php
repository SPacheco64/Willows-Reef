<!-- 
Content: Blog Listings Page
Developer: Sergio Pacheco 
-->

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Willow's Reef | Blog Posts</title>
        <link rel = "shortcut icon" type = "image/ico" href = "/images/ico/favicon.ico"/>

        <meta name = "description" content = "The Willow's Reef blog is a source of useful information for all aquarists within the hobby! Coming Soon.">
        <meta name = "keywords" content = "Willow's Reef, Aquarium, Aquarist, Fish Food, Coral Feast, RhodoFeast, AminoFeast, FrozenFeast, Blog">
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
        <link rel = "stylesheet" href = "/css/site-styling.min.css">

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

        <!-- Main Content Container  -->
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
                    Stay tuned for our upcoming Blog that will share tips, products reviews, and
                    insights on the aquarium hobby!
                </div>
                <div>
                    <a href = "https://www.willowsreef.com" class = "link-button">
                        Return to Home
                    </a>
                </div>
            </div>

            <div id = "blogSection" class = "container-fluid blurred">
                <div class = "row justify-content-center mt-4">
                    <h2 class = "section-header">Blog Posts</h2>
                    
                    <div class = "row justify-content-center">
                        <div class = "blog-post-container col-lg-4 col-md-6 d-flex flex-column mt-4">
                            <div class = "wid-cont d-flex flex-column">
                                <div class = "blog-post-img" id = "">
                                    <img alt = "placeholder" src = "/images/jpg/blog-placeholder-1.jpg">
                                </div>
                                <div class = "blog-post-info">
                                    <div class = "blog-post-name">
                                        <a href = "" style = "pointer-events: none;">
                                            Feeding Frenzy
                                        </a>
                                    </div>
                                    This is an example of a blog post listing, with a placeholder image,
                                    title, and description.
                                    <div class = "fw-bold mt-2">
                                        <span>
                                            Posted on November 11, 2021
                                        </span>
                                        <br>
                                        <span>
                                            Author: Sergio P.
                                        </span>
                                    </div>
                                </div>
                                <a class = "link-button mt-auto" href = "" style = "pointer-events: none;">
                                    Read Article
                                </a>
                            </div>
                        </div>
                        <div class = "blog-post-container col-lg-4 col-md-6 d-flex flex-column mt-4">
                            <div class = "wid-cont d-flex flex-column">
                                <div class = "blog-post-img" id = "">
                                    <img alt = "placeholder" src = "/images/jpg/blog-placeholder-2.jpg">
                                </div>
                                <div class = "blog-post-info">
                                    <div class = "blog-post-name">
                                        <a href = "" style = "pointer-events: none;">
                                            Aquarium Decor
                                        </a>
                                    </div>
                                    This is an example of a blog post listing, with a placeholder image,
                                    title, and description.
                                    <div class = "fw-bold mt-2">
                                        <span>
                                            Posted on November 3, 2021
                                        </span>
                                        <br>
                                        <span>
                                            Author: Gary Z.
                                        </span>
                                    </div>
                                </div>
                                <a class = "link-button mt-auto" href = "" style = "pointer-events: none;">
                                    Read Article
                                </a>
                            </div>
                        </div>
                        <div class = "blog-post-container col-lg-4 col-md-6 d-flex flex-column mt-4">
                            <div class = "wid-cont d-flex flex-column">
                                <div class = "blog-post-img" id = "rhodoFeast">
                                    <img alt = "placeholder" src = "/images/jpg/blog-placeholder-3.jpg">
                                </div>
                                <div class = "blog-post-info">
                                    <div class = "blog-post-name">
                                        <a href = "" style = "pointer-events: none;">
                                            Coral Care
                                        </a>
                                    </div>
                                    This is an example of a blog post listing, with a placeholder image,
                                    title, and description.
                                    <div class = "fw-bold mt-2">
                                        <span>
                                            Posted on October 28, 2021
                                        </span>
                                        <br>
                                        <span>
                                            Author: John J.
                                        </span>
                                    </div>
                                </div>
                                <a class = "link-button mt-auto" href = "" style = "pointer-events: none;">
                                    Read Article
                                </a>
                            </div>
                        </div>
                        <div class = "product-container col-lg-4 col-md-6 d-flex flex-column invisible" data-aos = "zoom-in" data-aos-once = "true">
                            <div class = "wid-cont">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Global Footer Section populated by JS -->
        <div id = "globalFooter">&nbsp;</div>
    </body>

    <!-- Custom Site JS -->
    <script src = "/js/site-js.min.js"></script>
</html>