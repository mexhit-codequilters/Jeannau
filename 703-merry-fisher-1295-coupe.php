<?php
/**
 * Template Name: MERRY FISHER 1295 Coupé
 * */
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
                            <img src="https://app.jeanneau.com/uploads/media/image/interior/c255968412ef29e5ed369338fe562eab.jpg" alt=" 30722" class="img-responsive ">
                        </div>
                    </div>
                    <div class="header-title">
                        <div class="header"></div>
                        <h1 class="baseline">MERRY FISHER 1295 Coupé</h1>
                    </div>
                </div>
                <div class="boat-nav row">
                    <div class="col-xs-6 col-sm-2 item-nav item-nav-blue boat-name">
                        <div>MERRY FISHER 1295 Coupé</div>
                    </div>
                    <div class="col-sm-5 item-nav item-nav-inline d-sm-none">
                        <div class="item">
                            <a href="#photos" class="scrolltoAnchor">photos</a>
                        </div>
                        <div class="item">
                            <a href="#panorama" class="scrolltoAnchor">360°</a>
                        </div>
                    </div>
                    <div class="col-sm-2 item-nav d-sm-none"></div>
                    <div class="col-sm-1 item-nav d-sm-none"></div>
                    <div class="col-xs-6 col-sm-2 item-nav item-nav-blue get-offer">
                        <a href="#contact-form" class="scrolltoAnchor" title="Contact our service teams">
                            <i class="icon icon-contact"></i>
                            Request  an offer
                    
                        </a>
                    </div>
                </div>
                <div class="container-fluid no-margin-bottom"></div>
                <div class="container-fluid no-margin-bottom">
                    <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a href="/" itemprop="item">
                                <span itemprop="name">Home</span>
                            </a>
                            <meta itemprop="position" content="1"/>
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a href="/boats/powerboat" itemprop="item">
                                <span itemprop="name">Motorboats</span>
                            </a>
                            <meta itemprop="position" content="2"/>
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a href="/boats/powerboat/9-merry-fisher" itemprop="item">
                                <span itemprop="name">Merry Fisher</span>
                            </a>
                            <meta itemprop="position" content="3"/>
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a href="/boats/powerboat/9-merry-fisher/703-merry-fisher-1295-coupe" itemprop="item">
                                <span itemprop="name">MERRY FISHER 1295 Coupé</span>
                            </a>
                            <meta itemprop="position" content="4"/>
                        </li>
                    </ul>
                </div>
                <section class="container-fluid">
                    <div class="boat-content row ">
                        <div class="col-xs-12 col-sm-8">
                            <a id="points" class="anchor"></a>
                            <div class="points">
                                <div class="baseline">Smooth family cruises</div>
                                <div class="content">
                                    <p>Faithful to the heritage of the line, the Merry Fisher 1295 Coupé offers full comfort, enabling families to extend their time on the water and to experience wonderful shared moments all throughout the year.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="configuratorLink">
                                <a href="https://configurateur.jeanneau.com/en/configure/powerboat/9-merry-fisher/703-merry-fisher-1295-coupe" class="square" target="_blank">
                                    <i class="icon icon-commander-brochure"></i>
                                    Configure
                            
                                </a>
                            </div>
                            <div class="documents">
                                <a class="square" href="/contact?brochures%5B%5D=9#brochure-form">
                                    <i class="icon icon-commander-brochure"></i>
                                    Request the Brochure
                            
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="container-fluid blocks">
                    <div class="block">
                        <div class="col-xs-12 image-block no-padding d-sm-none">
                            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/interior/1cfa6ab801012c0c183fb01e6d8e0376.jpg')" title="MERRY FISHER 1295 Coupé - Coastal Cruising in Full Comfort"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 content-block">
                            <h3 class="white">Coastal Cruising in Full Comfort</h3>
                            <div class="text-content white">
                                <p>A true appartement on the water, the flagship of the line offers a bright, magnificent living space, from the wheelhouse to the cockpit, with a 360° view of the sea and two opening sunroofs.&nbsp;&nbsp;The U-shaped galley, connecting interior and exterior spaces, becomes a gathering place while facilitating passage.&nbsp;The warm, inviting saloon benefits from seating designed with rounded edges, armrests, and leather handrails, enabling everyone to be comfortably seated around an extending table with two leaves.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 image-block no-padding d-sm">
                            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/interior/1cfa6ab801012c0c183fb01e6d8e0376.jpg')" title="MERRY FISHER 1295 Coupé - Coastal Cruising in Full Comfort"></div>
                        </div>
                    </div>
                    <div class="block">
                        <div class="col-xs-12 col-sm-6 image-block no-padding">
                            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/interior/5e4005eeb95db5fdb2fe7b6e36aa25bc.jpg')" title="MERRY FISHER 1295 Coupé - Adaptable to Suit Every Need"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 content-block even">
                            <h3>Adaptable to Suit Every Need</h3>
                            <div class="text-content">
                                <p>The new Merry Fisher 1295 Coupé benefits from all the advantages of the line – including versatility, modular living spaces, and clever layouts – aboard a boat of nearly 13 metres, for a feeling of exceptional comfort and spaciousness.&nbsp;Three cabins boast long windows and copious storage, as well as two head compartments, enabling you to get away and enjoy several days of cruising.</p>
                            </div>
                        </div>
                    </div>
                    <div class="block">
                        <div class="col-xs-12 image-block no-padding d-sm-none">
                            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/interior/ce88e1242ba941471a2e49fe7798f25e.jpg')" title="MERRY FISHER 1295 Coupé - Take in More of Your Natural Surroundings"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 content-block">
                            <h3 class="white">Take in More of Your Natural Surroundings</h3>
                            <div class="text-content white">
                                <p>The Merry Fisher 1295 Coupé is a safe boat that enables you to experience moments of simple happiness on the water, with family and friends, throughout the year and in all conditions.&nbsp;She also features very attractive exterior living spaces for savouring beautiful sunny days.&nbsp;The storage compartment easily accommodates a paddleboard and equipment for coastal exploration while anchored.&nbsp;This free space on the roof can be equipped with solar panels.&nbsp;The vast aft cockpit is extended by an electrically controlled side terrace that facilitates swim access.&nbsp;The foredeck, serving at once as a saloon and a sundeck, offers a distinct, new living space, closer to nature.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 image-block no-padding d-sm">
                            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/interior/ce88e1242ba941471a2e49fe7798f25e.jpg')" title="MERRY FISHER 1295 Coupé - Take in More of Your Natural Surroundings"></div>
                        </div>
                    </div>
                </section>
                <a id="videos" class="anchor"></a>
                <a id="panorama" class="anchor"></a>
                <section class="panorama container-fluid">
                    <h3>Visit 360°</h3>
                    <div class="panorama-body">
                        <object data="https://app.jeanneau.com/uploads/panorama/703-mf1295/index.html" type="text/html"></object>
                    </div>
                </section>
                <section class="container-fluid">
                    <a id="photos" class="anchor"></a>
                    <div class="gallery">
                        <h3>photo gallery</h3>
                        <div id="gallery" aria-multiselectable="true" role="tablist">
                            <ul class="links-collapse nav justify-content-center">
                                <li class="nav-item">
                                    <a class="nav-link active js-link-exterior" data-toggle="collapse" href="#js-collapse-gallery-exterior" role="button" aria-expanded="true" data-parent="#gallery" aria-controls="js-collapse-gallery-exterior">Exterior
Views</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link js-link-interior" data-toggle="collapse" href="#js-collapse-gallery-interior" role="button" aria-expanded="false" data-parent="#gallery" aria-controls="js-collapse-gallery-interior">Interior
Views</a>
                                </li>
                            </ul>
                            <div id="js-collapse-gallery-exterior" class="collapse in">
                                <div class="gallery-exterior">
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/0fad614e0d463c8dbb34be041189cc26.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_1">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/0fad614e0d463c8dbb34be041189cc26.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/0fad614e0d463c8dbb34be041189cc26.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30650"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/881dd7b6e4bced5dddde5658d68134e7.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_2">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/881dd7b6e4bced5dddde5658d68134e7.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/881dd7b6e4bced5dddde5658d68134e7.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30651"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/dd031c208e4c6618de9b857310023d20.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_3">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/dd031c208e4c6618de9b857310023d20.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/dd031c208e4c6618de9b857310023d20.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30652"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/ed591e8c659168ad16dd7d7d36302d79.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_4">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/ed591e8c659168ad16dd7d7d36302d79.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/ed591e8c659168ad16dd7d7d36302d79.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30655"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/dd9116f2004335b2b7c3bb74bbdd4c3e.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_5">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/dd9116f2004335b2b7c3bb74bbdd4c3e.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/dd9116f2004335b2b7c3bb74bbdd4c3e.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30656"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior portrait display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/8ac907cb02612e416066ec60ef4388b8.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_6">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/8ac907cb02612e416066ec60ef4388b8.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/8ac907cb02612e416066ec60ef4388b8.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30658"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior portrait display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/c729c3f2cb1cebf202e20ba4b6284a5d.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_7">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/c729c3f2cb1cebf202e20ba4b6284a5d.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/c729c3f2cb1cebf202e20ba4b6284a5d.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30662"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/891b27faf4809007c4627a239d4e040a.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_8">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/891b27faf4809007c4627a239d4e040a.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/891b27faf4809007c4627a239d4e040a.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30665"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/cca43cb3b06f6a3421e76a5025097d32.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_9">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/cca43cb3b06f6a3421e76a5025097d32.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/cca43cb3b06f6a3421e76a5025097d32.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30668"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/49a1d592b326356dec6ca48564557825.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_10">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/49a1d592b326356dec6ca48564557825.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/49a1d592b326356dec6ca48564557825.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30671"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/72dbe75cd481bc32fb93203fa042383e.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_11">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/72dbe75cd481bc32fb93203fa042383e.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/72dbe75cd481bc32fb93203fa042383e.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30674"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/d89e06bd61f1b01e60d44d0380d76051.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_12">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/d89e06bd61f1b01e60d44d0380d76051.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/d89e06bd61f1b01e60d44d0380d76051.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30676"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/0f93170ac32f397888b7cf654bd245b8.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_13">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/0f93170ac32f397888b7cf654bd245b8.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/0f93170ac32f397888b7cf654bd245b8.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30681"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior portrait hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/7ac4b9741cd473051738f2ed80c40a22.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_14">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/7ac4b9741cd473051738f2ed80c40a22.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/7ac4b9741cd473051738f2ed80c40a22.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30686"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/9aa93fc4d40a3a550c8c065b19b69bf2.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_15">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/9aa93fc4d40a3a550c8c065b19b69bf2.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/9aa93fc4d40a3a550c8c065b19b69bf2.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30690"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior portrait hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/24b0ecc8e2197848d125cb6c32b195b2.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_16">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/24b0ecc8e2197848d125cb6c32b195b2.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/24b0ecc8e2197848d125cb6c32b195b2.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30691"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/33c4d7ca802d49485a5d7f01d9554bff.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_17">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/33c4d7ca802d49485a5d7f01d9554bff.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/33c4d7ca802d49485a5d7f01d9554bff.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30692"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/0773a39234ef85740e45f1a32c4d62b2.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_18">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/0773a39234ef85740e45f1a32c4d62b2.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/0773a39234ef85740e45f1a32c4d62b2.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30693"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/74c44c6dabbc736b396d77dd7ebd8ba3.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_19">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/74c44c6dabbc736b396d77dd7ebd8ba3.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/74c44c6dabbc736b396d77dd7ebd8ba3.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30694"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior portrait hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/a222613ddd8bc11c6c4d22c452059491.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_20">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/a222613ddd8bc11c6c4d22c452059491.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/a222613ddd8bc11c6c4d22c452059491.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30695"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior portrait hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/d6f3196a9644c5a98f43e7383fe70ef7.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_21">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/d6f3196a9644c5a98f43e7383fe70ef7.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/d6f3196a9644c5a98f43e7383fe70ef7.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30696"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/9f8a9c2c879b1d07f08e018d5f45a27e.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_22">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/9f8a9c2c879b1d07f08e018d5f45a27e.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/9f8a9c2c879b1d07f08e018d5f45a27e.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30697"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/cee09444a8a67e8d7abd71504a405e43.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_23">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/cee09444a8a67e8d7abd71504a405e43.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/cee09444a8a67e8d7abd71504a405e43.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30698"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/a4aaa9efbd0626280ba93b65f15b9156.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_24">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/a4aaa9efbd0626280ba93b65f15b9156.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/a4aaa9efbd0626280ba93b65f15b9156.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30699"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/860d17f2df62ac823c09e9305a0df995.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_25">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/860d17f2df62ac823c09e9305a0df995.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/860d17f2df62ac823c09e9305a0df995.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30700"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/eccdc61b9962253130b199b37776b41f.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_26">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/eccdc61b9962253130b199b37776b41f.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/eccdc61b9962253130b199b37776b41f.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30701"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/5212eef73449e4ecef1303d88936344a.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_27">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/5212eef73449e4ecef1303d88936344a.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/5212eef73449e4ecef1303d88936344a.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30702"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior portrait hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/1faa3f36e05ef58198a07564516f56ee.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_28">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/1faa3f36e05ef58198a07564516f56ee.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/1faa3f36e05ef58198a07564516f56ee.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30703"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior portrait hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/e93842b7f77f5f53e4cebe7d610edc86.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_29">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/e93842b7f77f5f53e4cebe7d610edc86.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/e93842b7f77f5f53e4cebe7d610edc86.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30704"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/46b4fea2396966261faa98b389f7c043.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_30">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/46b4fea2396966261faa98b389f7c043.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/46b4fea2396966261faa98b389f7c043.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupé 30705"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/5a0dfe3a203f09b37dbc7e5a8341004a.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-exterior_31">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/5a0dfe3a203f09b37dbc7e5a8341004a.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/5a0dfe3a203f09b37dbc7e5a8341004a.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs JeanneauMerry Fisher 1295 Coupe 29976"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupe</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <button class="js-square-more exterior">
                                    <i class="icon icon-plus"></i>
                                </button>
                            </div>
                            <div id="js-collapse-gallery-interior" class="collapse">
                                <div class="gallery-interior">
                                    <div class="gallery_item interior portrait display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/791b215ec35048c426f7266128e08bf0.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-interior_1">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/791b215ec35048c426f7266128e08bf0.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/791b215ec35048c426f7266128e08bf0.jpg" alt="base_alt Merry Fisher 1295 Coupé 30673"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/5b139c12ea2a5da6227ab0dcc5f62394.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-interior_2">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/5b139c12ea2a5da6227ab0dcc5f62394.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/5b139c12ea2a5da6227ab0dcc5f62394.jpg" alt="base_alt Merry Fisher 1295 Coupé 30669"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/c83000ea86e60bbd2ae4ec63c456068b.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-interior_3">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/c83000ea86e60bbd2ae4ec63c456068b.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/c83000ea86e60bbd2ae4ec63c456068b.jpg" alt="base_alt Merry Fisher 1295 Coupé 30659"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/3a8b3b7f04c4b62e92f6f49ae1c9ce54.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-interior_4">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/3a8b3b7f04c4b62e92f6f49ae1c9ce54.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/3a8b3b7f04c4b62e92f6f49ae1c9ce54.jpg" alt="base_alt Merry Fisher 1295 Coupé 30660"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/cf15c95b1b912f1a41b295282837e3fc.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-interior_5">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/cf15c95b1b912f1a41b295282837e3fc.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/cf15c95b1b912f1a41b295282837e3fc.jpg" alt="base_alt Merry Fisher 1295 Coupé 30706"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/708850ad03c35c08b763dbf660385f81.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-interior_6">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/708850ad03c35c08b763dbf660385f81.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/708850ad03c35c08b763dbf660385f81.jpg" alt="base_alt Merry Fisher 1295 Coupé 30707"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/db0d9659667b986eb4f9c1f972a50261.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-interior_7">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/db0d9659667b986eb4f9c1f972a50261.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/db0d9659667b986eb4f9c1f972a50261.jpg" alt="base_alt Merry Fisher 1295 Coupé 30708"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/fd803022f0faa4e685be2daf1a46f606.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-interior_8">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/fd803022f0faa4e685be2daf1a46f606.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/fd803022f0faa4e685be2daf1a46f606.jpg" alt="base_alt Merry Fisher 1295 Coupé 30709"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior portrait display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/9be66b8e2157c01ceb97ca6cf27f633c.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-interior_9">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/9be66b8e2157c01ceb97ca6cf27f633c.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/9be66b8e2157c01ceb97ca6cf27f633c.jpg" alt="base_alt Merry Fisher 1295 Coupé 30710"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/58cc805e47c72b5ba3a855f593616a70.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-interior_10">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/58cc805e47c72b5ba3a855f593616a70.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/58cc805e47c72b5ba3a855f593616a70.jpg" alt="base_alt Merry Fisher 1295 Coupé 30711"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior portrait display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/684753c3b762ecb1c9a6fd525bbfad78.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-interior_11">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/684753c3b762ecb1c9a6fd525bbfad78.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/684753c3b762ecb1c9a6fd525bbfad78.jpg" alt="base_alt Merry Fisher 1295 Coupé 30712"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/6eeda9e201aa88f9c7e641339fc3787e.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-interior_12">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/6eeda9e201aa88f9c7e641339fc3787e.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/6eeda9e201aa88f9c7e641339fc3787e.jpg" alt="base_alt Merry Fisher 1295 Coupé 30713"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/04d9fb3bccb858da92be014abde7efd4.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-interior_13">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/04d9fb3bccb858da92be014abde7efd4.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/04d9fb3bccb858da92be014abde7efd4.jpg" alt="base_alt Merry Fisher 1295 Coupé 30714"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/33e191cf87644c5857825c27b562816c.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-interior_14">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/33e191cf87644c5857825c27b562816c.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/33e191cf87644c5857825c27b562816c.jpg" alt="base_alt Merry Fisher 1295 Coupé 30715"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/5929d370dc005451d0869aee72f044b5.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-interior_15">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/5929d370dc005451d0869aee72f044b5.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/5929d370dc005451d0869aee72f044b5.jpg" alt="base_alt Merry Fisher 1295 Coupé 30716"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/09377837762223d4c1a1de7d367b86a1.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-interior_16">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/09377837762223d4c1a1de7d367b86a1.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/09377837762223d4c1a1de7d367b86a1.jpg" alt="base_alt Merry Fisher 1295 Coupé 30717"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/6e42fdff9424928f57060e76388e7180.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-interior_17">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/6e42fdff9424928f57060e76388e7180.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/6e42fdff9424928f57060e76388e7180.jpg" alt="base_alt Merry Fisher 1295 Coupé 30718"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior portrait hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/9848eaa56b587f12a94d76772a35cca0.jpg" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-interior_18">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/9848eaa56b587f12a94d76772a35cca0.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/9848eaa56b587f12a94d76772a35cca0.jpg" alt="base_alt Merry Fisher 1295 Coupé 30719"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/1869af658bc1a7c121baf87b821331a0.png" class="gallery-show" title="MERRY FISHER 1295 Coupé" id="gallery-interior_19">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/1869af658bc1a7c121baf87b821331a0.png" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/1869af658bc1a7c121baf87b821331a0.png" alt="base_alt Merry Fisher 1295 Coupé 29990"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 1295 Coupé</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <button class="js-square-more interior">
                                    <i class="icon icon-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="designers container-fluid">
                    <a id="designers" class="anchor"></a>
                    <h3>Architecture &amp;design</h3>
                    <div class="designers-row">
                        <a class="designer" href="/jeanneau/designers">
                            <div class="image">
                                <div class="lazy" data-bg="https://app.jeanneau.com/uploads/boat/designer/6686bd866e08d356240663.png"></div>
                            </div>
                            <div>
                                <div class="name">Jeanneau design</div>
                                <div class="baseline"></div>
                            </div>
                        </a>
                        <a class="designer" href="/jeanneau/designers">
                            <div class="image">
                                <div class="lazy" data-bg=""></div>
                            </div>
                            <div>
                                <div class="name">Centowski &amp;Denert Design</div>
                                <div class="baseline"></div>
                            </div>
                        </a>
                    </div>
                </section>
                <section class="container-fluid">
                    <a id="specifications" class="anchor"></a>
                    <div class="specifications">
                        <div class="specifications-first">
                            <h3>Layouts &amp;Specs</h3>
                            <div class="photos">
                                <div id="js-slider-specifications">
                                    <div class="slide">
                                        <a title="MERRY FISHER 1295 Coupé" href="https://app.jeanneau.com/uploads/media/image/layout/hd/aa51ce60795a5472cf4782a879d05279.jpg">
                                            <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/aa51ce60795a5472cf4782a879d05279.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs Jeanneau Merry Fisher 1295 Coupe 29964" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="slide">
                                        <a title="MERRY FISHER 1295 Coupé" href="https://app.jeanneau.com/uploads/media/image/layout/hd/207955026cb9a4d2efc70a1df1c960fd.jpg">
                                            <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/207955026cb9a4d2efc70a1df1c960fd.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs Jeanneau Merry Fisher 1295 Coupe 29977" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="slide">
                                        <a title="MERRY FISHER 1295 Coupé" href="https://app.jeanneau.com/uploads/media/image/layout/hd/307f954be7f2caa97a79ef3d94677f0c.jpg">
                                            <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/307f954be7f2caa97a79ef3d94677f0c.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs Jeanneau Merry Fisher 1295 Coupe 29965" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="slide">
                                        <a title="MERRY FISHER 1295 Coupé" href="https://app.jeanneau.com/uploads/media/image/layout/hd/291158516dd4b5359eaa66335e6b288d.jpg">
                                            <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/291158516dd4b5359eaa66335e6b288d.jpg" alt="MERRY FISHER 1295 Coupé │ Merry Fisher of 12m │ Boat Moteurs Jeanneau Merry Fisher 1295 Coupe 29978" class="img-responsive">
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
                                    <span class="val">12.41 m / 40 &#039;9 &quot;</span>
                                </div>
                                <div class="value">
                                    <i class="icon icon-hull-length-powerboat"></i>
                                    <span class="title">Hull length</span>
                                    <span class="val">11.92 m / 39 &#039;1 &quot;</span>
                                </div>
                                <div class="value">
                                    <i class="icon icon-hull-draft"></i>
                                    <span class="title">Hull Draft</span>
                                    <span class="val">0.76 m / 2 &#039;6 &quot;</span>
                                </div>
                                <div class="value">
                                    <i class="icon icon-fuel-capacity"></i>
                                    <span class="title">Fuel capacity</span>
                                    <span class="val">1174 l / 310 US gal</span>
                                </div>
                                <div class="value">
                                    <i class="icon icon-water-capacity"></i>
                                    <span class="title">Water capacity</span>
                                    <span class="val">400 l / 106 US gal</span>
                                </div>
                                <div class="value">
                                    <i class="icon icon-cabins"></i>
                                    <span class="title">Cabins</span>
                                    <span class="val">3</span>
                                </div>
                                <div class="value">
                                    <i class="icon icon-ce-category"></i>
                                    <span class="title">CE Category</span>
                                    <span class="val">B - 10 / C-12
                                        
                                        
                                        
                                    </span>
                                </div>
                            </div>
                            <div class="buttons">
                                <a class="btn btn-primary" href="https://app.jeanneau.com/inventory/31150" target="_blank" title="Inventaire (Opens in a new window)" download="2025-0068_PRINT_INV_MOTEUR_MERRY_FISHER_1295_FLY_GB_07-25_V2.pdf">Inventaire</a>
                                <a href="/comparator/powerboat" class="btn btn-primary">Compare</a>
                            </div>
                        </div>
                    </div>
                </section>
             
                
                
            </div>
        </main>
       
        <div id="cookieconsent-i18n" data-message="By continuing your visit on this website, you agree to the use of cookies to enhance your browsing experience and to generate website traffic statistics." data-dismiss="I AGREE"></div>
<script src="js/runtime.32cc791b.js" defer></script>
<script src="js/691.570663c4.js" defer></script>
<script src="js/268.9a434bd2.js" defer></script>
<script src="js/732.a73f4830.js" defer></script>
<script src="js/app.bab1e4dd.js" defer></script>
    </body>
</html>
<?php
get_footer();
?>