<?php get_header();?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('hero')?>
    <?php get_template_part('team-card')?>
    <?php
        $args = array(
            'post_type' => 'equipes',
            'posts_per_page' => -1,
        );
        $the_query = new WP_Query( $args );
        if( $the_query->have_posts() ): 
            while( $the_query->have_posts() ): $the_query->the_post();
            $ID = get_the_id();
            $equipe_1 = get_post_meta($ID, 'equipe_1', true);
    ?>
    <?php get_template_part('match-card', null, array(
        'id' => $equipe_1,
    ))
    
    ?>

<?php endwhile; ?>
<?php endif; ?>  
<?php endwhile; ?>
<?php endif; ?>  
<?php get_footer();?>