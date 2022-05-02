<?php get_header(); ?>
    <main>
      <header class="hero">
        <div class="container container--narrow">
        <h1><?php the_title(); ?></h1>
        <?php if (get_field('subtitle')) { ?>
          <p class="subtitle">
            <?php echo get_field('subtitle'); ?>
          </p>
        <?php }; ?>
        </div>
      </header>
      <section>
        <div class="container container--narrow">
          <div class="cols">
            <div class="col">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </section>
      <?php get_template_part('./template-parts/get-a-quote'); ?>
    </main>
<?php get_footer(); ?>
