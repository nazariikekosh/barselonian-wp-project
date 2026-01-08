<?php
$before_title = get_field('page_desc_before_title');
$paragraphs = get_field('page_desc_content');
?>

<section class="page-description">

  <?php if ($before_title): ?>
    <div class="page-description__before">
      <p class="page-description__before-title">
        <?php echo nl2br(esc_html($before_title)); ?>
      </p>
    </div>
  <?php endif; ?>

  <?php if ($paragraphs): ?>
    <div class="page-description__content content-container">
      <?php foreach ($paragraphs as $item): ?>
        <p class="page-description__content-paragraph">
          <?php echo wp_kses_post($item['paragraph_text']); ?>
        </p>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>

</section>