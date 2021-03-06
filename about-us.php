<!-- 
Content: About Us Page
Developer: Sergio Pacheco 
-->

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Willow's Reef | About Us</title>
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

            <div class = "image-banner about-banner">
                &nbsp;
                <!--<img alt = "" src = "/images/jpg/compressed-main-images/about-us-header.jpg" class = "" style = "width: inherit;">-->
            </div>
            <div id = "aboutSection" class = "container-fluid">
                <div class = "row justify-content-center mt-4">
                    <h2 class = "section-header">Who We Are</h2>
                    
                    <div class = "about-info">
                        Willow???s Reef LLC is an aquarium product company that specializes in premium, all-natural products. 
                        One of our key features is that we avoid using any fillers and we list <b>ALL</b> of our ingredients on each 
                        product we produce. 
                        <br><br>
                        We have partnered with distributors both throughout the United States, and in several other areas of 
                        the world (United Kingdom, India, Puerto Rico, and Bangladesh), in order to fulfill our company???s <b>mission</b> 
                        ??? provide wholesome, top-quality products to aquarists like us so that tanks across the globe can continue 
                        to <b>thrive</b>! 
                        <br><br>
                        We are an ever-growing collection of like-minded aquarium lovers, and we are looking to make our products 
                        available to even more people as we continue to expand. If you have any suggestions, or want to see our 
                        products at your favorite shop, feel free to <a href = "#contactAnch" class = "text-decoration-none fw-bold bottom-border">reach out</a> and let us know! 
                        <br><br>
                        Currently, our products are only available through wholesale and our partnered distributors. 
                        <br>
                        Please see our <a href = "/products/all" class = "text-decoration-none fw-bold bottom-border">Individual Products</a> page for more information on purchasing our products 
                        for your tank. 
                        <br>
                        Please see our <a href = "/stores/wholesale" class = "text-decoration-none fw-bold bottom-border">Wholesale Products</a> page for more information on purchasing our products 
                        in bulk for your store location.
                    </div>
                </div>
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
            </div>
        </div>

        <!-- Global Footer Section populated by JS -->
        <div id = "globalFooter">&nbsp;</div>

    </body>

    <!-- Custom Site JS -->
    <script src = "/js/site-js.min.js"></script>
</html>