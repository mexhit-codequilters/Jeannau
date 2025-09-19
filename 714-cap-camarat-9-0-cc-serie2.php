<?php
/**
 * Template Name: Cap Camarat 9.0 cc
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
                                                            <img src="https://app.jeanneau.com/uploads/media/image/exterior/981ad051e08d90191d2c95f7b9ef02b6.jpg" alt=" 31061"
                                     class="img-responsive ">
                                                    </div>
                                    </div>
                <div class="header-title">
                    <div class="header"></div>
                    <h1 class="baseline">Cap Camarat 9.0 CC Serie2</h1>
                                    </div>
            </div>
        
                <div class="boat-nav row">
            <div class="col-xs-6 col-sm-2 item-nav item-nav-blue boat-name">
                <div>Cap Camarat 9.0 CC Serie2</div>
            </div>
            <div class="col-sm-5 item-nav item-nav-inline d-sm-none">
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
                <a href="/boats/powerboat/5-cap-camarat-center-console/714-cap-camarat-9-0-cc-serie2" itemprop="item"><span itemprop="name">Cap Camarat 9.0 CC Serie2</span></a>
                <meta itemprop="position" content="5" />
            </li>
            </ul>
</div>
                <section class="container-fluid">
            <div class="boat-content row ">
                <div class="col-xs-12 col-sm-8">
                                            <a id="points" class="anchor"></a>
                        <div class="points">
                            <div class="baseline">THE FAMILY DAY BOAT. WITH EACH NEW WAVE, A NEW EXPERIENCE</div>

                            
                            <div class="content">
                                <p>The <strong>Cap Camarat 9.0 CC Series 2 </strong>embodies<strong> a contemporary vision of fun at sea</strong>: an<strong> intuitive, high-performance, family day boat</strong> enabling you to make the most of every moment, whether for a sporty outing, an afternoon of relaxation, or an improvised getaway.</p>
                            </div>
                        </div>
                                    </div>
                <div class="col-xs-12 col-sm-4">
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
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/0ea6c53a800145ce67213c3f661c8a16.jpg')"
                 title="Cap Camarat 9.0 CC Serie2 - Cruising Experience at the Heart of Your Agenda">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 content-block">
            <h3 class="white">Cruising Experience at the Heart of Your Agenda</h3>
            <div class="text-content white"><p>The <strong>Cap Camarat 9.0 CC Series 2 </strong>is the<strong> family boat, par excellence</strong>, combining<strong> comfort and performance</strong>.</p><p>With her <strong>streamlined hull design and styling</strong>, you can enjoy <strong>smooth cruising in all weather</strong>. The <strong>secure windscreen </strong>and <strong>excellent ventilatio</strong>n provide <strong>optimal comfort for all on board</strong>.</p><p>The<strong> central helm station</strong>, equipped with <strong>copilot seating</strong>, enables you to share a <strong>sporty cruising experience</strong>.</p><p>She features <strong>remarkable manoeuvrability</strong>, with a <strong>bowthruster connected to a joystick for a boat that is easy to handle</strong>, even for a novice, with <strong>reactivity and precision</strong>.</p><p>The <strong>full-sized display screen features the latest generation in navigation tools</strong> to guide you on all your day cruises.</p><p>This<strong> fun new day boat </strong>is ideal for<strong> enjoying fast, comfortable cruising on the water</strong>.</p></div>
            
        </div>
        <div class="col-sm-6 image-block no-padding d-sm">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/0ea6c53a800145ce67213c3f661c8a16.jpg')"
                 title="Cap Camarat 9.0 CC Serie2 - Cruising Experience at the Heart of Your Agenda">
            </div>
        </div>
    </div>
                                    
                                                                
                                                                            <div class="block">
        <div class="col-xs-12 col-sm-6 image-block no-padding">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/d8f0b8af77eef9ea8f451f088982739e.jpg')"
                 title="Cap Camarat 9.0 CC Serie2 - Life Onboard Turned Toward the Exterior">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 content-block even">
            <h3>Life Onboard Turned Toward the Exterior</h3>
            <div class="text-content"><p>Each living space aboard the <strong>Cap Camarat 9.0 CC Series 2 </strong>has been <strong>designed for you to experience special shared moments</strong>.</p><p>Portside, the <strong>large terrace</strong>, a key element for a boat of this category, invites extended moments of relaxation at the water’s edge.</p><p><strong>Space for sunbathing and swimming</strong>! Whether you are seeking shared moments around<strong> an inviting cockpit table</strong>, tranquillity and a <strong>clear, open deck for fishing</strong>, or a moment for relaxing in the sun on the <strong>spacious sundeck</strong>, the <strong>modular cockpit </strong>adapts to suit all preferences!</p><p><strong>Multiple versions</strong> will <strong>suit your cruising plans to perfection</strong>, for an onboard experience to reflect you.</p></div>
            
        </div>
    </div>
                                    
                                                                
                                                                        <div class="block">
        <div class="col-xs-12 image-block no-padding d-sm-none">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/a30802d2f7cdab6e8d47afb2133c685f.jpg')"
                 title="Cap Camarat 9.0 CC Serie2 - A Practical, Optimised Interior Layout">
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 content-block">
            <h3 class="white">A Practical, Optimised Interior Layout</h3>
            <div class="text-content white"><p>On the interior, the layout combines<strong> simplicity and efficiency</strong>, with<strong> well-ventilated living spaces and optimised storage</strong>.</p><p>The <strong>companionway’s wide steps</strong> provide<strong> easy, safe access to the interior</strong>.</p><p>The layout and furnishings feature<strong> a wide range of functionality</strong>.&nbsp;</p><p><strong>Options may be added</strong> for an even more comfortable life on bord: <strong>shower compartment</strong>, <strong>separate head with plexiglass partition</strong>, <strong>upholstery pack with mattress aft</strong>…&nbsp;</p><p>The cabin of the <strong>Cap Camarat 9.0 CC Series 2</strong> is truly<strong> a cosy nest</strong>, ideal for a refreshing siesta, for little ones or adults, making this boat your <strong>perfect partner for a day at sea</strong>.</p></div>
            
        </div>
        <div class="col-sm-6 image-block no-padding d-sm">
            <div class="img-block" style="background-image:url('https://app.jeanneau.com/uploads/media/image/exterior/a30802d2f7cdab6e8d47afb2133c685f.jpg')"
                 title="Cap Camarat 9.0 CC Serie2 - A Practical, Optimised Interior Layout">
            </div>
        </div>
    </div>
                                                </section>
        
                
                <a id="videos" class="anchor"></a>
        
                
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
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/caa40b62eb7349a8c8d2fbfd06c88a2e.jpg" class="gallery-show"
                                               title="Cap Camarat 9.0 CC Serie2"
                                               id="gallery-exterior_1">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/caa40b62eb7349a8c8d2fbfd06c88a2e.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/caa40b62eb7349a8c8d2fbfd06c88a2e.jpg"
                                                     alt="Cap Camarat 9.0 CC Serie2 │ Cap Camarat Center Console of 8m │ Boat Moteurs Jeanneau 31089"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/722a5d6ed13195681e260040b07d14b0.jpg" class="gallery-show"
                                               title="Cap Camarat 9.0 CC Serie2"
                                               id="gallery-exterior_2">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/722a5d6ed13195681e260040b07d14b0.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/722a5d6ed13195681e260040b07d14b0.jpg"
                                                     alt="Cap Camarat 9.0 CC Serie2 │ Cap Camarat Center Console of 8m │ Boat Moteurs Jeanneau 31093"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/f9df9df105344633b40239c5cf05734c.jpg" class="gallery-show"
                                               title="Cap Camarat 9.0 CC Serie2"
                                               id="gallery-exterior_3">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/f9df9df105344633b40239c5cf05734c.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/f9df9df105344633b40239c5cf05734c.jpg"
                                                     alt="Cap Camarat 9.0 CC Serie2 │ Cap Camarat Center Console of 8m │ Boat Moteurs Jeanneau 31094"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/edec87dc2a5615f009a650acedfffedc.jpg" class="gallery-show"
                                               title="Cap Camarat 9.0 CC Serie2"
                                               id="gallery-exterior_4">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/edec87dc2a5615f009a650acedfffedc.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/edec87dc2a5615f009a650acedfffedc.jpg"
                                                     alt="Cap Camarat 9.0 CC Serie2 │ Cap Camarat Center Console of 8m │ Boat Moteurs Jeanneau 31095"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/631af6e0e31a8837b009f15b0683a8ee.png" class="gallery-show"
                                               title="Cap Camarat 9.0 CC Serie2"
                                               id="gallery-exterior_5">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/631af6e0e31a8837b009f15b0683a8ee.png"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/631af6e0e31a8837b009f15b0683a8ee.png"
                                                     alt="Cap Camarat 9.0 CC Serie2 │ Cap Camarat Center Console of 8m │ Boat Moteurs Jeanneau 31213"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item exterior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/exterior/hd/de62ac2603e1facaeceed57e7b6c88ba.png" class="gallery-show"
                                               title="Cap Camarat 9.0 CC Serie2"
                                               id="gallery-exterior_6">
                                                <img class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/exterior/sd/de62ac2603e1facaeceed57e7b6c88ba.png"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/exterior/sd/de62ac2603e1facaeceed57e7b6c88ba.png"
                                                     alt="Cap Camarat 9.0 CC Serie2 │ Cap Camarat Center Console of 8m │ Boat Moteurs Jeanneau 31214"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                    </div>

                                                            </div>
                        
                                                    <div id="js-collapse-gallery-interior" class="collapse">
                                <div class="gallery-interior">
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/2c628916d2e130eb697f7cdd9632f6a6.jpg" class="gallery-show"
                                               title="Cap Camarat 9.0 CC Serie2"
                                               id="gallery-interior_1">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/2c628916d2e130eb697f7cdd9632f6a6.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/2c628916d2e130eb697f7cdd9632f6a6.jpg"
                                                     alt="base_alt  31092"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/ccee1aaa12a11ecf172a7dda8d992d13.jpg" class="gallery-show"
                                               title="Cap Camarat 9.0 CC Serie2"
                                               id="gallery-interior_2">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/ccee1aaa12a11ecf172a7dda8d992d13.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/ccee1aaa12a11ecf172a7dda8d992d13.jpg"
                                                     alt="base_alt  31090"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/294f273236e763dc44dcdbf0ebd16ce5.jpg" class="gallery-show"
                                               title="Cap Camarat 9.0 CC Serie2"
                                               id="gallery-interior_3">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/294f273236e763dc44dcdbf0ebd16ce5.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/294f273236e763dc44dcdbf0ebd16ce5.jpg"
                                                     alt="base_alt  31091"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/d18994b0bdc82011668b90717b891e42.jpg" class="gallery-show"
                                               title="Cap Camarat 9.0 CC Serie2"
                                               id="gallery-interior_4">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/d18994b0bdc82011668b90717b891e42.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/d18994b0bdc82011668b90717b891e42.jpg"
                                                     alt="base_alt  31096"/>
                                                <div class="hover-image">
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                                                                                                                                                                                                                                                                                                                    <div class="gallery_item interior paysage display">
                                            <a href="https://app.jeanneau.com/uploads/media/image/interior/hd/4c0bc12dbdaf8f80459e61555cd7ae8c.jpg" class="gallery-show"
                                               title="Cap Camarat 9.0 CC Serie2"
                                               id="gallery-interior_5">
                                                <img aria-hidden="true" class="lazy"
                                                     src="https://app.jeanneau.com/uploads/media/image/interior/sd/4c0bc12dbdaf8f80459e61555cd7ae8c.jpg"
                                                     data-src="https://app.jeanneau.com/uploads/media/image/interior/sd/4c0bc12dbdaf8f80459e61555cd7ae8c.jpg"
                                                     alt="base_alt  31097"/>
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
                                            <a title="Cap Camarat 9.0 CC Serie2"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/7fb5c3beb5baf8b57727784f4ffca476.png">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/7fb5c3beb5baf8b57727784f4ffca476.png"
                                                     alt="Cap Camarat 9.0 CC Serie2 │ Cap Camarat Center Console of 8m │ Boat Moteurs Jeanneau  31055"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                            <div class="slide">
                                            <a title="Cap Camarat 9.0 CC Serie2"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/f1d22a53f1bb5a45fb9405d37022096f.png">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/f1d22a53f1bb5a45fb9405d37022096f.png"
                                                     alt="Cap Camarat 9.0 CC Serie2 │ Cap Camarat Center Console of 8m │ Boat Moteurs Jeanneau  31056"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                            <div class="slide">
                                            <a title="Cap Camarat 9.0 CC Serie2"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/be83718a932c7c1b6b5ddf1ebc8322ec.png">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/be83718a932c7c1b6b5ddf1ebc8322ec.png"
                                                     alt="Cap Camarat 9.0 CC Serie2 │ Cap Camarat Center Console of 8m │ Boat Moteurs Jeanneau  31057"
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                                                            <div class="slide">
                                            <a title="Cap Camarat 9.0 CC Serie2"
                                               href="https://app.jeanneau.com/uploads/media/image/layout/hd/a41ef933f926b4ca3a1fef3804432482.png">
                                                <img src="https://app.jeanneau.com/uploads/media/image/layout/sd/a41ef933f926b4ca3a1fef3804432482.png"
                                                     alt="Cap Camarat 9.0 CC Serie2 │ Cap Camarat Center Console of 8m │ Boat Moteurs Jeanneau  31058"
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
                                    <span class="val">8.3 m / 27&#039;3&quot;</span>
                                </div>
                                                                                        <div class="value">
                                    <i class="icon icon-hull-length-powerboat"></i>
                                    <span class="title">Hull length</span>
                                    <span class="val">7.96 m / 26&#039;1&quot;</span>
                                </div>
                                                                                                                                                                                                                                    <div class="value">
                                    <i class="icon icon-hull-draft"></i>
                                    <span class="title">Hull Draft</span>
                                    <span class="val">0.65 m / 2&#039;2&quot;</span>
                                </div>
                                                                                                                                                <div class="value">
                                    <i class="icon icon-fuel-capacity"></i>
                                    <span class="title">Fuel capacity</span>
                                    <span class="val">2 x 200 l / 2 x 53 US gal</span>
                                </div>
                                                                                        <div class="value">
                                    <i class="icon icon-water-capacity"></i>
                                    <span class="title">Water capacity</span>
                                    <span class="val">100 l / 26 US gal</span>
                                </div>
                                                                                                                                                <div class="value">
                                    <i class="icon icon-ce-category"></i>
                                    <span class="title">CE Category</span>
                                    <span class="val">B-8  / C-11 (IN PROGRESS)
                                        
                                        
                                        
                                    </span>
                                </div>
                                                    </div>
                        <div class="buttons">
                                                                        <a class="btn btn-primary" href="https://app.jeanneau.com/inventory/31130" target="_blank"
       title="Inventaire (Opens in a new window)"
       download="2025-0068_PRINT_INV_MOTEUR_2025_CAP_CAM_9.0_CC_GB_07-25.pdf"
            
            
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


<?php get_footer(); ?>
                