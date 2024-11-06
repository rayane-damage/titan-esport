        <figure class="hero_img">
            <?php the_post_thumbnail( 'thumbnail' ); ?>            
        </figure>
        <article class="hero_card">
            <h2 class="hero_card-title">
                <?php the_title() ?>
            </h2>
            <div class="hero_card-main">
                <?php the_content(); ?>
                <a class="hero_card-link" href="#"><?php get_field('hero_link')?></a>                
            </div>

        </article>