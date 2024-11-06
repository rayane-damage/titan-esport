<?php get_header();?>
    <article class="team_page">
        <h1 class="title title_offset">
            <?php the_title(); ?>
        </h1>
        <figure class="team_page-img">
            <?php the_post_thumbnail( 'thumbnail' ); ?>
        </figure>

        <section class="content">
            <div class="team_infos">
                <div class="team_infos-title">
                    <h2 class="title title_offset">Infos équipe</h2>
                    <span class="line"></span>
                </div> 
                <div class="team_infos-content">
                    <?php the_content(); ?>
                </div>
                <a class="team_infos-edit" href="#">modifier les infos</a>
            </div>  
            <div class="team_members">
                <div class="team_members-title">
                    <h2 class="title title_offset">Membres</h2>
                    <span class="line"></span>
                </div>
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
        </section>
    </article>
<?php get_footer();?>