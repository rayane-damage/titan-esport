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
                <li class="team_row-item">@</li>
                <li class="team_row-item">@</li>
                <li class="team_row-item">@</li>
                <li class="team_row-item">@</li>
                <li class="team_row-item">@</li>
                <li class="team_row-item">@</li>
            </ul>
        </div>   
    </article>
<?php get_footer();?>