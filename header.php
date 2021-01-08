<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Louison Dupont</title>

    <?php wp_head(); ?>
    
  </head>

  <body <?php body_class('demo'); ?>>

  <?php wp_body_open(); ?>
  
    <header>
      <div class="content_left">
        <a class ="anim_box" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg"></a>
      </div>
      <div class="content_right">
        <nav>
          <ul class="navlink">
            <a href="#">
              <li>Work</li>
            </a>
            <a href="#">
              <li>About</li>
            </a>
            <a href="#">
              <li>Contact</li>
            </a>
          </ul>
        </nav>
      </div>
    </header>