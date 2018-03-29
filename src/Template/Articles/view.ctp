<main id="post" class="row">
    <article class="section-wrapper column column-8">
        <div class="row">
            <div class="column column-12">
                <h1><?php echo $article->title; ?></h1>
                <span class="post-info h4-size"><?php echo 'Publicado em ' . $article->created_on; ?></span>
            </div>
        </div>
        <div class="row">
            <div class="column column-12">
                <p><?php echo $article->excerpt; ?></p>
                <?php echo $article->body; ?>
            </div>
        </div>
        <div class="row">
            <div class="column column-12">
                <span class="separator"></span>
            </div>
        </div>
        <div class="row">
            <div class="column column-12">
                <ul id="share-links" class="inline-list">
                    <li>
                        <a href="<?php echo 'https://www.linkedin.com/shareArticle?mini=true&url=' . $article->slug; ?>" title="Compartilhar no LinkedIn" target="_blank"><span class="hidden-text">Compartilhar no LinkedIn</span><i class="fab fa-linkedin-in fa-lg"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo 'https://www.facebook.com/sharer.php?u=' . $article->slug; ?>" title="Compartilhar no Facebook" target="_blank"><span class="hidden-text">Compartilhar no Facebook</span><i class="fab fa-facebook-f fa-lg"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo 'https://www.twitter.com/intent/tweet?url=' . $article->slug; ?>" title="Compartilhar no Twitter" target="_blank"><span class="hidden-text">Compartilhar no Twitter</span><i class="fab fa-twitter fa-lg"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo 'mailto:?&subject=' . str_replace(' ', '%20', $article->title) . '&body=' . $article->slug; ?>" title="Compartilhar por e-mail" target="_blank"><span class="hidden-text">Compartilhar por e-mail</span><i class="fas fa-envelope fa-lg"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </article>
</main>
