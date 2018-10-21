<div class="row">
    <div class="col-12 col-lg-8 offset-0 offset-lg-2">
    
        <article class="detail my-4">

            <h1 class="text-center"><?php the_title(); ?></h1>

            <?php if(has_post_thumbnail()): ?>
            <a href="<?php the_permalink(); ?>" class="embed-responsive embed-responsive-16by9 featured-image mb-4" style="background-image: url(<?php echo get_the_post_thumbnail_url(null, 'post-thumbnail'); ?>">
                <?php
                $categories = get_the_category(); 
                if( isset($categories[0]) ): $category = $categories[0];
                ?>
                <object><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="featured-image-badge"><?php echo esc_html($category->name); ?></a></object>
                <?php endif; ?>
            </a>
            <?php endif; ?>

            <?php get_template_part('context', 'detail'); ?>
            
            <main>
                <?php the_content(); ?>
            </main>

        </article>
        
    </div>
</div>