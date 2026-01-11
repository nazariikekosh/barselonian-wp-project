<?php
$page_title = get_field('page_title');
$page_desc  = get_field('page_title_description');
?>

<section class="page-title">
  <div class="page-title__content content-container">

    <?php if ($page_title): ?>
    <h2 class="page-title__content-title">
      <?php echo esc_html($page_title); ?>
    </h2>
    <?php endif; ?>

    <?php if ($page_desc): ?>
    <p class="page-title__content-paragraph">
      <?php echo wp_kses_post($page_desc); ?>
    </p>
    <?php endif; ?>

  </div>
</section>