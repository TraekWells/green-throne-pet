<?php 
  get_header(); 
  require_once( __DIR__ . '/options.php');
  $options_options = get_option( 'options_option_name' );
  $phoneNumber = $options_options['phone_number'];
  $email = $options_options['email_address'];
  $instagram = $options_options['instagram'];
  $facebook = $options_options['facebook'];
?>
    <main>
      <header class="hero">
        <div class="container container--narrow">
        <h1><?php the_title(); ?></h1>
        </div>
      </header>
      <section>
        <div class="container container--narrow">
          <div class="two-column-grid">
            <div class="col">
              <div class="about">
                <img
                  src="<?php echo get_the_post_thumbnail_url(); ?>"
                  alt=""
                  class="about__image"
                />
                <div class="about__socials">
                  <a href="tel:<?php echo trim($phoneNumber); ?>" class="about__social-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
                  </a>
                  <a href="mailto:<?php echo trim($email); ?>" class="about__social-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
                  </a>
                  <a href="https://www.instagram.com/<?php echo trim($instagram); ?>/" class="about__social-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path
                        fill="none"
                        fill-rule="evenodd"
                        stroke="#323232"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M7.496 3h9c2.48 0 4.49 2.01 4.49 4.496v9c0 2.48-2.02 4.49-4.5 4.49H7.47c-2.49 0-4.496-2.02-4.496-4.5V7.47c0-2.49 2.01-4.496 4.496-4.496Z"
                      />
                      <g
                        stroke-linecap="round"
                        stroke-width="1.5"
                        stroke="#323232"
                        fill="none"
                        stroke-linejoin="round"
                      >
                        <path
                          d="M16.94 6.713c-.19 0-.34.15-.34.33 0 .18.15.33.33.33 .18 0 .33-.16.33-.34 0-.19-.16-.34-.34-.34"
                        />
                        <path
                          fill="none"
                          fill-rule="evenodd"
                          stroke="#323232"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="1.5"
                          d="M14.54 9.45c1.4 1.4 1.4 3.68 0 5.09 -1.41 1.4-3.69 1.4-5.1 0 -1.41-1.41-1.41-3.69-.001-5.1 1.4-1.41 3.68-1.41 5.09-.001"
                        />
                      </g>
                      <path
                        fill="none"
                        d="M0 0h24v24H0Z"
                        transform="rotate(-90 12 12)"
                      />
                    </svg>
                  </a>
                  <a href="https://www.facebook.com/<?php echo trim($facebook); ?>/" class="about__social-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <g fill="none">
                        <path d="M0 0h24v24H0Z" />
                        <g
                          stroke-linecap="round"
                          stroke-width="1.5"
                          stroke="#323232"
                          fill="none"
                          stroke-linejoin="round"
                        >
                          <path d="M9.684 11.314h4.631" />
                          <path
                            d="M14.316 7.455h-.81c-1.26 0-2.28 1.02-2.28 2.27v.81 6"
                          />
                          <path d="M12 2a10 10 0 1 0 0 20 10 10 0 1 0 0-20Z" />
                        </g>
                      </g>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="col">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </section>
      <?php get_template_part('./template-parts/get-a-quote'); ?>
    </main>
<?php get_footer(); ?>
