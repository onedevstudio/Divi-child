<form role="search" method="get" class="et-search-form" action="<?php echo esc_url(home_url('/')); ?>">
  <?php
    printf(
      '<input type="search" class="et-search-field" placeholder="%1$s" value="%2$s" name="s" title="%3$s" />',
      esc_attr__('Search &hellip;', 'Divi'),
      get_search_query(),
      esc_attr__('Search for:', 'Divi')
    );
  ?>
	<button type="submit" id="searchsubmit_header"></button>
</form>