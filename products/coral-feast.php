<!-- 
Content: Coral Feast Product Page
Developer: Sergio Pacheco 
-->

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Willow's Reef | Coral Feast</title>
        <link rel = "shortcut icon" type = "image/ico" href = "/images/ico/favicon.ico"/>

        <meta name = "description" content = "Coral Feast is formulated to help promote your corals' best growth and color. Learn More!">
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

            <!-- Overlay for Stores List Pop-Up -->
            <div id = "popupOverlay">&nbsp;</div>

            <div id = "productSection" class = "container-fluid">
                <!-- Stores List Pop-Up (Shows Locations that Sell this Product) - START -->
                <div id = "storePopup">
                    <i class = "close-popup-overlay far fa-times-circle">
                        &nbsp;
                    </i>
                    <div class = "popup-header">
                        Recommended Stores:
                    </div>
                    <div class = "row">
                        <a class = "col-6 store-link" href = "https://www.amazon.com/Coral-Feast-Powdered-Quality-Food/dp/B08M95Z64Q/ref=sr_1_1?crid=2DB1V05HEENV5&keywords=coral%2Bfeast&qid=1636048104&sprefix=coral%2Caps%2C210&sr=8-1&th=1" target = "_blank" rel = "noopener norferrer">
                            <div>
                                <picture>
                                    <source srcset = "/images/webp/store-logos/amazon-logo.webp">
                                    <source srcset = "/images/png/store-logos/amazon-logo.png">
                                    <img alt = "Amazon" src = "/images/png/store-logos/amazon-logo.png">
                                </picture>    
                            </div>
                        </a>
                        <a class = "col-6 store-link" href = "https://www.aac-online.co.uk/shop/dry-goods/willows-reef-coral-feast-60g/" target = "_blank" rel = "noopener norferrer">
                            <div>
                                <picture>
                                    <source srcset = "/images/webp/store-logos/aac-logo.webp">
                                    <source srcset = "/images/png/store-logos/aac-logo.png">
                                    <img alt = "Advanced Aquarium Consultancy" src = "/images/png/store-logos/aac-logo.png">
                                </picture>   
                            </div>
                        </a>
                        <a class = "col-6 store-link" href = "https://www.aquacave.com/coral-feast-jars.html" target = "_blank" rel = "noopener norferrer">
                            <div>
                                <picture>
                                    <source srcset = "/images/webp/store-logos/aquacave-logo.webp">
                                    <source srcset = "/images/png/store-logos/aquacave-logo.png">
                                    <img alt = "AquaCave" src = "/images/png/store-logos/aquacave-logo.png" >
                                </picture>   
                            </div>
                        </a>
                        <a class = "col-6 store-link" href = "https://www.aquariumspecialty.com/willows-reef-coral-feast.html" target = "_blank" rel = "noopener norferrer">
                            <div>
                                <picture>
                                    <source srcset = "/images/webp/store-logos/aqua-spec-logo.webp">
                                    <source srcset = "/images/png/store-logos/aqua-spec-logo.png">
                                    <img alt = "Aquarium Specialty" src = "/images/png/store-logos/aqua-spec-logo.png">
                                </picture>   
                            </div>
                        </a>
                        <a class = "col-6 store-link" href = "https://coralhubus.com/cart-2/coral-feast-60g/" target = "_blank" rel = "noopener norferrer">
                            <div>
                                <picture>
                                    <source srcset = "/images/webp/store-logos/coral-hub-logo.webp">
                                    <source srcset = "/images/png/store-logos/coral-hub-logo.png">
                                    <img alt = "Coral Hub" src = "/images/png/store-logos/coral-hub-logo.png">
                                </picture>   
                            </div>
                        </a>
                        <a class = "col-6 store-link" href = "https://noopsycheusa.com/products/coral-feast-no-filler-coral-food-60g" target = "_blank" rel = "noopener norferrer">
                            <div>
                                <picture>
                                    <source srcset = "/images/webp/store-logos/noopsyche-logo.webp">
                                    <source srcset = "/images/png/store-logos/noopsyche-logo.png">
                                    <img alt = "Noopsyche USA" src = "/images/png/store-logos/noopsyche-logo.png">
                                </picture>   
                            </div>
                        </a>
                        <a class = "col-6 store-link" href = "https://reefshackllc.com/products/coral-feast-powdered-coral-food-60-gm?_pos=1&_sid=9b682b3ea&_ss=r" target = "_blank" rel = "noopener norferrer">
                            <div>
                                <picture>
                                    <source srcset = "/images/webp/store-logos/reef-shack-logo.webp">
                                    <source srcset = "/images/png/store-logos/reef-shack-logo.png">
                                    <img alt = "Reef Shack" src = "/images/png/store-logos/reef-shack-logo.png">
                                </picture>   
                            </div>
                        </a>
                        <a class = "col-6 store-link" href = "https://www.indiefur.com/product/willows-reef-coral-feast/" target = "_blank" rel = "noopener norferrer">
                            <div>
                                <picture>
                                    <source srcset = "/images/webp/store-logos/indie-fur-logo.webp">
                                    <source srcset = "/images/png/store-logos/indie-fur-logo.png">
                                    <img alt = "IndieFur" src = "/images/png/store-logos/indie-fur-logo.png">                                </picture>   
                            </div>
                        </a>
                        <a class = "col-6 store-link" href = "https://krakencorals.co.uk/willows-reef-coral-feast-60g.html" target = "_blank" rel = "noopener norferrer">
                            <div>
                                <picture>
                                    <source srcset = "/images/webp/store-logos/kraken-corals-logo.webp">
                                    <source srcset = "/images/png/store-logos/kraken-corals-logo.png">
                                    <img alt = "Kraken Corals" src = "/images/png/store-logos/kraken-corals-logo.png">                                </picture>   
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href = "/stores/retail" class = "link-button">
                            All Stores
                        </a>
                    </div>
                </div>
                <!-- Stores List Pop-Up (Shows Locations that Sell this Product) - END -->

                <!-- Product Overview - START -->
                <div class = "row justify-content-center product-descript-container">
                    <div class = "col-md-6 coral-feast-col">
                        &nbsp;
                    </div>
                    <div class = "col-md-6 item-descript">
                        <h2 class = "section-header">Coral Feast</h2>

                        <b>Coral Feast</b> is formulated to help promote your corals' best growth 
                        and color and is made with 100% all-natural aquatic ingredients. 
                        There are no fillers of ANY kind like corn starch, flours, yeasts, 
                        fish protein powder, garlic powder, or bioenhancers.
                        <br><br>

                        <button class = "link-button" id = "seeStores">
                            See Stores
                        </button>
                    </div>
                </div>
                <!-- Product Overview - END -->

                <!-- In-depth Product Description - START -->
                <h2 class = "section-header mb-3">Product Description</h2>
                <div class = "full-descript">
                    CoralFeast is made with nine all-natural 100% aquatic ingredients to help promote your corals' best 
                    growth and color. There are no fillers of ANY kind like corn starch, flours, yeasts, fish protein 
                    powder, garlic powder, or bioenhancers.
                    <br><br>
                    CoralFeast is milled in an FDA-certified factory. It is milled and sifted with a 300-micron screen, 
                    leaving a 300 to 500-micron particle size, making this ideal for all NPS, LPS, and SPS coral. It is 
                    also ideal for sponges and clams. The size aids in the digestion for maximum nutrient absorption. More 
                    absorption, less excrement.
                    <br><br>
                    The milling removes all impurities, making it cleaner than any other coral food currently on the market. 
                    For best results: Add a high-quality amino acid-like AminoFeast+ and a probiotic to a container and mix 
                    thoroughly. We also recommend adding CoralFeast as an ingredient when you feed frozen food, as this will 
                    boost the overall nutrition and help with the appetite for picky fish.
                    <br><br>
                    In our opinion, fillers are not needed. Of course, it costs more to produce, but we were unwilling to take 
                    any shortcuts when we decided to make a quality coral food. CoralFeast is made with what we would want to 
                    put into my tank. You spend $100s to $1,000s on your aquarium with lights, skimmers, dosing units, pumps, 
                    and of course, coral and fish. Why not feed them the best coral food?
                    <br><br>
                    <b>Ingredients:</b>
                    <ul class = "ingredient-list">
                        <li>
                            Whole Krill
                        </li>
                        <li>
                            Freeze Dried Rotifers
                        </li>
                        <li>
                            Arctic Copepods
                        </li>
                        <li>
                            Whole Brine Shrimp
                        </li>
                        <li>
                            Apocalypse Royi
                        </li>
                        <li>
                            Spirulina Powder
                        </li>
                        <li>
                            Porphyra umbilicalis
                        </li>
                        <li>
                            Palmaria palmata
                        </li>
                        <li>
                            Ulva lactuca
                        </li>
                        <br>
                        <li>
                            Crude Protein 55.3%
                        </li>
                        <li>
                            Crude Fat 15.5%
                        </li>
                        <li>
                            Crude fiber 8.28%
                        </li>
                        <li>
                            Crude lipid 12%
                        </li>
                        <li>
                            Min Moisture 7.95%
                        </li>
                        <li>
                            Ash 9.58%
                        </li>
                    </ul>
                </div>
                <!-- In-depth Product Description - END -->
            </div>
        </div>

        <!-- Global Footer Section populated by JS -->
        <div id = "globalFooter">&nbsp;</div>
    </body>

    <!-- Custom Site JS -->
    <script src = "/js/site-js.min.js"></script>
    <script src = "/js/store-popup.min.js"></script>
</html>