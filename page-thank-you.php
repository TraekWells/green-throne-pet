<?php get_header(); ?>
    <main>
      <header class="hero">
        <div class="container container--narrow">
        <h1><?php the_title(); ?></h1>
        </div>
      </header>
      <section>
        <div class="container container--narrow">
          <div class="cols">
            <div class="col">
              <?php the_content(); ?>
              <section class="text-center">
                <a href="<?php echo site_url('/'); ?>" class="button button__primary center-block">Go to Homepage</a>
              </section>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php get_footer(); ?>
