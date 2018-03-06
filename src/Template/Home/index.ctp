<header class="row">
    <div class="section-wrapper column column-8">
        <img src="assets/images/luccas-silveira.jpg" id="profile-picture" alt="Luccas Silveira"/>
        <h1 class="h2-size">Luccas Silveira</h1>
        <h2 class="h3-size">Desenvolvedor de software</h2>
        <div class="separator"></div>
        <ul id="social-links" class="inline-list">
            <li>
                <a href="https://github.com/lu2cas" title="github.com/lu2cas" target="_blank"><span class="hidden-text">GitHub</span><i class="fab fa-github fa-lg"></i></a>
            </li>
            <li>
                <a href="https://linkedin.com/in/lu2cas" title="linkedin.com/in/lu2cas" target="_blank"><span class="hidden-text">LinkedIn</span><i class="fab fa-linkedin-in fa-lg"></i></a>
            </li>
            <li>
                <a href="https://twitter.com/lu2cas" title="twitter.com/lu2cas" target="_blank"><span class="hidden-text">Twitter</span><i class="fab fa-twitter fa-lg"></i></a>
            </li>
            <li>
                <a href="https://facebook.com/lu2cas" title="facebook.com/lu2cas" target="_blank"><span class="hidden-text">Facebook</span><i class="fab fa-facebook-f fa-lg"></i></a>
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
                    com mais de 7 anos de experiência projetando e codificando aplicações para a
                    web. Também sou graduando em
                    <a href="http://www.pucrs.br/facin/curso/sistemas-de-informacao/" target="_blank">
                    sistemas de informação</a> na PUCRS e técnico em
                    <a href="http://portal2.ifsul.edu.br/proen/site/catalogo_curso.php?cod=61" target="_blank">
                    informática</a> pelo IFSul.
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
            <?php foreach ($home['blog_posts'] as $post) :?>
            <li class="row">
                <div class="column column-12">
                    <div class="card">
                        <h3><?php echo $post['title']; ?></h3>
                        <span class="post-info h4-size"><?php echo $post['date']; ?></span>
                        <p>
                            <?php echo $post['excerpt']; ?>
                        </p>
                        <a href="blog/<?php echo $post['slug']; ?>" class="navigation-link">Continue lendo</a>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
        <div class="row" id="pagination">
            <div class="column column-12">
                <!--a href="http://www.google.com" id="earlier-posts" class="navigation-link">Posts mais antigos</a-->
                <!--a href="#" id="latest-posts" class="blog-pagination">Posts mais recentes</a-->
            </div>
        </div>
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
                    <a href="http://www.linkedin.com/in/lu2cas/" target="_blank">LinkedIn</a>,
                    faça um fork dos meus projetos no
                    <a href="http://www.github.com/lu2cas/" target="_blank">GitHub</a>,
                    seja meu amigo no
                    <a href="http://www.facebook.com/lu2cas/" target="_blank">Facebook</a> e
                    me siga no <a href="http://www.twitter.com/lu2cas/" target="_blank">Twitter</a>!
                </p>
                <p>
                    Ou, se você preferir, mande um "olá" através do e-mail
                    <a href="mailto:contato@lu2cas.com.br">contato@lu2cas.com.br</a>,
                    ou do formulário a seguir.
                </p>
                <p>
                    :)
                </p>
            </div>
            <div class="column column-6">
                <form action="scripts/send_contact.php" method="post" novalidate="novalidate">
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
                </form>
            </div>
        </div>
    </div>
</section>
<footer id="footer" class="row">
    <div class="column column-12">
        <a href="http://www.lu2cas.com.br">
            <small>lu2cas.com.br</small>
        </a>
        <a rel="license" href="http://creativecommons.org/licenses/by/4.0/" target="_blank">
            <small id="cc-icon">Creative Commons</small>
            <small id="by-icon">CC-BY 4.0</small>
        </a>
    </div>
</footer>
