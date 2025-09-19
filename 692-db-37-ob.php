<?php
/**
 * Template Name: DB/37 OB
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
                                                            <img src="https://app.jeanneau.com/uploads/media/image/exterior/7ac19fa2e3edbb90d6a73a068e241155.jpg" alt=" 26549"
                                     class="img-responsive ">
                                                    </div>
                                    </div>
                <div class="header-title">
                    <div class="header">NEW 2023</div>
                    <h1 class="baseline">DB/37 OB</h1>
                                    </div>
            </div>
        
                <div class="boat-nav row">
            <div class="col-xs-6 col-sm-2 item-nav item-nav-blue boat-name">
                <div>DB/37 OB</div>
            </div>
            <div class="col-sm-5 item-nav item-nav-inline d-sm-none">
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
                <a href="/boats/powerboat/44-db-yachts" itemprop="item"><span itemprop="name">DB Yachts</span></a>
                <meta itemprop="position" content="3" />
            </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="/boats/powerboat/44-db-yachts/692-db-37-ob" itemprop="item"><span itemprop="name">DB/37 OB</span></a>
                <meta itemprop="position" content="4" />
            </li>
            </ul>
</div>
                <section class="container-fluid">
            <div class="boat-content row ">
                <div class="col-xs-12 col-sm-8">
                                            <a id="points" class="anchor"></a>
                        <div class="points">
                            <div class="baseline">Experience All the Sensations on the Water</div>

                            
                            <div class="content">
                                <p>Aboard the DB/37 OB, pleasures on the water have 1,000 faces:&nbsp; the sensation of exhilarating&nbsp;speed while cruising offshore; relaxing into a gentler pace of life, surrounded by natural beauty while at anchor; and enjoying the comfort of a refined atmosphere on starry evenings in the cockpit saloon, or in the privacy of the interior.</p><p>&nbsp;</p><p><img style="aspect-ratio:1135/1036;" src="https://app.jeanneau.com/uploads/media/image/interior/f99c21aa9d36cff396742ab856c0c28c.png" width="200" height="182"></p>
                            </div>
                        </div>
                                    </div>
                <div class="col-xs-12 col-sm-4">
                                                                <div class="configuratorLink">
                            <a href="https://configurateur.jeanneau.com/en/configure/powerboat/44-db-yachts/692-db-37-ob" class="square" target="_blank">
                                <i class="icon icon-commander-brochure"></i>
                                Configure
                            </a>
                        </div>
                                        <div class="documents">
                                                                    <a href="https://app.jeanneau.com/viewer/brochure/30198"
           target="_blank"
           title="View the Brochure (Opens in a new window)"
           download="Brochure_DB37_2025_BD.pdf"
           class="square  a_class"
           id="a_id"        ><i class="icon icon-visualiser-brochure"></i>View the Brochure</a>
                                                        <a class="square"
                               href="/contact?brochures%5B%5D=44#brochure-form"><i
                                        class="icon icon-commander-brochure"></i>Request the Brochure
                            </a>
                                            </div>
                </div>
            </div>
        </section>

                            <section class="container-fluid blocks">
                                
                                                                
                                                                        <div class="block">
        <div class="col-xs-12 image-block no-padding d-sm-none">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/ef708f99ea9fe463c52250c1039370d7.jpg')"
                 title="DB/37 OB - A Unique Line Delivering Style and Performance">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 content-block">
            <h3 class="white">A Unique Line Delivering Style and Performance</h3>
            <div class="text-content white"><p>Elegance and power are at your service aboard the DB/37 OB. &nbsp;Boasting a distinguished, contemporary silhouette, as if sculpted, by Camillo Garroni, this premium day boat, with a hull designed by Michael Peters, demonstrates its full capacity while cruising. Fast, agile, and easy to handle, the DB/37 OB flies across the water, powered by twin outboard engines with 2x450 HP, promising impressive top speeds… to the thrill of the pilot.</p></div>
            
        </div>
        <div class="col-sm-6 image-block no-padding d-sm">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/ef708f99ea9fe463c52250c1039370d7.jpg')"
                 title="DB/37 OB - A Unique Line Delivering Style and Performance">
            </div>
        </div>
    </div>
                                    
                                                                
                                                                            <div class="block">
        <div class="col-xs-12 col-sm-6 image-block no-padding">
            <div class="img-block" style="background-image:url('ht<tps://app.jeanneau.com/uploads/media/image/exterior/7ac19fa2e3edbb90d6a73a068e241155.jpg')"
                 title="DB/37 OB - Sporty Cruising in Complete Safety">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 content-block even">
            <h3>Sporty Cruising in Complete Safety</h3>
            <div class="text-content"><p>Passengers are not forgotten aboard this sporty, yet protective boat, with a wide, integrated windscreen, two comfortable seats beside the pilot, two modular facing bench seats, which can be removed for an opening onto the sea… and for those who love the sea spray, a sundeck in the forward cockpit is accessible via two perfectly secure, recessed sidedecks.</p></div>
            
        </div>
    </div>
                                    
                                                                
                                                                        <div class="block">
        <div class="col-xs-12 image-block no-padding d-sm-none">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/8831c728e481fdfc03ec8c4fdb13e6b0.jpg')"
                 title="DB/37 OB - The Ideal Boat for Sharing Moments with Family and Friends">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 content-block">
            <h3 class="white">The Ideal Boat for Sharing Moments with Family and Friends</h3>
            <div class="text-content white"><p>The DB/37 OB offers exceptionally fluid movement on board. &nbsp;At anchor, her side terraces can be deployed for even more space on board. &nbsp;Access to the sea is also facilitated by her vast aft swim platform. &nbsp;Gathered around the cockpit table in the saloon, guests enjoy an uninterrupted field of view, open to the scenery and the horizon. &nbsp;Parties, dinner with friends, or soaking up the warmth of the sun between dives… the choice is yours. &nbsp;But that’s not all:&nbsp; designed for shared pleasures, this day boat invites you to extend your cruise, with her two bright and comfortable, spacious cabins.</p></div>
            
        </div>
        <div class="col-sm-6 image-block no-padding d-sm">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/8831c728e481fdfc03ec8c4fdb13e6b0.jpg')"
                 title="DB/37 OB - The Ideal Boat for Sharing Moments with Family and Friends">
            </div>
        </div>
    </div>
                                                </section>
        
                
                <a id="videos" class="anchor"></a>
        
                            <a id="panorama" class="anchor"></a>
            <section class="panorama container-fluid">
                <h3>Visit 360°</h3>

                                    <div class="panorama-body">
                        <object data="https://app.jeanneau.com/uploads/panorama/692-db-37-ob/index.html" type="text/html"></object>
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
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/5be7de4cce617e7c329632b4d58b8bf1.jpg" class="gallery-show"
                                               title="DB/37 OB"
                                               id="gallery-exterior_1">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/5be7de4cce617e7c329632b4d58b8bf1.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/5be7de4cce617e7c329632b4d58b8bf1.jpg"
                                                     alt="DB/37 OB │ DB Yachts of 12m │ Boat Moteurs Jeanneau 29177"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/2386253d3068f0130a42a911d015bc9c.jpg" class="gallery-show"
                                               title="DB/37 OB"
                                               id="gallery-exterior_2">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/2386253d3068f0130a42a911d015bc9c.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/2386253d3068f0130a42a911d015bc9c.jpg"
                                                     alt="DB/37 OB │ DB Yachts of 12m │ Boat Moteurs Jeanneau 29178"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/e0e7a8923080e344dc6dbb5572c02e71.jpg" class="gallery-show"
                                               title="DB/37 OB"
                                               id="gallery-exterior_3">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/e0e7a8923080e344dc6dbb5572c02e71.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/e0e7a8923080e344dc6dbb5572c02e71.jpg"
                                                     alt="DB/37 OB │ DB Yachts of 12m │ Boat Moteurs Jeanneau 29179"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/44a44ab277a303eeac7c81cdc23f2d64.jpg" class="gallery-show"
                                               title="DB/37 OB"
                                               id="gallery-exterior_4">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/44a44ab277a303eeac7c81cdc23f2d64.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/44a44ab277a303eeac7c81cdc23f2d64.jpg"
                                                     alt="DB/37 OB │ DB Yachts of 12m │ Boat Moteurs Jeanneau 29180"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/650541607a1c3d5bbf91712d31294009.jpg" class="gallery-show"
                                               title="DB/37 OB"
                                               id="gallery-exterior_5">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/650541607a1c3d5bbf91712d31294009.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/650541607a1c3d5bbf91712d31294009.jpg"
                                                     alt="DB/37 OB │ DB Yachts of 12m │ Boat Moteurs Jeanneau 29181"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/a0d6a92fa7df9baac34524617c454d0b.jpg" class="gallery-show"
                                               title="DB/37 OB"
                                               id="gallery-exterior_6">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/a0d6a92fa7df9baac34524617c454d0b.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/a0d6a92fa7df9baac34524617c454d0b.jpg"
                                                     alt="DB/37 OB │ DB Yachts of 12m │ Boat Moteurs Jeanneau 29182"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/35de0a65ca5c0bc602749bfb67f97f79.jpg" class="gallery-show"
                                               title="DB/37 OB"
                                               id="gallery-exterior_7">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/35de0a65ca5c0bc602749bfb67f97f79.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/35de0a65ca5c0bc602749bfb67f97f79.jpg"
                                                     alt="DB/37 OB │ DB Yachts of 12m │ Boat Moteurs Jeanneau 29183"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/3dadfd2834d708a8c490ef1eb71fa492.jpg" class="gallery-show"
                                               title="DB/37 OB"
                                               id="gallery-exterior_8">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/3dadfd2834d708a8c490ef1eb71fa492.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/3dadfd2834d708a8c490ef1eb71fa492.jpg"
                                                     alt="DB/37 OB │ DB Yachts of 12m │ Boat Moteurs Jeanneau 29184"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/5f2cc1da548e89fe7bee1a96854b2901.jpg" class="gallery-show"
                                               title="DB/37 OB"
                                               id="gallery-exterior_9">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/5f2cc1da548e89fe7bee1a96854b2901.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/5f2cc1da548e89fe7bee1a96854b2901.jpg"
                                                     alt="DB/37 OB │ DB Yachts of 12m │ Boat Moteurs Jeanneau 29185"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/e2c817d71e772d14cf04a45d5f844982.jpg" class="gallery-show"
                                               title="DB/37 OB"
                                               id="gallery-exterior_10">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/e2c817d71e772d14cf04a45d5f844982.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/e2c817d71e772d14cf04a45d5f844982.jpg"
                                                     alt="DB/37 OB │ DB Yachts of 12m │ Boat Moteurs Jeanneau 29186"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/bc863540978ac86ffcad26ceda708c76.jpg" class="gallery-show"
                                               title="DB/37 OB"
                                               id="gallery-exterior_11">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/bc863540978ac86ffcad26ceda708c76.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/bc863540978ac86ffcad26ceda708c76.jpg"
                                                     alt="DB/37 OB │ DB Yachts of 12m │ Boat Moteurs Jeanneau 29187"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                    </div>

                                                                    <button class="js-square-more exterior"><i class="icon icon-plus"></i></button>
                                                            </div>
                        
                                                    <div id="js-collapse-gallery-interior" class="collapse">
                                <div class="gallery-interior">
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior portrait display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/3b9a4eb1dd6f288801e2808bb02a21a2.jpg" class="gallery-show"
                                               title="DB/37 OB"
                                               id="gallery-interior_1">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/3b9a4eb1dd6f288801e2808bb02a21a2.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/3b9a4eb1dd6f288801e2808bb02a21a2.jpg"
                                                     alt="base_alt  31215"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior portrait display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/446c316587d67d2b7579e075eea8fa12.jpg" class="gallery-show"
                                               title="DB/37 OB"
                                               id="gallery-interior_2">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/446c316587d67d2b7579e075eea8fa12.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/446c316587d67d2b7579e075eea8fa12.jpg"
                                                     alt="base_alt  31216"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/4ec25a6af7cd055913f68f7df6c3cf25.jpg" class="gallery-show"
                                               title="DB/37 OB"
                                               id="gallery-interior_3">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/4ec25a6af7cd055913f68f7df6c3cf25.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/4ec25a6af7cd055913f68f7df6c3cf25.jpg"
                                                     alt="base_alt  31217"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/ee3e99abb0c10b7bb5cdf6b5395b4387.jpg" class="gallery-show"
                                               title="DB/37 OB"
                                               id="gallery-interior_4">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/ee3e99abb0c10b7bb5cdf6b5395b4387.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/ee3e99abb0c10b7bb5cdf6b5395b4387.jpg"
                                                     alt="base_alt  31218"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/33d3c81181bc2b8979a941c306f49d84.jpg" class="gallery-show"
                                               title="DB/37 OB"
                                               id="gallery-interior_5">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/33d3c81181bc2b8979a941c306f49d84.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/33d3c81181bc2b8979a941c306f49d84.jpg"
                                                     alt="base_alt  31219"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/6a46f01dce9f0aaf17a400fa47366296.jpg" class="gallery-show"
                                               title="DB/37 OB"
                                               id="gallery-interior_6">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/6a46f01dce9f0aaf17a400fa47366296.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/6a46f01dce9f0aaf17a400fa47366296.jpg"
                                                     alt="base_alt  31220"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/d3c43aabdbdb70773b4f297b68853ef2.jpg" class="gallery-show"
                                               title="DB/37 OB"
                                               id="gallery-interior_7">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/d3c43aabdbdb70773b4f297b68853ef2.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/d3c43aabdbdb70773b4f297b68853ef2.jpg"
                                                     alt="base_alt  31221"/>
                                                <div class="hover-image">
                                                    <span></span>
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
                               href="/jeanneau/designers/4-camillo-garroni">
                                <div class="image">
                                    <div class="lazy" data-bg="https://app.jeanneau.com/uploads/boat/designer/62b961aba5e39928396619.jpg"></div>
                                </div>
                                <div>
                                    <div class="name">Camillo Garroni</div>
                                    <div class="baseline">Garroni Design</div>
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
                                            <a title="DB/37 OB"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/872bec7e3334ba3eb5469477e971cbaf.jpg">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/872bec7e3334ba3eb5469477e971cbaf.jpg"
                                                     alt="DB/37 OB │ DB Yachts of 12m │ Boat Moteurs Jeanneau  28304"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                            <div class="slide">
                                            <a title="DB/37 OB"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/4377656c59df223093a2796e1339147c.jpg">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/4377656c59df223093a2796e1339147c.jpg"
                                                     alt="DB/37 OB │ DB Yachts of 12m │ Boat Moteurs Jeanneau DB/37 OB 26546"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                            <div class="slide">
                                            <a title="DB/37 OB"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/bb30991c9adc4221faf133b1010c7444.jpg">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/bb30991c9adc4221faf133b1010c7444.jpg"
                                                     alt="DB/37 OB │ DB Yachts of 12m │ Boat Moteurs Jeanneau DB/37 OB 26547"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                            <div class="slide">
                                            <a title="DB/37 OB"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/3e708da88880cb2758947ef1c7db74ff.png">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/3e708da88880cb2758947ef1c7db74ff.png"
                                                     alt="DB/37 OB │ DB Yachts of 12m │ Boat Moteurs Jeanneau DB/37 OB 26548"
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
                                    <span class="val">12.22 m / 40&#039;1&quot;</span>
                                </div>
                                                                                        <div class="value">
                                    <i class="icon icon-hull-length-powerboat"></i>
                                    <span class="title">Hull length</span>
                                    <span class="val">10.65 m / 34&#039;11&quot;</span>
                                </div>
                                                                                        <div class="value">
                                <i class="icon icon-hull-beam"></i>
                                <span class="title">Hull Beam</span>
                                <span class="val">3.56 m / 11&#039;8&quot;</span>
                                </div>                                                            <div class="value">
                                    <i class="icon icon-displacement"></i>
                                    <span class="title">Displacement</span>
                                    <span class="val">6437 kg / 14191 Lbs</span>
                                </div>
                                                                                        <div class="value">
                                    <i class="icon icon-keel-draught"></i>
                                    <span class="title">
                                                                              Standard Draft
                                                                          </span>
                                    <span class="val">1.17 m / 3&#039;10&quot;</span>
                                </div>
                                                                                                                                                                                                                                    <div class="value">
                                    <i class="icon icon-fuel-capacity"></i>
                                    <span class="title">Fuel capacity</span>
                                    <span class="val">2 x 480 l / 2 x 127 US gal</span>
                                </div>
                                                                                        <div class="value">
                                    <i class="icon icon-water-capacity"></i>
                                    <span class="title">Water capacity</span>
                                    <span class="val">250 l / 66 US gal</span>
                                </div>
                                                                                        <div class="value">
                                    <i class="icon icon-cabins"></i>
                                    <span class="title">Cabins</span>
                                    <span class="val">2</span>
                                </div>
                                                                                                            </div>
                        <div class="buttons">
                                                                        <a class="btn btn-primary" href="https://app.jeanneau.com/inventory/28319" target="_blank"
       title="Inventaire (Opens in a new window)"
       download="Inventaire_DB37_2024.pdf"
            
            
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
                                                                                                                                    <a href="/boats/powerboat/44-db-yachts/676-db-43-ob">
                                    <div role="presentation" class="image">
                                        <img src="https://app.jeanneau.com/uploads/boat/shape/628ddf34ba370574877165.png" alt="DB/43 OB │ DB Yachts of 14m │ Boat Moteurs Jeanneau" class="img-responsive">
                                    </div>
                                    <h4 class="name">DB/43 OB</h4>
                                                                            <div class="resume">
                                            <p>Outboard Version</p>
                                        </div>
                                                                        <button class="btn btn-primary">See details</button>
                                </a>
                            </div>
                                                                                                                                        <div class="col-sm-6 col-lg-4 line">
                                                                                                                                    <a href="/boats/powerboat/44-db-yachts/677-db-43-ib">
                                    <div role="presentation" class="image">
                                        <img src="https://app.jeanneau.com/uploads/boat/shape/628ddf2b1e2fa150629687.png" alt="DB/43 IB │ DB Yachts of 13m │ Boat Moteurs Jeanneau" class="img-responsive">
                                    </div>
                                    <h4 class="name">DB/43 IB</h4>
                                                                            <div class="resume">
                                            <p>Inboard Version</p>
                                        </div>
                                                                        <button class="btn btn-primary">See details</button>
                                </a>
                            </div>
                                                                                                                                                                                                    <div class="col-sm-6 hidden-sm hidden-md col-lg-4 line">
                                                                                                                                    <a href="/boats/powerboat/44-db-yachts/688-db-37-ib">
                                    <div role="presentation" class="image">
                                        <img src="https://app.jeanneau.com/uploads/boat/shape/63ce49c67bb94071033115.png" alt="DB/37 IB │ DB Yachts of 12m │ Boat Moteurs Jeanneau" class="img-responsive">
                                    </div>
                                    <h4 class="name">DB/37 IB</h4>
                                                                            <div class="resume">
                                            <p>Inboard Version</p>
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