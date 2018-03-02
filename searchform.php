<?php
/**
 * custom search form
 */
?>
<div class="widget">
    <form id="search-form" class="form-inline form" role="form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="search-wrap">
        <button class="search-button animate" type="submit" title="Start Search">
            <i class="fa fa-search"></i>
        </button>
        <input id="search-input" class="form-control search-field"  type="search" placeholder="<?php echo esc_attr( 'Search...', 'presentation' ); ?>" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" />
        </div>
    </form>
</div>