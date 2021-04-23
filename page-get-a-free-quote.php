<?php get_header(); ?>
    <main>
      <header class="hero">
        <div class="container container--narrow">
        <h1>Get a Free Quote</h1>
        <p class="subtitle">I just need a little bit more information about your yard... and then what?</p>
        </div>
      </header>
      <section>
        <div class="container container--narrow">
          <form action="#" class="form">
            <div class="two-column-grid">
              <div class="col">
                <h3>Service Information</h3>
                  <p>Placeat occaecati repudiandae veritatis ratione et et aperiam maxime et.</p>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="name">Zip Code</label>
                  <input
                    type="text"
                    id="zip-code"
                    placeholder="Enter your Zip Code"
                    name="zip-code"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="how-often">Select how often to clean</label>
                  <select name="how-often" id="how-often">
                    <option value="once">One Time Cleanup</option>
                    <option value="once-per-week">Once Per Week</option>
                    <option value="twice-per-week">Twice Per Week</option>
                  </select>
                </div>
                <div class="form-group">
                <label for="cleaned-last">When was the last time your yard was cleaned?</label>
                  <select name="cleaned-last" id="cleaned-last">
                    <option value="1-2-weeks">1-2 Weeks</option>
                    <option value="3-4-weeks">3-4 Weeks</option>
                    <option value="1-2-months">1-2 Months</option>
                    <option value="3-4-months">3-4 Months</option>
                    <option value="5-months-or-more">5+ Months</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="yard-size">What is the size of your yard?</label>
                  <select name="yard-size" id="yard-size">
                    <option value="quarter-acre">1/4 Acre</option>
                    <option value="half-acre">1/2 Acre</option>
                    <option value="more-than-half-acre">1/2 Acre+</option>
                  </select>
                </div>
                <div class="form-group">
                  <p>What area needs scooping?</p>
                  <label for="back-yard">Back Yard</label>
                  <input type="checkbox" name="back-yard" id="back-yard">
                  <label for="front-yard">Front Yard</label>
                  <input type="checkbox" name="front-yard" id="front-yard">
                  <label for="both">Both</label>
                  <input type="checkbox" name="both" id="both">
                </div>
              </div>
              <section class="form__full-width text-center">
                <h2>Estimated Cost</h2>
                <div class="price-blocks">
                  <div class="price-block">
                    <h4 class="price-block__title">One-time Cleanup</h4>
                    <h3 class="price-block__price">$20.00*</h3>
                    <p class="price-block__text">*This is just an estimate. I’ll give you the exact quote when I see the yard.</p>
                  </div>
                  <div class="price-block disabled">
                    <h4 class="price-block__title">Once per week</h4>
                    <h3 class="price-block__price">$10.00*</h3>
                    <p class="price-block__text">*per cleanup</p>
                  </div>
                  <div class="price-block disabled">
                    <h4 class="price-block__title">Twice per week</h4>
                    <h3 class="price-block__price">$6.00*</h3>
                    <p class="price-block__text">*per cleanup</p>
                  </div>
                </div>
                <p>No payment is necessary at this time. Contact us to receive your exact quote! </p>
              </section>
              <div class="col">
                <h3>Contact Information</h3>
                <p>Placeat occaecati repudiandae veritatis ratione et et aperiam maxime et.</p>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="first-name">First Name</label>
                  <input
                    type="text"
                    id="first-name"
                    placeholder="Enter your first name"
                    name="first-name"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="last-name">Last Name</label>
                  <input
                    type="text"
                    id="last-name"
                    placeholder="Enter your last name"
                    name="last-name"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="email-address">Email Address</label>
                  <input
                    type="text"
                    id="email-address"
                    placeholder="Enter your email address"
                    name="email-address"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="phone-number">Phone Number</label>
                  <input
                    type="tel"
                    id="phone-number"
                    placeholder="Enter your phone number"
                    name="phone-number"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="address-1">Address</label>
                  <input
                    type="text"
                    id="address-1"
                    placeholder="Address Line 1"
                    name="address-1"
                    required
                  />
                  <input
                    type="text"
                    id="address-2"
                    placeholder="Address Line 2"
                    name="address-2"
                    required
                  />
                </div>
              </div>
              <div class="col">
                <h3>Pet Information</h3>
                <p>Placeat occaecati repudiandae veritatis ratione et et aperiam maxime et.</p>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="yard-safe">Is it safe for us to be in the yard with your dog?</label>
                  <input
                    type="radio"
                    id="first-name"
                    placeholder="Enter your first name"
                    name="first-name"
                    required
                  />
                </div>
                <div class="form-group">
                  <p>How would you like me to contact you?</p>
                  <label for="call">Call Me</label>
                  <input type="checkbox" name="call" id="call">
                  <label for="text">Text Me</label>
                  <input type="checkbox" name="text" id="text">
                  <label for="email">Email Me</label>
                  <input type="checkbox" name="email" id="email">
                </div>
                <button class="button button__primary">Get Started</button>
              </div>
            </div>
          </form>
        </div>
      </section>
    </main>
<?php get_footer(); ?>
