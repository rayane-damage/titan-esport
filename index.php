<?php get_header();?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
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
    <?php get_template_part('tournoi')?>
    <?php endwhile; ?>
    <?php endif; ?>  
    <?php get_template_part('team-card')?>
    <?php
        $args = array(
            'post_type' => 'equipes',
            'posts_per_page' => -1,
        );
        $team_query = new WP_Query( $args );
        if( $team_query->have_posts() ): 
            while( $team_query->have_posts() ): $team_query->the_post();
    ?>
    <?php get_template_part('match-card')?>
    <?php endwhile; ?>
    <?php endif; ?>  
<?php endwhile; ?>
<?php endif; ?>  
<?php get_footer();?>