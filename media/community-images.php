<!-- 
Content: Community Image Gallery Page
Developer: Sergio Pacheco 
-->

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Willow's Reef | Community Images</title>
        <link rel = "shortcut icon" type = "image/ico" href = "/images/ico/favicon.ico"/>

        <meta name = "description" content = "Willow's Reef loves the aquarist community, and their tanks! See images from the community here!">
        <meta name = "keywords" content = "Willow's Reef, Aquarium, Aquarist, Fish Food, Coral Feast, RhodoFeast, AminoFeast, FrozenFeast">
        <meta name = "author" content = "Sergio Pacheco">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Bootstrap JS-->
        <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

        <!-- PhotoSwipe CSS & JS -->
        <link href = "/css/photoswipe/photoswipe.min.css" rel = "stylesheet">
        <link href = "/css/photoswipe/default-skin.min.css" rel = "stylesheet">
        <script src = "/js/photoswipe/photoswipe.min.js"></script>
        <script src = "/js/photoswipe/photoswipe-ui-default.min.js"></script>

        <!-- Custom PHP for Sending Messages -->
        <?php
            include("/php/message-retrieval.php")
        ?>
    </head>

    <body>
        <!-- Community Images Specific Styling -->
        <style>
            small{ display: none; }
            .pswp__caption__center
            {
                max-width: 800px;
                font-size: 1rem;
            }
        </style>

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

            <div id = "mediaSection" class = "container-fluid">
                <div class = "row justify-content-center mt-4">
                    <h2 class = "section-header">Community Image Gallery</h2>

                    <div class = "text-center mb-4">
                        Here at Willow's Reef, we love our fellow aquarists - and we certainly love their tanks!<br>
                        Send us your tank pictures and get featured on our website!<br><br>
                        Submit your photos on our Facebook page:  
                        <a class = "text-decoration-none social-link" target = "_blank" href = "https://www.facebook.com/WillowsReef/" rel = "noopener norferrer">
                            <i class = "fab fa-facebook"></i> Willow's Reef LLC
                            <span class = "sr-only">Willow's Reef Facebook Link</span>
                        </a>
                        <br>
                        Tag us in your pictures on Instagram:
                        <a class = "text-decoration-none social-link" target = "_blank" href = "https://www.instagram.com/willowsreef/" rel = "noopener norferrer">
                            <i class = "fab fa-instagram"></i> Willowsreef
                            <span class = "sr-only">Willow's Reef Instagram Link</span>
                        </a> 
                        <br>
                        Tags: <b>@WillowsReef</b> or <b>#coralfeast</b>
                    </div>

                    <!-- PhotoSwipe Image Gallery - START -->
                    <div id = "customerImgGallery" class = "customer-gallery row">
                        <a href = "/images/jpg/customer-images/customer-img-1.jpg" data-size = "768x432" data-med = "/images/jpg/customer-images/customer-img-1.jpg" data-med-size = "768x432" data-author = "Customer Name Here" class = "img-main col-md-6 col-lg-4 mt-3" data-aos = "zoom-in" data-aos-once = "true">
                            <div class = "customer-img-container" style = "background-image: url('/images/jpg/customer-images/customer-img-1.jpg');">
                                &nbsp;
                            </div>
                            <figure>Photo By: Willow's Reef</figure>
                        </a>
                        <a href = "/images/jpg/customer-images/customer-img-2.jpg" data-size = "768x432" data-med = "/images/jpg/customer-images/customer-img-2.jpg" data-med-size = "768x432" data-author = "Customer Name Here" class = "col-md-6 col-lg-4 mt-3" data-aos = "zoom-in" data-aos-once = "true">
                            <div class = "customer-img-container" style = "background-image: url('/images/jpg/customer-images/customer-img-2.jpg');">
                                &nbsp;
                            </div>                                
                            <figure>Photo By: Willow's Reef</figure>
                        </a>
                        <a href = "/images/jpg/customer-images/customer-img-3.jpg" data-size = "768x432" data-med = "/images/jpg/customer-images/customer-img-3.jpg" data-med-size = "768x432" data-author = "Customer Name Here" class = "col-md-6 col-lg-4 mt-3" data-aos = "zoom-in" data-aos-once = "true">
                            <div class = "customer-img-container" style = "background-image: url('/images/jpg/customer-images/customer-img-3.jpg');">
                                &nbsp;
                            </div>
                            <figure>Photo By: Willow's Reef</figure>
                        </a>
                    </div>

                    <div id = "gallery" class = "pswp" tabindex = "-1" role = "dialog" aria-hidden = "true">
                        <div class = "pswp__bg"></div>
                        <div class = "pswp__scroll-wrap">
                            <div class = "pswp__container">
                                <div class = "pswp__item"></div>
                                <div class = "pswp__item"></div>
                                <div class = "pswp__item"></div>
                            </div>
                            <div class = "pswp__ui pswp__ui--hidden">
                                <div class = "pswp__top-bar">
                                    <div class = "pswp__counter"></div>
                                    <button class = "pswp__button pswp__button--close" title="Close (Esc)"></button>
                                    <button class = "pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                    <button class = "pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                    <div class = "pswp__preloader">
                                        <div class = "pswp__preloader__icn">
                                            <div class = "pswp__preloader__cut">
                                                <div class = "pswp__preloader__donut"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="pswp__loading-indicator"><div class="pswp__loading-indicator__line"></div></div> -->
                                <button class = "pswp__button pswp__button--arrow--left" title = "Previous (arrow left)"></button>
                                <button class = "pswp__button pswp__button--arrow--right" title = "Next (arrow right)"></button>
                                <div class = "pswp__caption">
                                    <div class = "pswp__caption__center"></div>
                                </div>
                            </div>
                        </div>
                    </div>                
    
                    <!-- JS to Initialize PhotoSwipe Image Gallery -->
                    <script src = "/js/photoswipe/gallery-init.js"></script>

                    <!-- PhotoSwipe Image Gallery - END -->
                </div>
            </div>
        </div>

        <!-- Global Footer Section populated by JS -->
        <div id = "globalFooter">&nbsp;</div>

    </body>

    <!-- Custom Site JS -->
    <script src = "/js/site-js.min.js"></script>
</html>