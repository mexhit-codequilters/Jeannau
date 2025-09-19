<?php
/**
 * Template Name: Cap Camarat 6.5  cc
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

<main class="cap-camarat-main">
    <a id="content" tabindex="-1"></a>
        <div class="model-show">
                                                        
            <div class="box head model model-header">
                <div id="js-model-header">
                                            <div class="slide">
                                                            <img src="https://app.jeanneau.com/uploads/media/image/exterior/07fcd8c7a28fc0954e7532996466d447.jpg" alt=" 25721"
                                     class="img-responsive ">
                                                    </div>
                                            <div class="slide">
                                                            <img src="https://app.jeanneau.com/uploads/media/image/exterior/c90ea5d806f8ecce7df3e04248404126.jpg" alt=" 25720"
                                     class="img-responsive ">
                                                    </div>
                                    </div>
                <div class="header-title">
                    <div class="header"></div>
                    <h1 class="baseline">Cap Camarat 6.5 CC</h1>
                                    </div>
            </div>
        
                <div class="boat-nav row">
            <div class="col-xs-6 col-sm-2 item-nav item-nav-blue boat-name">
                <div>Cap Camarat 6.5 CC</div>
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
                <a href="/boats/powerboat/5-cap-camarat-center-console/623-cap-camarat-6-5-cc" itemprop="item"><span itemprop="name">Cap Camarat 6.5 CC</span></a>
                <meta itemprop="position" content="5" />
            </li>
            </ul>
</div>
                <section class="container-fluid">
            <div class="boat-content row ">
                <div class="col-xs-12 col-sm-8">
                                            <a id="points" class="anchor"></a>
                        <div class="points">
                            <div class="baseline">Perfect Balance of Sporty Attitude and Comfort</div>

                                                            <div class="boat-reviews">
                                                                                                                        <i class="icon icon-star-full"></i>
                                                                                                                                                                <i class="icon icon-star-full"></i>
                                                                                                                                                                <i class="icon icon-star-full"></i>
                                                                                                                                                                <i class="icon icon-star-full"></i>
                                                                                                                                                                <i class="icon icon-star-empty"></i>
                                                                                                                <a href="https://feedback.jeanneau.com/cap-camarat-center-console/cap-camarat-65-cc-serie3?lang=en-GB" target="_blank"
                                       title="55 Customer reviews (Opens in a new window)">
                                        55 Customer reviews
                                    </a>
                                </div>
                            
                            <div class="content">
                                <p>Sporty and family-friendly, the Cap Camarat 6.5 CC features a concentration of clever, ergonomic design. &nbsp;This success results from forty years of experience, cruising, and innovations.</p><p>SEANAPPS Technology on board.&nbsp;To learn more, <a href="https://www.seanapps.app/en" target="_blank" rel="noopener noreferrer">click here</a>.</p>
                            </div>
                        </div>
                                    </div>
                <div class="col-xs-12 col-sm-4">
                                                                <div class="configuratorLink">
                            <a href="https://configurateur.jeanneau.com/en/configure/powerboat/5-cap-camarat-center-console/623-cap-camarat-6-5-cc" class="square" target="_blank">
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
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/def25fe4321faff2cb26b94fe6195210.jpg')"
                 title="Cap Camarat 6.5 CC - An Iconic Model That Never Stops Evolving">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 content-block">
            <h3 class="white">An Iconic Model That Never Stops Evolving</h3>
            <div class="text-content white"><p>This iconic model in the <a href="/boats/powerboat/5-cap-camarat-center-console/" target="_self">Cap Camarat</a> line has received a makeover, with a new hull design by Michael Peters, boasting even greater marine qualities and a bold, energetic redesigned profile. This is an ideal boat for safe family cruising.</p></div>
            
        </div>
        <div class="col-sm-6 image-block no-padding d-sm-block">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/def25fe4321faff2cb26b94fe6195210.jpg')"
                 title="Cap Camarat 6.5 CC - An Iconic Model That Never Stops Evolving">
            </div>
        </div>
    </div>
                                    
                                                                
                                                                            <div class="block">
        <div class="col-xs-12 col-sm-6 image-block no-padding">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/3819495261b5a4f36808ada6128326a5.jpg')"
                 title="Cap Camarat 6.5 CC - Remarkable Design, Comfort, and Spaciousness">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 content-block even">
            <h3>Remarkable Design, Comfort, and Spaciousness</h3>
            <div class="text-content"><p>Stylish and contemporary, this boat is also extraordinarily functional. Its design resulted from a true quest to optimise both volume and comfort. As a result, you have spacious storage, easy movement around the centre console, and a forward cockpit is complete with table and wrap around bench seating which can transforms in seconds into a cosy sunbed.</p></div>
            
        </div>
    </div>
                                    
                                                                
                                                                        <div class="block">
        <div class="col-xs-12 image-block no-padding d-sm-none">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/363bddb2db8b53754922594447a98564.jpg')"
                 title="Cap Camarat 6.5 CC - Modular Layout and Versatility">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 content-block">
            <h3 class="white">Modular Layout and Versatility</h3>
            <div class="text-content white"><p>The modular aft cockpit, with removable bench seating and pivoting seats, provides a comfort-able and inviting living area while at anchor, as well as a safe, open space when configured for fishing. Options abound on the Cap Camarat 6.5 CC ! This boat promises beautiful day trips, family explorations, and multiple marine activities, in-cluding fishing, excursions, or simply sipping drinks with friends and relaxing aboard a boat en-tirely devoted to sharing enjoyable moments on the water.</p></div>
            
        </div>
        <div class="col-sm-6 image-block no-padding d-sm-block">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/363bddb2db8b53754922594447a98564.jpg')"
                 title="Cap Camarat 6.5 CC - Modular Layout and Versatility">
            </div>
        </div>
    </div>
                                                </section>
        
                
                <a id="videos" class="anchor"></a>
                    <section class="videos">
    <h3 class="sr-only">Videos</h3>
                                        <div class="video-first">
                                                
    <div class="iframe-container" data-reference="LcsoOL1aves" data-type="model-main-video" data-provider="YouTube">

        
            <iframe src=""
                    data-src="https://www.youtube.com/embed/LcsoOL1aves?vq=hd1080"
                    data-reference="LcsoOL1aves"
                    class="optanon-category-C0003"
                    frameborder="0"
                    allowfullscreen
            ></iframe>

            </div>

                                    </div>
                                                                                
        <div class="other-video">
                                                                            <div class="video">
                            
    <div class="iframe-container" data-reference="O_hJwxAParE" data-type="model-other-video" data-provider="YouTube">

        
            <a href="https://www.youtube.com/watch?v=O_hJwxAParE"
               data-reference="O_hJwxAParE"
               class="js-additional-video">
                <img src="https://img.youtube.com/vi/O_hJwxAParE/0.jpg" alt="Thumbnail">
            </a>

            </div>

                    </div>
                                                                <div class="video">
                            
    <div class="iframe-container" data-reference="A29Ma1qug6s" data-type="model-other-video" data-provider="YouTube">

        
            <a href="https://www.youtube.com/watch?v=A29Ma1qug6s"
               data-reference="A29Ma1qug6s"
               class="js-additional-video">
                <img src="https://img.youtube.com/vi/A29Ma1qug6s/0.jpg" alt="Thumbnail">
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
                            
                                                    </ul>

                                                    <div id="js-collapse-gallery-exterior" class="collapse in">
                                <div class="gallery-exterior">
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/dd605b1a6a811a60a694bf133a116584.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_1">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/dd605b1a6a811a60a694bf133a116584.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/dd605b1a6a811a60a694bf133a116584.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Serie3 17166"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Serie3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/8b6666d053ac4467289a455a3532d9cb.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_2">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/8b6666d053ac4467289a455a3532d9cb.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/8b6666d053ac4467289a455a3532d9cb.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Serie3 17157"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Serie3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/def25fe4321faff2cb26b94fe6195210.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_3">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/def25fe4321faff2cb26b94fe6195210.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/def25fe4321faff2cb26b94fe6195210.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Serie3 17160"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Serie3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/8c871013715b6fa5de9aa2a0745a1267.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_4">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/8c871013715b6fa5de9aa2a0745a1267.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/8c871013715b6fa5de9aa2a0745a1267.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Serie3 17165"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Serie3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/3f2f0d7ec231abda17b20e67af5e9026.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_5">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/3f2f0d7ec231abda17b20e67af5e9026.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/3f2f0d7ec231abda17b20e67af5e9026.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Serie3 17172"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Serie3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/f1a7b568f6d01f46d849f99e98d9cd0c.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_6">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/f1a7b568f6d01f46d849f99e98d9cd0c.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/f1a7b568f6d01f46d849f99e98d9cd0c.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Serie3 17163"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Serie3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/d01619e95c6a8ec934151b27062f2ad7.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_7">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/d01619e95c6a8ec934151b27062f2ad7.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/d01619e95c6a8ec934151b27062f2ad7.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Serie3 17156"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Serie3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/3819495261b5a4f36808ada6128326a5.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_8">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/3819495261b5a4f36808ada6128326a5.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/3819495261b5a4f36808ada6128326a5.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Serie3 17169"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Serie3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/978d582f7112943d0d969f23fabf5409.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_9">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/978d582f7112943d0d969f23fabf5409.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/978d582f7112943d0d969f23fabf5409.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Serie3 17159"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Serie3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/dc3f8716c2ec9dab5025ca600350f898.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_10">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/dc3f8716c2ec9dab5025ca600350f898.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/dc3f8716c2ec9dab5025ca600350f898.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Serie3 17155"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Serie3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/44b5efc62116749becd1170e8668536a.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_11">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/44b5efc62116749becd1170e8668536a.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/44b5efc62116749becd1170e8668536a.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Serie3 17158"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Serie3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/040dae3ac5944601e91d1ff715a47df2.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_12">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/040dae3ac5944601e91d1ff715a47df2.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/040dae3ac5944601e91d1ff715a47df2.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Serie3 17174"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Serie3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/a7a741ea4d9eb4aa3e72469f932349da.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_13">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/a7a741ea4d9eb4aa3e72469f932349da.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/a7a741ea4d9eb4aa3e72469f932349da.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Serie3 17162"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Serie3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/1f1f514ba7f0a77a05a46838e5bfef0b.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_14">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/1f1f514ba7f0a77a05a46838e5bfef0b.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/1f1f514ba7f0a77a05a46838e5bfef0b.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Serie3 17164"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Serie3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior portrait hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/feb2cc831e6fec7bb40ebef8dd67381c.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_15">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/feb2cc831e6fec7bb40ebef8dd67381c.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/feb2cc831e6fec7bb40ebef8dd67381c.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Serie3 17170"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Serie3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior portrait hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/c65c22b7a6df0bd6cad21aeab040c48d.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_16">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/c65c22b7a6df0bd6cad21aeab040c48d.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/c65c22b7a6df0bd6cad21aeab040c48d.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Serie3 17168"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Serie3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/a128f1b1d5a9c5ddea933af77e3ab292.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_17">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/a128f1b1d5a9c5ddea933af77e3ab292.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/a128f1b1d5a9c5ddea933af77e3ab292.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Serie3 17167"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Serie3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/3ddbb984a36fa1efc71566ef1c4d7ea5.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_18">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/3ddbb984a36fa1efc71566ef1c4d7ea5.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/3ddbb984a36fa1efc71566ef1c4d7ea5.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Serie3 17171"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Serie3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/88e681f92d516e7bae17275783bfe2d1.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_19">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/88e681f92d516e7bae17275783bfe2d1.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/88e681f92d516e7bae17275783bfe2d1.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Serie3 17161"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Serie3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior portrait hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/05d777d562266a2cd458e43e826006e9.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_20">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/05d777d562266a2cd458e43e826006e9.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/05d777d562266a2cd458e43e826006e9.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Serie3 17173"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Serie3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/74e8213476f8261d10b6d8c3a5b0cc96.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_21">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/74e8213476f8261d10b6d8c3a5b0cc96.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/74e8213476f8261d10b6d8c3a5b0cc96.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Série3 22110"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/9ee119dacb905995b48cf55f12b8cdca.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_22">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/9ee119dacb905995b48cf55f12b8cdca.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/9ee119dacb905995b48cf55f12b8cdca.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Série3 22109"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/b523f813a41cc36023a4b81b1847424f.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_23">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/b523f813a41cc36023a4b81b1847424f.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/b523f813a41cc36023a4b81b1847424f.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Série3 22112"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage hidden">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/e8ee2a6af6498b144698627ebbf230aa.jpg" class="gallery-show"
                                               title="Cap Camarat 6.5 CC"
                                               id="gallery-exterior_24">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/e8ee2a6af6498b144698627ebbf230aa.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/e8ee2a6af6498b144698627ebbf230aa.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs JeanneauCap Camarat 6.5 CC Série3 22111"/>
                                                <div class="hover-image">
                                                    <span>Cap Camarat 6.5 CC Série3</span>
                                                </div>
                                            </a>
                                        </div>
                                                                    </div>

                                                                    <button class="js-square-more exterior"><i class="icon icon-plus"></i></button>
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
                                            <a title="Cap Camarat 6.5 CC"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/cf2d7825e987b9ce83da848c0bd91527.jpg">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/cf2d7825e987b9ce83da848c0bd91527.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs Jeanneau Cap Camarat 6.5 CC SERIE 3 17180"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                            <div class="slide">
                                            <a title="Cap Camarat 6.5 CC"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/2f85b21e14cf1365a7ce47a372213432.jpg">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/2f85b21e14cf1365a7ce47a372213432.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs Jeanneau Cap Camarat 6.5 CC SERIE 3 17181"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                            <div class="slide">
                                            <a title="Cap Camarat 6.5 CC"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/f004528b82c8718dc6d93715a8936c57.jpg">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/f004528b82c8718dc6d93715a8936c57.jpg"
                                                     alt="Cap Camarat 6.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs Jeanneau Cap Camarat 6.5 CC Série3 22113"
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
                                    <span class="val">6.86 m / 22&#039;6&quot;</span>
                                </div>
                                                                                        <div class="value">
                                    <i class="icon icon-hull-length-powerboat"></i>
                                    <span class="title">Hull length</span>
                                    <span class="val">6.11 m / 20&#039;1&quot;</span>
                                </div>
                                                                                        <div class="value">
                                <i class="icon icon-hull-beam"></i>
                                <span class="title">Hull Beam</span>
                                <span class="val">2.48 m / 8&#039;2&quot;</span>
                                </div>                                                                                                                    <div class="value">
                                    <i class="icon icon-weight"></i>
                                    <span class="title">Weight</span>
                                    <span class="val">1020 kg / 2249 Lbs</span></div>
                                                                                                                                                                                                        <div class="value">
                                    <i class="icon icon-fuel-capacity"></i>
                                    <span class="title">Fuel capacity</span>
                                    <span class="val">170 l / 45 US gal</span>
                                </div>
                                                                                        <div class="value">
                                    <i class="icon icon-water-capacity"></i>
                                    <span class="title">Water capacity</span>
                                    <span class="val">50 l / 13 US gal</span>
                                </div>
                                                                                                                    <div class="value">
                                    <i class="icon icon-engines"></i>
                                    <span class="title">Available Engines</span>
                                    <span class="val">200 CV (HP)</span>
                                </div>
                                                                                        <div class="value">
                                    <i class="icon icon-ce-category"></i>
                                    <span class="title">CE Category</span>
                                    <span class="val">C8
                                        
                                        
                                        
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
                                                                                                                                    <a href="/boats/powerboat/5-cap-camarat-center-console/2-cap-camarat-5-5-cc">
                                    <div role="presentation" class="image">
                                        <img src="https://app.jeanneau.com/uploads/boat/shape/62bac9c52298d541040229.png" alt="Cap Camarat 5.5 CC │ Cap Camarat Center Console of 5m │ Boat Moteurs Jeanneau" class="img-responsive">
                                    </div>
                                    <h4 class="name">Cap Camarat 5.5 CC</h4>
                                                                            <div class="resume">
                                            <p>Inspired by the larger Cap Camarat, each instant spent aboard is pure pleasure</p>
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
                                            </div>
                </div>
                    </section>
</main>

    <div id="cookieconsent-i18n"
         data-message="By continuing your visit on this website, you agree to the use of cookies to enhance your browsing experience and to generate website traffic statistics."
         data-dismiss="I AGREE"></div>


<script src="js/runtime.32cc791b.js" defer></script>
<script src="js/691.570663c4.js" defer></script>
<script src="js/268.9a434bd2.js" defer></script>
<script src="js/732.a73f4830.js" defer></script>
<script src="js/app.bab1e4dd.js" defer></script>

<?php get_footer(); ?>