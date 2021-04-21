<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
  </head>
  <body>
    <nav class="navigation">
      <div class="container container--wide">
        <a href="#">
          <img
            class="logo"
            src="<?php echo get_template_directory_uri(); ?>/images/green-throne-pet-logo.png"
            alt="Green Throne Pet Logo"
          />
        </a>
        <ul class="navigation__list">
          <li class="navigation__item">
            <a href="#" class="navigation__link">Service Area</a>
          </li>
          <li class="navigation__item">
            <a href="#" class="navigation__link">Pricing</a>
          </li>
          <li class="navigation__item">
            <a href="contact.html" class="navigation__link">Contact</a>
          </li>
          <li class="navigation__item">
            <a href="#" class="navigation__link">FAQ</a>
          </li>
        </ul>
        <div class="navigation__cta">
          <a href="#" class="button button__primary">Get a Free Quote</a>
        </div>
        <button class="hamburger hamburger--slider" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
        <div class="overlay"></div>
      </div>
    </nav>