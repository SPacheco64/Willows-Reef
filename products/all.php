<!-- 
Content: Individual Products Page
Developer: Sergio Pacheco 
 -->

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Willow's Reef | Products</title>
        <link rel = "shortcut icon" type = "image/ico" href = "/images/ico/favicon.ico"/>

        <meta name = "description" content = "Willow's Reef is an aquarium product company looking to provide top-quality products to aquarists the world over! Check out our products!">
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

            <!-- Product List Section - START -->
            <div id = "productSection" class = "container-fluid mt-4">
                <h2 class = "section-header">Available Products</h2>
                <div class = "row justify-content-center">
                    <div class = "product-container col-lg-4 col-md-6 d-flex flex-column mt-4">
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
                    <div class = "product-container col-lg-4 col-md-6 d-flex flex-column mt-4">
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
                    <div class = "product-container col-lg-4 col-md-6 d-flex flex-column mt-4">
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
                    <div class = "product-container col-lg-4 col-md-6 d-flex flex-column mt-4">
                        <div class = "wid-cont d-flex flex-column">
                            <div class = "product-img" id = "frozenFeast">
                                &nbsp;
                            </div>
    
                            <div class = "product-info">
                                <div class = "product-name">
                                    FrozenFeast
                                </div>
    
                                Now taking orders for our all new FrozenFeast. Please ask your LFS to reach out to us or 
                                send us an email at <a href = "mailto:info@willowsreef.com?subject=Frozenfreast%20Pre%20Order" target = "_blank">info@willowsreef.com</a>. You can always let us know the shops you visit frequently, and we 
                                can reach out to them directly. 
                            </div>
    
                            <a class = "link-button mt-auto" href = "/products/frozen-feast">
                                Learn More
                            </a>
                        </div>
                    </div>
                    <div class = "product-container col-lg-4 col-md-6 d-flex flex-column invisible" data-aos = "flip-right" data-aos-once = "true">
                        <div class = "wid-cont">
                            &nbsp;
                        </div>
                    </div>
                    <div class = "product-container col-lg-4 col-md-6 d-flex flex-column invisible" data-aos = "flip-right" data-aos-once = "true">
                        <div class = "wid-cont">
                            &nbsp;
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product List Section - START -->
        </div>

        <!-- Global Footer Section populated by JS -->
        <div id = "globalFooter">&nbsp;</div>

    </body>

    <!-- Custom Site JS -->
    <script src = "/js/site-js.min.js"></script>
</html>