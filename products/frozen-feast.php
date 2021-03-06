<!-- 
Content: FrozenFeast Product Page
Developer: Sergio Pacheco 
-->

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Willow's Reef | FrozenFeast</title>
        <link rel = "shortcut icon" type = "image/ico" href = "/images/ico/favicon.ico"/>

        <meta name = "description" content = "FrozenFeast contains a balanced mix of mysis, brine, krill, fish, oyster eggs, and seaweed, along with two special types of bacteria. Learn More!">
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
        <!-- Styling Specific to FrozenFeast page -->
        <style>
            #productSection .product-descript-container .link-button
            {
                width: 13rem;
                text-align: center;
            }
            @media (min-width: 768px)
            {
                #productSection .product-descript-container .frozen-feast-col
                {
                    height: 25rem;
                }
                #productSection .product-descript-container .col-md-6
                {
                    width: 100%;
                    display: block;
                }
                #productSection .product-descript-container .section-header{ text-align: center; }
                .btn-container{ text-align: center; }
            }
            @media (min-width: 992px)
            {
                #productSection .product-descript-container .frozen-feast-col
                {
                    height: auto;
                }
                #productSection .product-descript-container .col-md-6
                {
                    width: 50%;
                    display: table-cell;
                }
                #productSection .product-descript-container .section-header{ text-align: left; }
                .btn-container{ text-align: left; }
            }
        </style>

        <button onclick = "topFunction()" id = "scrollToTopBtn">
            <i class = "fas fa-chevron-up"></i>
            <span class = "sr-only">Back to Top</span>
        </button>

        <!-- Global Header Section populated by JS -->
        <div id = "globalHeader">&nbsp;</div>

        <div id = "pageContent">
            <!-- Overlay for Mobile Dropdown -->
            <div id = "screenOverlay">&nbsp;</div>

            <!-- Overlay for Stores List Pop-Up -->
            <div id = "popupOverlay">&nbsp;</div>

            <div id = "productSection" class = "container-fluid">
                <!-- Stores List Pop-Up (Shows Locations that Sell this Product) - START -->
                <!--
                <div id = "storePopup">
                    <i class = "close-popup-overlay far fa-times-circle">
                        &nbsp;
                    </i>
                    <div class = "popup-header">
                        Recommended Stores:
                    </div>
                    <div class = "row">
                        <a class = "col-6 store-link" href = "https://coralhubus.com/cart-2/rhodofeast/" target = "_blank" rel = "noopener norferrer">
                            <div>
                                <picture>
                                    <source srcset = "/images/webp/store-logos/coral-hub-logo.webp">
                                    <source srcset = "/images/png/store-logos/coral-hub-logo.png">
                                    <img alt = "Coral Hub" src = "/images/png/store-logos/coral-hub-logo.png">
                                </picture>
                            </div>
                        </a>
                        <a class = "col-6 store-link" href = "https://reefshackllc.com/products/rhodofeast-premium-direct-feed-probiotic-4oz-nitrate-phosphate-remover?_pos=2&_sid=9b682b3ea&_ss=r" target = "_blank" rel = "noopener norferrer">
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
                -->
                <!-- Stores List Pop-Up (Shows Locations that Sell this Product) - END -->

                <!-- Product Overview - START -->
                <div class = "row justify-content-center product-descript-container">
                    <div class = "frozen-feast-col col-md-6">
                        &nbsp;                        
                    </div>
                    <div class = "col-md-6 item-descript">
                        <h2 class = "section-header">FrozenFeast</h2>
                        Now taking wholesale orders for our all new <b>FrozenFeast</b>. Please ask your LFS to reach out to us or send us an email at 
                        <a href = "mailto:info@willowsreef.com?subject=Frozenfreast%20Pre%20Order" target = "_blank">info@willowsreef.com</a>. 
                        You can always let us know the shops you visit frequently, and we can reach out to them directly. 
                        <br><br>
                        <b>FrozenFeast</b> can also be found in select retail stores. Each retail pack will contain 70 cubes made for 
                        easy feeding. <b>FrozenFeast</b> contains a balanced mix of mysis, brine, krill, fish, oyster eggs, and seaweed, along with two 
                        special types of bacteria - containing the added benefits of both AminoFeast+ and Coral Feast. 
                        <br><br>
                        FrozenFeast comes in a heat-sealed freezer bag so that it lasts longer in your freezer. Ideal for nanos and 
                        mixed reefs.
                        <br><br>
                        <div class = "btn-container">
                            <!--
                            <button class = "link-button" id = "seeStores">
                                See Stores
                            </button>
                            -->
                            <a href = "mailto:info@willowsreef.com?subject=FrozenFeast%20Pre-Order" target = "_blank" class = "link-button">
                                Order via Email
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Product Overview - END -->

                <!-- In-depth Product Description - START -->
                <h2 class = "section-header mb-3">Product Description</h2>
                <div class = "full-descript">
                    Shelf-stable natural bacterium (B. subtilis and B. lichenformis) are used in conjunction because they 
                    germinate under slightly different conditions, e.g., salinity and temperature, giving the user a better 
                    range of rearing environments when using the product. 
                    <br><br>
                    Both species of bacillus are used to reduce metabolites, primarily NH4 and H2S. Putative benefits include 
                    reduced water exchange, lower levels of blue green algae, lower ammonia levels, less stress on animals, 
                    resulting in less disease. Mix this with our live direct feed probiotics and you get the ultimate food. 
                    Info on the probiotics This is a live probiotic. The bacteria in this product are cultured in a specific 
                    manner that makes them adapted to colonizing the animal gut. Their express purpose is to provide nutritional 
                    and immunological benefits to the fish, corals and other animals that consume them. It's sold in a smaller 
                    bottle, but a this is a nicer bottle with precision dropper, so one can administer small doses (in food) this 
                    is made specifically for use as a probiotic. There are a couple products out there that claim to contain 
                    probiotic bacteria. But those are dry (inactive) cultures of sketchy genera such as Lactobacillus which 
                    typically are not used because they're the best, but because they are cheap. 
                    <br><br>
                    These bacteria (Rhodopseudomonas) are live, viable and are proven to increase feed conversion in captive fish. 
                    It is also a widely known coral-associated probiotic. We spend a lot more time/money to culture these on a 
                    polyphenolic food source, which essentially means that they are adapted to breaking down recalcitrant organic 
                    substances like cellulose, in other words herbivores like tangs ultimately digest more of their food and generate 
                    less solid waste. Throw in the fact that these bacteria are also rich in carotenoids, and there really isn't even 
                    a comparison to the very few other true aquacultural probiotic products available in our industry.
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