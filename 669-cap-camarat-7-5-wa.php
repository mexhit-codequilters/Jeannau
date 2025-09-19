<?php
/**
 * Template Name: Cap Camarat 7.5 WA  cc
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
                                                            <img src="https://app.jeanneau.com/uploads/media/image/interior/167e3481da77c82566f3af53cb55c365.jpg" alt=" 30169"
                                     class="img-responsive ">
                                                    </div>
                                    </div>
                <div class="header-title">
                    <div class="header"></div>
                    <h1 class="baseline">Cap Camarat 7.5 WA</h1>
                                    </div>
            </div>
        
                <div class="boat-nav row">
            <div class="col-xs-6 col-sm-2 item-nav item-nav-blue boat-name">
                <div>Cap Camarat 7.5 WA</div>
            </div>
            <div class="col-sm-5 item-nav item-nav-inline d-sm-none">
                                    <div class="item">
                        <a href="#videos" class="scrolltoAnchor">Videos</a>
                    </div>
                                                    <div class="item">
                        <a href="#photos" class="scrolltoAnchor">photos</a>
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
                <a href="/boats/powerboat/7-cap-camarat-walk-around" itemprop="item"><span itemprop="name">Cap Camarat Walk Around</span></a>
                <meta itemprop="position" content="4" />
            </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="/boats/powerboat/7-cap-camarat-walk-around/669-cap-camarat-7-5-wa" itemprop="item"><span itemprop="name">Cap Camarat 7.5 WA</span></a>
                <meta itemprop="position" content="5" />
            </li>
            </ul>
</div>
                <section class="container-fluid">
            <div class="boat-content row ">
                <div class="col-xs-12 col-sm-8">
                                            <a id="points" class="anchor"></a>
                        <div class="points">
                            <div class="baseline">Uniquely Crafted for Family Fun</div>

                                                            <div class="boat-reviews">
                                                                                                                        <i class="icon icon-star-full"></i>
                                                                                                                                                                <i class="icon icon-star-full"></i>
                                                                                                                                                                <i class="icon icon-star-full"></i>
                                                                                                                                                                <i class="icon icon-star-full"></i>
                                                                                                                                                                <i class="icon icon-star-empty"></i>
                                                                                                                <a href="https://feedback.jeanneau.com/cap-camarat-walk-around/cap-camarat-75-wa-serie3?lang=en-GB" target="_blank"
                                       title="17 Customer reviews (Opens in a new window)">
                                        17 Customer reviews
                                    </a>
                                </div>
                            
                            <div class="content">
                                <p>Ideal for beautiful, sunny days, the Cap Camarat 7.5 WA offers an escape for a couple spending a weekend on the water.</p><p>SEANAPPS Technology on board.&nbsp;To learn more, <a target="_blank" rel="noopener noreferrer" href="https://www.seanapps.app/en">click here</a>.</p>
                            </div>
                        </div>
                                    </div>
                <div class="col-xs-12 col-sm-4">
                                                                <div class="configuratorLink">
                            <a href="https://configurateur.jeanneau.com/en/configure/powerboat/7-cap-camarat-walk-around/669-cap-camarat-7-5-wa" class="square" target="_blank">
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
                               href="/contact?brochures%5B%5D=7#brochure-form"><i
                                        class="icon icon-commander-brochure"></i>Request the Brochure
                            </a>
                                            </div>
                </div>
            </div>
        </section>

                            <section class="container-fluid blocks">
                                
                                                                
                                                                        <div class="block">
        <div class="col-xs-12 image-block no-padding d-sm-none">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/d31af40174a479ba791e87ae2cbd1b0d.jpg')"
                 title="Cap Camarat 7.5 WA - Comfort and Style at Any Speed">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 content-block">
            <h3 class="white">Comfort and Style at Any Speed</h3>
            <div class="text-content white"><p>Designed for zipping across the water, the Cap Camarat 7.5 WA provides exceptional performance. The V-shaped hull designed by Michael Peters ensures good seakeeping with ex-cellent handling and manoeuvrability, while cruising and at port, with the optional bowthruster. The modular cockpit enables you to sit comfortably on crossings, and then to fold away the bench seating in seconds to access the storage locker or to facilitate movement about the boat while at anchor.</p></div>
            
        </div>
        <div class="col-sm-6 image-block no-padding d-sm">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/d31af40174a479ba791e87ae2cbd1b0d.jpg')"
                 title="Cap Camarat 7.5 WA - Comfort and Style at Any Speed">
            </div>
        </div>
    </div>
                                    
                                                                
                                                                            <div class="block">
        <div class="col-xs-12 col-sm-6 image-block no-padding">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/054bfadc55b32bf394765aa34db3c33e.jpg')"
                 title="Cap Camarat 7.5 WA - Extend Your Time on the Water">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 content-block even">
            <h3>Extend Your Time on the Water</h3>
            <div class="text-content"><p>What is most surprising aboard the Cap Camarat 7.5 WA is the level of comfort and live-ability for a 25-foot boat. In the cockpit, an optional exterior galley, with a refrigerator, grill, sink, and optional live well or gas stove enables you entertain in open air. Slip below to find a nice spacious salon that converts to double berth, with large hull windows that flood the interior space with natural light. The private head is accessible in a separate compartment. This day boat gives you every reason to extend your getaways as a couple, whether for a weekend or longer.</p></div>
            
        </div>
    </div>
                                                </section>
        
                
                <a id="videos" class="anchor"></a>
                    <section class="videos">
    <h3 class="sr-only">Videos</h3>
                                        <div class="video-first">
                                                
    <div class="iframe-container" data-reference="y3Rbk8CNoXw" data-type="model-main-video" data-provider="YouTube">

        
            <iframe src=""
                    data-src="https://www.youtube.com/embed/y3Rbk8CNoXw?vq=hd1080"
                    data-reference="y3Rbk8CNoXw"
                    class="optanon-category-C0003"
                    frameborder="0"
                    allowfullscreen
            ></iframe>

            </div>

                                    </div>
                                                                                
        <div class="other-video">
                                                                            <div class="video">
                            
    <div class="iframe-container" data-reference="oT5NNaAip2g" data-type="model-other-video" data-provider="YouTube">

        
            <a href="https://www.youtube.com/watch?v=oT5NNaAip2g"
               data-reference="oT5NNaAip2g"
               class="js-additional-video">
                <img src="https://img.youtube.com/vi/oT5NNaAip2g/0.jpg" alt="Thumbnail">
            </a>

            </div>

                    </div>
                                                                <div class="video">
                            
    <div class="iframe-container" data-reference="Qb28EVDPo_E" data-type="model-other-video" data-provider="YouTube">

        
            <a href="https://www.youtube.com/watch?v=Qb28EVDPo_E"
               data-reference="Qb28EVDPo_E"
               class="js-additional-video">
                <img src="https://img.youtube.com/vi/Qb28EVDPo_E/0.jpg" alt="Thumbnail">
            </a>

            </div>

                    </div>
                                                                <div class="video">
                            
    <div class="iframe-container" data-reference="xpkqvcTXTvI" data-type="model-other-video" data-provider="YouTube">

        
            <a href="https://www.youtube.com/watch?v=xpkqvcTXTvI"
               data-reference="xpkqvcTXTvI"
               class="js-additional-video">
                <img src="https://img.youtube.com/vi/xpkqvcTXTvI/0.jpg" alt="Thumbnail">
            </a>

            </div>

                    </div>
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
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/8f3ceda1f61fb7a24f3f3720c6ac21a2.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-exterior_1">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/8f3ceda1f61fb7a24f3f3720c6ac21a2.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/8f3ceda1f61fb7a24f3f3720c6ac21a2.jpg"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 WA Série3 25895"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/805a5c0eb6f2b5d25ac5e95caf011344.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-exterior_2">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/805a5c0eb6f2b5d25ac5e95caf011344.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/805a5c0eb6f2b5d25ac5e95caf011344.jpg"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 WA Série3 25896"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/70c043773b5e1768ca3d76d0033ba090.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-exterior_3">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/70c043773b5e1768ca3d76d0033ba090.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/70c043773b5e1768ca3d76d0033ba090.jpg"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 WA Série3 25897"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/2dc795b716dc8f4f2570df6895267307.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-exterior_4">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/2dc795b716dc8f4f2570df6895267307.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/2dc795b716dc8f4f2570df6895267307.jpg"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 WA Série3 25898"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/e27391f7a4fc920750918d558a88312e.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-exterior_5">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/e27391f7a4fc920750918d558a88312e.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/e27391f7a4fc920750918d558a88312e.jpg"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 WA Série3 25899"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/50f25b88a75bf6fd5253557edcb90b7f.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-exterior_6">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/50f25b88a75bf6fd5253557edcb90b7f.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/50f25b88a75bf6fd5253557edcb90b7f.jpg"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 WA Série3 25900"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/899fc37b6d47045ab1d1086096e69575.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-exterior_7">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/899fc37b6d47045ab1d1086096e69575.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/899fc37b6d47045ab1d1086096e69575.jpg"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 WA Série3 25901"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior portrait display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/f023528cd7fc43be31f81e489136dddd.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-exterior_8">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/f023528cd7fc43be31f81e489136dddd.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/f023528cd7fc43be31f81e489136dddd.jpg"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 WA Série3 25902"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/8fbe1ad848e97117ab39cfc55d1c6e22.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-exterior_9">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/8fbe1ad848e97117ab39cfc55d1c6e22.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/8fbe1ad848e97117ab39cfc55d1c6e22.jpg"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 WA Série3 25903"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/0d39a45a156fbbe63d250694e29344bc.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-exterior_10">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/0d39a45a156fbbe63d250694e29344bc.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/0d39a45a156fbbe63d250694e29344bc.jpg"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 WA Série3 25904"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/581b3cbfdde491453631a1ad61c026f3.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-exterior_11">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/581b3cbfdde491453631a1ad61c026f3.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/581b3cbfdde491453631a1ad61c026f3.jpg"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 WA Série3 25905"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/f5020dfccc457f9d90ab18573d3b34c5.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-exterior_12">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/f5020dfccc457f9d90ab18573d3b34c5.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/f5020dfccc457f9d90ab18573d3b34c5.jpg"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 WA Série3 25906"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/07b82245f64c454dfa399f948ae422d0.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-exterior_13">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/07b82245f64c454dfa399f948ae422d0.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/07b82245f64c454dfa399f948ae422d0.jpg"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 WA Série3 25907"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/cdf8887a9414ab957ba2cdebda71637a.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-exterior_14">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/cdf8887a9414ab957ba2cdebda71637a.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/cdf8887a9414ab957ba2cdebda71637a.jpg"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 WA Série3 25908"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/d31af40174a479ba791e87ae2cbd1b0d.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-exterior_15">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/d31af40174a479ba791e87ae2cbd1b0d.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/d31af40174a479ba791e87ae2cbd1b0d.jpg"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 WA Série3 23110"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/054bfadc55b32bf394765aa34db3c33e.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-exterior_16">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/054bfadc55b32bf394765aa34db3c33e.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/054bfadc55b32bf394765aa34db3c33e.jpg"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 WA Série3 23123"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/dded37a7e0d47eecc33c8369666a8bfe.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-exterior_17">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/dded37a7e0d47eecc33c8369666a8bfe.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/dded37a7e0d47eecc33c8369666a8bfe.jpg"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 WA Série3 23118"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/ac40e134aa397c00ccff98357198525b.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-exterior_18">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/ac40e134aa397c00ccff98357198525b.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/ac40e134aa397c00ccff98357198525b.jpg"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 WA Série3 23129"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/0542bbc71c860f7269c1358cdc96d099.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-exterior_19">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/0542bbc71c860f7269c1358cdc96d099.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/0542bbc71c860f7269c1358cdc96d099.jpg"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 CC Série3 23078"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/ba0308caf495b0899a7c51550d0d9e5c.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-exterior_20">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/ba0308caf495b0899a7c51550d0d9e5c.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/ba0308caf495b0899a7c51550d0d9e5c.jpg"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 WA Série3 23604"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/bdec0b38ea529ad50914d9d7e979964e.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-exterior_21">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/bdec0b38ea529ad50914d9d7e979964e.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/bdec0b38ea529ad50914d9d7e979964e.jpg"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 WA Série3 23603"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                    </div>

                                                                    <button class="js-square-more exterior"><i class="icon icon-plus"></i></button>
                                                            </div>
                        
                                                    <div id="js-collapse-gallery-interior" class="collapse">
                                <div class="gallery-interior">
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/a7639c7d562f3a3ea09f4c52517aa4d2.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-interior_1">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/a7639c7d562f3a3ea09f4c52517aa4d2.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/a7639c7d562f3a3ea09f4c52517aa4d2.jpg"
                                                     alt="base_alt Cap Camarat 7.5 WA Série3 25909"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/26330197f05b892a52aa18623cfece1e.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-interior_2">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/26330197f05b892a52aa18623cfece1e.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/26330197f05b892a52aa18623cfece1e.jpg"
                                                     alt="base_alt Cap Camarat 7.5 WA Série3 23138"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/db801ebdb15f0178b8a0e198b3f1f575.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-interior_3">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/db801ebdb15f0178b8a0e198b3f1f575.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/db801ebdb15f0178b8a0e198b3f1f575.jpg"
                                                     alt="base_alt Cap Camarat 7.5 WA Série3 23135"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/f0ddaf5ab85f7904771b2ea02785e6f3.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 WA"
                                               id="gallery-interior_4">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/f0ddaf5ab85f7904771b2ea02785e6f3.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/f0ddaf5ab85f7904771b2ea02785e6f3.jpg"
                                                     alt="base_alt Cap Camarat 7.5 WA Série3 23136"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 WA Série3</span>
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
                                    <div class="lazy" data-bg="https://app.jeanneau.com/uploads/boat/designer/646c8a162be1b837881548.jpg"></div>
                                </div>
                                <div>
                                    <div class="name">Michael Peters</div>
                                    <div class="baseline">Michael Peters Yacht Design</div>
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
                                            <a title="Cap Camarat 7.5 WA"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/9ab1f946ca1d0e4b243376efc9309dc9.png">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/9ab1f946ca1d0e4b243376efc9309dc9.png"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs Jeanneau Cap Camarat 7.5 WA Série3 23139"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                            <div class="slide">
                                            <a title="Cap Camarat 7.5 WA"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/2a9bd177878f809257807f6828ed74bc.png">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/2a9bd177878f809257807f6828ed74bc.png"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs Jeanneau Cap Camarat 7.5 WA Série3 23142"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                            <div class="slide">
                                            <a title="Cap Camarat 7.5 WA"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/dad30ba2a3e87d981a35828b1d9536d2.png">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/dad30ba2a3e87d981a35828b1d9536d2.png"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs Jeanneau Cap Camarat 7.5 WA Série3 23146"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                            <div class="slide">
                                            <a title="Cap Camarat 7.5 WA"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/6439c5a191d5d35094440c80edab3a88.png">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/6439c5a191d5d35094440c80edab3a88.png"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs Jeanneau Cap Camarat 7.5 WA Série3 23147"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                            <div class="slide">
                                            <a title="Cap Camarat 7.5 WA"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/ce05639cf2840f5f6e1c902336f90866.png">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/ce05639cf2840f5f6e1c902336f90866.png"
                                                     alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs Jeanneau Cap Camarat 7.5 WA Série3 23148"
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
                                    <span class="val">7.37 m / 24&#039;2&quot;</span>
                                </div>
                                                                                        <div class="value">
                                    <i class="icon icon-hull-length-powerboat"></i>
                                    <span class="title">Hull length</span>
                                    <span class="val">6.98 m / 22&#039;11&quot;</span>
                                </div>
                                                                                        <div class="value">
                                <i class="icon icon-hull-beam"></i>
                                <span class="title">Hull Beam</span>
                                <span class="val">2.51 m / 8&#039;3&quot;</span>
                                </div>                                                                                        <div class="value">
                                    <i class="icon icon-keel-draught"></i>
                                    <span class="title">
                                                                              Standard Draft
                                                                          </span>
                                    <span class="val">1 m / 3&#039;3&quot;</span>
                                </div>
                                                                                        <div class="value">
                                    <i class="icon icon-weight"></i>
                                    <span class="title">Weight</span>
                                    <span class="val">1554 kg / 3426 Lbs</span></div>
                                                                                                                                                                                                        <div class="value">
                                    <i class="icon icon-fuel-capacity"></i>
                                    <span class="title">Fuel capacity</span>
                                    <span class="val">330 l / 87 US gal</span>
                                </div>
                                                                                        <div class="value">
                                    <i class="icon icon-water-capacity"></i>
                                    <span class="title">Water capacity</span>
                                    <span class="val">80 l / 21 US gal</span>
                                </div>
                                                                                        <div class="value">
                                    <i class="icon icon-cabins"></i>
                                    <span class="title">Cabins</span>
                                    <span class="val">1</span>
                                </div>
                                                                                                                    <div class="value">
                                    <i class="icon icon-ce-category"></i>
                                    <span class="title">CE Category</span>
                                    <span class="val">C9
                                         / D10
                                        
                                        
                                    </span>
                                </div>
                                                    </div>
                        <div class="buttons">
                                                                <div class="dropdown inventory">
        <button class="btn btn-primary dropdown-toggle" type="button" id="inventory_title" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
            Inventaire <span class="icon icon-caret-down"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="inventory_title">
                                                            <li><a href="https://app.jeanneau.com/inventory/26430"
                       download="2022-0063_PRINT_INV_MOTEUR_2022_CAP_CAM_WA_FR_GB_09-22_BD.pdf"
                       target="_blank"
                       title="Inventory - Cap Camarat WA range - 2023 (Opens in a new window)"
                            
                            
                    ><em></em><span>Inventory - Cap Camarat WA range - 2023</span></a>
                </li>
                                                            <li><a href="https://app.jeanneau.com/inventory/31139"
                       download="2025-0068_PRINT_INV_MOTEUR_2025_CAP_CAM_WA_GB_07-25_V2.pdf"
                       target="_blank"
                       title="2026 Inventory - Cap Camarat 5.5 - 6.5 - 7.5 WA (Opens in a new window)"
                            
                            
                    ><em></em><span>2026 Inventory - Cap Camarat 5.5 - 6.5 - 7.5 WA</span></a>
                </li>
                    </ul>
    </div>
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
            <input type="hidden" id="model_contact__token" name="model_contact[_token]" value="9b44e35c7dc19a8b8.8NE2clfdWSRG_l8IkiKQeiaZrAiQKqH7vr58lXc0j3I.mYMCORCkPXESl2xioGXWAH7on1q9G-6K2o1I8C0ZyUeWvVsqMLdoXA2VMA" /></form>
            </div>
</div>            </section>
        
                <section class="other-models container-fluid">
                            <a id="lines" class="anchor"></a>
                <div class="lines">
                    <h3>explore the range</h3>
                    <div class="row">
                                                                                                                                        <div class="col-sm-6 col-lg-4 line">
                                                                                                                                    <a href="/boats/powerboat/7-cap-camarat-walk-around/652-cap-camarat-12-5wa">
                                    <div role="presentation" class="image">
                                        <img src="https://app.jeanneau.com/uploads/boat/shape/64f1afa002cc9951809555.png" alt="Cap Camarat 12.5WA │ Cap Camarat Walk Around of 12m │ Boat Moteurs Jeanneau" class="img-responsive">
                                    </div>
                                    <h4 class="name">Cap Camarat 12.5WA</h4>
                                                                            <div class="resume">
                                            <p>A new approach to the outboard powerboat</p>
                                        </div>
                                                                        <button class="btn btn-primary">See details</button>
                                </a>
                            </div>
                                                                                                                                        <div class="col-sm-6 col-lg-4 line">
                                                                                                                                    <a href="/boats/powerboat/7-cap-camarat-walk-around/655-cap-camarat-10-5wa">
                                    <div role="presentation" class="image">
                                        <img src="https://app.jeanneau.com/uploads/boat/shape/64f1af91265b4309220676.png" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs Jeanneau" class="img-responsive">
                                    </div>
                                    <h4 class="name">Cap Camarat 10.5WA</h4>
                                                                            <div class="resume">
                                            <p>The promise of lovely family getaways!</p>
                                        </div>
                                                                        <button class="btn btn-primary">See details</button>
                                </a>
                            </div>
                                                                                                                                                                                                    <div class="col-sm-6 hidden-sm hidden-md col-lg-4 line">
                                                                                                                                    <a href="/boats/powerboat/7-cap-camarat-walk-around/696-cap-camarat-9-0-wa">
                                    <div role="presentation" class="image">
                                        <img src="https://app.jeanneau.com/uploads/boat/shape/64f1af827286c259987541.png" alt="CAP CAMARAT 9.0 WA │ Cap Camarat Walk Around of 8m │ Boat Moteurs Jeanneau" class="img-responsive">
                                    </div>
                                    <h4 class="name">CAP CAMARAT 9.0 WA</h4>
                                                                        <button class="btn btn-primary">See details</button>
                                </a>
                            </div>
                                            </div>
                </div>
                    </section>
    </div>
</main>

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

<?php
get_footer();
?>