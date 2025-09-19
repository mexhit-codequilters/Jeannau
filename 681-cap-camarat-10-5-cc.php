
<?php
/**
 * Template Name: Cap Camarat 10.5 CC
 */
get_header();
?>

<script>
// Anti-loop protection - add this right after get_header()
(function() {
    'use strict';
    
    // Prevent any automatic redirects or reloads
    let reloadCount = parseInt(sessionStorage.getItem('pageReloadCount') || '0');
    const currentUrl = window.location.href;
    const lastUrl = sessionStorage.getItem('lastPageUrl');
    
    // If same URL loaded more than 2 times, block further reloads
    if (currentUrl === lastUrl) {
        reloadCount++;
        if (reloadCount > 2) {
            console.warn('Reload loop detected and blocked');
            // Block all redirects and reloads
            window.location.assign = function() { console.warn('Redirect blocked'); };
            window.location.replace = function() { console.warn('Replace blocked'); };
            window.location.reload = function() { console.warn('Reload blocked'); };
            window.location.href = currentUrl; // Lock the URL
            
            // Remove any problematic event listeners
            window.addEventListener('beforeunload', function(e) {
                e.preventDefault();
                return false;
            });
            
            sessionStorage.setItem('pageReloadCount', '999'); // Mark as blocked
            return;
        }
    } else {
        reloadCount = 1;
    }
    
    sessionStorage.setItem('pageReloadCount', reloadCount.toString());
    sessionStorage.setItem('lastPageUrl', currentUrl);
    
    // Override problematic functions that might cause loops
    const originalSetTimeout = window.setTimeout;
    window.setTimeout = function(callback, delay) {
        // Block any setTimeout that tries to reload/redirect
        const callbackStr = callback.toString();
        if (callbackStr.includes('location') || callbackStr.includes('reload') || callbackStr.includes('href')) {
            console.warn('Blocking potentially problematic setTimeout');
            return;
        }
        return originalSetTimeout.apply(this, arguments);
    };
    
    // Block history manipulation that might cause loops
    const originalPushState = history.pushState;
    const originalReplaceState = history.replaceState;
    
    history.pushState = function(state, title, url) {
        if (url === window.location.pathname || url === window.location.href) {
            console.warn('Blocked same-page pushState');
            return;
        }
        return originalPushState.apply(this, arguments);
    };
    
    history.replaceState = function(state, title, url) {
        if (url === window.location.pathname || url === window.location.href) {
            console.warn('Blocked same-page replaceState');
            return;
        }
        return originalReplaceState.apply(this, arguments);
    };
    
    console.log('Anti-loop protection active. Reload count:', reloadCount);
})();
</script>

<main class="">
    <a id="content" tabindex="-1"></a>
        <div class="model-show">
                                                        
            <div class="box head model model-header">
                <div id="js-model-header">
                                            <div class="slide">
                                                            <img src="https://app.jeanneau.com/uploads/media/image/interior/fe3ad178e5e0db5ff0b52ba3dcff5207.jpg" alt=" 26556"
                                     class="img-responsive ">
                                                    </div>
                                    </div>
                <div class="header-title">
                    <div class="header">NEW 2023</div>
                    <h1 class="baseline">Cap Camarat 10.5 CC</h1>
                                    </div>
            </div>
        
                <div class="boat-nav row">
            <div class="col-xs-6 col-sm-2 item-nav item-nav-blue boat-name">
                <div>Cap Camarat 10.5 CC</div>
            </div>
            <div class="col-sm-5 item-nav item-nav-inline d-sm-none">
                                    <div class="item">
                        <a href="#videos" class="scrolltoAnchor">Videos</a>
                    </div>
                                                    <div class="item">
                        <a href="#photos" class="scrolltoAnchor">photos</a>
                    </div>
                                                    <div class="item">
                        <a href="#panorama" class="scrolltoAnchor">360°</a>
                    </div>
                            </div>
            <div class="col-sm-2 item-nav d-sm-none">
                            </div>
            <div class="col-sm-1 item-nav d-sm-none">
                            </div>
                            <div class="col-xs-6 col-sm-2 item-nav item-nav-blue get-offer">
                    <a href="#contact-form" class="scrolltoAnchor"
                       title="Contact our service teams">
                        <i class="icon icon-contact"></i> Request  an offer
                    </a>
                </div>
                    </div>
        <div class="container-fluid no-margin-bottom">
                    </div>

                <div class="container-fluid no-margin-bottom">
    <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item"><span itemprop="name">Home</span></a>
            <meta itemprop="position" content="1" />
        </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="/boats/powerboat" itemprop="item"><span itemprop="name">Motorboats</span></a>
                <meta itemprop="position" content="2" />
            </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="/boats/powerboat/39-cap-camarat" itemprop="item"><span itemprop="name">Cap Camarat</span></a>
                <meta itemprop="position" content="3" />
            </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="/boats/powerboat/5-cap-camarat-center-console" itemprop="item"><span itemprop="name">Cap Camarat Center Console</span></a>
                <meta itemprop="position" content="4" />
            </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="/boats/powerboat/5-cap-camarat-center-console/681-cap-camarat-10-5-cc" itemprop="item"><span itemprop="name">Cap Camarat 10.5 CC</span></a>
                <meta itemprop="position" content="5" />
            </li>
            </ul>
</div>
                <section class="container-fluid">
            <div class="boat-content row ">
                <div class="col-xs-12 col-sm-8">
                                            <a id="points" class="anchor"></a>
                        <div class="points">
                            <div class="baseline">Fun for All!</div>

                            
                            <div class="content">
                                <p>The Cap Camarat 10.5 CC adapts to suit all preferences! &nbsp;Whether you are dreaming of a fully equipped fishing trip or a relaxing escape at anchor, the new flagship of the line promises unforgettable moments of happiness with family and friends.</p><p>With its V-shaped hull design for excellent seakeeping, powerful twin engines, 2 x 300 HP or 2 x 450 HP with joystick, and ergonomic helm station, you will enjoy long fast runs, comfortably seated and in perfect safety.</p><p>SEANAPPS Technology on board. &nbsp;To learn more, <a href="https://www.seanapps.app/en" target="_blank" rel="noopener noreferrer">click here</a>.</p><p><img src="https://app.jeanneau.com/uploads/media/image/interior/a211d0af85c0cb51b9b597d8a7aa91f7.jpg" alt="" width="150" height="136"><img src="https://app.jeanneau.com/uploads/media/image/interior/1fb6452f24432d8a4f5cbcc802bc50dc.png" alt="" width="150" height="138"></p><p>Nominated in the "Day Cruisers over 30ft" category for the Motorboats Awards 2024</p>
                            </div>
                        </div>
                                    </div>
                <div class="col-xs-12 col-sm-4">
                                                                <div class="configuratorLink">
                            <a href="https://configurateur.jeanneau.com/en/configure/powerboat/5-cap-camarat-center-console/681-cap-camarat-10-5-cc" class="square" target="_blank">
                                <i class="icon icon-commander-brochure"></i>
                                Configure
                            </a>
                        </div>
                                        <div class="documents">
                                                                    <a href="https://app.jeanneau.com/viewer/brochure/31243"
           target="_blank"
           title="View the Brochure (Opens in a new window)"
           download="32_p._Cap_Camarat_2026_PDF_BD.pdf"
           class="square  a_class"
           id="a_id"        ><i class="icon icon-visualiser-brochure"></i>View the Brochure</a>
                                                        <a class="square"
                               href="/contact?brochures%5B%5D=5#brochure-form"><i
                                        class="icon icon-commander-brochure"></i>Request the Brochure
                            </a>
                                            </div>
                </div>
            </div>
        </section>

                            <section class="container-fluid blocks">
                                
                                                                
                                                                        <div class="block">
        <div class="col-xs-12 image-block no-padding d-sm-none">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/8bbf520e70239aec18d9cd3b5a3552fb.jpg')"
                 title="Cap Camarat 10.5 CC - Life Turned Toward the Sea">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 content-block">
            <h3 class="white">Life Turned Toward the Sea</h3>
            <div class="text-content white"><p>With two generous cockpits, and an immense side door with an integrated swim ladder for easy access to the sea, the Cap Camarat 10.5 CC is a standing invitation for fun and relaxation.<br><br>Whether you prefer the shade of the standard T-top, or you opt for the large sundecks for lounging after a swim, exterior living spaces with flush floorboards have been designed for sharing moments with friends and family. &nbsp;For those adept at fishing, you have all the dedicated equipment, such as rod holders on the roof and a transparent livewell!<br><br>After a full day, to top off and extend your unforgettable moments together, the leaning post features a well-equipped galley, including: a refrigerator, a sink, and the option of a gas burner or grill.</p></div>
            
        </div>
        <div class="col-sm-6 image-block no-padding d-sm">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/8bbf520e70239aec18d9cd3b5a3552fb.jpg')"
                 title="Cap Camarat 10.5 CC - Life Turned Toward the Sea">
            </div>
        </div>
    </div>
                                    
                                                                
                                                                            <div class="block">
        <div class="col-xs-12 col-sm-6 image-block no-padding">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/interior/7421e4bfb92ba4e063f8eb408e279946.jpg')"
                 title="Cap Camarat 10.5 CC - 4 Berths for Getaways">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 content-block even">
            <h3>4 Berths for Getaways</h3>
            <div class="text-content"><p>On the interior, a bright, open living space offers surprising volume.&nbsp; Let yourself be rocked by the rhythm of the waves in four comfortable berths:&nbsp; the saloon transforms into a forward berth, the head compartment is equipped with a separate shower, and an attractive double aft cabin completes this flagship.</p></div>
            
        </div>
ch    </div>
                                                </section>
        
                
                <a id="videos" class="anchor"></a>
                    <section class="videos">
    <h3 class="sr-only">Videos</h3>
                                        <div class="video-first">
                                                
    <div class="iframe-container" data-reference="qNL1EqyllDU" data-type="model-main-video" data-provider="YouTube">

        
            <iframe src=""
                    data-src="https://www.youtube.com/embed/qNL1EqyllDU?vq=hd1080"
                    data-reference="qNL1EqyllDU"
                    class="optanon-category-C0003"
                    frameborder="0"
                    allowfullscreen
            ></iframe>

            </div>

                                    </div>
                    
        <div class="other-video">
                                                </div>
    </section>
        
                            <a id="panorama" class="anchor"></a>
            <section class="panorama container-fluid">
                <h3>Visit 360°</h3>

                                    <div class="panorama-body">
                        <object data="https://app.jeanneau.com/uploads/panorama/681-cap-camarat-10-5-cc/index.html" type="text/html"></object>
                    </div>
                            </section>
        
                            <section class="container-fluid">
                <a id="photos" class="anchor"></a>
                <div class="gallery">
                    <h3>photo gallery</h3>

                    <div id="gallery" aria-multiselectable="true" role="tablist">
                        <ul class="links-collapse nav justify-content-center">
                                                            <li class="nav-item">
                                    <a class="nav-link active js-link-exterior" data-toggle="collapse"
                                       href="#js-collapse-gallery-exterior" role="button" aria-expanded="true"
                                       data-parent="#gallery"
                                       aria-controls="js-collapse-gallery-exterior">Exterior
Views</a>
                                </li>
                            
                                                            <li class="nav-item">
                                    <a class="nav-link js-link-interior" data-toggle="collapse"
                                       href="#js-collapse-gallery-interior"
                                       role="button" aria-expanded="false" data-parent="#gallery"
                                       aria-controls="js-collapse-gallery-interior">Interior
Views</a>
                                </li>
                                                    </ul>

                                                    <div id="js-collapse-gallery-exterior" class="collapse in">
                                <div class="gallery-exterior">
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/dbfe5b6757021ac140ab04134d609144.jpg" class="gallery-show"
                                               title="Cap Camarat 10.5 CC"
                                               id="gallery-exterior_1">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/dbfe5b6757021ac140ab04134d609144.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/dbfe5b6757021ac140ab04134d609144.jpg"
                                                     alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs JeanneauCap Camarat 10.5 CC 26561"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 10.5 CC</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/33ae4bd98ca6991d7ab2632876e1ab87.jpg" class="gallery-show"
                                               title="Cap Camarat 10.5 CC"
                                               id="gallery-exterior_2">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/33ae4bd98ca6991d7ab2632876e1ab87.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/33ae4bd98ca6991d7ab2632876e1ab87.jpg"
                                                     alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs JeanneauCap Camarat 10.5 CC 26562"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 10.5 CC</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/911fea260ab5e85056bc2129962de8d1.jpg" class="gallery-show"
                                               title="Cap Camarat 10.5 CC"
                                               id="gallery-exterior_3">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/911fea260ab5e85056bc2129962de8d1.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/911fea260ab5e85056bc2129962de8d1.jpg"
                                                     alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs JeanneauCap Camarat 10.5 CC 26563"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 10.5 CC</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/3d1419f0f1dc55bcf446c7060a1e68f7.jpg" class="gallery-show"
                                               title="Cap Camarat 10.5 CC"
                                               id="gallery-exterior_4">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/3d1419f0f1dc55bcf446c7060a1e68f7.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/3d1419f0f1dc55bcf446c7060a1e68f7.jpg"
                                                     alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs JeanneauCap Camarat 10.5 CC 26564"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 10.5 CC</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/07961ba24d77a9766a073fb54dea51ac.jpg" class="gallery-show"
                                               title="Cap Camarat 10.5 CC"
                                               id="gallery-exterior_5">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/07961ba24d77a9766a073fb54dea51ac.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/07961ba24d77a9766a073fb54dea51ac.jpg"
                                                     alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs JeanneauCap Camarat 10.5 CC 26565"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 10.5 CC</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/cc17b76dcd540dd0d8287370a2a69b99.jpg" class="gallery-show"
                                               title="Cap Camarat 10.5 CC"
                                               id="gallery-exterior_6">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/cc17b76dcd540dd0d8287370a2a69b99.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/cc17b76dcd540dd0d8287370a2a69b99.jpg"
                                                     alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs JeanneauCap Camarat 10.5 CC 26566"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 10.5 CC</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/bab15785f906f7eca38a7e2a395378fa.jpg" class="gallery-show"
                                               title="Cap Camarat 10.5 CC"
                                               id="gallery-exterior_7">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/bab15785f906f7eca38a7e2a395378fa.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/bab15785f906f7eca38a7e2a395378fa.jpg"
                                                     alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs JeanneauCap Camarat 10.5 CC 26567"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 10.5 CC</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/95ebe9151fa9e66bed139fb91da7c1b3.jpg" class="gallery-show"
                                               title="Cap Camarat 10.5 CC"
                                               id="gallery-exterior_8">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/95ebe9151fa9e66bed139fb91da7c1b3.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/95ebe9151fa9e66bed139fb91da7c1b3.jpg"
                                                     alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs JeanneauCap Camarat 10.5 CC 26568"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 10.5 CC</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/77ac1c1dc7b378bb076cf0b4c253b68f.jpg" class="gallery-show"
                                               title="Cap Camarat 10.5 CC"
                                               id="gallery-exterior_9">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/77ac1c1dc7b378bb076cf0b4c253b68f.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/77ac1c1dc7b378bb076cf0b4c253b68f.jpg"
                                                     alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs JeanneauCap Camarat 10.5 CC 26569"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 10.5 CC</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/16a3a4d8195184ee88b86a78d3e2c5b3.jpg" class="gallery-show"
                                               title="Cap Camarat 10.5 CC"
                                               id="gallery-exterior_10">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/16a3a4d8195184ee88b86a78d3e2c5b3.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/16a3a4d8195184ee88b86a78d3e2c5b3.jpg"
                                                     alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs JeanneauCap Camarat 10.5 CC 27091"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 10.5 CC</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/641c207101657dee364371efd7ab78db.jpg" class="gallery-show"
                                               title="Cap Camarat 10.5 CC"
                                               id="gallery-exterior_11">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/641c207101657dee364371efd7ab78db.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/641c207101657dee364371efd7ab78db.jpg"
                                                     alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs JeanneauCap Camarat 10.5 CC 27092"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 10.5 CC</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/b689b5cf5cac360ebd97bd5e68b0768b.jpg" class="gallery-show"
                                               title="Cap Camarat 10.5 CC"
                                               id="gallery-exterior_12">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/b689b5cf5cac360ebd97bd5e68b0768b.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/b689b5cf5cac360ebd97bd5e68b0768b.jpg"
                                                     alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs JeanneauCap Camarat 10.5 CC 27093"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 10.5 CC</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/e00771e523ce79cb03a018651f766147.jpg" class="gallery-show"
                                               title="Cap Camarat 10.5 CC"
                                               id="gallery-exterior_13">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/e00771e523ce79cb03a018651f766147.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/e00771e523ce79cb03a018651f766147.jpg"
                                                     alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs JeanneauCap Camarat 10.5 CC 27094"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 10.5 CC</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/433a4bb6084f7806451106995063a614.jpg" class="gallery-show"
                                               title="Cap Camarat 10.5 CC"
                                               id="gallery-exterior_14">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/433a4bb6084f7806451106995063a614.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/433a4bb6084f7806451106995063a614.jpg"
                                                     alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs JeanneauCap Camarat 10.5 CC 27095"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 10.5 CC</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/8766d168768a4b3bad3938ae6fa5a81a.jpg" class="gallery-show"
                                               title="Cap Camarat 10.5 CC"
                                               id="gallery-exterior_15">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/8766d168768a4b3bad3938ae6fa5a81a.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/8766d168768a4b3bad3938ae6fa5a81a.jpg"
                                                     alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs JeanneauCap Camarat 10.5 CC 27096"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 10.5 CC</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/cab8342a7c503b41a66d5d733e3bf5d6.jpg" class="gallery-show"
                                               title="Cap Camarat 10.5 CC"
                                               id="gallery-exterior_16">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/cab8342a7c503b41a66d5d733e3bf5d6.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/cab8342a7c503b41a66d5d733e3bf5d6.jpg"
                                                     alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs JeanneauCap Camarat 10.5 CC 27097"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 10.5 CC</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/1d030192cdf946bd563a212bc294bfec.jpg" class="gallery-show"
                                               title="Cap Camarat 10.5 CC"
                                               id="gallery-exterior_17">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/1d030192cdf946bd563a212bc294bfec.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/1d030192cdf946bd563a212bc294bfec.jpg"
                                                     alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs JeanneauCap Camarat 10.5 CC 27098"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 10.5 CC</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/962db5ee9590527c95f3be29a961d9c2.jpg" class="gallery-show"
                                               title="Cap Camarat 10.5 CC"
                                               id="gallery-exterior_18">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/962db5ee9590527c95f3be29a961d9c2.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/962db5ee9590527c95f3be29a961d9c2.jpg"
                                                     alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs JeanneauCap Camarat 10.5 CC 27099"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 10.5 CC</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/c96173b83d8365ae5b6595c7493b499c.jpg" class="gallery-show"
                                               title="Cap Camarat 10.5 CC"
                                               id="gallery-exterior_19">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/c96173b83d8365ae5b6595c7493b499c.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/c96173b83d8365ae5b6595c7493b499c.jpg"
                                                     alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs JeanneauCap Camarat 10.5 CC 27100"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 10.5 CC</span>
                                                </div>
                                            </a>
                                        </div>
                                                                    </div>

                                                                    <button class="js-square-more exterior"><i class="icon icon-plus"></i></button>
                                                            </div>
                        
                                                    <div id="js-collapse-gallery-interior" class="collapse">
                                <div class="gallery-interior">
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/13144e88126e3300bc40e226d3f33bd4.jpg" class="gallery-show"
                                               title="Cap Camarat 10.5 CC"
                                               id="gallery-interior_1">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/13144e88126e3300bc40e226d3f33bd4.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/13144e88126e3300bc40e226d3f33bd4.jpg"
                                                     alt="base_alt Cap Camarat 10.5 CC 26571"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 10.5 CC</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/1913c35dbe0270b1e1703508c41e8336.jpg" class="gallery-show"
                                               title="Cap Camarat 10.5 CC"
                                               id="gallery-interior_2">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/1913c35dbe0270b1e1703508c41e8336.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/1913c35dbe0270b1e1703508c41e8336.jpg"
                                                     alt="base_alt Cap Camarat 10.5 CC 26572"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 10.5 CC</span>
                                                </div>
                                            </a>
                                        </div>
                                                                    </div>
                                                            </div>
                                            </div>
                </div>
            </section>
        
                            <section class="designers container-fluid">
                <a id="designers" class="anchor"></a>
                <h3>Architecture &amp; design</h3>
                <div class="designers-row">
                                                                        <a class="designer"
                               href="/jeanneau/designers">
                                <div class="image">
                                    <div class="lazy" data-bg="https://app.jeanneau.com/uploads/boat/designer/646c8a162be1b837881548.jpg"></div>
                                </div>
                                <div>
                                    <div class="name">Michael Peters</div>
                                    <div class="baseline">Michael Peters Yacht Design</div>
                                                                    </div>
                            </a>
                                                                                                <a class="designer"
                               href="/jeanneau/designers/21-patrice-sarrazin">
                                <div class="image">
                                    <div class="lazy" data-bg="https://app.jeanneau.com/uploads/boat/designer/5773804e42f84.jpg"></div>
                                </div>
                                <div>
                                    <div class="name">Patrice Sarrazin</div>
                                    <div class="baseline">Sarrazin Design</div>
                                                                    </div>
                            </a>
                                                                                                <a class="designer"
                               href="/jeanneau/designers">
                                <div class="image">
                                    <div class="lazy" data-bg="https://app.jeanneau.com/uploads/boat/designer/6686bd866e08d356240663.png"></div>
                                </div>
                                <div>
                                    <div class="name">Jeanneau design</div>
                                    <div class="baseline"></div>
                                                                    </div>
                            </a>
                                                            </div>
            </section>
        
                            <section class="container-fluid">
                <a id="specifications" class="anchor"></a>
                <div class="specifications">
                    <div class="specifications-first">
                        <h3>Layouts &amp; Specs</h3>

                                                                            <div class="photos">
                                <div id="js-slider-specifications">
                                                                            <div class="slide">
                                            <a title="Cap Camarat 10.5 CC"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/33db91d057cecb001a8a38e31a014953.png">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/33db91d057cecb001a8a38e31a014953.png"
                                                     alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs Jeanneau Cap Camarat 10.5 CC 24885"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                            <div class="slide">
                                            <a title="Cap Camarat 10.5 CC"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/c2ef868f34a5ad6bdce187e89dccbd26.png">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/c2ef868f34a5ad6bdce187e89dccbd26.png"
                                                     alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs Jeanneau Cap Camarat 10.5 CC 24886"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                            <div class="slide">
                                            <a title="Cap Camarat 10.5 CC"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/4409739985062711c097b2ec7cccd0c7.png">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/4409739985062711c097b2ec7cccd0c7.png"
                                                     alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs Jeanneau Cap Camarat 10.5 CC 24887"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                    </div>
                            </div>
                                            </div>
                                        <div class="specifications-row">
                        <div class="values">
                                                            <div class="value">
                                    <i class="icon icon-overall-length-powerboat"></i>
                                    <span class="title">Length overall</span>
                                    <span class="val">10.9 m / 35&#039;9&quot;</span>
                                </div>
                                                                                        <div class="value">
                                    <i class="icon icon-hull-length-powerboat"></i>
                                    <span class="title">Hull length</span>
                                    <span class="val">9.31 m / 30&#039;7&quot;</span>
                                </div>
                                                                                                                                                <div class="value">
                                    <i class="icon icon-keel-draught"></i>
                                    <span class="title">
                                                                              Standard Draft
                                                                          </span>
                                    <span class="val">0.723 m / 2&#039;4&quot;</span>
                                </div>
                                                                                        <div class="value">
                                    <i class="icon icon-weight"></i>
                                    <span class="title">Weight</span>
                                    <span class="val">4582 kg / 10102 Lbs</span></div>
                                                                                                                                                                                                        <div class="value">
                                    <i class="icon icon-fuel-capacity"></i>
                                    <span class="title">Fuel capacity</span>
                                    <span class="val">2 x 400 l / 2 x 106 US gal</span>
                                </div>
                                                                                                                    <div class="value">
                                    <i class="icon icon-cabins"></i>
                                    <span class="title">Cabins</span>
                                    <span class="val">1+1</span>
                                </div>
                                                                                                                    <div class="value">
                                    <i class="icon icon-ce-category"></i>
                                    <span class="title">CE Category</span>
                                    <span class="val">B - 9
                                         / C - 11
                                         / D - 11
                                        
                                    </span>
                                </div>
                                                    </div>
                        <div class="buttons">
                                                                        <a class="btn btn-primary" href="https://app.jeanneau.com/inventory/31143" target="_blank"
       title="Inventaire (Opens in a new window)"
       download="2025-0068_PRINT_INV_MOTEUR_2025_CAP_CAM_10.5_CC_GB_07-25_V2.pdf"
            
            
    >Inventaire</a>
                                                                                        <a href="/comparator/powerboat"
                                   class="btn btn-primary">Compare</a>
                                                                                </div>
                    </div>
                </div>
            </section>
        
                            <section class="container-fluid contact" id="contact-form">
                <img src="/build/images/jeanneau-white-small.svg" alt="jeanneau logo">
                <div class="agency-form">
    <a href="" id="form" class="anchor"></a>
    <div class="big-title">
        <h3>Request to be contacted by a Dealer</h3>
    </div>
    <div id="contact-form-collapse" aria-multiselectable="true" role="tablist">
        <ul class="links-collapse nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active js-link-contact"
                   data-toggle="collapse"
                   href="#js-collapse-contact"
                   role="button"
                   aria-expanded="true"
                   data-parent="#contact-form-collapse"
                   aria-controls="js-collapse-contact">
                    1. Contact information
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-link-agency collapsed"
                   data-toggle="collapse"
                   href="#js-collapse-agency"
                   role="button"
                   aria-expanded="false"
                   data-parent="#contact-form-collapse"
                   aria-controls="js-collapse-agency">
                    2. Your home port
                </a>
            </li>
        </ul>
        
            <form name="model_contact" method="post" action="#form" id="model_contact">
                        <div id="js-collapse-contact" class="collapse in">
                <fieldset>
                                            <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group"><label class="control-label required">Title *</label><div id="model_contact_civility" class="floatlabel" title="Title *"><div class="radio"><label for="model_contact_civility_0" class="required"><input type="radio" id="model_contact_civility_0" name="model_contact[civility]" required="required" value="mr" checked="checked" /> MR</label></div><div class="radio"><label for="model_contact_civility_1" class="required"><input type="radio" id="model_contact_civility_1" name="model_contact[civility]" required="required" value="mrs" /> MS</label></div></div></div>
                            </div>
                        </div>
                                        <div class="postal-address">
                        <div class="row">
                            <div class="col-sm-4"><div class="form-group"><label class="control-label required" for="model_contact_first_name">First Name *</label><input type="text" id="model_contact_first_name" name="model_contact[first_name]" required="required" class="floatlabel form-control" title="First Name *" /></div></div>
                            <div class="col-sm-4"> <div class="form-group"><label class="control-label required" for="model_contact_last_name">Last Name *</label><input type="text" id="model_contact_last_name" name="model_contact[last_name]" required="required" class="floatlabel form-control" title="Last Name *" /></div></div>
                            <div class="col-sm-4"> <div class="form-group"><label class="control-label required" for="model_contact_email">Email *</label><input type="email" id="model_contact_email" name="model_contact[email]" required="required" placeholder="example@email.com" class="floatlabel form-control" title="Email *" /></div></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4"><div class="form-group"><label class="control-label" for="model_contact_phone">Mobile</label><input type="text" id="model_contact_phone" name="model_contact[phone]" class="floatlabel form-control" title="Mobile" /></div></div>
                            <div class="col-sm-4"><div class="form-group"><label class="control-label" for="model_contact_address_street">Address</label><input type="text" id="model_contact_address_street" name="model_contact[address_street]" class="floatlabel form-control" title="Address" /></div></div>
                            <div class="col-sm-4"><div class="form-group"><label class="control-label" for="model_contact_address_code">Postal code</label><input type="text" id="model_contact_address_code" name="model_contact[address_code]" class="floatlabel form-control" title="Postal code" /></div></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"><div class="form-group"><label class="control-label" for="model_contact_address_locality">City</label><input type="text" id="model_contact_address_locality" name="model_contact[address_locality]" class="floatlabel form-control" title="City" /></div></div>
                            <div class="col-sm-6"><div class="form-group"><label class="control-label required" for="model_contact_address_country">Country</label><div class="select-wrapper" ><select id="model_contact_address_country" name="model_contact[address_country]" style="width:100%" title="Country" class="form-control form-control"><option value="AF">Afghanistan</option><option value="AX">Åland Islands</option><option value="AL" selected="selected">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua &amp; Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia &amp; Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="VG">British Virgin Islands</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="BQ">Caribbean Netherlands</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo - Brazzaville</option><option value="CD">Congo - Kinshasa</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Côte d’Ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="CY">Cyprus</option><option value="CZ">Czechia</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="SZ">Eswatini</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard &amp; McDonald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong SAR China</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao SAR China</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar (Burma)</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="MK">North Macedonia</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestinian Territories</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn Islands</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Réunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">São Tomé &amp; Príncipe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia &amp; South Sandwich Islands</option><option value="KR">South Korea</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="BL">St. Barthélemy</option><option value="SH">St. Helena</option><option value="KN">St. Kitts &amp; Nevis</option><option value="LC">St. Lucia</option><option value="MF">St. Martin</option><option value="PM">St. Pierre &amp; Miquelon</option><option value="VC">St. Vincent &amp; Grenadines</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard &amp; Jan Mayen</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad &amp; Tobago</option><option value="TN">Tunisia</option><option value="TR">Türkiye</option><option value="TM">Turkmenistan</option><option value="TC">Turks &amp; Caicos Islands</option><option value="TV">Tuvalu</option><option value="UM">U.S. Outlying Islands</option><option value="VI">U.S. Virgin Islands</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican City</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis &amp; Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select></div></div></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12"><div class="form-group"><label class="control-label required" for="model_contact_address_state">State/Province</label><div class="select-wrapper" ><select id="model_contact_address_state" name="model_contact[address_state]" class="floatlabel form-control form-control" title="State/Province"></select></div></div></div>
                            <div class="col-sm-12"><div class="form-group"><label class="control-label" for="model_contact_message">Message</label> <textarea id="model_contact_message" name="model_contact[message]" rows="10" class="form-control"></textarea>  </div> </div>
                        </div>
                        <div class="row nota-container">
                            <div class="col-sm-12">
                                <div class="nota">
                                    * Required Fields
                                </div>
                            </div>
                        </div>
                        <div class="submit">
                            <a class="btn btn-primary btn-agency collapsed" data-toggle="collapse"
                               href="#js-collapse-agency"
                               role="button" aria-expanded="false" data-parent="#contact-form-collapse"
                               aria-controls="js-collapse-agency">
                                Continue
                            </a>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div id="js-collapse-agency" class="collapse">
                <fieldset>
                    <div class="row">
    <div class="col-sm-4 col-md-offset-2">
        <div class="form-group ">
            <label for="model_contact_agency">Dealer</label>
            <select id="model_contact_agency" style="width:100%;" class="form-control"></select>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group ">
            <label for="model_contact_city">City/State/Country</label>
            <select id="model_contact_city" style="width:100%;" class="form-control"></select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-4">
        <div class="agency-list-header" id="model_contact_agency_list_header">
            <div class="header">Results</div>
        </div>
        <div class="agency-list" id="model_contact_agency_list"></div>
        <div class="agency-choose">
            <div class="control-label required">Dealer choose*</div>
            <p class="dealer-choose" id="model_contact_agency_name" data-default="None">None</p>
            <span id="model_contact_agency_logo"></span>
            <input type="hidden" id="model_contact_agency_id" name="model_contact[agency_id]" />
        </div>
    </div>
    <div class="col-sm-8">
        <div id="model_contact_map" style="width: 100%; height: 500px;"
             data-i18n-choose="Choose this dealer"
             data-location="[19.818899999999999,41.327500000000001]"
             data-zoom="6"
             data-mapbox-key="pk.eyJ1IjoiamVhbm5lYXVnaSIsImEiOiJjamg3bWN0MncwZDJjMzNzYXhmeDJ3NzRmIn0.ZHZwH5H5Mh-WO0SjVrRpRg"
             data-category="outboard">
        </div>
    </div>
</div>                </fieldset>
                <fieldset>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group"><div class="checkbox"><label for="model_contact_receive_newsletter"><input type="checkbox" id="model_contact_receive_newsletter" name="model_contact[receive_newsletter]" value="1" /> I would like to receive the Jeanneau newsletter.</label></div></div>
                        </div>
                    </div>
                </fieldset>
                <br>
                <fieldset>
                    <div class="form-error captcha"></div>
                    <div class="h-captcha" data-sitekey="0d99254e-570f-4a7e-a19c-d6282fec20e6"></div>
                </fieldset>
                <fieldset>
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="unsetFontSize">We need to transfer the personal data required in this form to the dealer you have selected to process your request. This is to allow them to contact you. If you click on the "SEND" button, you are agreeing to the transfer of your personal data.</p>

                        </div>
                    </div>
                </fieldset>
                <div class="submit">
                    <button type="submit" class="btn btn-primary">
                        Send
                    </button>
                </div>
                <div>
            <p>JEANNEAU refers to SPBI, the data controller for all geographical zones, with the exception of the Americas zone for which Beneteau Group America Inc acts as data controller. Your personal data is processed in order to respond to your request, manage our relationship with you and, if you have so chosen, send you our communications (in this case, you may unsubscribe at any time by using the link contained in our mailings).</p>
            <p>To exercise your rights: contact.rgpd@beneteau-group.com</p>
            <p>To find out more about the protection of your personal data: <a href="https://www.beneteau-group.com/en/privacy-and-cookies-policy/" target="_blank">privacy policy</a></p>
        </div>
                            </div>
            <input type="hidden" id="model_contact__token" name="model_contact[_token]" value="6160cd5b866ac.zLvwbQQwjF424OMaxE2tjOCiYLOUajxzdRnDhCuEtY4.penEJkNJ6AtiidBw9grr9rjTU-G5W3MCESr34XGp87uq1501Y1q9Jn2LjA" /></form>
            </div>
</div>            </section>
        
                <section class="other-models container-fluid">
                            <a id="lines" class="anchor"></a>
                <div class="lines">
                    <h3>explore the range</h3>
                    <div class="row">
                                                                                                                                        <div class="col-sm-6 col-lg-4 line">
                                                                                                                                    <a href="/boats/powerboat/5-cap-camarat-center-console/623-cap-camarat-6-5-cc">
                                    <div role="presentation" class="image">
                                        <img src="https://app.jeanneau.com/uploads/boat/shape/62bac9d6ece4b340368987.png" alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs Jeanneau" class="img-responsive">
                                    </div>
                                    <h4 class="name">Cap Camarat 6.5 CC</h4>
                                                                            <div class="resume">
                                            <p>A well balanced Center Console</p>
                                        </div>
                                                                        <button class="btn btn-primary">See details</button>
                                </a>
                            </div>
                                                                                                                                        <div class="col-sm-6 col-lg-4 line">
                                                                                                                                    <a href="/boats/powerboat/5-cap-camarat-center-console/668-cap-camarat-7-5-cc">
                                    <div role="presentation" class="image">
                                        <img src="https://app.jeanneau.com/uploads/boat/shape/62bac9f3dad94923988863.png" alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs Jeanneau" class="img-responsive">
                                    </div>
                                    <h4 class="name">Cap Camarat 7.5 CC</h4>
                                                                            <div class="resume">
                                            <p>The perfect blend of sportiness and comfort</p>
                                        </div>
                                                                        <button class="btn btn-primary">See details</button>
                                </a>
                            </div>
                                                                                                                                                                                                    <div class="col-sm-6 hidden-sm hidden-md col-lg-4 line">
                                                                                                                                    <a href="/boats/powerboat/5-cap-camarat-center-console/714-cap-camarat-9-0-cc-serie2">
                                    <div role="presentation" class="image">
                                        <img src="https://app.jeanneau.com/uploads/boat/shape/68766ca7d13e3438162822.png" alt="Cap Camarat 9.0 CC Serie2 │ Cap Camarat Center Console of 8m │ Boat Moteurs Jeanneau" class="img-responsive">
                                    </div>
                                    <h4 class="name">Cap Camarat 9.0 CC Serie2</h4>
                                                                        <button class="btn btn-primary">See details</button>
                                </a>
                            </div>
                                            </div>
                </div>
                    </section>
    </div>
</main>

    <footer>
        <div id="newsletter" class="container-fluid">
    <div class="media-container">
        <div class="video-container">
            <video loop playsinline muted preload="none" poster="/build/images/footer/newsletter_default.jpg">
                                    <source src="/build/images/footer/newsletter_motorboat.mp4" type="video/mp4">
                            </video>
        </div>
    </div>
    <div class="form">
        <form action="/newsletter" method="post">
            <div class="header">
                <div class="head">COME CRUISE WITH US !</div>
                <small>Subscribe to our newsletter</small>
            </div>
            <div>
                <div class="col-xs-6 col-xs-offset-1 col-sm-6 col-sm-offset-1 col-md-4 col-md-offset-3 col-lg-3 col-lg-offset-4">
                                        <input id="newsletter_email" class="form-control" type="email"
                           placeholder="Enter your email address"
                           title="Enter your email address" required="required" name="email">
                </div>
                <div class="col-xs-4 col-md-2 col-lg-1">
                    <button class="btn btn-tertiary btn-block" type="submit">Sign up</button>
                    <a href="" class="close"><i class="icon icon-close"></i></a>
                </div>
            </div>
        </form>
    </div>
</div>
        <a id="footer" tabindex="-1"></a>
                    <div class="container footer-main">
    <nav id="footer-main" class="row">
        <h2 class="sr-only">Footer navigation</h2>
                    <section class="col-sm-3">
                <h3>Jeanneau</h3>
                <ul>
                                            <li><a href="/services/rent">Rent</a></li>
                        <li><a href="/services/second-hand">Used boats</a></li>
                                        <li><a href="/articles#events">Boat Shows and Events</a></li>
                    <li><a href="/comparator">Model Comparison Tool</a></li>
                </ul>
            </section>
                                                <section class="col-sm-3">
                        <h3><a href="/boats/sailboat">Sailboats</a></h3>
                        <ul>
                                                            <li><a href="/boats/sailboat/2-sun-odyssey">Sun Odyssey</a></li>
                                                            <li><a href="/boats/sailboat/4-jeanneau-yachts">Jeanneau Yachts</a></li>
                                                            <li><a href="/boats/sailboat/1-sun-fast">Sun Fast</a></li>
                                                        <li><a href="/models-panorama?category=sailboat">Virtual tour</a></li>
                        </ul>
                    </section>
                                                                <section class="col-sm-3">
                        <h3><a href="/boats/powerboat">Motorboats</a></h3>
                        <ul>
                                                            <li><a href="/boats/powerboat/39-cap-camarat">Cap Camarat</a></li>
                                                            <li><a href="/boats/powerboat/44-db-yachts">DB Yachts</a></li>
                                                            <li><a href="/boats/powerboat/9-merry-fisher">Merry Fisher</a></li>
                                                            <li><a href="/boats/powerboat/43-merry-fisher-sport">Merry Fisher Sport</a></li>
                                                        <li><a href="/models-panorama?category=powerboat">Virtual tour</a></li>
                        </ul>
                    </section>
                                        <section class="col-sm-3">
                <h3>Customer Service</h3>
                <ul>
                    <li><a href="https://help.jeanneau.com/hc/en-gb" target="_blank">Customer Service</a></li>
                </ul>
            </section>
            </nav>
</div>

<div role="contentinfo" id="footer-links" class="footer-fixed">
    <div class="social-links" itemscope itemtype="http://schema.org/Organization">
        <link itemprop="url" href="https://www.jeanneau.com">
        <ul>
                
            <li>
            <a href="https://www.facebook.com/JeanneauOfficial/" itemprop="sameAs" target="_blank" title="Facebook (Opens in a new window)">
                <i class="icon icon-facebook circle-icon"></i>
                <span class="sr-only">Facebook</span>
            </a>
        </li>
            <li>
            <a href="https://www.instagram.com/jeanneau_official/" itemprop="sameAs" target="_blank" title="Instagram (Opens in a new window)">
                <i class="icon icon-instagram circle-icon"></i>
                <span class="sr-only">Instagram</span>
            </a>
        </li>
            <li>
            <a href="https://fr.linkedin.com/company/jeanneau" itemprop="sameAs" target="_blank" title="Linked in (Opens in a new window)">
                <i class="icon icon-linkedin circle-icon"></i>
                <span class="sr-only">Linked in</span>
            </a>
        </li>
            <li>
            <a href="https://www.youtube.com/channel/UCN6KV7C7nUigyjTLKdE4Ysg?sub_confirmation=1" itemprop="sameAs" target="_blank" title="Youtube (Opens in a new window)">
                <i class="icon icon-youtube circle-icon"></i>
                <span class="sr-only">Youtube</span>
            </a>
        </li>
            <li>
            <a href="https://twitter.com/etsjeanneau" itemprop="sameAs" target="_blank" title="X (Opens in a new window)">
                <i class="icon icon-x circle-icon"></i>
                <span class="sr-only">X</span>
            </a>
        </li>
    </ul>
    </div>
    <ul class="other-links">
        <li><a href="/sitemap">Site Map</a></li>
        <li><a href="/legal">Legal Notice</a></li>
        <li><a href="/privacy-policy">Personal Data</a></li>
        <li><a href="/jeanneau/partners">Our Partners</a></li>
        <li><a href="/websites">All Our Websites</a></li>
        <li><a href="/accessibility">Accessibility</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><button id="ot-sdk-btn" class="ot-sdk-show-settings footer"> Cookie Settings</button></li>
        <li><a id="optout" data-trk="optout" href="#">Reject audience measurement cookies</a></li>
    </ul>
    <div class="clearfix"></div>
</div>


                        </footer>

    <div id="cookieconsent-i18n"
         data-message="By continuing your visit on this website, you agree to the use of cookies to enhance your browsing experience and to generate website traffic statistics."
         data-dismiss="I AGREE"></div>


<script src="js/runtime.32cc791b.js" defer></script>
<script src="js/691.570663c4.js" defer></script>
<script src="js/268.9a434bd2.js" defer></script>
<script src="js/732.a73f4830.js" defer></script>
<script src="js/app.bab1e4dd.js" defer></script>
</body>
</html>
