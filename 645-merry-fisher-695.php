<?php
/**
 * Template Name: Merry Fisher 695   
 * **/

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
                                                            <img src="https://app.jeanneau.com/uploads/media/image/exterior/b18eac992cf9b892ee659348add20e4e.jpg" alt=" 25752"
                                     class="img-responsive ">
                                                    </div>
                                    </div>
                <div class="header-title">
                    <div class="header"></div>
                    <h1 class="baseline">Merry Fisher 695</h1>
                                    </div>
            </div>
        
                <div class="boat-nav row">
            <div class="col-xs-6 col-sm-2 item-nav item-nav-blue boat-name">
                <div>Merry Fisher 695</div>
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
                <a href="/boats/powerboat/9-merry-fisher" itemprop="item"><span itemprop="name">Merry Fisher</span></a>
                <meta itemprop="position" content="3" />
            </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="/boats/powerboat/9-merry-fisher/645-merry-fisher-695" itemprop="item"><span itemprop="name">Merry Fisher 695</span></a>
                <meta itemprop="position" content="4" />
            </li>
            </ul>
</div>
                <section class="container-fluid">
            <div class="boat-content row ">
                <div class="col-xs-12 col-sm-8">
                                            <a id="points" class="anchor"></a>
                        <div class="points">
                            <div class="baseline">Coastal Cruising Within Reach</div>

                                                            <div class="boat-reviews">
                                                                                                                        <i class="icon icon-star-full"></i>
                                                                                                                                                                <i class="icon icon-star-full"></i>
                                                                                                                                                                <i class="icon icon-star-full"></i>
                                                                                                                                                                <i class="icon icon-star-full"></i>
                                                                                                                                                                <i class="icon icon-star-empty"></i>
                                                                                                                <a href="https://feedback.jeanneau.com/merry-fisher/merry-fisher-695?lang=en-GB" target="_blank"
                                       title="74 Customer reviews (Opens in a new window)">
                                        74 Customer reviews
                                    </a>
                                </div>
                            
                            <div class="content">
                                <p>Clever and versatile, the Merry Fisher 695 is perfect for family coastal cruising, and a delight for all who love the sea. &nbsp;Practical and easy to handle, it enables you to take advantage of all the nooks and crannies of the surrounding coastline.</p><p>SEANAPPS Technology on board.&nbsp;To learn more, <a href="https://www.seanapps.app/en" target="_blank" rel="noopener noreferrer">click here</a>.</p>
                            </div>
                        </div>
                                    </div>
                <div class="col-xs-12 col-sm-4">
                                                                <div class="configuratorLink">
                            <a href="https://configurateur.jeanneau.com/en/configure/powerboat/9-merry-fisher/645-merry-fisher-695" class="square" target="_blank">
                                <i class="icon icon-commander-brochure"></i>
                                Configure
                            </a>
                        </div>
                                        <div class="documents">
                                                                                                    <a class="square"
                               href="/contact?brochures%5B%5D=9#brochure-form"><i
                                        class="icon icon-commander-brochure"></i>Request the Brochure
                            </a>
                                            </div>
                </div>
            </div>
        </section>

                            <section class="container-fluid blocks">
                                
                                                                
                                                                        <div class="block">
        <div class="col-xs-12 image-block no-padding d-sm-none">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/0a4248a36d48fc1867c9f8c2b407b487.jpg')"
                 title="Merry Fisher 695 - Designed for All Who Love the Sea">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 content-block">
            <h3 class="white">Designed for All Who Love the Sea</h3>
            <div class="text-content white"><p>Enjoy a variety of activities aboard the Merry Fisher 695 ! It can do it all: take your family diving and sunbathing in a sunny creek, take the children fishing at the first light of dawn, take advantage of a beautiful fall with an outing on the water in the company of friends and family… and keep smiling through the sea spray and wind, sheltered in the saloon of the wheelhouse. Without a doubt, the versatility of this outboard model, easily adaptable to a wide variety of marine activities, make it a guaranteed success, while its engine power and seaworthy qualities cinch the decision.</p></div>
            
        </div>
        <div class="col-sm-6 image-block no-padding d-sm">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/0a4248a36d48fc1867c9f8c2b407b487.jpg')"
                 title="Merry Fisher 695 - Designed for All Who Love the Sea">
            </div>
        </div>
    </div>
                                    
                                                                
                                                                            <div class="block">
        <div class="col-xs-12 col-sm-6 image-block no-padding">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/7121020c00e4cb60c4238793e5c86eda.jpg')"
                 title="Merry Fisher 695 - Comfort, Clever Equipment and High Performance">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 content-block even">
            <h3>Comfort, Clever Equipment and High Performance</h3>
            <div class="text-content"><p>High-quality equipment makes the Merry Fisher 695 the perfect partner for your family outings at sea: large storage lockers, a small galley with a refrigerator, two forward berths, a saloon that converts into an additional berth, a separate marine head under the helm station, an L-shaped exterior cockpit, and wide swim platforms… And there is one more advantage to this model, already capable of so much: it is trailorable and can easily be stored in dry dock storage.</p></div>
            
        </div>
    </div>
                                                </section>
        
                
                <a id="videos" class="anchor"></a>
                    <section class="videos">
    <h3 class="sr-only">Videos</h3>
                                        <div class="video-first">
                                                
    <div class="iframe-container" data-reference="1SxykS5TU2k" data-type="model-main-video" data-provider="YouTube">

        
            <iframe src=""
                    data-src="https://www.youtube.com/embed/1SxykS5TU2k?vq=hd1080"
                    data-reference="1SxykS5TU2k"
                    class="optanon-category-C0003"
                    frameborder="0"
                    allowfullscreen
            ></iframe>

            </div>

                                    </div>
                                                            
        <div class="other-video">
                                                                            <div class="video">
                            
    <div class="iframe-container" data-reference="VCtuvxh17gw" data-type="model-other-video" data-provider="YouTube">

        
            <a href="https://www.youtube.com/watch?v=VCtuvxh17gw"
               data-reference="VCtuvxh17gw"
               class="js-additional-video">
                <img src="https://img.youtube.com/vi/VCtuvxh17gw/0.jpg" alt="Thumbnail">
            </a>

            </div>

                    </div>
                                                                <div class="video">
                            
    <div class="iframe-container" data-reference="EBwfK8pI-Zg" data-type="model-other-video" data-provider="YouTube">

        
            <a href="https://www.youtube.com/watch?v=EBwfK8pI-Zg"
               data-reference="EBwfK8pI-Zg"
               class="js-additional-video">
                <img src="https://img.youtube.com/vi/EBwfK8pI-Zg/0.jpg" alt="Thumbnail">
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
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/70007e0be8082e0d35a480d66b0694bd.jpg" class="gallery-show"
                                               title="Merry Fisher 695"
                                               id="gallery-exterior_1">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/70007e0be8082e0d35a480d66b0694bd.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/70007e0be8082e0d35a480d66b0694bd.jpg"
                                                     alt="Merry Fisher 695 │ Merry Fisher of 7m │ Boat Moteurs JeanneauMerry Fisher 695 30200"/>
                                                <div class="hover-image">
                                                    <span>Merry Fisher 695</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/f97de909486d37baaf501748652f1a26.jpg" class="gallery-show"
                                               title="Merry Fisher 695"
                                               id="gallery-exterior_2">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/f97de909486d37baaf501748652f1a26.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/f97de909486d37baaf501748652f1a26.jpg"
                                                     alt="Merry Fisher 695 │ Merry Fisher of 7m │ Boat Moteurs JeanneauMerry Fisher 695 30201"/>
                                                <div class="hover-image">
                                                    <span>Merry Fisher 695</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/71d38d4d1c408888cd1a9b662c12e154.jpg" class="gallery-show"
                                               title="Merry Fisher 695"
                                               id="gallery-exterior_3">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/71d38d4d1c408888cd1a9b662c12e154.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/71d38d4d1c408888cd1a9b662c12e154.jpg"
                                                     alt="Merry Fisher 695 │ Merry Fisher of 7m │ Boat Moteurs JeanneauMerry Fisher 695 30157"/>
                                                <div class="hover-image">
                                                    <span>Merry Fisher 695</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/937eb2d45d4c48ccb66418ce2d47427a.jpg" class="gallery-show"
                                               title="Merry Fisher 695"
                                               id="gallery-exterior_4">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/937eb2d45d4c48ccb66418ce2d47427a.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/937eb2d45d4c48ccb66418ce2d47427a.jpg"
                                                     alt="Merry Fisher 695 │ Merry Fisher of 7m │ Boat Moteurs JeanneauMerry Fisher 695 30202"/>
                                                <div class="hover-image">
                                                    <span>Merry Fisher 695</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/5d54fccc9c744f3e719cbf5a0fddf81f.jpg" class="gallery-show"
                                               title="Merry Fisher 695"
                                               id="gallery-exterior_5">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/5d54fccc9c744f3e719cbf5a0fddf81f.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/5d54fccc9c744f3e719cbf5a0fddf81f.jpg"
                                                     alt="Merry Fisher 695 │ Merry Fisher of 7m │ Boat Moteurs JeanneauMerry Fisher 695 30203"/>
                                                <div class="hover-image">
                                                    <span>Merry Fisher 695</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/6b79c655371e29904f96c9e1122a9f8a.jpg" class="gallery-show"
                                               title="Merry Fisher 695"
                                               id="gallery-exterior_6">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/6b79c655371e29904f96c9e1122a9f8a.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/6b79c655371e29904f96c9e1122a9f8a.jpg"
                                                     alt="Merry Fisher 695 │ Merry Fisher of 7m │ Boat Moteurs JeanneauMerry Fisher 695 30156"/>
                                                <div class="hover-image">
                                                    <span>Merry Fisher 695</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/11ec8f27441d148296ac55318e05db03.jpg" class="gallery-show"
                                               title="Merry Fisher 695"
                                               id="gallery-exterior_7">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/11ec8f27441d148296ac55318e05db03.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/11ec8f27441d148296ac55318e05db03.jpg"
                                                     alt="Merry Fisher 695 │ Merry Fisher of 7m │ Boat Moteurs JeanneauMerry Fisher 695 20739"/>
                                                <div class="hover-image">
                                                    <span>Merry Fisher 695</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/8de9a76c717e1b7c54f9c099202e2daa.jpg" class="gallery-show"
                                               title="Merry Fisher 695"
                                               id="gallery-exterior_8">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/8de9a76c717e1b7c54f9c099202e2daa.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/8de9a76c717e1b7c54f9c099202e2daa.jpg"
                                                     alt="Merry Fisher 695 │ Merry Fisher of 7m │ Boat Moteurs JeanneauMerry Fisher 695 Serie2 18589"/>
                                                <div class="hover-image">
                                                    <span>Merry Fisher 695 Serie2</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/3b99f31326dc8a4ab7ffdfaf505b3837.jpg" class="gallery-show"
                                               title="Merry Fisher 695"
                                               id="gallery-exterior_9">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/3b99f31326dc8a4ab7ffdfaf505b3837.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/3b99f31326dc8a4ab7ffdfaf505b3837.jpg"
                                                     alt="Merry Fisher 695 │ Merry Fisher of 7m │ Boat Moteurs JeanneauMerry Fisher 695 Serie2 18590"/>
                                                <div class="hover-image">
                                                    <span>Merry Fisher 695 Serie2</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/616c991f7f8b4d14bc6fed45f7a3a256.jpg" class="gallery-show"
                                               title="Merry Fisher 695"
                                               id="gallery-exterior_10">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/616c991f7f8b4d14bc6fed45f7a3a256.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/616c991f7f8b4d14bc6fed45f7a3a256.jpg"
                                                     alt="Merry Fisher 695 │ Merry Fisher of 7m │ Boat Moteurs JeanneauMerry Fisher 695 Serie2 18591"/>
                                                <div class="hover-image">
                                                    <span>Merry Fisher 695 Serie2</span>
                                                </div>
                                            </a>
                                        </div>
                                                                    </div>

                                                            </div>
                        
                                                    <div id="js-collapse-gallery-interior" class="collapse">
                                <div class="gallery-interior">
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/50b1ee1be283ab8231426fbe376b6f19.jpg" class="gallery-show"
                                               title="Merry Fisher 695"
                                               id="gallery-interior_1">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/50b1ee1be283ab8231426fbe376b6f19.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/50b1ee1be283ab8231426fbe376b6f19.jpg"
                                                     alt="base_alt Merry Fisher 695 S2 27224"/>
                                                <div class="hover-image">
                                                    <span>Merry Fisher 695 S2</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/00d994bc61c4046f6a514526256fb4b2.jpg" class="gallery-show"
                                               title="Merry Fisher 695"
                                               id="gallery-interior_2">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/00d994bc61c4046f6a514526256fb4b2.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/00d994bc61c4046f6a514526256fb4b2.jpg"
                                                     alt="base_alt Merry Fisher 695 S2 27225"/>
                                                <div class="hover-image">
                                                    <span>Merry Fisher 695 S2</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/4a748ab1793227af07fbc3486eb7df05.jpg" class="gallery-show"
                                               title="Merry Fisher 695"
                                               id="gallery-interior_3">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/4a748ab1793227af07fbc3486eb7df05.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/4a748ab1793227af07fbc3486eb7df05.jpg"
                                                     alt="base_alt Merry Fisher 695 S2 27226"/>
                                                <div class="hover-image">
                                                    <span>Merry Fisher 695 S2</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/bfda42e49c16929338ecf6f8977e5418.jpg" class="gallery-show"
                                               title="Merry Fisher 695"
                                               id="gallery-interior_4">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/bfda42e49c16929338ecf6f8977e5418.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/bfda42e49c16929338ecf6f8977e5418.jpg"
                                                     alt="base_alt Merry Fisher 695 S2 27227"/>
                                                <div class="hover-image">
                                                    <span>Merry Fisher 695 S2</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/a44947c3f57ddc493ffb52e8d19390ca.jpg" class="gallery-show"
                                               title="Merry Fisher 695"
                                               id="gallery-interior_5">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/a44947c3f57ddc493ffb52e8d19390ca.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/a44947c3f57ddc493ffb52e8d19390ca.jpg"
                                                     alt="base_alt Merry Fisher 695 Serie2 18592"/>
                                                <div class="hover-image">
                                                    <span>Merry Fisher 695 Serie2</span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/ac346c4e391278ac1925ce760a46440b.jpg" class="gallery-show"
                                               title="Merry Fisher 695"
                                               id="gallery-interior_6">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/ac346c4e391278ac1925ce760a46440b.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/ac346c4e391278ac1925ce760a46440b.jpg"
                                                     alt="base_alt Merry Fisher 695 Serie2 18593"/>
                                                <div class="hover-image">
                                                    <span>Merry Fisher 695 Serie2</span>
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
                               href="/jeanneau/designers/3-jacek-centkowski-pawel-denert-et-piotr-centkowski">
                                <div class="image">
                                    <div class="lazy" data-bg="https://app.jeanneau.com/uploads/boat/designer/57738f616abac.jpg"></div>
                                </div>
                                <div>
                                    <div class="name">Jacek Centkowski, Pawel Denert et Piotr Centkowski</div>
                                    <div class="baseline">Centkowski &amp; Denert Design Studio</div>
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
                                            <a title="Merry Fisher 695"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/fd777b35c464ed299cbc6b04f921600d.jpg">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/fd777b35c464ed299cbc6b04f921600d.jpg"
                                                     alt="Merry Fisher 695 │ Merry Fisher of 7m │ Boat Moteurs Jeanneau Merry Fisher 695 Serie2 18596"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                            <div class="slide">
                                            <a title="Merry Fisher 695"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/0279b6c75edff121647ecfead76fa5bc.jpg">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/0279b6c75edff121647ecfead76fa5bc.jpg"
                                                     alt="Merry Fisher 695 │ Merry Fisher of 7m │ Boat Moteurs Jeanneau Merry Fisher 695 Serie2 18595"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                            <div class="slide">
                                            <a title="Merry Fisher 695"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/03efff492c42467bfa4250285706fbd5.jpg">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/03efff492c42467bfa4250285706fbd5.jpg"
                                                     alt="Merry Fisher 695 │ Merry Fisher of 7m │ Boat Moteurs Jeanneau Merry Fisher 695 Serie2 18594"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                            <div class="slide">
                                            <a title="Merry Fisher 695"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/1f9154d6f38ea9a2856e6678c151f738.png">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/1f9154d6f38ea9a2856e6678c151f738.png"
                                                     alt="Merry Fisher 695 │ Merry Fisher of 7m │ Boat Moteurs Jeanneau Merry Fisher 695 29956"
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
                                    <span class="val">6.71 m / 22&#039;</span>
                                </div>
                                                                                        <div class="value">
                                    <i class="icon icon-hull-length-powerboat"></i>
                                    <span class="title">Hull length</span>
                                    <span class="val">6.45 m / 21&#039;2&quot;</span>
                                </div>
                                                                                        <div class="value">
                                <i class="icon icon-hull-beam"></i>
                                <span class="title">Hull Beam</span>
                                <span class="val">2.54 m / 8&#039;4&quot;</span>
                                </div>                                                                                                                    <div class="value">
                                    <i class="icon icon-weight"></i>
                                    <span class="title">Weight</span>
                                    <span class="val">1625 kg / 3583 Lbs</span></div>
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
                                    <i class="icon icon-ce-category"></i>
                                    <span class="title">CE Category</span>
                                    <span class="val">C-8
                                        
                                        
                                        
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
                                                            <li><a href="https://app.jeanneau.com/inventory/14703"
                       download="INV_MF_FR-GB_12-18_BD.pdf"
                       target="_blank"
                       title="Inventory Merry Fisher range 2018-2019 (Opens in a new window)"
                            
                            
                    ><em></em><span>Inventory Merry Fisher range 2018-2019</span></a>
                </li>
                                                            <li><a href="https://app.jeanneau.com/inventory/26438"
                       download="2022-0063_PRINT_INV_MOTEUR_2022_MERRY_FISHER_605-695-795-895_FR_GB_11-22_BD.pdf"
                       target="_blank"
                       title="Inventory - Merry Fisher range - 2023  (Opens in a new window)"
                            
                            
                    ><em></em><span>Inventory - Merry Fisher range - 2023 </span></a>
                </li>
                                                            <li><a href="https://app.jeanneau.com/inventory/31152"
                       download="2025-0068_PRINT_INV_MOTEUR_MERRY_FISHER_605-695-795_GB_V4.pdf"
                       target="_blank"
                       title="2026 Inventory - Merry Fisher 605 - 695 - 795 (Opens in a new window)"
                            
                            
                    ><em></em><span>2026 Inventory - Merry Fisher 605 - 695 - 795</span></a>
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
   
        
                <section class="other-models container-fluid">
                            <a id="lines" class="anchor"></a>
                <div class="lines">
                    <h3>explore the range</h3>
                    <div class="row">
                                                                                                                                        <div class="col-sm-6 col-lg-4 line">
                                                                                                                                    <a href="/boats/powerboat/9-merry-fisher/656-merry-fisher-605">
                                    <div role="presentation" class="image">
                                        <img src="https://app.jeanneau.com/uploads/boat/shape/669a46df8b5bb331584833.png" alt="Merry Fisher 605 │ Merry Fisher of 6m │ Boat Moteurs Jeanneau" class="img-responsive">
                                    </div>
                                    <h4 class="name">Merry Fisher 605</h4>
                                                                            <div class="resume">
                                            <p>All the qualities of a large Jeanneau</p>
                                        </div>
                                                                        <button class="btn btn-primary">See details</button>
                                </a>
                            </div>
                                                                                                                                        <div class="col-sm-6 col-lg-4 line">
                                                                                                                                    <a href="/boats/powerboat/9-merry-fisher/657-merry-fisher-795">
                                    <div role="presentation" class="image">
                                        <img src="https://app.jeanneau.com/uploads/boat/shape/669a460c96f2c682793619.png" alt="Merry Fisher 795 │ Merry Fisher of 7m │ Boat Moteurs Jeanneau" class="img-responsive">
                                    </div>
                                    <h4 class="name">Merry Fisher 795</h4>
                                                                            <div class="resume">
                                            <p>Ideal weekender for experiencing moments of pure pleasure</p>
                                        </div>
                                                                        <button class="btn btn-primary">See details</button>
                                </a>
                            </div>
                                                                                                                                                                                                    <div class="col-sm-6 hidden-sm hidden-md col-lg-4 line">
                                                                                                                                    <a href="/boats/powerboat/9-merry-fisher/683-merry-fisher-1295-fly">
                                    <div role="presentation" class="image">
                                        <img src="https://app.jeanneau.com/uploads/boat/shape/66b4e5b8cdd90696600478.png" alt="Merry Fisher 1295 Fly │ Merry Fisher of 13m │ Boat Moteurs Jeanneau" class="img-responsive">
                                    </div>
                                    <h4 class="name">Merry Fisher 1295 Fly</h4>
                                                                            <div class="resume">
                                            <p>Combining Elegance and Comfort on Board</p>
                                        </div>
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