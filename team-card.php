<article class="team_card">
    <figure class="team_card-img">
        <?php the_post_thumbnail( 'thumbnail' ); ?>                
    </figure>
    <a href="<?php the_permalink(); ?>">
        <h1 class="team_card-title">
            <?php the_title(); ?>
        </h1>
    </a>
    <span class="line"></span>
    <div class="team_card-list">
        <ul class="team_row">
            <li class="team_row-item">@<?php $memb1 = get_field('member1'); 
                    $user_info = get_userdata($memb1);
                    echo $user_info->user_nicename;
                ?>
            </li> 
            <li class="team_row-item">@<?php $memb2 = get_field('member2'); 
                    $user_info = get_userdata($memb2);
                    echo $user_info->user_nicename;
                ?>
            </li> 
        </ul>
        <ul class="team_row">
            <li class="team_row-item">@<?php $memb3 = get_field('member3'); 
                    $user_info = get_userdata($memb3);
                    echo $user_info->user_nicename;
                ?>
            </li> 
            <li class="team_row-item">@<?php $memb4 = get_field('member4'); 
                    $user_info = get_userdata($memb4);
                    echo $user_info->user_nicename;
                ?>
            </li> 
        </ul>  
        <ul class="team_row">
            <li class="team_row-item">@<?php $memb5 = get_field('member5'); 
                    $user_info = get_userdata($memb5);
                    echo $user_info->user_nicename;
                ?>
            </li> 
            <li class="team_row-item">@<?php $memb6 = get_field('member6'); 
                    $user_info = get_userdata($memb6);
                    echo $user_info->user_nicename;
                ?>
            </li> 
        </ul>       
    </div>
</article>