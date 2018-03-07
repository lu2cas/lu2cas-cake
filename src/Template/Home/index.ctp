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
                    com mais de <?php echo intval(date('Y')) - 2011; ?> anos de experiência
                    projetando e codificando aplicações para a web. Também sou graduando em
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
                        <?php echo $this->Html->link('Continue lendo', ['controller' => 'Articles', 'action' => 'view', $article['slug']], ['class' => 'navigation-link']); ?>
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
                <?php $this->Form->templates(['inputContainer' => '{{content}}', 'submitContainer' => '{{content}}']); ?>
                <?php echo $this->Form->create(null, ['url' => ['controller' => 'Contacts', 'action' => 'add'], 'type' => 'post', 'novalidate' => true]); ?>
                    <div class="row">
                        <div class="column column-12">
                            <?php echo $this->Form->Control('Contacts.name', ['type' => 'text', 'placeholder' => 'Nome', 'label' => false]); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column column-12">
                            <?php echo $this->Form->Control('Contacts.email', ['type' => 'text', 'placeholder' => 'E-mail', 'label' => false]); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column column-12">
                            <?php echo $this->Form->Control('Contacts.subject', ['type' => 'text', 'placeholder' => 'Assunto', 'label' => false]); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column column-12">
                            <?php echo $this->Form->Control('Contacts.message', ['type' => 'textarea', 'placeholder' => 'Mensagem', 'label' => false]); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column column-12">
                            <?php echo $this->Form->Control('Enviar', ['type' => 'submit', 'class' => 'button', 'id' => 'send']); ?>
                        </div>
                    </div>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</section>
