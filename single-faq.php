<?php 
/* Template Name: FAQs Page */
get_header(); ?>
    <main>
      <header class="hero">
        <div class="container container--narrow">
          <h1><?php the_title(); ?></h1>
        </div>
      </header>
      <section>
        <div class="container container--narrow">
          <p><?php the_content(); ?></p>
        </div>
      </section>
      <?php get_template_part('./template-parts/get-a-quote'); ?>
    </main>
<?php get_footer(); ?>
