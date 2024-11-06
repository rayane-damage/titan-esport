        <img class="hero_img" src="assets/imgs/home_hero.webp" alt="hero img">
        <article class="hero_card">
            <h2 class="hero_card-title">
                <?php the_title() ?>
            </h2>
            <div class="hero_card-main">
                <?php the_content(); ?>
                <a class="hero_card-link" href="#"><?php the_field('hero_link')?></a>                
            </div>

        </article>