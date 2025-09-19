<?php
/**
 * Template Name: Cap Camarat 7.5  cc
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
                                                            <img src="https://app.jeanneau.com/uploads/media/image/exterior/b98fb9171e89234ec010443e9333808f.jpg" alt=" 25724"
                                     class="img-responsive ">
                                                    </div>
                                    </div>
                <div class="header-title">
                    <div class="header"></div>
                    <h1 class="baseline">Cap Camarat 7.5 CC</h1>
                                    </div>
            </div>
        
                <div class="boat-nav row">
            <div class="col-xs-6 col-sm-2 item-nav item-nav-blue boat-name">
                <div>Cap Camarat 7.5 CC</div>
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
                <a href="/boats/powerboat/5-cap-camarat-center-console" itemprop="item"><span itemprop="name">Cap Camarat Center Console</span></a>
                <meta itemprop="position" content="4" />
            </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="/boats/powerboat/5-cap-camarat-center-console/668-cap-camarat-7-5-cc" itemprop="item"><span itemprop="name">Cap Camarat 7.5 CC</span></a>
                <meta itemprop="position" content="5" />
            </li>
            </ul>
</div>
                <section class="container-fluid">
            <div class="boat-content row ">
                <div class="col-xs-12 col-sm-8">
                                            <a id="points" class="anchor"></a>
                        <div class="points">
                            <div class="baseline">Clever Design, Inside and Out</div>

                                                            <div class="boat-reviews">
                                                                                                                        <i class="icon icon-star-full"></i>
                                                                                                                                                                <i class="icon icon-star-full"></i>
                                                                                                                                                                <i class="icon icon-star-full"></i>
                                                                                                                                                                <i class="icon icon-star-empty"></i>
                                                                                                                                                                <i class="icon icon-star-empty"></i>
                                                                                                                <a href="https://feedback.jeanneau.com/cap-camarat-center-console/cap-camarat-75-cc-serie3?lang=en-GB" target="_blank"
                                       title="8 Customer reviews (Opens in a new window)">
                                        8 Customer reviews
                                    </a>
                                </div>
                            
                            <div class="content">
                                <p>Jeanneau has tapped all of its savoir-faire in ergonomic design to give the Cap Camarat 7.5 CC surprising versatility and spaciousness.</p><p>SEANAPPS Technology on board.&nbsp;To learn more, <a href="https://www.seanapps.app/en" target="_blank" rel="noopener noreferrer">click here</a>.</p>
                            </div>
                        </div>
                                    </div>
                <div class="col-xs-12 col-sm-4">
                                                                <div class="configuratorLink">
                            <a href="https://configurateur.jeanneau.com/en/configure/powerboat/5-cap-camarat-center-console/668-cap-camarat-7-5-cc" class="square" target="_blank">
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
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/d5f34dcc65e61bfb2421c536b51f3638.jpg')"
                 title="Cap Camarat 7.5 CC - 1001 Ways to Benefit from the Sea">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 content-block">
            <h3 class="white">1001 Ways to Benefit from the Sea</h3>
            <div class="text-content white"><p>The Cap Camarat 7.5 CC can accommodate up to eight people for outings, where all the on water activities are wide-open: fishing, water skiing, day trips, sunbathing, diving, swim-ming… While cruising, passengers can sit on the bench seating, forward of the helm station and facing the water, or choose the U-shaped cockpit for a cosier ride. Movement is fluid around the console between these two entertainment areas while cruising, but also at anchor, when the folding bench seating facilitates opens up the cockpit, giving access to the large storage lockers, and swim platforms.</p></div>
            
        </div>
        <div class="col-sm-6 image-block no-padding d-sm">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/d5f34dcc65e61bfb2421c536b51f3638.jpg')"
                 title="Cap Camarat 7.5 CC - 1001 Ways to Benefit from the Sea">
            </div>
        </div>
    </div>
                                    
                                                                
                                                                            <div class="block">
        <div class="col-xs-12 col-sm-6 image-block no-padding">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/3dfdcb4e3c31b3a7e0fdd6c23acd72fa.jpg')"
                 title="Cap Camarat 7.5 CC - Surprising Options">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 content-block even">
            <h3>Surprising Options</h3>
            <div class="text-content"><p>The aft cockpit can be equipped with an optional leaning post, which integrates an exterior galley with a grill and a refrigerator, or a large live well. To extend your outings, prepare and enjoy a meal on board. The optional fiberglass T-top, integrated into the design of the boat, provides full sun protection without hindering movement about the console.</p></div>
            
        </div>
    </div>
                                    
                                                                
                                                                        <div class="block">
        <div class="col-xs-12 image-block no-padding d-sm-none">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/824639d77471737905b5a3fe4d374779.jpg')"
                 title="Cap Camarat 7.5 CC - Spend a Night on Board, Wake Up on the Water">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 content-block">
            <h3 class="white">Spend a Night on Board, Wake Up on the Water</h3>
            <div class="text-content white"><p>This versatile boat, with its inviting design, is ideal for spending time with family, with friends, or as a couple for getaways. The double berth below is complete with an optional marine toilet, making overnights easy.</p></div>
            
        </div>
        <div class="col-sm-6 image-block no-padding d-sm">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/824639d77471737905b5a3fe4d374779.jpg')"
                 title="Cap Camarat 7.5 CC - Spend a Night on Board, Wake Up on the Water">
            </div>
        </div>
    </div>
                                                </section>
        
                
                <a id="videos" class="anchor"></a>
                    <section class="videos">
    <h3 class="sr-only">Videos</h3>
                                        <div class="video-first">
                                                
    <div class="iframe-container" data-reference="BVrxSIpgfLA" data-type="model-main-video" data-provider="YouTube">

        
            <iframe src=""
                    data-src="https://www.youtube.com/embed/BVrxSIpgfLA?vq=hd1080"
                    data-reference="BVrxSIpgfLA"
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
                            
    <div class="iframe-container" data-reference="oWP7_jnI5uw" data-type="model-other-video" data-provider="YouTube">

        
            <a href="https://www.youtube.com/watch?v=oWP7_jnI5uw"
               data-reference="oWP7_jnI5uw"
               class="js-additional-video">
                <img src="https://img.youtube.com/vi/oWP7_jnI5uw/0.jpg" alt="Thumbnail">
            </a>

            </div>

                    </div>
                                                                <div class="video">
                            
    <div class="iframe-container" data-reference="f4nICxjJ5SI" data-type="model-other-video" data-provider="YouTube">

        
            <a href="https://www.youtube.com/watch?v=f4nICxjJ5SI"
               data-reference="f4nICxjJ5SI"
               class="js-additional-video">
                <img src="https://img.youtube.com/vi/f4nICxjJ5SI/0.jpg" alt="Thumbnail">
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
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/d8a7db232555c9b04c8a7f5fe2eef93d.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 CC"
                                               id="gallery-exterior_1">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/d8a7db232555c9b04c8a7f5fe2eef93d.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/d8a7db232555c9b04c8a7f5fe2eef93d.jpg"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 CC Série3 25892"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/711983a0cdff27b81def6b20b6337b27.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 CC"
                                               id="gallery-exterior_2">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/711983a0cdff27b81def6b20b6337b27.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/711983a0cdff27b81def6b20b6337b27.jpg"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 CC Série3 25893"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/225bbcea767ffab58077cb2c2cd70465.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 CC"
                                               id="gallery-exterior_3">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/225bbcea767ffab58077cb2c2cd70465.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/225bbcea767ffab58077cb2c2cd70465.jpg"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 CC Série3 25894"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/dc61196238c11268096637fdbfeadea0.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 CC"
                                               id="gallery-exterior_4">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/dc61196238c11268096637fdbfeadea0.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/dc61196238c11268096637fdbfeadea0.jpg"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 CC Série3 24806"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/30541d7985ff300635b1473d2935535f.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 CC"
                                               id="gallery-exterior_5">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/30541d7985ff300635b1473d2935535f.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/30541d7985ff300635b1473d2935535f.jpg"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 CC Série3 24803"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/ff8994c39fc4e74bec54ce7590e81984.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 CC"
                                               id="gallery-exterior_6">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/ff8994c39fc4e74bec54ce7590e81984.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/ff8994c39fc4e74bec54ce7590e81984.jpg"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 CC Série3 24808"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/2702e91e77a81511a0b638bce2ca313c.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 CC"
                                               id="gallery-exterior_7">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/2702e91e77a81511a0b638bce2ca313c.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/2702e91e77a81511a0b638bce2ca313c.jpg"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 CC Série3 24832"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/60d2a8f81ed13c5d94f3acad706d32a1.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 CC"
                                               id="gallery-exterior_8">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/60d2a8f81ed13c5d94f3acad706d32a1.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/60d2a8f81ed13c5d94f3acad706d32a1.jpg"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 CC Série3 24816"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/a652c8d011ac33f635a1db9fffdde00b.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 CC"
                                               id="gallery-exterior_9">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/a652c8d011ac33f635a1db9fffdde00b.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/a652c8d011ac33f635a1db9fffdde00b.jpg"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 CC Série3 24809"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/3bb97786fe408268b2ccc9dfe7c6cc83.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 CC"
                                               id="gallery-exterior_10">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/3bb97786fe408268b2ccc9dfe7c6cc83.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/3bb97786fe408268b2ccc9dfe7c6cc83.jpg"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 CC Série3 24820"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/1772353795c6e8776b4de3e4cf5b36f6.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 CC"
                                               id="gallery-exterior_11">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/1772353795c6e8776b4de3e4cf5b36f6.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/1772353795c6e8776b4de3e4cf5b36f6.jpg"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 CC Série3 24813"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/e5570c6d331b58e823ed376c83f6ee42.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 CC"
                                               id="gallery-exterior_12">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/e5570c6d331b58e823ed376c83f6ee42.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/e5570c6d331b58e823ed376c83f6ee42.jpg"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 CC Série3 24821"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/dc9cae5506c52dd526b9ce28579bb711.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 CC"
                                               id="gallery-exterior_13">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/dc9cae5506c52dd526b9ce28579bb711.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/dc9cae5506c52dd526b9ce28579bb711.jpg"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 CC Série3 24833"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/358c241fd4e8ba736a2243ec12b79821.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 CC"
                                               id="gallery-exterior_14">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/358c241fd4e8ba736a2243ec12b79821.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/358c241fd4e8ba736a2243ec12b79821.jpg"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 CC Série3 24837"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior portrait hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/5f789fb21f722216d2290c46ca223300.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 CC"
                                               id="gallery-exterior_15">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/5f789fb21f722216d2290c46ca223300.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/5f789fb21f722216d2290c46ca223300.jpg"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 CC Série3 24835"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/3e2608d95da562efa7d7c225ea7e005a.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 CC"
                                               id="gallery-exterior_16">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/3e2608d95da562efa7d7c225ea7e005a.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/3e2608d95da562efa7d7c225ea7e005a.jpg"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 CC Série3 24842"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/019ca46f8edb1f724ceb8c6cb3f95559.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 CC"
                                               id="gallery-exterior_17">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/019ca46f8edb1f724ceb8c6cb3f95559.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/019ca46f8edb1f724ceb8c6cb3f95559.jpg"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 CC Série3 24840"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/687e41a332b6f81d5a2fc1bd355590c8.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 CC"
                                               id="gallery-exterior_18">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/687e41a332b6f81d5a2fc1bd355590c8.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/687e41a332b6f81d5a2fc1bd355590c8.jpg"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 CC Série3 24844"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/23aa8c594b4e951c105c913b2c5ed10f.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 CC"
                                               id="gallery-exterior_19">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/23aa8c594b4e951c105c913b2c5ed10f.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/23aa8c594b4e951c105c913b2c5ed10f.jpg"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 7.5 CC Série3 24845"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                    </div>

                                                                    <button class="js-square-more exterior"><i class="icon icon-plus"></i></button>
                                                            </div>
                        
                                                    <div id="js-collapse-gallery-interior" class="collapse">
                                <div class="gallery-interior">
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/7acf2af7a27ed02bcaa854cd6ccb07fd.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 CC"
                                               id="gallery-interior_1">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/7acf2af7a27ed02bcaa854cd6ccb07fd.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/7acf2af7a27ed02bcaa854cd6ccb07fd.jpg"
                                                     alt="base_alt Cap Camarat 7.5 CC Série3 24188"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/047e3b353101ea88b632b3375532fcf9.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 CC"
                                               id="gallery-interior_2">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/047e3b353101ea88b632b3375532fcf9.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/047e3b353101ea88b632b3375532fcf9.jpg"
                                                     alt="base_alt Cap Camarat 7.5 CC Série3 24189"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/bf598f2a605eeb753bed824e38864391.jpg" class="gallery-show"
                                               title="Cap Camarat 7.5 CC"
                                               id="gallery-interior_3">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/bf598f2a605eeb753bed824e38864391.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/bf598f2a605eeb753bed824e38864391.jpg"
                                                     alt="base_alt Cap Camarat 7.5 CC Série3 23092"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 7.5 CC Série3</span>
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
                                            <a title="Cap Camarat 7.5 CC"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/2262ee2cdcbb1ceaf4386097bc245331.png">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/2262ee2cdcbb1ceaf4386097bc245331.png"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs Jeanneau Cap Camarat 7.5 CC Série3 23095"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                            <div class="slide">
                                            <a title="Cap Camarat 7.5 CC"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/61abd03de918b986037dc39319e971c0.png">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/61abd03de918b986037dc39319e971c0.png"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs Jeanneau Cap Camarat 7.5 CC Série3 23098"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                            <div class="slide">
                                            <a title="Cap Camarat 7.5 CC"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/3fae4125b4c26e13f1187f21bb84d410.png">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/3fae4125b4c26e13f1187f21bb84d410.png"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs Jeanneau Cap Camarat 7.5 CC Série3 23100"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                            <div class="slide">
                                            <a title="Cap Camarat 7.5 CC"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/50ef25d39878090ce7e2f93867e7dc42.png">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/50ef25d39878090ce7e2f93867e7dc42.png"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs Jeanneau Cap Camarat 7.5 CC Série3 23103"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                            <div class="slide">
                                            <a title="Cap Camarat 7.5 CC"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/b54986f75c0fdecd292c20acf349a95d.png">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/b54986f75c0fdecd292c20acf349a95d.png"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs Jeanneau Cap Camarat 7.5 CC Série3 23106"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                            <div class="slide">
                                            <a title="Cap Camarat 7.5 CC"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/a20265d4d7f5d71907c05aa7301690ea.png">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/a20265d4d7f5d71907c05aa7301690ea.png"
                                                     alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs Jeanneau Cap Camarat 7.5 CC Série3 23105"
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
                                    <span class="val">1592 kg / 3510 Lbs</span></div>
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
                                                                        <a class="btn btn-primary" href="https://app.jeanneau.com/inventory/31141" target="_blank"
       title="Inventaire (Opens in a new window)"
       download="2025-0068_PRINT_INV_MOTEUR_2025_CAP_CAM_CC_GB_07-25_V2.pdf"
            
            
    >Inventaire</a>
                                                                                        <a href="/comparator/powerboat"
                                   class="btn btn-primary">Compare</a>
                                                                                </div>
                    </div>
                </div>
            </section>
        
                          
        
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
                                                                                                                                    <a href="/boats/powerboat/5-cap-camarat-center-console/681-cap-camarat-10-5-cc">
                                    <div role="presentation" class="image">
                                        <img src="https://app.jeanneau.com/uploads/boat/shape/62bd5f3f6ac81712196835.png" alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs Jeanneau" class="img-responsive">
                                    </div>
                                    <h4 class="name">Cap Camarat 10.5 CC</h4>
                                                                            <div class="resume">
                                            <p>Fun for All!</p>
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


<script src="js/runtime.32cc791b.js" defer></script>
<script src="js/691.570663c4.js" defer></script>
<script src="js/268.9a434bd2.js" defer></script>
<script src="js/732.a73f4830.js" defer></script>
<script src="js/app.bab1e4dd.js" defer></script>
</body>
</html>



<?php get_footer(); ?>
