    <?php
    $title = get_field('title_hero');
    $image = get_field('image_hero');
    ?>

    <section class="hero-page" style="background-image: url(<?php echo esc_url($image); ?>);">
      <div class="hero-page__content content-container">
        <?php if ($title): ?>
        <h1 class="hero-page__content-title"><?php echo esc_html($title); ?></h1>
        <?php endif; ?>

      </div>
    </section>