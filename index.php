<?php get_header();?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
    <section class="content">
        <?php get_template_part('hero')?>


        <?php
            $tourargs = array(
                'post_type' => 'tournoi',
                'posts_per_page' => 1,
            );
            $tour_query = new WP_Query( $tourargs );
            if( $tour_query->have_posts() ): 
                while( $tour_query->have_posts() ): $tour_query->the_post();
        ?>
        <section class="page_section">
            <div class="page_title">
                <h2 class="title title_offset"><?php the_title() ?></h2>
                <span class="line"></span>
            </div>
            <?php get_template_part('tournoi')?>
        </section>
        <?php endwhile; ?>
        <?php endif; ?> 


        <section class="page_section team_section">
            <h2 class="title title_incard">équipes</h2>
            <div class="teams">
                <?php
                    $teamargs = array(
                        'post_type' => 'equipe',
                        'posts_per_page' => -1,
                    );
                    $team_query = new WP_Query( $teamargs );
                    if( $team_query->have_posts() ): 
                        while( $team_query->have_posts() ): $team_query->the_post();
                ?>
                <?php get_template_part('team-card')?>   
                <?php endwhile; ?>
                <?php endif; ?>              
            </div>
        </section>


        <?php
            $matchargs = array(
                'post_type' => 'equipes',
                'posts_per_page' => -1,
            );
            $match_query = new WP_Query( $matchargs );
            if( $match_query->have_posts() ): 
                while( $match_query->have_posts() ): $match_query->the_post();
        ?>
        <?php get_template_part('match-card')?>
        <?php endwhile; ?>
        <?php endif; ?>  
    </section>
<?php endwhile; ?>
<?php endif; ?>  
<?php get_footer();?>