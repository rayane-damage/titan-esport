<?php get_header();?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('hero')?>
    <?php get_template_part('team-card')?>
<?php endwhile; ?>
<?php endif; ?>  
<?php get_footer();?>