    <article class="match_card">
        <div class="match_banner">
            <figure class="match_banner-img"><?php the_post_thumbnail(); ?></figure>
        </div>
        <div class="match_card-teams">
            <div class="match_card-teamInfos">
                <a class="teamInfos_name" href="<?php the_permalink()?>"><?php $ekip1 = get_field('equipe_1'); 
                    var_dump($ekip1);?>
                </a>
                <h6 class="teamInfos_score"><?php $scor = get_field('score'); 
                    var_dump($scor);?></h6>
            </div>
            <h5 class="match_card-vs">VS</h5>
            <div class="match_card-teamInfos">
                <a class="teamInfos_name" href="<?php the_permalink()?>"><?php $ekip2 = get_field('equipe_2'); 
                    var_dump($ekip2);?>
                </a>
                <h6 class="teamInfos_score"><?php $ekip2 = get_field('score_2'); 
                    var_dump($scor2);?></h6>
            </div>
        </div>
    </article>