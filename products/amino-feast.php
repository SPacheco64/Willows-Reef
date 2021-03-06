<!-- 
Content: AminoFeast+ Product Page
Developer: Sergio Pacheco 
-->

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Willow's Reef | AminoFeast+</title>
        <link rel = "shortcut icon" type = "image/ico" href = "/images/ico/favicon.ico"/>

        <meta name = "description" content = "AminoFeast+ is a blend of 8 amino acids with an all-natural buffer of potassium. Learn More!">
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
                        <a class = "col-6 store-link" href = "https://www.amazon.com/AminoFeast-Quality-Coral-Amino-Acids/dp/B08P7VL6PX/ref=sr_1_2?keywords=amino+feast&qid=1636048123&sr=8-2" target = "_blank" rel = "noopener norferrer">
                            <div>
                                <picture>
                                    <source srcset = "/images/webp/store-logos/amazon-logo.webp">
                                    <source srcset = "/images/png/store-logos/amazon-logo.png">
                                    <img alt = "Amazon" src = "/images/png/store-logos/amazon-logo.png">
                                </picture>   
                            </div>
                        </a>
                        <a class = "col-6 store-link" href = "https://coralhubus.com/cart-2/3-4-frag-plug/" target = "_blank" rel = "noopener norferrer">
                            <div>
                                <picture>
                                    <source srcset = "/images/webp/store-logos/coral-hub-logo.webp">
                                    <source srcset = "/images/png/store-logos/coral-hub-logo.png">
                                    <img alt = "Coral Hub" src = "/images/png/store-logos/coral-hub-logo.png">
                                </picture>   
                            </div>
                        </a>
                        <a class = "col-6 store-link" href = "https://reefshackllc.com/products/amino-feast-coral-food-amino-acid-250ml?_pos=1&_sid=71bb8333e&_ss=r" target = "_blank" rel = "noopener norferrer">
                            <div>
                                <picture>
                                    <source srcset = "/images/webp/store-logos/reef-shack-logo.webp">
                                    <source srcset = "/images/png/store-logos/reef-shack-logo.png">
                                    <img alt = "Reef Shack" src = "/images/png/store-logos/reef-shack-logo.png">
                                </picture>   
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
                    <div class = "col-md-6 amino-feast-col">
                        &nbsp;
                    </div>
                    <div class = "col-md-6 item-descript">
                        <h2 class = "section-header">AminoFeast+</h2>

                        <b>AminoFeast+</b> is a blend of 8 amino acids with an all-natural buffer of potassium which is 
                        something that corals utilize. Our #1 goal was to bring an additive to our food line that helps 
                        your corals THRIVE while having as little negative impact on your ecosystem as possible.
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
                    AminoFeast+ is a blend of 8 amino acids with an all-natural buffer of potassium which is something that 
                    corals utilize. Our #1 goal was to bring an additive to our food line that helps your corals THRIVE while 
                    having as little negative impact on your ecosystem as possible.
                    <br><br>
                    Aminofeast+ is Free of all dyes and bad odors. No refrigeration is required, and it can be dosed at 1mil per 20 
                    gallons 1 to 2 times per day. For ideal conditions, we recommend regular testing and observation so you can adjust 
                    dosing based on your specific ecosystem???s parameters to keep a stable and thriving reef. If you do not dose, no 
                    worries, just add 1mil per 20 gallons to your feeding schedule of frozen and or coral foods.
                    <br><br>

                    <b>Ingredients:</b>
                    <ul class = "ingredient-list">
                        <li>
                            R.O Water
                        </li>
                        <li>
                            Aspartic Acid
                        </li>
                        <li>
                            Glutamic Acid
                        </li>
                        <li>
                            Glutamine
                        </li>
                        <li>
                            Leucine
                        </li>
                        <li>
                            Glycine
                        </li>
                        <li>
                            Valine
                        </li>
                        <li>
                            Proline
                        </li>
                        <li>
                            Sodium bicarbonate
                        </li>
                        <li>
                            Potassium sorbate
                        </li>
                        <li>
                            Potassium hydroxide
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