    <article class="match_card">
        <div class="match_banner">
            <figure class="match_banner-img"><?php the_post_thumbnail(); ?></figure>
            <figure class="match_banner-img"><?php the_post_thumbnail(); ?></figure>
        </div>
        <div class="match_card-teams">
            <div class="match_card-teamInfos">
                <h4 class="teamInfos_name"><?php the_title( ); ?></h4>
                <h6 class="teamInfos_score"><?php get_field('score'); ?></h6>
            </div>
            <h5 class="match_card-vs">VS</h5>
            <div class="match_card-teamInfos">
                <h4 class="teamInfos_name"><?php the_title( ); ?></h4>
                <h6 class="teamInfos_score"><?php get_field('score'); ?></h6>
            </div>
        </div>
    </article>