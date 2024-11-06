    <article class="match_card">
        <div class="match_banner">
            <figure class="match_banner-img"><?php the_post_thumbnail(); ?></figure>
        </div>
        <div class="match_card-teams">
            <div class="match_card-teamInfos">
                <a class="teamInfos_name" href="<?php the_permalink(27)?>">
                    team name
                </a>
                <h6 class="teamInfos_score"><?php $scor = get_field('score'); 
                    echo $scor;?></h6>
            </div>
            <h5 class="match_card-vs">VS</h5>
            <div class="match_card-teamInfos">
                <a class="teamInfos_name" href="<?php the_permalink(21)?>">
                    team name
                </a>
                <h6 class="teamInfos_score"><?php $scor2 = get_field('score_2'); 
                    echo $scor2;?></h6>
            </div>
        </div>
    </article>