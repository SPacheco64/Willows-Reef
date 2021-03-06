<!-- 
Content: Willow's Reef Home Page
Developer: Sergio Pacheco 
-->

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Willow's Reef | Home</title>
        <link rel = "shortcut icon" type = "image/ico" href = "/images/ico/favicon.ico"/>

        <meta name = "description" content = "Willow's Reef is an aquarium product company looking to provide top-quality products to aquarists the world over!">
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

        <!-- Swiper JS & CSS for Mobile Carousels -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        
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

    <body>
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

            <!-- Welcome Section - START -->
            <div id = "topSection" class = "container-fluid d-flex align-items-center justify-content-center">
                <div class = "row" data-aos = "fade-up" data-aos-once = "true">
                    <h1>
                        Welcome to Willow's Reef
                    </h1>

                    <div class = "section-content">
                        We are an aquarium product company that specializes in premium, all-natural products.<br class = "desktop-only"> 
                        One of our key features is that we avoid using any fillers and we list<br class = "desktop-only"> 
                        ALL of our ingredients on each product we produce.
                    </div>

                    <a href = "/about-us" class = "link-button">
                        Learn More
                    </a>
                </div>
            </div>
            <!-- Welcome Section - END -->

            <!-- Willow's Foundation Section - START -->
            <div id = "foundationSection" class = "container-fluid">
                <div class = "row">
                    <div class = "content-2 col-lg-6">
                        <!--<img alt = "Willow's Foundation" src = "/images/jpg/willows-foundation.jpg">-->
                    </div>
                    <div class = "content-1 col-lg-6">
                        <h2 class = "section-header">Willow's Foundation</h2>
                        Our new Non-Profit Organization is here!<br>
                        <b>Willow's Foundation</b> is looking to inspire the next generation of Marine Aquarists!<br>
                        Interested in becoming a part of our movement to make this wonderful hobby more accessible to students?
                        <br>
                        Follow us on our <a class = "text-decoration-none fw-bold" target = "_blank" href = "https://www.facebook.com/WillowsFoundation/" rel = "noopener norferrer"><i class="fab fa-facebook"></i> Facebook page</a>, and be sure to check us out on the
                        <a href = "https://willowsfoundation.com/" target = "_blank" rel = "norferrer noopener" class = "text-decoration-none fw-bold">Willow's Foundation website</a>!<br>
                        
                        <a href = "https://www.ecomagazine.com/in-depth/featured-stories/inspiring-a-sustainable-movement-in-marine-aquarium-hobbyists?fbclid=IwAR1Yvze655oj9K8FfLLfHWmHP-dLiBuHA4lyP8qMrzCmdQe-c6k_Z_lCCtk" target = "_blank" rel = "norferrer noopener" class = "link-button">
                            eco magazine article
                        </a>
                    
                    </div>
                </div>
            </div>
            <!-- Willow's Foundation Section - END -->

            <!-- Community Image Section - START -->
            <div id = "customerSection" class = "container-fluid">
                <div class = "row">
                    <div class = "content-1 col-lg-6 order-2 order-lg-1">
                        <h2 class = "section-header">Community Images</h2>
                        We love when customers submit their images.<br>
                        Send us your tank pictures and get featured on our website!<br>
                        Submit your photos on our Facebook page, or on Instagram:
                        <br>
                        <a class = "text-decoration-none social-link" target = "_blank" href = "https://www.facebook.com/WillowsReef/" rel = "noopener norferrer">
                            <i class = "fab fa-facebook-square"></i>
                            <span class = "sr-only">Willow's Reef Facebook Link</span>
                        </a>
                        <a class = "text-decoration-none social-link" target = "_blank" href = "https://www.instagram.com/willowsreef/" rel = "noopener norferrer">
                            <i class = "fab fa-instagram-square"></i>
                            <span class = "sr-only">Willow's Reef Instagram Link</span>
                        </a>
                        <br>
                        Tag us in your posts <b>@WillowsReef</b> or <b>#coralfeast</b>

                        <a href = "/media/community-images" class = "link-button">
                            View More
                        </a>
                    </div>
                    <div class = "content-2 col-lg-6 order-1 order-lg-2">
                        <div id = "customerCarousel" class = "carousel slide" data-bs-ride = "carousel">
                            <ol class = "carousel-indicators">
                                <li><button data-bs-target = "#customerCarousel" data-bs-slide-to = "0" class = "active" aria-label = "Community Image Slider Button"></button></li>
                                <li><button data-bs-target = "#customerCarousel" data-bs-slide-to = "1" aria-label = "Community Image Slider Button"></button></li>
                                <li><button data-bs-target = "#customerCarousel" data-bs-slide-to = "2" aria-label = "Community Image Slider Button"></button></li>
                            </ol>
                            <div class = "carousel-inner">
                                <div class = "carousel-item active">
                                    <div class = "slide-img-container">
                                        <picture>
                                            <source srcset = "/images/webp/customer-images/customer-img-1.webp">
                                            <source srcset = "/images/jpg/customer-images/customer-img-1.jpg">
                                            <img src = "/images/jpg/customer-images/customer-img-1.jpg" alt = "First slide">
                                        </picture>
                                    </div>
                                </div>
                                <div class = "carousel-item">
                                    <div class = "slide-img-container">
                                        <picture>
                                            <source srcset = "/images/webp/customer-images/customer-img-2.webp">
                                            <source srcset = "/images/jpg/customer-images/customer-img-2.jpg">
                                            <img src = "/images/jpg/customer-images/customer-img-2.jpg" alt = "Second slide">
                                        </picture>
                                    </div>                                
                                </div>
                                <div class = "carousel-item">
                                    <div class = "slide-img-container">
                                        <picture>
                                            <source srcset = "/images/webp/customer-images/customer-img-3.webp">
                                            <source srcset = "/images/jpg/customer-images/customer-img-3.jpg">
                                            <img src = "/images/jpg/customer-images/customer-img-3.jpg" alt = "Third slide">
                                        </picture>                                    
                                    </div>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Community Image Section - END -->

            <!-- Product List Section - START -->
            <span class = "anchor" id = "productAnch">&nbsp;</span>
            <div id = "productSection" class = "container-fluid">
                <h2 class = "section-header">Product List</h2>
                <div class = "row justify-content-center">
                    <div class = "product-container col-lg-4 col-md-6 d-flex flex-column mt-4" data-aos = "flip-right" data-aos-once = "true">
                        <div class = "wid-cont d-flex flex-column">
                            <div class = "product-img" id = "coralFeast">
                                &nbsp;
                            </div>
    
                            <div class = "product-info">
                                <div class = "product-name">
                                    Coral Feast
                                </div>
    
                                Coral Feast was formulated to help promote the best color and growth of your corals. 
                                It is made with 100% natural ingredients with no fillers.
                            </div>
    
                            <a class = "link-button mt-auto" href = "/products/coral-feast">
                                Learn More
                            </a>
                        </div>
                    </div>
                    <div class = "product-container col-lg-4 col-md-6 d-flex flex-column mt-4" data-aos = "flip-right" data-aos-once = "true">
                        <div class = "wid-cont d-flex flex-column">
                            <div class = "product-img" id = "aminoFeast">
                                &nbsp;
                            </div>
    
                            <div class = "product-info">
                                <div class = "product-name">
                                    AminoFeast+
                                </div>
    
                                AminoFeast+ is a blend of 8 amino acids with an all-natural buffer of potassium 
                                which is something that corals utilize. 
                            </div>
    
                            <a class = "link-button mt-auto" href = "/products/amino-feast">
                                Learn More
                            </a>
                        </div>
                    </div>
                    <div class = "product-container col-lg-4 col-md-6 d-flex flex-column mt-4" data-aos = "flip-right" data-aos-once = "true">
                        <div class = "wid-cont d-flex flex-column">
                            <div class = "product-img" id = "rhodoFeast">
                                &nbsp;
                            </div>
    
                            <div class = "product-info">
                                <div class = "product-name">
                                    RhodoFeast
                                </div>
    
                                A direct feed Probiotic you can use with any food dry or frozen for coral or fish. 
                                This is a live probiotic. 
                            </div>
                            
                            <a class = "link-button mt-auto" href = "/products/rhodo-feast">
                                Learn More
                            </a>
                        </div>
                    </div>
                    <div class = "product-container col-lg-4 col-md-6 flex-column invisible mt-4 desktop-only" data-aos = "flip-right" data-aos-once = "true">
                        <div class = "wid-cont">
                            &nbsp;
                        </div>
                    </div>
                </div>

                <div class = "row justify-content-center">
                    <a class = "link-button view-all" href = "/products/all">
                        View All
                    </a>
                </div>
            </div>
            <!-- Product List Section - END -->
        </div>

        <!-- Global Footer Section populated by JS -->
        <div id = "globalFooter">&nbsp;</div>
        
    </body>

    <!-- Custom Site JS -->
    <script src = "/js/site-js.min.js"></script>
</html>