<?php
$travel_links = get_field('travel_links');
?>

<?php if ($travel_links): ?>
  <section class="travel content-container">

    <?php foreach ($travel_links as $item): ?>
      <div class="travel__links">
        <a href="<?php echo esc_url($item['travel_url']); ?>" class="travel__links-item">
          <span class="travel__links-item-title">
            <?php echo esc_html($item['travel_title']); ?>
          </span>

          <span class="travel__links-item-sub-title">
            <?php echo esc_html($item['travel_location']); ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m6 9 9 9 9-9" />
            </svg>
          </span>
        </a>
      </div>
    <?php endforeach; ?>

  </section>
<?php endif; ?>