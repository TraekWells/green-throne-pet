<?php get_header(); ?>
    <main>
      <header class="hero">
        <div class="container container--narrow">
          <?php if (isset($_GET['zip-code'])) { ?>
            <h1>Sweet, I can work in <?php echo $_GET['zip-code']; ?></h1>
            <?php
          } else { ?>
            <h1>Get a Free Quote</h1>
          <?php } ?>
        <p class="subtitle">I just need a little bit more information about your yard... and then what?</p>
        </div>
      </header>
      <section>
        <div class="container container--narrow">
          <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" class="form" id="form" name="quote-form" method="post">
            <div class="two-column-grid">
              <div class="col">
                <h3>Service Information</h3>
                  <p><?php echo get_field('service_information'); ?></p>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="name">Zip Code</label>
                  <input
                    type="text"
                    id="zip-code"
                    placeholder="Enter your Zip Code"
                    name="zipCode"
                    pattern="[0-9]{5}"
                    title="5 digit zip code"
                    <?php if (isset($_GET['zip-code'])) { ?> value="<?php echo $_GET['zip-code']; ?>" <?php } ?>
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="howMany">How many dogs do you have</label>
                  <select name="howMany" id="howMany" v-model="howManyDogs" @change="updatePricing">
                    <option value="one" selected>1 Dog</option>
                    <option value="twoToThree">2-3 Dogs</option>
                    <option value="fourToFive">4-5 Dogs</option>
                  </select>
                </div>
                <div class="form-group">
                <label for="cleanedLast">When was the last time your yard was cleaned?</label>
                  <select name="cleanedLast" id="cleanedLast" v-model="cleanedLast" @change="updatePricing">
                    <option value="oneToTwoWeeks" selected>1-2 Weeks</option>
                    <option value="threeToFourWeeks">3-4 Weeks</option>
                    <option value="oneToTwoMonths">1-2 Months</option>
                    <option value="threeToFourMonths">3-4 Months</option>
                    <option value="fiveOrMoreMonths">5+ Months</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="howOften">Select how often to clean</label>
                  <select name="howOften" id="howOften" v-model="howOften">
                    <option value="oneTime" selected>One Time Cleanup</option>
                    <option value="oncePerWeek">Once Per Week</option>
                    <option value="twicePerWeek">Twice Per Week</option>
                    <option value="everyOtherWeek">Every Other Week</option>
                  </select>
                </div>
                <div class="form-group">
                  <p>What is the size of your yard?</p>
                  <div class="custom-inputs">
                    <div class="custom-input">
                      <input type="radio" name="yardSize" id="quarterAcre" value="quarterAcre" required>
                      <label for="quarterAcre">1/4 Acre</label>
                    </div>
                    <div class="custom-input">
                      <input type="radio" name="yardSize" id="halfAcre" value="halfAcre">
                      <label for="halfAcre">1/2 Acre</label>
                    </div>
                    <div class="custom-input">
                      <input type="radio" name="yardSize" id="moreThanHalfAcre" value="moreThanHalfAcre">
                      <label for="moreThanHalfAcre">1/2 Acre +</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <p>What area needs scooping?</p>
                  <div class="custom-inputs">
                    <div class="custom-input">
                      <input type="radio" name="whatArea" id="backYard" value="backYard" required>
                      <label for="backYard">Back Yard</label>
                    </div>
                    <div class="custom-input">
                      <input type="radio" name="whatArea" id="frontYard" value="frontYard">
                      <label for="frontYard">Front Yard</label>
                    </div>
                    <div class="custom-input">
                      <input type="radio" name="whatArea" id="both" value="both">
                      <label for="both">Both</label>
                    </div>
                  </div>
                </div>
              </div>
              <section class="form__full-width text-center pt-0">
                <h2>Estimated Cost</h2>
                <div class="price-blocks">
                  <div class="price-block" :class="{ 'selected' : howOften == 'oneTime'}">
                    <h4 class="price-block__title">One-time Cleanup</h4>
                    <h3 class="price-block__price">${{ oneTime}}</h3>
                  </div>
                  <div class="price-block" :class="{ 'selected' : howOften == 'oncePerWeek'}">
                    <h4 class="price-block__title">Once Per Week</h4>
                    <h3 class="price-block__price">${{ oncePerWeek}}*</h3>
                    <p class="price-block__text">per cleanup</p>
                  </div>
                  <div class="price-block" :class="{ 'selected' : howOften == 'twicePerWeek'}">
                    <h4 class="price-block__title">Twice Per Week</h4>
                    <h3 class="price-block__price">${{ twicePerWeek}}*</h3>
                    <p class="price-block__text">per cleanup</p>
                  </div>
                  <div class="price-block" :class="{ 'selected' : howOften == 'everyOtherWeek'}">
                    <h4 class="price-block__title">Every Other Week</h4>
                    <h3 class="price-block__price">${{ everyOtherWeek}}*</h3>
                    <p class="price-block__text">per cleanup</p>
                  </div>
                </div>
                <p class="lead-text mt-3">*Plus a one-time, initial cleanup fee of ${{ initialCleanupFee }}</p>
              </section>
              <div class="col">
                <h3>Contact Information</h3>
                <p><?php echo get_field('contact_information'); ?></p>
              </div>
              <div class="col">
                <div class="form-group">
                  <label for="first-name">First Name</label>
                  <input
                    type="text"
                    id="first-name"
                    placeholder="Enter your first name"
                    name="firstName"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="last-name">Last Name</label>
                  <input
                    type="text"
                    id="last-name"
                    placeholder="Enter your last name"
                    name="lastName"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="email-address">Email Address</label>
                  <input
                    type="text"
                    id="email-address"
                    placeholder="Enter your email address"
                    name="emailAddress"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="phone-number">Phone Number</label>
                  <input
                    type="tel"
                    id="phone-number"
                    placeholder="Enter your phone number"
                    name="phoneNumber"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="address-1">Address</label>
                  <input
                    type="text"
                    id="address-1"
                    placeholder="Address Line 1"
                    name="address1"
                    class="mb-2"
                    required
                  />
                  <input
                    type="text"
                    id="address-2"
                    placeholder="Address Line 2"
                    name="address2"
                  />
                </div>
              </div>
              <div class="col">
                <h3>Pet Information</h3>
                <p><?php echo get_field('pet_information'); ?></p>
              </div>
              <div class="col">
              <div class="form-group">
                  <p>Is it safe for us to be in the yard with your dog?</p>
                  <div class="custom-inputs">
                    <div class="custom-input">
                      <input type="radio" name="yardSafe" id="yes" value="yes" required>
                      <label for="yes">Yes</label>
                    </div>
                    <div class="custom-input">
                      <input type="radio" name="yardSafe" id="no" value="no">
                      <label for="no">No</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <p>How would you like me to contact you?</p>
                  <div class="custom-inputs">
                    <div class="custom-input">
                      <input type="checkbox" name="contactMethod" value="call" id="call" required>
                      <label for="call">Call Me</label>
                    </div>
                    <div class="custom-input">
                      <input type="checkbox" name="contactMethod" value="text" id="text">
                      <label for="text">Text Me</label>
                    </div>
                    <div class="custom-input">
                      <input type="checkbox" name="contactMethod" value="email" id="email">
                      <label for="email">Email Me</label>
                    </div>
                  </div>
                </div>
                <button class="button button__primary mt-4" name="submit">Get Started</button>
              </div>
            </div>
            <input type="hidden" name="action" value="send_quote_form">
          </form>
        </div>
      </section>
    </main>
<?php get_footer(); ?>
