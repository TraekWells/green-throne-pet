<?php get_header(); ?>
  <header class="hero">
    <div class="container container--narrow">
      <?php if (isset($_GET['zip-code'])) { ?>
      <h1>Sorry</h1>
      <p class="subtitle">
      Currently, I can’t work outside of the Denver area. Send me a message and maybe we can work something out.
      </p>
      <?php } else { ?>
      <h1><?php the_title(); ?></h1>
      <p class="subtitle">
        Can’t find what you’re looking for? Send me a message and I’ll get
        back to you as soon as possible.
      </p>
      <?php } ?>
    </div>
  </header>
  <section>
    <div class="container container--narrow">
      <div class="two-column-grid">
        <div class="col">
          <p class="mb-4">
            <?php the_content(); ?>
          </p>
          <div class="contact-line">
            <svg
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
              class="contact-line__icon"
            >
              <g fill="none">
                <path d="M0 0h24v24H0Z" />
                <g
                  stroke-linecap="round"
                  stroke-width="1.5"
                  stroke="#323232"
                  fill="none"
                  stroke-linejoin="round"
                >
                  <path
                    d="M16 21H8c-1.11 0-2-.9-2-2V5c0-1.105.89-2 2-2h8c1.1 0 2 .895 2 2v14c0 1.1-.9 2-2 2Z"
                  />
                  <path
                    d="M11.999 17.25c-.14 0-.25.11-.25.25 0 .13.11.25.25.25 .13 0 .25-.12.25-.25 0-.14-.12-.25-.26-.25"
                  />
                  <path d="M10.75 6h2.5" />
                </g>
              </g>
            </svg>
            <div class="contact-line__text">
              <a href="#">(123) 456-7890</a>
            </div>
          </div>
          <div class="contact-line">
            <svg
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
              class="contact-line__icon"
            >
              <g
                stroke-linecap="round"
                stroke-width="1.5"
                stroke="#323232"
                fill="none"
                stroke-linejoin="round"
              >
                <path
                  d="M18.746 10.44l1.14-.78c.7-.48 1.12-1.27 1.12-2.114v0c0-1.41-1.15-2.56-2.56-2.56H5.55c-1.41 0-2.554 1.14-2.554 2.55v0c0 .84.42 1.63 1.121 2.11l1.141.77c4.06 2.75 9.408 2.75 13.47 0Z"
                />
                <path
                  d="M3 7.55v9.44c0 1.657 1.343 3 3 3h12c1.657 0 3-1.343 3-3V7.54"
                />
              </g>
              <path fill="none" d="M0 0h24v24H0V0Z" />
            </svg>
            <div class="contact-line__text">
              <a href="#">bailey.wells@yahoo.com</a>
            </div>
          </div>
          <div class="contact-line">
            <svg
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
              class="contact-line__icon"
            >
              <g fill="none">
                <path d="M0 0h24v24H0Z" />
                <g
                  stroke-linecap="round"
                  stroke-width="1.446"
                  stroke="#323232"
                  fill="none"
                  stroke-linejoin="round"
                >
                  <path
                    d="M5.12 10.045v-.18c0-3.8 3.077-6.873 6.87-6.873v0c3.79 0 6.87 3.077 6.87 6.873v.17c0 3.46-4.382 8.67-6.148 10.63 -.39.43-1.061.43-1.45 0 -1.766-1.96-6.148-7.17-6.148-10.64Z"
                  />
                  <path
                    d="M10 9.95c0 1.1.89 2 2 2v0c1.1 0 2-.9 2-2v-.04c0-1.11-.9-2-2-2v0c-1.11 0-2 .89-2 2"
                  />
                </g>
              </g>
            </svg>
            <div class="contact-line__text">
              <a href="#">123 Denver Lane, CO. 80014</a>
            </div>
          </div>
        </div>
        <div class="col">
          <form action="#" class="form">
            <div class="form-group">
              <label for="name">Name</label>
              <input
                type="text"
                id="name"
                placeholder="Enter your name"
                name="name"
                required
              />
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input
                type="email"
                id="email"
                placeholder="Enter your email address"
                name="email"
                required
              />
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input
                type="tel"
                id="phone"
                placeholder="Enter your phone number"
                name="phone"
              />
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea
                name="message"
                id="message"
                cols="30"
                rows="3"
                name="message"
                placeholder="How can I help you?"
              ></textarea>
            </div>
            <button class="button button__primary">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>