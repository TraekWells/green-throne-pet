<section>
  <div class="container">
    <div class="get-a-quote">
      <img src="https://picsum.photos/id/237/200/300" alt="" class="get-a-quote__image" />
      <div class="get-a-quote__content">
        <h3>Get a Free Quote</h3>
        <p class="mb-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur
          assumenda minus provident ratione rem officiis!
        </p>
        <form class="form" action="<?php echo site_url(); ?>/wp-admin/admin-post.php" method="get">
          <div class="form-group form-group--inline">
            <input
            type="text"
            id="zip-code-widget"
            name="zip-code"
            placeholder="Enter your Zip Code"
            required
            pattern="[0-9]{5}"
            title="5 digit zip code"
            />
            <label for="zip-code-widget">Enter your Zip Code</label>
            <input type="hidden" name="action" value="handle_zip_code">
            <button class="button button__primary">Get a Free Quote</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>