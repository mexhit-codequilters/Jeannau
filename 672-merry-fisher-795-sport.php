
<?php
/**
 * Template Name: Merry Fisher 795 Sport
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
                            <img src="https://app.jeanneau.com/uploads/media/image/exterior/b54ba6d07c22ba911c31106339c738b9.JPG" alt=" 25767" class="img-responsive ">
                        </div>
                    </div>
                    <div class="header-title">
                        <div class="header"></div>
                        <h1 class="baseline">Merry Fisher 795 Sport</h1>
                    </div>
                </div>
                <div class="boat-nav row">
                    <div class="col-xs-6 col-sm-2 item-nav item-nav-blue boat-name">
                        <div>Merry Fisher 795 Sport</div>
                    </div>
                    <div class="col-sm-5 item-nav item-nav-inline d-sm-none">
                        <div class="item">
                            <a href="#videos" class="scrolltoAnchor">Videos</a>
                        </div>
                        <div class="item">
                            <a href="#photos" class="scrolltoAnchor">photos</a>
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
                            <a href="/boats/powerboat/43-merry-fisher-sport" itemprop="item">
                                <span itemprop="name">Merry Fisher Sport</span>
                            </a>
                            <meta itemprop="position" content="3"/>
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a href="/boats/powerboat/43-merry-fisher-sport/672-merry-fisher-795-sport" itemprop="item">
                                <span itemprop="name">Merry Fisher 795 Sport</span>
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
                                <div class="baseline">The Versatile Boat, to Truly Experience the Sea</div>
                                <div class="boat-reviews">
                                    <i class="icon icon-star-full"></i>
                                    <i class="icon icon-star-full"></i>
                                    <i class="icon icon-star-full"></i>
                                    <i class="icon icon-star-full"></i>
                                    <i class="icon icon-star-empty"></i>
                                    <a href="https://feedback.jeanneau.com/merry-fisher/merry-fisher-795-sport-serie-2?lang=en-GB" target="_blank" title="5 Customer reviews (Opens in a new window)">5 Customer reviews
                                    </a>
                                </div>
                                <div class="content">
                                    <p>The Merry Fisher 795 Sport is destined for all who love the sea and are seeking action, water sports, and exploration. &nbsp;The Merry Fisher 795 Sport has been entirely designed to offer you unique moments, closer to nature.</p>
                                    <p>
                                        SEANAPPS Technology on board.&nbsp;To learn more, <a target="_blank" rel="noopener noreferrer" href="https://www.seanapps.app/en">click here</a>
                                        .
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="configuratorLink">
                                <a href="https://configurateur.jeanneau.com/en/configure/powerboat/43-merry-fisher-sport/672-merry-fisher-795-sport" class="square" target="_blank">
                                    <i class="icon icon-commander-brochure"></i>
                                    Configure
                            
                                </a>
                            </div>
                            <div class="documents">
                                <a class="square" href="/contact?brochures%5B%5D=43#brochure-form">
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
                            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/e5313a44567455776e37a75b228cc25c.jpg')" title="Merry Fisher 795 Sport - For Pursuing Your Passions on the Water"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 content-block">
                            <h3 class="white">For Pursuing Your Passions on the Water</h3>
                            <div class="text-content white">
                                <p>The Merry Fisher 795 Sport is designed to facilitate sporty outings at sea. The vast, modular cockpit enables you to clear the space entirely, with numerous storage lockers and at-tachment systems for fishing or other marine activities requiring the handling of equipment. Even the cockpit roof is designed without supports, in order to facilitate movement on board and avoid obstructions while casting. In just minutes, the cockpit changes into a saloon with removable bench seating and tables. This boat also features a U-shaped saloon in the forward cockpit, with two atmospheres that can be perceived from one side or other of the wheelhouse.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 image-block no-padding d-sm">
                            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/e5313a44567455776e37a75b228cc25c.jpg')" title="Merry Fisher 795 Sport - For Pursuing Your Passions on the Water"></div>
                        </div>
                    </div>
                </section>
                <a id="videos" class="anchor"></a>
                <section class="videos">
                    <h3 class="sr-only">Videos</h3>
                    <div class="video-first">
                        <div class="iframe-container" data-reference="3ZSQLTSIKDU" data-type="model-main-video" data-provider="YouTube">
                            <iframe src="" data-src="https://www.youtube.com/embed/3ZSQLTSIKDU?vq=hd1080" data-reference="3ZSQLTSIKDU" class="optanon-category-C0003" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="other-video">
                        <div class="video">
                            <div class="iframe-container" data-reference="kJexS70GKAU" data-type="model-other-video" data-provider="YouTube">
                                <a href="https://www.youtube.com/watch?v=kJexS70GKAU" data-reference="kJexS70GKAU" class="js-additional-video">
                                    <img src="https://img.youtube.com/vi/kJexS70GKAU/0.jpg" alt="Thumbnail">
                                </a>
                            </div>
                        </div>
                        <div class="video">
                            <div class="iframe-container" data-reference="a7zQf2LfRA4" data-type="model-other-video" data-provider="YouTube">
                                <a href="https://www.youtube.com/watch?v=a7zQf2LfRA4" data-reference="a7zQf2LfRA4" class="js-additional-video">
                                    <img src="https://img.youtube.com/vi/a7zQf2LfRA4/0.jpg" alt="Thumbnail">
                                </a>
                            </div>
                        </div>
                        <div class="video">
                            <div class="iframe-container" data-reference="hndff2W-1_k" data-type="model-other-video" data-provider="YouTube">
                                <a href="https://www.youtube.com/watch?v=hndff2W-1_k" data-reference="hndff2W-1_k" class="js-additional-video">
                                    <img src="https://img.youtube.com/vi/hndff2W-1_k/0.jpg" alt="Thumbnail">
                                </a>
                            </div>
                        </div>
                        <div class="video">
                            <div class="iframe-container" data-reference="YQqX1I0zOfY" data-type="model-other-video" data-provider="YouTube">
                                <a href="https://www.youtube.com/watch?v=YQqX1I0zOfY" data-reference="YQqX1I0zOfY" class="js-additional-video">
                                    <img src="https://img.youtube.com/vi/YQqX1I0zOfY/0.jpg" alt="Thumbnail">
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
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/e16db9aa4fac9ad1854f683fb72fdeaa.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_1">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/e16db9aa4fac9ad1854f683fb72fdeaa.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/e16db9aa4fac9ad1854f683fb72fdeaa.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25911"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/9d0a8505f4b21eca3dd65c07ffdefb59.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_2">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/9d0a8505f4b21eca3dd65c07ffdefb59.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/9d0a8505f4b21eca3dd65c07ffdefb59.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25912"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/1ca986d4172022d58cf9abe03524f2a6.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_3">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/1ca986d4172022d58cf9abe03524f2a6.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/1ca986d4172022d58cf9abe03524f2a6.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25913"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/68681b1a948d52d8d03aa2b5caae6f41.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_4">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/68681b1a948d52d8d03aa2b5caae6f41.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/68681b1a948d52d8d03aa2b5caae6f41.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25914"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/0b3674b57d21591e48e9eb77d315e3c9.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_5">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/0b3674b57d21591e48e9eb77d315e3c9.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/0b3674b57d21591e48e9eb77d315e3c9.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25915"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/76318c886abb7984acace5d7e7c1e0c8.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_6">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/76318c886abb7984acace5d7e7c1e0c8.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/76318c886abb7984acace5d7e7c1e0c8.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25916"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/3f1dd8e671d38631d008b2452c509704.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_7">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/3f1dd8e671d38631d008b2452c509704.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/3f1dd8e671d38631d008b2452c509704.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25917"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/6bae49c2066060429576833b3014d187.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_8">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/6bae49c2066060429576833b3014d187.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/6bae49c2066060429576833b3014d187.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25918"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/f5be1e99cef2c89336b93a9bc18f2305.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_9">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/f5be1e99cef2c89336b93a9bc18f2305.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/f5be1e99cef2c89336b93a9bc18f2305.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25919"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/8ffafff8e2122b1e3301137bfbf1110f.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_10">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/8ffafff8e2122b1e3301137bfbf1110f.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/8ffafff8e2122b1e3301137bfbf1110f.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25920"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/dc8641b443236503349c56370897145c.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_11">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/dc8641b443236503349c56370897145c.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/dc8641b443236503349c56370897145c.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25921"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/53ffe8a97a99a027f134389dcc91fc53.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_12">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/53ffe8a97a99a027f134389dcc91fc53.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/53ffe8a97a99a027f134389dcc91fc53.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25922"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/29e8f296304fd71ad625e29e9c115873.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_13">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/29e8f296304fd71ad625e29e9c115873.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/29e8f296304fd71ad625e29e9c115873.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25923"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/d3ab26a6ce820773642414ad04a97702.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_14">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/d3ab26a6ce820773642414ad04a97702.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/d3ab26a6ce820773642414ad04a97702.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25924"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/e533e5d2ad16c16025f75becd17c3233.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_15">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/e533e5d2ad16c16025f75becd17c3233.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/e533e5d2ad16c16025f75becd17c3233.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25925"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/1a76e5cebdb8809cb1a0dad3672f0b65.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_16">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/1a76e5cebdb8809cb1a0dad3672f0b65.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/1a76e5cebdb8809cb1a0dad3672f0b65.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25926"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/b54e038d8ba2ad8840cfb78abec01088.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_17">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/b54e038d8ba2ad8840cfb78abec01088.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/b54e038d8ba2ad8840cfb78abec01088.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25927"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/85ecfeed6240a7b3553ccdbe93202c3b.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_18">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/85ecfeed6240a7b3553ccdbe93202c3b.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/85ecfeed6240a7b3553ccdbe93202c3b.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25855"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/da11810e1833fe6522feb4a36b8afd7e.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_19">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/da11810e1833fe6522feb4a36b8afd7e.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/da11810e1833fe6522feb4a36b8afd7e.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25856"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/ec1e061f75724aa7ea40997cdf6bad14.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_20">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/ec1e061f75724aa7ea40997cdf6bad14.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/ec1e061f75724aa7ea40997cdf6bad14.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25857"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/40e90c7e9cd56f584158f735e1bf28c0.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_21">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/40e90c7e9cd56f584158f735e1bf28c0.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/40e90c7e9cd56f584158f735e1bf28c0.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25858"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/c80c1e7f6653038c315941ea05d70fdb.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_22">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/c80c1e7f6653038c315941ea05d70fdb.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/c80c1e7f6653038c315941ea05d70fdb.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25859"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/293b780a5714e102372a31e1dea00100.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_23">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/293b780a5714e102372a31e1dea00100.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/293b780a5714e102372a31e1dea00100.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25860"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/4175763b8e43d708071ed803b9fe7e7c.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_24">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/4175763b8e43d708071ed803b9fe7e7c.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/4175763b8e43d708071ed803b9fe7e7c.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25861"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/152deecd16af2dea741a0f0b05aea7d0.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_25">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/152deecd16af2dea741a0f0b05aea7d0.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/152deecd16af2dea741a0f0b05aea7d0.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25862"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior portrait hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/779f3fede3242194637225f81e60d337.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_26">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/779f3fede3242194637225f81e60d337.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/779f3fede3242194637225f81e60d337.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 25863"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/a6a58f2c7d83d1c8c51124591b9fdc9e.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_27">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/a6a58f2c7d83d1c8c51124591b9fdc9e.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/a6a58f2c7d83d1c8c51124591b9fdc9e.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 26081"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/5d74994ccb6966eeeabf281aa5ad998b.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_28">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/5d74994ccb6966eeeabf281aa5ad998b.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/5d74994ccb6966eeeabf281aa5ad998b.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 23202"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/219b0bb6583de7c26cb5dcbe213cf1fe.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_29">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/219b0bb6583de7c26cb5dcbe213cf1fe.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/219b0bb6583de7c26cb5dcbe213cf1fe.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 23207"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/366c542ca18392cf3b4376154e458b38.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_30">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/366c542ca18392cf3b4376154e458b38.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/366c542ca18392cf3b4376154e458b38.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 23209"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/fd5e77bb8de112b7225a7725dde0c215.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_31">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/fd5e77bb8de112b7225a7725dde0c215.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/fd5e77bb8de112b7225a7725dde0c215.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 23210"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item exterior paysage hidden">
                                        <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/cf2f55fd9cd298e69a228875547ac6bc.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-exterior_32">
                                            <img class="lazy" src="https://app.jeanneau.com/uploads/media/image/exterior/sd/cf2f55fd9cd298e69a228875547ac6bc.jpg" data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/cf2f55fd9cd298e69a228875547ac6bc.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs JeanneauMerry Fisher 795 Sport Série2 23211"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
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
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/b7ccba24c29fa17e895e746871915c7e.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-interior_1">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/b7ccba24c29fa17e895e746871915c7e.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/b7ccba24c29fa17e895e746871915c7e.jpg" alt="base_alt Merry Fisher 795 Sport Série2 23212"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/82e1e9cf8f83a04a672440453354cc12.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-interior_2">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/82e1e9cf8f83a04a672440453354cc12.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/82e1e9cf8f83a04a672440453354cc12.jpg" alt="base_alt Merry Fisher 795 Sport Série2 23213"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="gallery_item interior paysage display">
                                        <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/a09406455266b5577ceb2dd64b70725d.jpg" class="gallery-show" title="Merry Fisher 795 Sport" id="gallery-interior_3">
                                            <img aria-hidden="true" class="lazy" src="https://app.jeanneau.com/uploads/media/image/interior/sd/a09406455266b5577ceb2dd64b70725d.jpg" data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/a09406455266b5577ceb2dd64b70725d.jpg" alt="base_alt Merry Fisher 795 Sport Série2 23214"/>
                                            <div class="hover-image">
                                                <span>Merry Fisher 795 Sport Série2</span>
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
                    <h3>Architecture &amp;design</h3>
                    <div class="designers-row">
                        <a class="designer" href="/jeanneau/designers/3-jacek-centkowski-pawel-denert-et-piotr-centkowski">
                            <div class="image">
                                <div class="lazy" data-bg="https://app.jeanneau.com/uploads/boat/designer/57738f616abac.jpg"></div>
                            </div>
                            <div>
                                <div class="name">Jacek Centkowski, Pawel Denert et Piotr Centkowski</div>
                                <div class="baseline">Centkowski &amp;Denert Design Studio</div>
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
                                        <a title="Merry Fisher 795 Sport" href="https://app.jeanneau.com/uploads/media/image/layout/hd/a603228cfe62d666a82e9f25d11d5b3f.jpg">
                                            <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/a603228cfe62d666a82e9f25d11d5b3f.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs Jeanneau Merry Fisher 795 Sport Série2 23154" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="slide">
                                        <a title="Merry Fisher 795 Sport" href="https://app.jeanneau.com/uploads/media/image/layout/hd/ac9cfeafce6a8864595bf899084ced62.jpg">
                                            <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/ac9cfeafce6a8864595bf899084ced62.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs Jeanneau  31209" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="slide">
                                        <a title="Merry Fisher 795 Sport" href="https://app.jeanneau.com/uploads/media/image/layout/hd/7e199ad4d8ac08e6921962b748704d1b.jpg">
                                            <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/7e199ad4d8ac08e6921962b748704d1b.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs Jeanneau  31210" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="slide">
                                        <a title="Merry Fisher 795 Sport" href="https://app.jeanneau.com/uploads/media/image/layout/hd/668e23f06a7202254df2bf1b6e1aeeaf.jpg">
                                            <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/668e23f06a7202254df2bf1b6e1aeeaf.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs Jeanneau  31211" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="slide">
                                        <a title="Merry Fisher 795 Sport" href="https://app.jeanneau.com/uploads/media/image/layout/hd/16461bec70c5db249edec3fa3813b419.jpg">
                                            <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/16461bec70c5db249edec3fa3813b419.jpg" alt="Merry Fisher 795 Sport │ Merry Fisher Sport of 7m │ Boat Moteurs Jeanneau  31212" class="img-responsive">
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
                                    <span class="val">7.19 m / 23 &#039;7 &quot;</span>
                                </div>
                                <div class="value">
                                    <i class="icon icon-hull-length-powerboat"></i>
                                    <span class="title">Hull length</span>
                                    <span class="val">6.97 m / 22 &#039;10 &quot;</span>
                                </div>
                                <div class="value">
                                    <i class="icon icon-hull-beam"></i>
                                    <span class="title">Hull Beam</span>
                                    <span class="val">2.79 m / 9 &#039;2 &quot;</span>
                                </div>
                                <div class="value">
                                    <i class="icon icon-keel-draught"></i>
                                    <span class="title">Standard Draft
                                                                          </span>
                                    <span class="val">0.92 m / 3 &#039;</span>
                                </div>
                                <div class="value">
                                    <i class="icon icon-weight"></i>
                                    <span class="title">Weight</span>
                                    <span class="val">2177 kg / 4799 Lbs</span>
                                </div>
                                <div class="value">
                                    <i class="icon icon-fuel-capacity"></i>
                                    <span class="title">Fuel capacity</span>
                                    <span class="val">280 l / 74 US gal</span>
                                </div>
                                <div class="value">
                                    <i class="icon icon-water-capacity"></i>
                                    <span class="title">Water capacity</span>
                                    <span class="val">100 l / 26 US gal</span>
                                </div>
                                <div class="value">
                                    <i class="icon icon-ce-category"></i>
                                    <span class="title">CE Category</span>
                                    <span class="val">C9
                                        
                                        
                                        
                                    </span>
                                </div>
                            </div>
                            <div class="buttons">
                                <a class="btn btn-primary" href="https://app.jeanneau.com/inventory/31148" target="_blank" title="Inventaire (Opens in a new window)" download="2025-0068_PRINT_INV_MOTEUR_MERRY_FISHER_695_-_795_SPORT_GB_07-25_V2.pdf">Inventaire</a>
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
get_footer()
?>