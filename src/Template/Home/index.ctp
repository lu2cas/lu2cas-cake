<header class="row">
    <div class="section-wrapper column column-8">
        <?php echo $this->Html->image('luccas-silveira.jpg', ['id' => 'profile-picture', 'alt' => 'Luccas Silveira']); ?>
        <h1 class="h2-size">Luccas Silveira</h1>
        <h2 class="h3-size">Desenvolvedor de software</h2>
        <div class="separator"></div>
        <ul id="social-links" class="inline-list">
            <li>
                <?php echo $this->Html->link('<span class="hidden-text">GitHub</span><i class="fab fa-github fa-lg"></i>', 'https://github.com/lu2cas', ['target' => '_blank', 'title' => 'github.com/lu2cas', 'escape' => false]); ?>
            </li>
            <li>
                <?php echo $this->Html->link('<span class="hidden-text">LinkedIn</span><i class="fab fa-linkedin-in fa-lg"></i>', 'https://linkedin.com/in/lu2cas', ['target' => '_blank', 'title' => 'linkedin.com/in/lu2cas', 'escape' => false]); ?>
            </li>
            <li>
                <?php echo $this->Html->link('<span class="hidden-text">Twitter</span><i class="fab fa-twitter fa-lg"></i>', 'https://twitter.com/lu2cas', ['target' => '_blank', 'title' => 'twitter.com/lu2cas', 'escape' => false]); ?>
            </li>
            <li>
                <?php echo $this->Html->link('<span class="hidden-text">Facebook</span><i class="fab fa-facebook-f fa-lg"></i>', 'https://facebook.com/lu2cas', ['target' => '_blank', 'title' => 'facebook.com/lu2cas', 'escape' => false]); ?>
            </li>
        </ul>
    </div>
</header>
<main id="about" class="row">
    <article class="section-wrapper column column-8">
        <div class="row heading">
            <div class="column column-12">
                <h2>Sobre</h2>
            </div>
        </div>
        <div id="presentation" class="row">
            <div class="column column-6">
                <p>
                    Olá, meu nome é Luccas Silveira! Sou um desenvolvedor de software full-stack
                    com mais de <?php echo intval(date('Y')) - 2011; ?> anos de experiência projetando e codificando aplicações para a
                    web. Também sou graduando em
                    <?php echo $this->Html->link('sistemas de informação', 'http://www.pucrs.br/facin/curso/sistemas-de-informacao/', ['target' => '_blank']); ?>
                    na PUCRS e técnico em
                    <?php echo $this->Html->link('informática', 'http://portal2.ifsul.edu.br/proen/site/catalogo_curso.php?cod=61', ['target' => '_blank']); ?>
                    pelo IFSul.
                </p>
            </div>
            <div class="column column-6">
                <p>
                    Este espaço foi criado para que eu possa compartilhar os conhecimentos que venho
                    adquirindo ao longo destes anos na área de engenharia de software. Obrigado pela
                    visita, e sinta-se à vontade para compartilhar o conteúdo disponível neste site.
                </p>
            </div>
        </div>
    </article>
</main>
<section id="blog" class="row">
    <div class="section-wrapper column column-8">
        <div class="row heading">
            <div class="column column-12">
                <h2>Blog</h2>
            </div>
        </div>
        <ul id="posts">
            <?php foreach ($articles as $article) :?>
            <li class="row">
                <div class="column column-12">
                    <div class="card">
                        <h3><?php echo $article['title']; ?></h3>
                        <span class="post-info h4-size"><?php echo $article['date']; ?></span>
                        <p>
                            <?php echo $article['excerpt']; ?>
                        </p>
                        <?php echo $this->Html->link('Continue lendo', ['controller' => 'blog', 'action' => 'view', $article['slug']], ['class' => 'navigation-link']); ?>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
<section id="contact" class="row">
    <div class="section-wrapper column column-8">
        <div class="row heading">
            <div class="column column-12">
                <h2>Contato</h2>
            </div>
        </div>
        <div class="row">
            <div class="column column-6 first-column">
                <p>
                    Entre em contato para compartilhar ideias, enviar críticas e sugestões
                    ou me convidar pra seu projeto!
                </p>
                <p>
                    Me adicione como contato no
                    <?php echo $this->Html->link('LinkedIn', 'https://www.linkedin.com/in/lu2cas/', ['target' => '_blank']); ?>
                    faça um fork dos meus projetos no
                    <?php echo $this->Html->link('Github', 'https://www.github.com/lu2cas/', ['target' => '_blank']); ?>
                    seja meu amigo no
                    <?php echo $this->Html->link('Facebook', 'https://www.facebook.com/lu2cas/', ['target' => '_blank']); ?>
                    e me siga no
                    <?php echo $this->Html->link('Twitter', 'https://www.twitter.com/lu2cas/', ['target' => '_blank']); ?>!
                </p>
                <p>
                    Ou, se você preferir, mande um "olá" através do e-mail
                    <?php echo $this->Html->link('contato@lu2cas.com.br', 'mailto:contato@lu2cas.com.br', ['target' => '_blank']); ?>,
                    ou do formulário a seguir.
                </p>
                <p>
                    :)
                </p>
            </div>
            <div class="column column-6">
                <?php echo $this->Form->create(null, ['url' => 'scripts/send_contact.php', 'type' => 'post', 'novalidate' => true]); ?>
                    <div class="row">
                        <div class="column column-12">
                            <input type="text" id="name" name="name" placeholder="Nome"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column column-12">
                            <input type="email" id="email" name="email" placeholder="E-mail"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column column-12">
                            <input type="text" id="subject" name="subject" placeholder="Assunto"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column column-12">
                            <textarea id="message" name="message" placeholder="Mensagem"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column column-12">
                            <button type="submit" id="send" class="button">Enviar</button>
                        </div>
                    </div>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</section>
<footer id="footer" class="row">
    <div class="column column-12">
        <?php echo $this->Html->link('<small>lu2cas.com.br</small>', '/', ['target' => '_blank', 'escape' => false]); ?>
        <?php echo $this->Html->link('<small id="cc-icon">Creative Commons</small>&nbsp;<small id="by-icon">CC-BY 4.0</small>', 'http://creativecommons.org/licenses/by/4.0/', ['target' => '_blank', 'rel' => 'license', 'escape' => false]); ?>
    </div>
</footer>
