<?php get_header();?>
    <article class="team_page">
        <h1 class="team_page-title">
            <?php the_title(); ?>
        </h1>
        <figure class="team_page-img">
            <?php the_post_thumbnail( 'thumbnail' ); ?>            
        </figure>
        <div class="team_infos">
            <h2 class="title">Infos équipe</h2>
            <span class="line"></span>
            <?php the_content(); ?>
            <a class="team_infos-edit" href="#">modifier les infos</a>
        </div>   
        <div class="team_members">
            <h2 class="title">Membres</h2>
            <span class="line"></span>
            <ul class="team_members-list">
                <li class="team_row team_row-item">
                    @<?php $memb1 = get_field('member1'); 
                        $user_info = get_userdata($memb1);
                        echo $user_info->user_nicename;
                    ?>
                </li>
                <li class="team_row team_row-item">
                    @<?php $memb2 = get_field('member2'); 
                        $user_info = get_userdata($memb2);
                        echo $user_info->user_nicename;
                    ?>
                </li>
                <li class="team_row team_row-item">
                    @<?php $memb3 = get_field('member3'); 
                        $user_info = get_userdata($memb3);
                        echo $user_info->user_nicename;
                    ?>
                </li>
                <li class="team_row team_row-item">
                    @<?php $memb4 = get_field('member4'); 
                        $user_info = get_userdata($memb4);
                        echo $user_info->user_nicename;
                    ?>
                </li>
                <li class="team_row team_row-item">
                    @<?php $memb5 = get_field('member5'); 
                        $user_info = get_userdata($memb5);
                        echo $user_info->user_nicename;
                    ?>
                </li>
                <li class="team_row team_row-item">
                    @<?php $memb6 = get_field('member6'); 
                        $user_info = get_userdata($memb6);
                        echo $user_info->user_nicename;
                    ?>
                </li>
            </ul>
        </div>   
    </article>
<?php get_footer();?>