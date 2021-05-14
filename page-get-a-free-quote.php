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
          <form action="#" class="form" id="form">
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
                      <input type="radio" name="yardSize" id="quarterAcre" value="quarterAcre">
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
                      <input type="radio" name="whatArea" id="backYard" value="backYard">
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
              <section class="form__full-width text-center">
                <h2>Estimated Cost</h2>
                <div class="price-blocks">
                  <div class="price-block" :class="{ 'selected' : howOften == 'oneTime'}">
                    <h4 class="price-block__title">One-time Cleanup</h4>
                    <h3 class="price-block__price">${{ oneTime}}</h3>
                    <p class="price-block__text">*This is just an estimate. I’ll give you the exact quote when I see the yard.</p>
                  </div>
                  <div class="price-block" :class="{ 'selected' : howOften == 'oncePerWeek'}">
                    <h4 class="price-block__title">Once per week</h4>
                    <h3 class="price-block__price">${{ oncePerWeek}}</h3>
                    <p class="price-block__text">*per cleanup</p>
                  </div>
                  <div class="price-block" :class="{ 'selected' : howOften == 'twicePerWeek'}">
                    <h4 class="price-block__title">Twice per week</h4>
                    <h3 class="price-block__price">${{ twicePerWeek}}</h3>
                    <p class="price-block__text">*per cleanup</p>
                  </div>
                  <div class="price-block" :class="{ 'selected' : howOften == 'everyOtherWeek'}">
                    <h4 class="price-block__title">Every other week</h4>
                    <h3 class="price-block__price">${{ everyOtherWeek}}</h3>
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
                    class="mb-2"
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
                  <p>Is it safe for us to be in the yard with your dog?</p>
                  <div class="custom-inputs">
                    <div class="custom-input">
                      <input type="radio" name="yard-safe" id="yes" value="yes">
                      <label for="yes">Yes</label>
                    </div>
                    <div class="custom-input">
                      <input type="radio" name="yard-safe" id="no" value="no">
                      <label for="no">No</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <p>How would you like me to contact you?</p>
                  <div class="custom-inputs">
                    <div class="custom-input">
                      <input type="checkbox" name="call" id="call">
                      <label for="call">Call Me</label>
                    </div>
                    <div class="custom-input">
                      <input type="checkbox" name="text" id="text">
                      <label for="text">Text Me</label>
                    </div>
                    <div class="custom-input">
                      <input type="checkbox" name="email" id="email">
                      <label for="email">Email Me</label>
                    </div>
                  </div>
                </div>
                <button class="button button__primary mt-4">Get Started</button>
              </div>
            </div>
          </form>
        </div>
      </section>
    </main>
<?php get_footer(); ?>
