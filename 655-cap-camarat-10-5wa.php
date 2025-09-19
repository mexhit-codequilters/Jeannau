<?php
/**
 * Template Name: Cap Camarat 10.5 Wa
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
                            <img src="https://app.jeanneau.com/uploads/media/image/interior/5a4e50967436201b4acf2d7ec2555416.jpg" alt=" 25941" class="img-responsive ">
                        </div>
                        <div class="slide">
                            <img src="https://app.jeanneau.com/uploads/media/image/interior/5fe1ae52cc7a293b80f403477ce193bf.jpg" alt=" 25942" class="img-responsive ">
                        </div>
                    </div>
                    <div class="header-title">
                        <div class="header"></div>
                        <h1 class="baseline">Cap Camarat 10.5WA</h1>
                    </div>
                </div>
                <div class="boat-nav row">
                    <div class="col-xs-6 col-sm-2 item-nav item-nav-blue boat-name">
                        <div>Cap Camarat 10.5WA</div>
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
                            <a href="/boats/powerboat/39-cap-camarat" itemprop="item">
                                <span itemprop="name">Cap Camarat</span>
                            </a>
                            <meta itemprop="position" content="3"/>
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a href="/boats/powerboat/7-cap-camarat-walk-around" itemprop="item">
                                <span itemprop="name">Cap Camarat Walk Around</span>
                            </a>
                            <meta itemprop="position" content="4"/>
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a href="/boats/powerboat/7-cap-camarat-walk-around/655-cap-camarat-10-5wa" itemprop="item">
                                <span itemprop="name">Cap Camarat 10.5WA</span>
                            </a>
                            <meta itemprop="position" content="5"/>
                        </li>
                    </ul>
                </div>
                <section class="container-fluid">
                    <div class="boat-content row ">
                        <div class="col-xs-12 col-sm-8">
                            <a id="points" class="anchor"></a>
                            <div class="points">
                                <div class="baseline">Sporty Cruising with Family and Friends</div>
                                <div class="boat-reviews">
                                    <i class="icon icon-star-full"></i>
                                    <i class="icon icon-star-full"></i>
                                    <i class="icon icon-star-full"></i>
                                    <i class="icon icon-star-full"></i>
                                    <i class="icon icon-star-empty"></i>
                                    <a href="https://feedback.jeanneau.com/cap-camarat-walk-around/cap-camarat-105-wa-serie2?lang=en-GB" target="_blank" title="20 Customer reviews (Opens in a new window)">20 Customer reviews
                                    </a>
                                </div>
                                <div class="content">
                                    <p>In day boat mode, whether out on the water with friends or cruising with family, Cap Camarat 10.5 WA has but one goal: &nbsp;to enable you to take full advantage of the sun and the sea.</p>
                                    <p>
                                        SEANAPPS Technology on board.&nbsp;To learn more, 
                                        <a target="_blank" rel="noopener noreferrer" href="https://www.seanapps.app/en">
                                            <u>click here</u>
                                        </a>
                                        .
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="configuratorLink">
                                <a href="https://configurateur.jeanneau.com/en/configure/powerboat/7-cap-camarat-walk-around/655-cap-camarat-10-5wa" class="square" target="_blank">
                                    <i class="icon icon-commander-brochure"></i>
                                    Configure
                            
                                </a>
                            </div>
                            <div class="documents">
                                <a href="https://app.jeanneau.com/viewer/brochure/31243" target="_blank" title="View the Brochure (Opens in a new window)" download="32_p._Cap_Camarat_2026_PDF_BD.pdf" class="square  a_class" id="a_id">
                                    <i class="icon icon-visualiser-brochure"></i>
                                    View the Brochure
                                </a>
                                <a class="square" href="/contact?brochures%5B%5D=7#brochure-form">
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
                            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/interior/0d210590ce0e1105c2fd163f212d5834.jpg')" title="Cap Camarat 10.5WA - A NEW IDENTITY, WITH THE “INTEGRAL WINDSHIELD” VERSION"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 content-block">
                            <h3 class="white">A NEW IDENTITY, WITH THE “INTEGRAL WINDSHIELD” VERSION</h3>
                            <div class="text-content white">
                                <p>The Cap Camarat 10.5 WA is now available in a version with a integral windshield. This tall wraparound windscreen clearly defines the area around the helm station, sheltered from the elements. Well protected, the pilot and copilots can still enjoy the sea breeze via a ventilation system located at the top of the central panel. Additional comfort provided by the full windscreen inspires greater confidence when facing the elements, for peace of mind while taking full advantage of the boat’s cruising performance. With this new version, the overall style of the boat has been redesigned for a more assertive, sportier look and feel.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 image-block no-padding d-sm">
                            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/interior/0d210590ce0e1105c2fd163f212d5834.jpg')" title="Cap Camarat 10.5WA - A NEW IDENTITY, WITH THE “INTEGRAL WINDSHIELD” VERSION"></div>
                        </div>
                    </div>
                    <div class="block">
                        <div class="col-xs-12 col-sm-6 image-block no-padding">
                            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/8c983373fc9befdbae19a95eb98b4bd8.jpg')" title="Cap Camarat 10.5WA - Life on Board Made Even Easier"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 content-block even">
                            <h3>Life on Board Made Even Easier</h3>
                            <div class="text-content">
                                <p>The Cap Camarat 10.5 WA invites you to extend your stopovers on the water in the greatest comfort. Perfectly integrated into the profile of the boat, the optional T-top enables you, with the addition of a sun awning aft, to dine in the shade. The outdoor galley, backing the seats of the helm station, includes a fridge, electric grill, a gas burner, storage, or even a live well to hold the catch of the day. Down below, optionally equipped with air conditions, the spacious and comfortable interior also features a second separate cabin aft. Forward, the traditional breakfast nook converts into a V-berth with separation curtain. This day boat has everything to give you a taste of cruising and nights at sea.</p>
                            </div>
                        </div>
                    </div>
                    <div class="block">
                        <div class="col-xs-12 image-block no-padding d-sm-none">
                            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/ae7f70eb1f963dd2821a7383eba26634.jpg')" title="Cap Camarat 10.5WA - Sporty Cruising and Abundant Time Out on the Water"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 content-block">
                            <h3 class="white">Sporty Cruising and Abundant Time Out on the Water</h3>
                            <div class="text-content white">
                                <p>With the Cap Camarat 10.5 WA, wait no longer to explore small creeks or to make long-er crossings. With a cruising speed of 20 knots, and peak speeds at over 40, the V-shaped hull designed by Michael Peters brings more strength and rigidity to this sport boat. Once at an-chor, there is something for everyone: a forward cockpit with three integrated chaise lounges perfect for relaxing, an opening terrace on port to create an additional swim platform equipped with a swim ladder, a convertible aft cockpit with removable table, all for you to choose in func-tion with your plans.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 image-block no-padding d-sm">
                            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/ae7f70eb1f963dd2821a7383eba26634.jpg')" title="Cap Camarat 10.5WA - Sporty Cruising and Abundant Time Out on the Water"></div>
                        </div>
                    </div>
                </section>
                <a id="videos" class="anchor"></a>
                <section class="videos">
                    <h3 class="sr-only">Videos</h3>
                    <div class="video-first">
                        <div class="iframe-container" data-reference="QD8BqUoW2zs" data-type="model-main-video" data-provider="YouTube">
                            <iframe src="" data-src="https://www.youtube.com/embed/QD8BqUoW2zs?vq=hd1080" data-reference="QD8BqUoW2zs" class="optanon-category-C0003" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="other-video">
                        <div class="video">
                            <div class="iframe-container" data-reference="xpkqvcTXTvI" data-type="model-other-video" data-provider="YouTube">
                                <a href="https://www.youtube.com/watch?v=xpkqvcTXTvI" data-reference="xpkqvcTXTvI" class="js-additional-video">
                                    <img src="https://img.youtube.com/vi/xpkqvcTXTvI/0.jpg" alt="Thumbnail">
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <a id="panorama" class="anchor"></a>
                <section class="panorama container-fluid">
                    <h3>Visit 360°</h3>
                    <div class="panorama-body">
                        <object data="https://app.jeanneau.com/uploads/panorama/655-cap-camarat-10-5-wa-serie2/index.html" type="text/html"></object>
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
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/79571b59b99dcd8aa3b542a6d3efbb0a.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_1">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/79571b59b99dcd8aa3b542a6d3efbb0a.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/79571b59b99dcd8aa3b542a6d3efbb0a.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCap Camarat 10.5 WA NEW VERSION 30803"/>
                                            <div class="hover-image">
                                                <span>Cap Camarat 10.5 WA NEW VERSION</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/26a4751153a68d832bc59863946b36aa.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_2">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/26a4751153a68d832bc59863946b36aa.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/26a4751153a68d832bc59863946b36aa.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21999"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/593a9c68599275692088fe7cae87576d.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_3">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/593a9c68599275692088fe7cae87576d.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/593a9c68599275692088fe7cae87576d.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs Jeanneau3/4 back 22008"/>
                                            <div class="hover-image">
                                                <span>3/4 back</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/0ec2b5ad9096e385ed0acc7290ec655a.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_4">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/0ec2b5ad9096e385ed0acc7290ec655a.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/0ec2b5ad9096e385ed0acc7290ec655a.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 22001"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/77a7f030f24979cd72a9e59c23fe31e5.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_5">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/77a7f030f24979cd72a9e59c23fe31e5.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/77a7f030f24979cd72a9e59c23fe31e5.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 22006"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/bd2940953235742271662442cd132338.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_6">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/bd2940953235742271662442cd132338.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/bd2940953235742271662442cd132338.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 22002"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior portrait display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/a015e72327955453d5743e76852fc4ec.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_7">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/a015e72327955453d5743e76852fc4ec.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/a015e72327955453d5743e76852fc4ec.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 22004"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/35d1d5b2a920cda4a222e50835aea4cd.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_8">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/35d1d5b2a920cda4a222e50835aea4cd.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/35d1d5b2a920cda4a222e50835aea4cd.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21998"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/c9f3e846400b876b2520301f1ba2d173.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_9">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/c9f3e846400b876b2520301f1ba2d173.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/c9f3e846400b876b2520301f1ba2d173.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 22005"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/8c6d6e02e7343ca0a2d242c7207016cc.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_10">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/8c6d6e02e7343ca0a2d242c7207016cc.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/8c6d6e02e7343ca0a2d242c7207016cc.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 22000"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/511724270f0cbb55154c46299a062f74.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_11">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/511724270f0cbb55154c46299a062f74.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/511724270f0cbb55154c46299a062f74.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs Jeanneau3/4 back 22009"/>
                                            <div class="hover-image">
                                                <span>3/4 back</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/d694dc6ae0dc86e77d509d2379f30ffa.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_12">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/d694dc6ae0dc86e77d509d2379f30ffa.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/d694dc6ae0dc86e77d509d2379f30ffa.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21970"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/ca4f2b262a9e1ba9baf1113bbbba6f79.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_13">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/ca4f2b262a9e1ba9baf1113bbbba6f79.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/ca4f2b262a9e1ba9baf1113bbbba6f79.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21973"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior portrait hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/ff993be1cd8797fc757234b166c55fd4.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_14">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/ff993be1cd8797fc757234b166c55fd4.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/ff993be1cd8797fc757234b166c55fd4.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21974"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/d0f4069e1277de28ee5bac19773714b0.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_15">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/d0f4069e1277de28ee5bac19773714b0.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/d0f4069e1277de28ee5bac19773714b0.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21976"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/8c983373fc9befdbae19a95eb98b4bd8.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_16">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/8c983373fc9befdbae19a95eb98b4bd8.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/8c983373fc9befdbae19a95eb98b4bd8.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21975"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/324011c95746a37555bec85fb66bbea6.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_17">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/324011c95746a37555bec85fb66bbea6.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/324011c95746a37555bec85fb66bbea6.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21977"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/561cc3e0f1a6ed737a2b04a5822c21d2.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_18">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/561cc3e0f1a6ed737a2b04a5822c21d2.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/561cc3e0f1a6ed737a2b04a5822c21d2.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21979"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/09be0bea4de50bdc9a2fda1a02fe0e0d.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_19">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/09be0bea4de50bdc9a2fda1a02fe0e0d.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/09be0bea4de50bdc9a2fda1a02fe0e0d.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21980"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/fc5dca038dd0f21f09989f8f9697ae40.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_20">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/fc5dca038dd0f21f09989f8f9697ae40.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/fc5dca038dd0f21f09989f8f9697ae40.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21981"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/6ef1b8aae7751623e07599860ae5c30c.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_21">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/6ef1b8aae7751623e07599860ae5c30c.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/6ef1b8aae7751623e07599860ae5c30c.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21985"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior portrait hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/81572e73b3ebbeddf57be26096ca43db.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_22">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/81572e73b3ebbeddf57be26096ca43db.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/81572e73b3ebbeddf57be26096ca43db.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21987"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/01454dc54cb16a8b8e73c24bbc37bbdb.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_23">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/01454dc54cb16a8b8e73c24bbc37bbdb.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/01454dc54cb16a8b8e73c24bbc37bbdb.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21986"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/a89bb6927a34ebd3e06facb23fef223c.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_24">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/a89bb6927a34ebd3e06facb23fef223c.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/a89bb6927a34ebd3e06facb23fef223c.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21990"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/561e3ff852400889eafdbcd9e3fa372e.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_25">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/561e3ff852400889eafdbcd9e3fa372e.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/561e3ff852400889eafdbcd9e3fa372e.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21992"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/5684ca8f906e8acb5f1bbb74b5271b14.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_26">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/5684ca8f906e8acb5f1bbb74b5271b14.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/5684ca8f906e8acb5f1bbb74b5271b14.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21993"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/aafdec0249de8e42fe3ed57eac620ebd.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_27">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/aafdec0249de8e42fe3ed57eac620ebd.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/aafdec0249de8e42fe3ed57eac620ebd.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21994"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/fc4ab05dee3f83419569ec2a018f31ec.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_28">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/fc4ab05dee3f83419569ec2a018f31ec.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/fc4ab05dee3f83419569ec2a018f31ec.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21950"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/d4e0266134d5dfa7c6438356040d2bdd.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_29">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/d4e0266134d5dfa7c6438356040d2bdd.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/d4e0266134d5dfa7c6438356040d2bdd.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21951"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/734a14e4b89950dac75917399cb4d273.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_30">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/734a14e4b89950dac75917399cb4d273.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/734a14e4b89950dac75917399cb4d273.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21953"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/895dbf9101100774d65974bec1673b15.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_31">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/895dbf9101100774d65974bec1673b15.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/895dbf9101100774d65974bec1673b15.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21954"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/c8720740ffff6bf87986c3bb225f46e5.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_32">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/c8720740ffff6bf87986c3bb225f46e5.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/c8720740ffff6bf87986c3bb225f46e5.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21955"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/936fd7595846d587d29ee10bca42b39d.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_33">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/936fd7595846d587d29ee10bca42b39d.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/936fd7595846d587d29ee10bca42b39d.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21960"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/15ae6d09eda90f01f9918f58150a6531.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_34">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/15ae6d09eda90f01f9918f58150a6531.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/15ae6d09eda90f01f9918f58150a6531.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21959"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/d942c70706e4eb8b147e02ca241ff6fd.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_35">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/d942c70706e4eb8b147e02ca241ff6fd.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/d942c70706e4eb8b147e02ca241ff6fd.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21961"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/ffaa8ceeeecc8dbf8b4c164f096c83e1.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_36">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/ffaa8ceeeecc8dbf8b4c164f096c83e1.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/ffaa8ceeeecc8dbf8b4c164f096c83e1.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21963"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/e8c9ada39306678e7d6ada369b0985a0.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_37">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/e8c9ada39306678e7d6ada369b0985a0.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/e8c9ada39306678e7d6ada369b0985a0.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21962"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/93eb08a16f59cc919475276b92d757bd.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_38">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/93eb08a16f59cc919475276b92d757bd.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/93eb08a16f59cc919475276b92d757bd.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21964"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/cb52da5570dfa55c9920353cd3b12f0a.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_39">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/cb52da5570dfa55c9920353cd3b12f0a.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/cb52da5570dfa55c9920353cd3b12f0a.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21966"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/43b78507a1856da7e00113b03b3321e9.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-exterior_40">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/43b78507a1856da7e00113b03b3321e9.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/43b78507a1856da7e00113b03b3321e9.jpg" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs JeanneauCC10.5-Serie2 21968"/>
                                            <div class="hover-image">
                                                <span>CC10.5-Serie2</span>
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
                                    <div class="gallery_item interior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/204873024e5416b629e39eda02ee5b98.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-interior_1">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/204873024e5416b629e39eda02ee5b98.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/204873024e5416b629e39eda02ee5b98.jpg" alt="base_alt Cap Camarat 10.5 WA NEW VERSION 30625"/>
                                            <div class="hover-image">
                                                <span>Cap Camarat 10.5 WA NEW VERSION</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/e6f530d2199373362177715c101a6048.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-interior_2">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/e6f530d2199373362177715c101a6048.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/e6f530d2199373362177715c101a6048.jpg" alt="base_alt Cap Camarat 10.5 WA NEW VERSION 30626"/>
                                            <div class="hover-image">
                                                <span>Cap Camarat 10.5 WA NEW VERSION</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/a180230342731de252d40eef69e08b81.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-interior_3">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/a180230342731de252d40eef69e08b81.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/a180230342731de252d40eef69e08b81.jpg" alt="base_alt Cap Camarat 10.5 WA NEW VERSION 30627"/>
                                            <div class="hover-image">
                                                <span>Cap Camarat 10.5 WA NEW VERSION</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior portrait display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/a1295b2cd2011e7ae3e37d2506fb99d8.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-interior_4">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/a1295b2cd2011e7ae3e37d2506fb99d8.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/a1295b2cd2011e7ae3e37d2506fb99d8.jpg" alt="base_alt Cap Camarat 10.5 WA NEW VERSION 30628"/>
                                            <div class="hover-image">
                                                <span>Cap Camarat 10.5 WA NEW VERSION</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior portrait display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/8eedd0de904ccd7fcfa027bb76828e5f.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-interior_5">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/8eedd0de904ccd7fcfa027bb76828e5f.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/8eedd0de904ccd7fcfa027bb76828e5f.jpg" alt="base_alt Cap Camarat 10.5 WA NEW VERSION 30629"/>
                                            <div class="hover-image">
                                                <span>Cap Camarat 10.5 WA NEW VERSION</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/9d1544b234567df5c51e5a79e90cd858.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-interior_6">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/9d1544b234567df5c51e5a79e90cd858.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/9d1544b234567df5c51e5a79e90cd858.jpg" alt="base_alt Cap Camarat 10.5 WA NEW VERSION 30630"/>
                                            <div class="hover-image">
                                                <span>Cap Camarat 10.5 WA NEW VERSION</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior portrait display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/e12bb4be4a5234772fb4142aa9268c20.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-interior_7">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/e12bb4be4a5234772fb4142aa9268c20.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/e12bb4be4a5234772fb4142aa9268c20.jpg" alt="base_alt Cap Camarat 10.5 WA NEW VERSION 30631"/>
                                            <div class="hover-image">
                                                <span>Cap Camarat 10.5 WA NEW VERSION</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior portrait display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/32da77a202c6d07ccf9a7c8fe46b54f6.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-interior_8">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/32da77a202c6d07ccf9a7c8fe46b54f6.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/32da77a202c6d07ccf9a7c8fe46b54f6.jpg" alt="base_alt Cap Camarat 10.5 WA NEW VERSION 30632"/>
                                            <div class="hover-image">
                                                <span>Cap Camarat 10.5 WA NEW VERSION</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/52c9b091a2391b493f2936d352ef505f.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-interior_9">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/52c9b091a2391b493f2936d352ef505f.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/52c9b091a2391b493f2936d352ef505f.jpg" alt="base_alt Cap Camarat 10.5 WA Série2 22107"/>
                                            <div class="hover-image">
                                                <span>Cap Camarat 10.5 WA Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/76a6d17b5a97358ba0bc80d6fbd5e2b7.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-interior_10">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/76a6d17b5a97358ba0bc80d6fbd5e2b7.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/76a6d17b5a97358ba0bc80d6fbd5e2b7.jpg" alt="base_alt  22220"/>
                                            <div class="hover-image">
                                                <span></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior portrait display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/178cd2e7ab24f55f1df763831eb52501.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-interior_11">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/178cd2e7ab24f55f1df763831eb52501.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/178cd2e7ab24f55f1df763831eb52501.jpg" alt="base_alt  22219"/>
                                            <div class="hover-image">
                                                <span></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/78971e108444ad9b7783c316572e1413.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-interior_12">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/78971e108444ad9b7783c316572e1413.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/78971e108444ad9b7783c316572e1413.jpg" alt="base_alt  22218"/>
                                            <div class="hover-image">
                                                <span></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/175031384d8b549b734eb46af72d8ce4.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-interior_13">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/175031384d8b549b734eb46af72d8ce4.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/175031384d8b549b734eb46af72d8ce4.jpg" alt="base_alt  22216"/>
                                            <div class="hover-image">
                                                <span></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/0d9e1b0ce147881dea87f6a23f9d805d.jpg" class="gallery-show" title="Cap Camarat 10.5WA" id="gallery-interior_14">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/0d9e1b0ce147881dea87f6a23f9d805d.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/0d9e1b0ce147881dea87f6a23f9d805d.jpg" alt="base_alt  22217"/>
                                            <div class="hover-image">
                                                <span></span>
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
                        <a class="designer" href="/jeanneau/designers/21-patrice-sarrazin">
                            <div class="image">
                                <div class="lazy" data-bg="https://app.jeanneau.com/uploads/boat/designer/5773804e42f84.jpg"></div>
                            </div>
                            <div>
                                <div class="name">Patrice Sarrazin</div>
                                <div class="baseline">Sarrazin Design</div>
                            </div>
                        </a>
                        <a class="designer" href="/jeanneau/designers">
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
                            <h3>Layouts &amp;Specs</h3>
                            <div class="photos">
                                <div id="js-slider-specifications">
                                    <div class="slide">
                                        <a title="Cap Camarat 10.5WA" href="https://app.jeanneau.com/uploads/media/image/layout/hd/dbf34ada3f716d5e812ca5325c66e143.png">
                                            <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/dbf34ada3f716d5e812ca5325c66e143.png" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs Jeanneau Cap Camarat 10.5 WA Série2 20857" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="slide">
                                        <a title="Cap Camarat 10.5WA" href="https://app.jeanneau.com/uploads/media/image/layout/hd/cb2b2f79c7036b99dd3b7e1bf38fedaa.png">
                                            <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/cb2b2f79c7036b99dd3b7e1bf38fedaa.png" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs Jeanneau Cap Camarat 10.5 WA Série2 20856" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="slide">
                                        <a title="Cap Camarat 10.5WA" href="https://app.jeanneau.com/uploads/media/image/layout/hd/1ce1fd1956b76cb059ebf450cb83ae02.png">
                                            <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/1ce1fd1956b76cb059ebf450cb83ae02.png" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs Jeanneau Cap Camarat 10.5 WA NEW VERSION 29960" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="slide">
                                        <a title="Cap Camarat 10.5WA" href="https://app.jeanneau.com/uploads/media/image/layout/hd/c17f45aee6c601b05a35dbe51dce2293.png">
                                            <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/c17f45aee6c601b05a35dbe51dce2293.png" alt="Cap Camarat 10.5WA │ Cap Camarat Walk Around of 10m │ Boat Moteurs Jeanneau Cap Camarat 10.5 WA Série2 20859" class="img-responsive">
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
                                    <span class="val">9.95 m / 32 &#039;8 &quot;</span>
                                </div>
                                <div class="value">
                                    <i class="icon icon-hull-length-powerboat"></i>
                                    <span class="title">Hull length</span>
                                    <span class="val">9.32 m / 30 &#039;7 &quot;</span>
                                </div>
                                <div class="value">
                                    <i class="icon icon-keel-draught"></i>
                                    <span class="title">Standard Draft
                                                                          </span>
                                    <span class="val">0.73 m / 2 &#039;5 &quot;</span>
                                </div>
                                <div class="value">
                                    <i class="icon icon-weight"></i>
                                    <span class="title">Weight</span>
                                    <span class="val">4280 kg / 9436 Lbs</span>
                                </div>
                                <div class="value">
                                    <i class="icon icon-fuel-capacity"></i>
                                    <span class="title">Fuel capacity</span>
                                    <span class="val">2 x 400 l / 2 x 106 US gal</span>
                                </div>
                                <div class="value">
                                    <i class="icon icon-water-capacity"></i>
                                    <span class="title">Water capacity</span>
                                    <span class="val">160 l / 42 US gal</span>
                                </div>
                                <div class="value">
                                    <i class="icon icon-engines"></i>
                                    <span class="title">Available Engines</span>
                                    <span class="val">2x313 Kw - in progress</span>
                                </div>
                                <div class="value">
                                    <i class="icon icon-ce-category"></i>
                                    <span class="title">CE Category</span>
                                    <span class="val">B8
                                         / C10
                                        
                                        
                                    </span>
                                </div>
                            </div>
                            <div class="buttons">
                                <a class="btn btn-primary" href="https://app.jeanneau.com/inventory/31146" target="_blank" title="Inventaire (Opens in a new window)" download="2025-0068_PRINT_INV_MOTEUR_2025_CAP_CAM_10.5_WA_GB_07-25_v2.pdf">Inventaire</a>
                                <a href="/comparator/powerboat" class="btn btn-primary">Compare</a>
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
                                <a href="/boats/powerboat/7-cap-camarat-walk-around/669-cap-camarat-7-5-wa">
                                    <div role="presentation" class="image">
                                        <img src="https://app.jeanneau.com/uploads/boat/shape/64f097f18b8c1832448792.png" alt="Cap Camarat 7.5 WA │ Cap Camarat Walk Around of 7m │ Boat Moteurs Jeanneau" class="img-responsive">
                                    </div>
                                    <h4 class="name">Cap Camarat 7.5 WA</h4>
                                    <div class="resume">
                                        <p>Greater Performance and Comfort at Sea</p>
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