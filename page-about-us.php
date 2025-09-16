<?php
/**
 * Template Name: About Us
 */
get_header();
?>

<main id="primary" class="site-main">
  <section class="container-fluid contact" id="about-us">
    <img src="https://www.jeanneau.com/images/jeanneau-white-small.svg"/>

    <div class="agency-form">
      <div class="big-title">
        <h3>About Jeanneau</h3>
      </div>

      <div id="about-us-collapse" aria-multiselectable="true" role="tablist">
        <ul class="links-collapse nav justify-content-center" style="gap:.75rem; list-style:none; padding-left:0;">
          <li class="nav-item">
            <a class="nav-link active js-link-history" href="#js-collapse-history" role="button" aria-expanded="true" aria-controls="js-collapse-history">
              Our Heritage
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-link-values" href="#js-collapse-values" role="button" aria-expanded="false" aria-controls="js-collapse-values">
              Our Values
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-link-innovation" href="#js-collapse-innovation" role="button" aria-expanded="false" aria-controls="js-collapse-innovation">
              Innovation
            </a>
          </li>
        </ul>

        <!-- OUR HERITAGE SECTION -->
        <div id="js-collapse-history" class="step-panel" data-step="history" style="display:block;">
          <div class="row">
            <div class="col-sm-12">
              <div class="postal-address">
                <div class="row">
                  <div class="col-sm-8">
                    <h4>A Legacy of Excellence Since 1957</h4>
                    <p class="unsetFontSize">
                      Founded in 1957 by Henri Jeanneau in Les Herbiers, France, Jeanneau has grown from a small family business into one of the world's leading boat manufacturers. What started as a vision to create exceptional sailing and motor boats has evolved into a legacy of innovation, craftsmanship, and maritime excellence.
                    </p>
                    <p class="unsetFontSize">
                      For over six decades, we have been passionate about designing and building boats that inspire adventure, create memories, and bring families together on the water. Our commitment to quality and innovation has made us a trusted name among boating enthusiasts worldwide.
                    </p>
                  </div>
                  <div class="col-sm-4">
                    <div role="presentation" class="image">
                      <img src="https://app.jeanneau.com/uploads/boat/cover/6824c285325c3133819474.jpg" 
                           alt="Jeanneau Heritage" 
                           class="img-responsive" 
                           style="width: 80%; height: auto; border-radius: 8px; object-fit: cover;">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <h4>Key Milestones</h4>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="form-group">
                          <div class="control-label required">1957</div>
                          <p>Henri Jeanneau founds the company in Les Herbiers, France</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <div class="control-label required">1964</div>
                          <p>Launch of the first fiberglass sailboat</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <div class="control-label required">Today</div>
                          <p>Leading manufacturer with global presence</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="submit">
                  <a class="btn btn-primary btn-agency" href="#js-collapse-values" data-step-go="values" role="button" aria-controls="js-collapse-values">
                    Our Values
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- OUR VALUES SECTION -->
        <div id="js-collapse-values" class="step-panel" data-step="values" style="display:none;">
          <div class="row">
            <div class="col-sm-12">
              <div class="postal-address">
                <div class="row">
                  <div class="col-sm-12">
                    <h4>What Drives Us</h4>
                    <p class="unsetFontSize">
                      At Jeanneau, our values guide everything we do. From the initial design concept to the final delivery, we are committed to excellence in every detail.
                    </p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="control-label required">Innovation</label>
                      <p>We continuously push the boundaries of boat design and technology, incorporating the latest advances to enhance performance, comfort, and safety.</p>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="control-label required">Craftsmanship</label>
                      <p>Every Jeanneau boat is built with meticulous attention to detail, combining traditional boat-building skills with modern manufacturing techniques.</p>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="control-label required">Sustainability</label>
                      <p>We are committed to protecting the marine environment through responsible manufacturing practices and sustainable design solutions.</p>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label required">Customer Focus</label>
                      <p>Our customers are at the heart of everything we do. We listen to their needs and dreams to create boats that exceed expectations.</p>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label required">Global Community</label>
                      <p>We foster a worldwide community of Jeanneau owners, dealers, and maritime enthusiasts who share our passion for the sea.</p>
                    </div>
                  </div>
                </div>

                <div class="row nota-container">
                  <div class="col-sm-12">
                    <div class="nota">Building Dreams Since 1957</div>
                  </div>
                </div>

                <div class="submit">
                  <a class="btn btn-primary btn-agency" href="#js-collapse-innovation" data-step-go="innovation" role="button" aria-controls="js-collapse-innovation">
                    Innovation & Technology
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- INNOVATION SECTION -->
        <div id="js-collapse-innovation" class="step-panel" data-step="innovation" style="display:none;">
          <div class="row">
            <div class="col-sm-8">
              <h4>Leading Maritime Innovation</h4>
              <p class="unsetFontSize">
                Innovation is in our DNA. From pioneering fiberglass construction to developing advanced hull designs and smart boat technologies, Jeanneau has always been at the forefront of maritime innovation.
              </p>

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label">Design Excellence</label>
                    <p>Our partnership with world-renowned naval architects and designers ensures that every Jeanneau boat combines performance, comfort, and aesthetic appeal.</p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label">Advanced Manufacturing</label>
                    <p>State-of-the-art production facilities and cutting-edge manufacturing processes ensure consistent quality and precision in every boat we build.</p>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label class="control-label">Smart Boat Technology</label>
                    <p>We integrate the latest digital technologies and smart systems to enhance the boating experience, from navigation aids to comfort systems and connectivity solutions.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="agency-list-header">
                <div class="header">Our Ranges</div>
              </div>
              <div class="agency-list">
                <div class="agency-choose">
                  <div class="control-label required">Sailboats</div>
                  <p class="dealer-choose">Sun Odyssey, Jeanneau Yachts, Sun Fast</p>
                </div>
                <div class="agency-choose">
                  <div class="control-label required">Powerboats</div>
                  <p class="dealer-choose">Cap Camarat, Leader, Merry Fisher</p>
                </div>
                <div class="agency-choose">
                  <div class="control-label required">Motoryachts</div>
                  <p class="dealer-choose">Prestige, NC Series</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <p class="unsetFontSize">
                Today, Jeanneau continues to set new standards in the marine industry. Our commitment to innovation, combined with our respect for maritime traditions, ensures that every Jeanneau boat delivers an exceptional experience on the water.
              </p>
              <p class="unsetFontSize">
                Join the Jeanneau family and discover why boating enthusiasts around the world choose our boats for their adventures at sea.
              </p>
            </div>
          </div>
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
              <img src="https://www.jeanneau.com/images/62bac9c52298d541040229.png"
                   alt="Cap Camarat 5.5 CC │ Cap Camarat Center Console of 5m │ Boat Moteurs Jeanneau"
                   class="img-responsive">
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
              <img src="https://www.jeanneau.com/images/62bac9f3dad94923988863.png"
                   alt="Cap Camarat 7.5 CC │ Cap Camarat Center Console of 7m │ Boat Moteurs Jeanneau"
                   class="img-responsive">
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
              <img src="https://www.jeanneau.com/images/62bd5f3f6ac81712196835.png"
                   alt="Cap Camarat 10.5 CC │ Cap Camarat Center Console of 11m │ Boat Moteurs Jeanneau"
                   class="img-responsive">
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

<?php get_footer(); ?>

<!-- JS to switch between sections -->
<script>
  (function() {
    function show(stepId) {
      document.querySelectorAll('.step-panel').forEach(p => p.style.display = 'none');
      var el = document.querySelector(stepId);
      if (el) el.style.display = 'block';

      // Update active tab classes
      document.querySelectorAll('.links-collapse .nav-link').forEach(a => a.classList.remove('active'));
      var tab = document.querySelector('.links-collapse .nav-link[href="' + stepId + '"]');
      if (tab) tab.classList.add('active');
    }

    // Click handlers on the tabs
    document.querySelectorAll('.links-collapse .nav-link').forEach(a => {
      a.addEventListener('click', function(e) {
        e.preventDefault();
        show(this.getAttribute('href'));
      });
    });

    // Navigation buttons between sections
    document.querySelectorAll('[data-step-go]').forEach(btn => {
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        var step = this.getAttribute('data-step-go');
        show('#js-collapse-' + step);
      });
    });
  })();
</script>