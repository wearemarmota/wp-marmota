<section class="desktop-search">
    <form role="search" method="get" action="<?php echo esc_url(home_url( '/' )); ?>">
        <input type="search" placeholder="<?php echo esc_attr(__("Buscar", "marmota")); ?>" value="<?php echo get_search_query() ?>" name="s" aria-label="<?php echo esc_attr(__("Buscar", "marmota")); ?>">
        <button class="close-search" type="button">
            <?php echo __("ESC", "marmota"); ?>
            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                <path fill="#FFFFFF" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
            </svg>
        </button>
    </form>
</section>
