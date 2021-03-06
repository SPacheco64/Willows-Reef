<!-- 
Content: RhodoFeast Product Page
Developer: Sergio Pacheco 
 -->

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title>Willow's Reef | RhodoFeast</title>
        <link rel = "shortcut icon" type = "image/ico" href = "/images/ico/favicon.ico"/>

        <meta name = "description" content = "RhodoFeast is a direct feed probiotic you can use with any food (dry or frozen) for coral or fish. Learn More!">
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
                <!-- Stores List Pop-Up (Shows Locations that Sell this Product) - END -->

                <!-- Product Overview - START -->
                <div class = "row justify-content-center product-descript-container">
                    <div class = "col-md-6 rhodo-feast-col">
                        &nbsp;
                    </div>
                    <div class = "col-md-6 item-descript">
                        <h2 class = "section-header">RhodoFeast</h2>

                        A direct feed Probiotic you can use with any food dry or frozen for coral or fish.
                        <br><br>
                        This is a live probiotic. The bacteria in this product are cultured in a specific manner that makes them adapted to colonizing the animal gut. Their express purpose is to provide nutritional and immunological benefits to the fish, corals and other animals that consume them. 
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
                    <b>
                        What is it?
                    </b>
                    <br>
                    <ol>
                        <li>
                            The bacteria in Rhodofeast are Rhodopseudomonas palustris.
                        </li>
                        <li>
                            R. palustris is an extremely ancient purple non-sulfur bacterium (PNSB).
                        </li>
                        <li>
                            It is flagellated and can swim among the bacterioplankton but can also attach to a substrate 
                            and form biofilms. Swimming cells can join films, but not vice versa.4. Like most PNSB, 
                            this species is facultatively anaerobic. Especially compared to other PNSB, it proliferates 
                            easily in the presence of oxygen but nevertheless prefers anaerobic conditions.
                        </li>
                    </ol>
                    <br>
                    <b>
                        How does it live and grow?
                    </b>
                    <br>
                    <ol>
                        <li>
                            Because it can utilize all four major modes of metabolisms, R. palustris is regarded as among 
                            the most versatile organisms on Earth. It often uses light as a source of energy and organic 
                            matter as a source of carbon (photoheterotrophy). It can also function as a complete photoautotroph 
                            like algae or as a complete organoheterotroph like an animal.
                        </li>
                        <li>
                            Like many of its closest relatives (the rhizobial bacteria), it is a nitrogen fixer (i.e., diazotroph). 
                            That is, it can use N2 to form ammonium which is used to build its body.
                        </li>
                        <li>
                            It can perform photosynthesis and nitrogen fixation only in anaerobic environments.
                        </li>
                    </ol>
                    <br>
                    <b>
                        Why does it matter to reef aquarists?
                    </b>
                    <br>
                    <ol>
                        <li>
                            R. palustris occurs widely in nature (including on coral reefs).
                        </li>
                        <li>
                            It forms a close relationship with zooxanthellate corals, living in anaerobic areas within the host???s mucus 
                            and tissues.
                        </li>
                        <li>
                            In this relationship, the bacteria provides a source of biologically available nitrogen to the zooxanthellae; 
                            in turn, the bacteria consume dissolved organic matter leached from both the coral and zooxanthellae. These 
                            interactions serve to nourish the coral as well as eliminate organic waste products.
                        </li>
                        <li>
                            Rhizobial bacteria are so beneficial to corals that corals selectively take them up. Corals alter the 
                            content of their mucus in order to attract and pamper these microbes. Consequently, densities of 
                            nitrogen-fixing bacteria are often 400x greater in the mucus than in the surrounding water.
                        </li>
                        <li>
                            Coral biologists now credit this symbiosis between zooxanthellate corals and these bacteria as the 
                            reason reef ecosystems can be so productive in such oligotrophic (i.e., nutrient-poor) waters.
                        </li>
                        <li>
                            Using the natural probiotic activity of these bacteria, reef aquarists can enjoy the benefits of a 
                            ULN system (e.g., no nuisance algae) while also enjoying excellent coral health/growth.
                        </li>
                        <li>
                            Coral farmers have a lot to gain from these microbes. While their purchase price is low, and the 
                            investment of time dosing them is minimal, the potential for increased coral yield is substantial. 
                        </li>
                    </ol>
                    <br>
                    <b>
                        Are there any other benefits to using it?
                    </b>
                    <br>
                    <ol>
                        <li>
                            Just as corals feed on their zooxanthellae, they also feed on these bacteria. In addition to its probiotic qualities, R. palustris is an excellent coral food. It is rich in protein (>70%) and provides essential fatty acids (e.g., stearic acid and oleic acid). It contains beneficial carotenoids such as astaxanthin. And, because it lacks a cellulose-based cell wall, it is more digestible than phytoplankton.
                        </li>
                        <li>
                            R. palustris synthesizes the antibiotic streptomycin, which has been demonstrated in many cases to inhibit Vibrio (Vibrio is a common and deadly coral pathogen).
                        </li>
                        <li>
                            By increasing feed conversion rates, corals (and other animals that consume these microbes) generate less waste???leading to cleaner water.
                        </li>
                    </ol>
                    <br>
                    <b>
                        So, what exactly is in RhodoFeast?
                    </b>
                    <br>
                    <ol>
                        <li>
                            We clearly list all ingredients in this product. Most importantly, we identify the species of the cultured microbe (Rhodopseudomonas palustris). The medium is comprised of extracts (mainly the ellagitannin Tellimagrandin II) from the invasive aquatic plant Myriophyllum spicatum (wildcrafted under Special Use permits).
                        </li>
                        <li>
                            Cultures are grown at a reduced pH and an elevated salinity to condition them for successfully colonizing the host gut.
                        </li>
                        <li>
                            These cultures remain viable in their unopened container for many months (or even years) at storage temperatures anywhere above freezing and below 112.
                        </li>
                    </ol>
                    <br>
                    <b>
                        How do you use it?
                    </b>
                    <br>
                    <ol>
                        <li>
                            Using the dropper, add up to one dropper full to each ?? tsp of Coral Feast. To avoid contaminating the product, do not allow the dropper to make contact with the food, your fingers, etc. Replace cap immediately after use.
                        </li>
                        <li>
                            Add Amino Feast per product directions.
                        </li>
                        <li>
                            Draw slurry into a large syringe and target feed per Coral Feast product directions.
                        </li>
                        <li>
                            The microbes used in this product are 100% safe, non-toxic, and nonpathogenic. This product cannot be overdosed.
                        </li>
                        <li>
                            Store the bottle at room temperature out of direct sunlight.
                        </li>
                    </ol>
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