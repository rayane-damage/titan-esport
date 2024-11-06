<article class="tournament">
    <div class="tournament_title">
        <h2 class="title"><?php the_title() ?></h2>
        <span class="line"></span>
    </div>
    <span class="tournament_desc">
        <?php the_content()?>
    </span>
    <div class="tournament_info">
        <h3 class="subtitle">infos générales</h3>
        <ul class="tournament_info-list">
            <li class="tournament_info-item">Date : <p class="tournament_info-value"><?php the_field('tournament_date') ?></p></li>
            <li class="tournament_info-item">Heure : <p class="tournament_info-value"><?php the_field('tournament_hour') ?></p></li>
            <li class="tournament_info-item">Organisateur : <p class="tournament_info-value"><?php the_field('to') ?></p></li>
        </ul>
    </div>
    <div class="tournament_rules">
        <h3 class="subtitle">règles</h3>
        <ul class="tournament_rules-list">
            <li class="tournament_rules-item">Format : <p class="tournament_rules-value"><?php the_field('format') ?></p></li>
            <li class="tournament_rules-item">Mode de jeu : <p class="tournament_rules-value"><?php the_field('game_mode') ?></p></li>
        </ul>
    </div>



</article>