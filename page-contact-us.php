<?php
/**
 * Template Name: Contact Us (Simple)
 */
get_header();
$contact_status = isset($_GET['contact_status']) ? $_GET['contact_status'] : '';
if ($contact_status): ?>
  <div style="text-align: center; padding: 15px; margin: 20px; border-radius: 5px;">
    <?php if ($contact_status === 'ok'): ?>
      <div style="background: #d4edda; color: #155724; border: 1px solid #c3e6cb; padding: 10px;">
        <strong>Success!</strong> Your message has been sent successfully. We'll contact you soon.
      </div>
    <?php elseif ($contact_status === 'nonce_fail'): ?>
      <div style="background: #f8d7da; color: #721c24; border: 1px solid #f1aeb5; padding: 10px;">
        <strong>Error!</strong> Security check failed. Please try again.
      </div>
    <?php elseif ($contact_status === 'db_error'): ?>
      <div style="background: #f8d7da; color: #721c24; border: 1px solid #f1aeb5; padding: 10px;">
        <strong>Error!</strong> There was a problem saving your message. Please try again.
      </div>
    <?php endif; ?>
  </div>
<?php endif;
?>

<main id="primary" class="site-main">
  <section class="container-fluid contact" id="contact-form">
    <img src="https://www.jeanneau.com/images/jeanneau-white-small.svg" />

    <div class="agency-form">
      <a href="" id="form" class="anchor"></a>

      <div class="big-title">
        <h3>Request to be contacted by a Dealer</h3>
      </div>

      <div id="contact-form-collapse" aria-multiselectable="true" role="tablist">
        <ul class="links-collapse nav justify-content-center" style="gap:.75rem; list-style:none; padding-left:0;">
          <li class="nav-item">
            <a class="nav-link active js-link-contact" href="#js-collapse-contact" role="button" aria-expanded="true" aria-controls="js-collapse-contact">
              1. Contact information
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-link-agency" href="#js-collapse-agency" role="button" aria-expanded="false" aria-controls="js-collapse-agency">
              2. Your home port
            </a>
          </li>
        </ul>

        <form name="model_contact"
              method="post"
              action="<?php echo esc_url( admin_url('admin-post.php') ); ?>"
              id="model_contact">
          <?php wp_nonce_field('contact_simple_nonce', 'contact_simple_nonce'); ?>
          <input type="hidden" name="action" value="submit_contact_simple" />

          <!-- STEP 1 -->
          <div id="js-collapse-contact" class="step-panel" data-step="contact" style="display:block;">
            <fieldset>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label required">Title *</label>
                    <div id="model_contact_civility" class="floatlabel" title="Title *">
                      <div class="radio">
                        <label for="model_contact_civility_0" class="required">
                          <input type="radio" id="model_contact_civility_0" name="model_contact[civility]" required value="mr" checked>
                          MR
                        </label>
                      </div>
                      <div class="radio">
                        <label for="model_contact_civility_1" class="required">
                          <input type="radio" id="model_contact_civility_1" name="model_contact[civility]" required value="ms">
                          MS
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="postal-address">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="control-label required" for="model_contact_first_name">First Name *</label>
                      <input type="text" id="model_contact_first_name" name="model_contact[first_name]" required class="floatlabel form-control" title="First Name *">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="control-label required" for="model_contact_last_name">Last Name *</label>
                      <input type="text" id="model_contact_last_name" name="model_contact[last_name]" required class="floatlabel form-control" title="Last Name *">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="control-label required" for="model_contact_email">Email *</label>
                      <input type="email" id="model_contact_email" name="model_contact[email]" required placeholder="example@email.com" class="floatlabel form-control" title="Email *">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="control-label" for="model_contact_phone">Mobile</label>
                      <input type="text" id="model_contact_phone" name="model_contact[phone]" class="floatlabel form-control" title="Mobile">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="control-label" for="model_contact_address_street">Address</label>
                      <input type="text" id="model_contact_address_street" name="model_contact[address_street]" class="floatlabel form-control" title="Address">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label class="control-label" for="model_contact_address_code">Postal code</label>
                      <input type="text" id="model_contact_address_code" name="model_contact[address_code]" class="floatlabel form-control" title="Postal code">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label" for="model_contact_address_locality">City</label>
                      <input type="text" id="model_contact_address_locality" name="model_contact[address_locality]" class="floatlabel form-control" title="City">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label required" for="model_contact_address_country">Country</label>
                      <div class="select-wrapper">
                        <select id="model_contact_address_country" name="model_contact[address_country]" style="width:100%" title="Country" class="form-control">
                          <!-- (Keeping your full country list as-is) -->
                          <option value="AL">Albania</option>
                          <option value="FR" selected>France</option>
                          <option value="US">United States</option>
                          <option value="GB">United Kingdom</option>
                          <!-- … add the rest of options you already had … -->
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label class="control-label required" for="model_contact_address_state">State/Province</label>
                      <div class="select-wrapper">
                        <select id="model_contact_address_state" name="model_contact[address_state]" class="floatlabel form-control" title="State/Province"></select>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group">
                      <label class="control-label" for="model_contact_message">Message</label>
                      <textarea id="model_contact_message" name="model_contact[message]" rows="10" class="form-control"></textarea>
                    </div>
                  </div>
                </div>

                <div class="row nota-container">
                  <div class="col-sm-12">
                    <div class="nota">* Required Fields</div>
                  </div>
                </div>

                <div class="submit">
                  <a class="btn btn-primary btn-agency" href="#js-collapse-agency" data-step-go="agency" role="button" aria-controls="js-collapse-agency">
                    Continue
                  </a>
                </div>
              </div>
            </fieldset>
          </div>

          <!-- STEP 2 -->
          <div id="js-collapse-agency" class="step-panel" data-step="agency" style="display:none;">
            <fieldset>
              <div class="row">
                <div class="col-sm-4 col-md-offset-2">
                  <div class="form-group">
                    <label for="model_contact_agency">Dealer</label>
                    <select id="model_contact_agency" style="width:100%;" class="form-control">
                      <option value="">Select a dealer...</option>
                      <option value="1">Marina Blue Coast</option>
                      <option value="2">Atlantic Boat Center</option>
                      <option value="3">Mediterranean Yachts</option>
                      <option value="4">Adriatic Marine</option>
                      <option value="5">Barcelona Nautical</option>
                      <option value="6">Miami Boat Sales</option>
                      <option value="7">San Diego Marine</option>
                      <option value="8">Thames Boating</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="model_contact_city">City/State/Country</label>
                    <select id="model_contact_city" style="width:100%;" class="form-control">
                      <option value="">Select a location...</option>
                      <option value="nice-fr">Nice, France</option>
                      <option value="larochelle-fr">La Rochelle, France</option>
                      <option value="marseille-fr">Marseille, France</option>
                      <option value="split-hr">Split, Croatia</option>
                      <option value="barcelona-es">Barcelona, Spain</option>
                      <option value="miami-us">Miami, USA</option>
                      <option value="sandiego-us">San Diego, USA</option>
                      <option value="london-uk">London, UK</option>
                    </select>
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
                    <input type="hidden" id="model_contact_agency_id" name="model_contact[agency_id]">
                  </div>
                </div>
                <div class="col-sm-8">
                  <div id="model_contact_map"
                       style="width: 100%; height: 500px;"
                       data-i18n-choose="Choose this dealer"
                       data-location="[-1.0318501,46.864698099999998]"
                       data-zoom="6"
                       data-mapbox-key="pk.eyJ1IjoiamVhbm5lYXVnaSIsImEiOiJjamg3bWN0MncwZDJjMzNzYXhmeDJ3NzRmIn0.ZHZwH5H5Mh-WO0SjVrRpRg"
                       data-category="outboard">
                  </div>
                </div>
              </div>
            </fieldset>

            <fieldset>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <div class="checkbox">
                      <label for="model_contact_receive_newsletter">
                        <input type="checkbox" id="model_contact_receive_newsletter" name="model_contact[receive_newsletter]" value="1">
                        I would like to receive the Jeanneau newsletter.
                      </label>
                    </div>
                  </div>
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
                  <p class="unsetFontSize">
                    We need to transfer the personal data required in this form to the dealer you have selected to process your request. This is to allow them to contact you. If you click on the "SEND" button, you are agreeing to the transfer of your personal data.
                  </p>
                </div>
              </div>
            </fieldset>

            <div class="submit">
              <button type="submit" class="btn btn-primary">Send</button>
            </div>

            <div>
              <p>JEANNEAU refers to SPBI, the data controller for all geographical zones, with the exception of the Americas zone for which Beneteau Group America Inc acts as data controller. Your personal data is processed in order to respond to your request, manage our relationship with you and, if you have so chosen, send you our communications (in this case, you may unsubscribe at any time by using the link contained in our mailings).</p>
              <p>To exercise your rights: contact.rgpd@beneteau-group.com</p>
              <p>To find out more about the protection of your personal data:
                <a href="https://www.beneteau-group.com/en/privacy-and-cookies-policy/" target="_blank" rel="noopener">privacy policy</a>
              </p>
            </div>
          </div>
        </form>
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

<!-- Minimal JS to switch steps without needing Bootstrap -->
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

    // "Continue" button in step 1
    var cont = document.querySelector('[data-step-go="agency"]');
    if (cont) {
      cont.addEventListener('click', function(e) {
        e.preventDefault();
        show('#js-collapse-agency');
      });
    }
  })();
</script>

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

    // "Continue" button in step 1
    var cont = document.querySelector('[data-step-go="agency"]');
    if (cont) {
      cont.addEventListener('click', function(e) {
        e.preventDefault();
        show('#js-collapse-agency');
      });
    }

    // Form validation before submission
    var form = document.getElementById('model_contact');
    if (form) {
      form.addEventListener('submit', function(e) {
        var requiredFields = form.querySelectorAll('[required]');
        var isValid = true;
        
        requiredFields.forEach(function(field) {
          if (!field.value.trim()) {
            field.style.borderColor = '#dc3545';
            isValid = false;
          } else {
            field.style.borderColor = '';
          }
        });
        
        if (!isValid) {
          e.preventDefault();
          alert('Please fill in all required fields.');
          return false;
        }
        
        // Show loading state
        var submitBtn = form.querySelector('button[type="submit"]');
        if (submitBtn) {
          submitBtn.innerHTML = 'Sending...';
          submitBtn.disabled = true;
        }
      });
    }

    // Clear URL parameters after showing status message
    if (window.location.search.includes('contact_status')) {
      setTimeout(function() {
        if (history.replaceState) {
          history.replaceState(null, null, window.location.pathname);
        }
      }, 5000);
    }
  })();
</script>
