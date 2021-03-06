<!-- 
Content: Wholesale Products Page
Developer: Sergio Pacheco 
 -->

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Willow's Reef | Wholesale Stores</title>
        <link rel = "shortcut icon" type = "image/ico" href = "/images/ico/favicon.ico"/>
        
        <meta name = "description" content = "Willow's Reef has partnered with several fantastic wholesalers to supply our aquarium products to customers. Check them out!">
        <meta name = "keywords" content = "Willow's Reef, Aquarium, Aquarist, Fish Food, Coral Feast, RhodoFeast, AminoFeast, FrozenFeast, Wholesale, Wholesalers">
        <meta name = "author" content = "Sergio Pacheco">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1">
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Bootstrap JS-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

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

        <!-- Main Content Section -->
        <div id = "pageContent">
            <!-- Overlay for Mobile Dropdown -->
            <div id = "screenOverlay">&nbsp;</div>

            <div id = "wholesaleSection" class = "container-fluid mt-4">
                <h2 class = "section-header">Wholesale Sellers</h2>
                <div class = "location-divider">
                    <span><img alt = "US Flag" src = "/images/svg/united-states-flag.svg" class = "location-flag"></span>
                    USA
                </div>
                <div class = "row justify-content-center align-items-center store-row">
                    <div class = "col-12 col-lg-4 mt-3 text-center">
                        <span class = "dropdown btn-group">
                            <button class = "dropdown-toggle" type = "button" id = "asTab" data-bs-toggle = "dropdown" aria-expanded = "false"> 
                                <picture>
                                    <source srcset = "/images/webp/store-logos/aqua-spec-logo.webp">
                                    <source srcset = "/images/png/store-logos/aqua-spec-logo.png">
                                    <img alt = "Aquarium Specialty" src = "/images/png/store-logos/wholesale-logos/aqua-spec-logo.png" style = "max-width: 14rem; background: #1e4772; border-radius: 5rem;">
                                </picture>
                            </button>
                            <ul class = "dropdown-menu" aria-labelledby = "asTab">
                                <span class = "close-btn">
                                    <i class="far fa-times-circle"></i>
                                </span>
                                <span class = "dropdown-header">Store Information</span>
                                <div class = "store-details">
                                    <div>
                                        <i class="fas fa-globe"></i><br>
                                        <a href = "https://www.aquariumspecialty.com/shop-by-brand/willows-reef.html" target = "_blank" rel = "noopener norferrer" class = "website-link">www.aquariumspecialty.com</a>
                                    </div>
                                    <div style = "margin-top: 1rem;">
                                        <i class="far fa-envelope"></i><br>
                                        <a href = "mailto:info@aquariumspecialty.com" target = "_blank" rel = "noopener norferrer" class = "email-link">info@aquariumspecialty.com</a>
                                    </div>
                                    <div style = "margin-top: 1rem;">
                                        <i class="fas fa-phone-alt"></i><br>
                                        <a href = "tel:803-788-4445" class = "phone-link">803-788-4445</a>
                                    </div>
                                    <div style = "margin-top: 1rem;">
                                        <i class="fas fa-map-marker-alt"></i><br>
                                        <a href = "https://www.google.com/maps/place/Aquarium+Specialty/@34.1132621,-80.8536138,17z/data=!3m2!4b1!5s0x88f8ab064995ba81:0xcbac8dcdc8b963bd!4m5!3m4!1s0x88f8ab06618292a7:0xdbcbf9659fe9d037!8m2!3d34.1132621!4d-80.8514251" target = "_blank" rel = "noopener norferrer" class = "address-link">
                                            535-C Clemson Rd, Columbia, SC 29229
                                        </a>
                                    </div>
                                </div>
                                <span class = "dropdown-header">Products Available</span>
                                <div class = "text-center fst-italic">
                                    All Products Available by Request
                                </div>
                                <!--
                                <li class = "nav-item">
                                    <a class = "nav-link" href = "https://www.aquariumspecialty.com/willows-reef-coral-feast.html" target = "_blank" rel = "noopener norferrer"> Coral Feast </a>
                                </li>
                                <li class = "nav-item">
                                    <a class = "nav-link" href = "https://www.aquariumspecialty.com/willows-reef-amino-feast-premium-amino-blend.html" target = "_blank" rel = "noopener norferrer"> AminoFeast+ </a>
                                </li>
                                <li class = "nav-item">
                                    <a class = "nav-link" href = "https://www.aquariumspecialty.com/willows-reef-rhodofeast.html" target = "_blank" rel = "noopener norferrer"> RhodoFeast </a>
                                </li>
                                -->
                            </ul>
                        </span>
                    </div>
                    <div class = "col-12 col-lg-4 mt-3 text-center">
                        <span class = "dropdown btn-group">
                            <button class = "dropdown-toggle" type = "button" id = "gsTab" data-bs-toggle = "dropdown" aria-expanded = "false"> 
                                <picture>
                                    <source srcset = "/images/webp/store-logos/gulfstream-tropical-logo.webp">
                                    <source srcset = "/images/png/store-logos/gulfstream-tropical-logo.png">
                                    <img alt = "Gulfstream Tropical Aquarium" src = "/images/png/store-logos/wholesale-logos/gulfstream-tropical-logo.png" style = "max-width: 8rem; background: #000; border-radius: 1rem;">
                                </picture>
                            </button>
                            <ul class = "dropdown-menu" aria-labelledby = "gsTab">
                                <span class = "close-btn">
                                    <i class="far fa-times-circle"></i>
                                </span>
                                <span class = "dropdown-header">Store Information</span>
                                <div class = "store-details">
                                    <div>
                                        <i class="fas fa-globe"></i><br>
                                        <a href = "https://gulfstreamtropicalaquarium.com/brand/willows-reef/" target = "_blank" rel = "noopener norferrer" class = "website-link">www.gulfstreamtropicalaquarium.com</a>
                                    </div>
                                    <div style = "margin-top: 1rem;">
                                        <i class="far fa-envelope"></i><br>
                                        <a href = "mailto:Cheryl@gulfstreamtropicalaquarium.com" target = "_blank" rel = "noopener norferrer" class = "email-link">Cheryl@gulfstreamtropicalaquarium.com</a>
                                    </div>
                                    <div style = "margin-top: 1rem;">
                                        <i class="fas fa-phone-alt"></i><br> 
                                        <a href = "tel:954-927-1140" class = "phone-link">954-927-1140</a>
                                    </div>
                                    <div style = "margin-top: 1rem;">
                                        <i class="fas fa-map-marker-alt"></i><br>
                                        <a href = "https://www.google.com/maps/place/Gulfstream+Tropical+Aquarium/@26.03972,-80.1521727,17z/data=!3m1!4b1!4m5!3m4!1s0x88d9aa53c007e731:0xf850ac596532570!8m2!3d26.0396454!4d-80.1499778" target = "_blank" rel = "noopener norferrer" class = "address-link">
                                            470 SW 9th St, Dania Beach, FL 33004
                                        </a>
                                    </div>
                                </div>
                                <span class = "dropdown-header">Products Available</span>
                                <div class = "text-center fst-italic">
                                    All Products Available by Request
                                </div>
                                <!--
                                <li class = "nav-item">
                                    <a class = "nav-link" href = "https://gulfstreamtropicalaquarium.com/product/willows-reef-coral-feast/" target = "_blank" rel = "noopener norferrer"> Coral Feast </a>
                                </li>
                                <li class = "nav-item">
                                    <a class = "nav-link" href = "https://gulfstreamtropicalaquarium.com/product/willows-reef-amino-feast/" target = "_blank" rel = "noopener norferrer"> AminoFeast+ </a>
                                </li>
                                <li class = "nav-item">
                                    <a class = "nav-link" href = "https://gulfstreamtropicalaquarium.com/product/willows-reef-rhodofeast/" target = "_blank" rel = "noopener norferrer"> RhodoFeast </a>
                                </li>
                                -->
                            </ul>
                        </span>
                    </div>
                    <div class = "col-12 col-lg-4 mt-3 text-center">
                        <span class = "dropdown btn-group">
                            <button class = "dropdown-toggle" type = "button" id = "vaTab" data-bs-toggle = "dropdown" aria-expanded = "false"> 
                                <picture>
                                    <source srcset = "/images/webp/store-logos/vasca-logo.webp">
                                    <source srcset = "/images/png/store-logos/vasca-logo.png">
                                    <img alt = "Vasca Aquarium Supply" src = "/images/png/store-logos/wholesale-logos/vasca-logo.png" style = "max-width: 14rem;">
                                </picture>    
                            </button>
                            <ul class = "dropdown-menu" aria-labelledby = "vaTab">
                                <span class = "close-btn">
                                    <i class="far fa-times-circle"></i>
                                </span>
                                <span class = "dropdown-header">Store Information</span>
                                <div class = "store-details">
                                    <div>
                                        <i class="fas fa-globe"></i><br>
                                        <a href = "https://www.vascaaquariumsupply.com/" target = "_blank" rel = "noopener norferrer" class = "website-link">www.vascaaquariumsupply.com</a>
                                    </div>
                                    <div style = "margin-top: 1rem;">
                                        <i class="far fa-envelope"></i><br>
                                        <a href = "mailto:Jaron@vascaaquariumsupply.com" target = "_blank" rel = "noopener norferrer" class = "email-link">Jaron@vascaaquariumsupply.com</a>
                                    </div>
                                    <div style = "margin-top: 1rem;">
                                        <i class="fas fa-phone-alt"></i><br> 
                                        <a href = "tel:480-829-8122" class = "phone-link">480-829-8122</a>
                                    </div>
                                    <div style = "margin-top: 1rem;">
                                        <i class="fas fa-map-marker-alt"></i><br>
                                        <a href = "https://www.google.com/maps/place/VASCA+Aquarium+Supply/@33.3536087,-111.9672663,17z/data=!3m1!4b1!4m5!3m4!1s0x872b05c339a43b13:0xc2d95777f164ee14!8m2!3d33.3536084!4d-111.9650373" target = "_blank" rel = "noopener norferrer" class = "address-link">
                                            1536 W Todd Dr, Tempe, AZ 85283
                                        </a>
                                    </div>
                                </div>
                                <span class = "dropdown-header">Products Available</span>
                                <div class = "text-center fst-italic">
                                    All Products Available by Request
                                </div>
                                <!--
                                <li class = "nav-item">
                                    <a class = "nav-link" href = "" target = "_blank" rel = "noopener norferrer"> Coral Feast </a>
                                </li>
                                <li class = "nav-item">
                                    <a class = "nav-link" href = "" target = "_blank" rel = "noopener norferrer"> AminoFeast+ </a>
                                </li>
                                <li class = "nav-item">
                                    <a class = "nav-link" href = "" target = "_blank" rel = "noopener norferrer"> RhodoFeast </a>
                                </li>
                                -->
                            </ul>
                        </span>
                    </div>
                </div>

                <div class = "location-divider">
                    <span><img alt = "India Flag" src = "/images/svg/india-flag.svg" class = "location-flag"></span>
                    India
                </div>
                <div class = "row justify-content-center align-items-center store-row">
                    <div class = "col-12 col-lg-4 mt-3 text-center">
                        <span class = "dropdown btn-group">
                            <button class = "dropdown-toggle" type = "button" id = "daTab" data-bs-toggle = "dropdown" aria-expanded = "false"> 
                                <picture>
                                    <source srcset = "/images/webp/store-logos/digitech-aquariums-logo.webp">
                                    <source srcset = "/images/png/store-logos/digitech-aquariums-logo.png">
                                    <img alt = "Digitech Aquariums" src = "/images/png/store-logos/wholesale-logos/digitech-aquariums-logo.png" style = "max-width: 12rem;">
                                </picture>        
                            </button>
                            <ul class = "dropdown-menu" aria-labelledby = "daTab">
                                <span class = "close-btn">
                                    <i class="far fa-times-circle"></i>
                                </span>
                                <span class = "dropdown-header">Store Information</span>
                                <div class = "store-details">
                                    <div>
                                        <i class="fas fa-globe"></i><br>
                                        <a href = "https://digitechaquariums.com/brand/willows-reef/" target = "_blank" rel = "noopener norferrer" class = "website-link">www.digitechaquariums.com</a>
                                    </div>
                                    <div style = "margin-top: 1rem;">
                                        <i class="far fa-envelope"></i><br>
                                        <a href = "mailto:ashish.melwani@digitechaquariums.com" target = "_blank" rel = "noopener norferrer" class = "email-link">ashish.melwani@digitechaquariums.com</a>
                                    </div>
                                    <div style = "margin-top: 1rem;">
                                        <i class="fas fa-phone-alt"></i><br> 
                                        <a href = "tel:+91-83693-88959" class = "phone-link">+91-83693-88959</a>
                                    </div>
                                    <div style = "margin-top: 1rem;">
                                        <i class="fas fa-map-marker-alt"></i><br> 
                                        <a href = "https://www.google.com/maps/place/Digitech+Aquariums/@19.1554743,73.0762669,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7c116bafd9ed9:0x1db4330aa7cb30a5!8m2!3d19.1554743!4d73.0784556" target = "_blank" rel = "noopener norferrer" class = "address-link">
                                            Shop no 12, Chandresh Godavari, CHS, Thane, Maharashtra 421204, India
                                        </a>
                                    </div>
                                </div>
                                <span class = "dropdown-header">Products Available</span>
                                <div class = "text-center fst-italic">
                                    All Products Available by Request
                                </div>
                                <!--
                                <li class = "nav-item">
                                    <a class = "nav-link" href = "https://digitechaquariums.com/product/willowsreef-coral-feast/" target = "_blank" rel = "noopener norferrer"> Coral Feast </a>
                                </li>
                                <li class = "nav-item">
                                    <a class = "nav-link" href = "" target = "_blank" rel = "noopener norferrer"> AminoFeast+ </a>
                                </li>
                                <li class = "nav-item">
                                    <a class = "nav-link" href = "" target = "_blank" rel = "noopener norferrer"> RhodoFeast </a>
                                </li>
                                -->
                            </ul>
                        </span>
                    </div>
                </div>

                <div class = "location-divider">
                    <span><img alt = "Puerto Rico Flag" src = "/images/svg/puerto-rico-flag.svg" class = "location-flag"></span>
                    Puerto Rico
                </div>
                <div class = "row justify-content-center align-items-center store-row">
                    <div class = "col-12 col-lg-4 mt-3 text-center">
                        <span class = "dropdown btn-group">
                            <button class = "dropdown-toggle" type = "button" id = "hfTab" data-bs-toggle = "dropdown" aria-expanded = "false"> 
                                <picture>
                                    <source srcset = "/images/webp/store-logos/happy-fish-logo.webp">
                                    <source srcset = "/images/png/store-logos/happy-fish-logo.png">
                                    <img alt = "Happy Fish Food PR" src = "/images/png/store-logos/wholesale-logos/happy-fish-logo.png" style = "max-width: 9rem ;">
                                </picture>      
                            </button>
                            <ul class = "dropdown-menu" aria-labelledby = "hfTab">
                                <span class = "close-btn">
                                    <i class="far fa-times-circle"></i>
                                </span>
                                <span class = "dropdown-header">Store Information</span>
                                <div class = "store-details">
                                    <div>
                                        <i class="fas fa-globe"></i><br>
                                        <a href = "https://www.happyfishfoodpr.com/" target = "_blank" rel = "noopener norferrer" class = "website-link">www.happyfishfoodpr.com</a>
                                    </div>
                                    <div style = "margin-top: 1rem;">
                                        <i class="fas fa-phone-alt"></i><br> 
                                        <a href = "tel:787-528-8286" class = "phone-link">787-528-8286</a>
                                    </div>
                                </div>
                                <span class = "dropdown-header">Products Available</span>
                                <div class = "text-center fst-italic">
                                    All Products Available by Request
                                </div>
                                <!--
                                <li class = "nav-item">
                                    <a class = "nav-link" href = "https://happyfishfoodpr.com/products/willows-reef-coral-feast-30g" target = "_blank" rel = "noopener norferrer"> Coral Feast </a>
                                </li>
                                <li class = "nav-item">
                                    <a class = "nav-link" href = "https://happyfishfoodpr.com/products/willows-reef-aminofeast-8-oz" target = "_blank" rel = "noopener norferrer"> AminoFeast+ </a>
                                </li>
                                <li class = "nav-item">
                                    <a class = "nav-link" href = "" target = "_blank" rel = "noopener norferrer"> RhodoFeast </a>
                                </li>
                                -->
                            </ul>
                        </span>
                    </div>
                </div>

                <div class = "location-divider">
                    <span><img alt = "Bangladesh Flag" src = "/images/svg/bangladesh-flag.svg" class = "location-flag"></span>
                    Bangladesh
                </div>
                <div class = "row justify-content-center align-items-center store-row">
                    <div class = "col-12 col-lg-4 mt-3 text-center">
                        <span class = "dropdown btn-group">
                            <button class = "dropdown-toggle" type = "button" id = "saTab" data-bs-toggle = "dropdown" aria-expanded = "false"> 
                                <picture>
                                    <source srcset = "/images/webp/store-logos/shopr-aquatics-logo.webp">
                                    <source srcset = "/images/png/store-logos/shopr-aquatics-logo.png">
                                    <img alt = "SHOPR Aquatics" src = "/images/png/store-logos/wholesale-logos/shopr-aquatics-logo.png" style = "max-width: 9rem ;">
                                </picture>     
                            </button>
                            <ul class = "dropdown-menu" aria-labelledby = "saTab">
                                <span class = "close-btn">
                                    <i class="far fa-times-circle"></i>
                                </span>
                                <span class = "dropdown-header">Store Information</span>
                                <div class = "store-details">
                                    <div>
                                        <i class="fab fa-facebook"></i><br>
                                        <a href = "https://www.facebook.com/SHOPR-Aquatics-293463184855064/" target = "_blank" rel = "noopener norferrer" class = "website-link">SHOPR Aquatics</a>
                                    </div>
                                    <div style = "margin-top: 1rem;">
                                        <i class="far fa-envelope"></i><br>
                                        <a href = "mailto:shopraquatics@gmail.com" target = "_blank" rel = "noopener norferrer" class = "email-link">shopraquatics@gmail.com</a>
                                    </div>
                                    <div style = "margin-top: 1rem;">
                                        <i class="fas fa-phone-alt"></i><br> 
                                        <a href = "tel:+880-1799-355477" class = "phone-link">+880-1799-355477</a>
                                    </div>
                                    <div style = "margin-top: 1rem;">
                                        <i class="fas fa-map-marker-alt"></i><br> 
                                        <a href = "https://www.google.com/maps/place/SHOPR+Aquatics/@23.7442556,90.4100352,17z/data=!4m5!3m4!1s0x3755b968e7c81005:0xecef1f64d7d79376!8m2!3d23.7442556!4d90.4122239" target = "_blank" rel = "noopener norferrer" class = "address-link">
                                            53 Shiddeshwari Lane, Dhaka 1217, Bangladesh
                                        </a>
                                    </div>
                                </div>
                                <span class = "dropdown-header">Products Available</span>
                                <div class = "text-center fst-italic">
                                    All Products Available by Request
                                </div>
                                <!--
                                <li class = "nav-item">
                                    <a class = "nav-link" href = "" target = "_blank" rel = "noopener norferrer"> Coral Feast </a>
                                </li>
                                <li class = "nav-item">
                                    <a class = "nav-link" href = "" target = "_blank" rel = "noopener norferrer"> AminoFeast+ </a>
                                </li>
                                <li class = "nav-item">
                                    <a class = "nav-link" href = "" target = "_blank" rel = "noopener norferrer"> RhodoFeast </a>
                                </li>
                                -->
                            </ul>
                        </span>
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