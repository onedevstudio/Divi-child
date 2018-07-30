<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
  <?php
    printf(
      '<input type="search" class="search-field input" placeholder="%1$s" value="%2$s" name="s" title="%3$s" />',
      esc_attr__('Search &hellip;', 'Divi'),
      get_search_query(),
      esc_attr__('Search for:', 'Divi')
    );
  ?>
</form>