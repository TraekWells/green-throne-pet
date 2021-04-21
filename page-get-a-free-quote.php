<?php get_header(); ?>
    <main>
      <header class="hero">
        <div class="container container--narrow">
        <h1><?php the_title(); ?></h1>
        <p class="subtitle">I just need a little bit more information about your yard... and then what?</p>
        </div>
      </header>
      <section>
        <div class="container container--narrow">
          <div class="cols">
            <div class="col">
              <h3>Service Information</h3>
              <p>Placeat occaecati repudiandae veritatis ratione et et aperiam maxime et.</p>
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
              <button class="button button__primary">Get Started</button>
            </form>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php get_footer(); ?>
