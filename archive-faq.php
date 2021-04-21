<?php 
/* Template Name: FAQs Page */
get_header(); ?>
    <main>
      <header class="hero">
        <div class="container container--narrow">
          <h1>About Green Throne</h1>
        </div>
      </header>
      <section>
        <div class="container container--narrow">
          <div class="cols">
            <div class="col">
              <?php
                $faqQuery = new WP_Query(array(
                  'post_type' => 'faq',
                  'posts_per_page' => -1
                ));
                if ( $faqQuery->have_posts() ) : 
                  while ( $faqQuery->have_posts() ) : $faqQuery->the_post();
                  ?>
                  <h2 class="text-left"><?php the_title(); ?></h2>
                  <p><?php the_content(); ?></p>

                  <?php
                  endwhile;
                endif;
                wp_reset_postdata();
              ?>
            </div>
          </div>
        </div>
      </section>
      <?php get_template_part('./template-parts/get-a-quote'); ?>
    </main>
<?php get_footer(); ?>
