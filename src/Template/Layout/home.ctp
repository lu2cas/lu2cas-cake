<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>Luccas Silveira – Desenvolvedor de software</title>
        <?php echo $this->Html->meta('author', 'Luccas Carvalho Silveira'); ?>
        <?php echo $this->Html->meta('description', 'Site pessoal de Luccas Carvalho Silveira, desenvolvedor de software full-stack do Rio Grande do Sul, Brasil'); ?>
        <?php echo $this->Html->meta('keywords', 'Luccas, Carvalho, Silveira, Desenvolvedor, Software, PHP, Web, Sites, Sistemas, Informação'); ?>
        <?php echo $this->Html->meta('viewport', 'width=device-width, height=device-height, initial-scale=1, maximum-scale=3'); ?>
        <?php echo $this->Html->meta('robots', 'index, follow'); ?>
        <?php echo $this->Html->meta('favicon.png', 'img/favicon.png', ['type' => 'icon']); ?>
        <meta property="og:url" content="https://lu2cas.com.br">
        <meta property="og:locale" content="pt_BR">
        <meta property="og:title" content="Luccas Silveira">
        <meta property="og:site_name" content="Luccas Silveira">
        <meta property="og:description" content="Site pessoal de Luccas Carvalho Silveira, desenvolvedor de software full-stack do Rio Grande do Sul, Brasil">
        <meta property="og:image" content="https://lu2cas.com.br/img/favicon.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">
        <meta property="og:type" content="website">
        <?php echo $this->Html->css('../vendor/components-font-awesome/css/fontawesome-all.min.css'); ?>
        <?php echo $this->Html->css('frontend.css'); ?>
        <?php echo $this->Html->css('home.css'); ?>
        <?php echo $this->Html->script('../vendor/jquery/dist/jquery.min.js'); ?>
        <?php echo $this->Html->script('frontend.js'); ?>
        <?php echo $this->fetch('meta'); ?>
        <?php echo $this->fetch('css'); ?>
        <?php echo $this->fetch('script'); ?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-74371832-1', 'auto');
            ga('send', 'pageview');
        </script>
    </head>
    <body>
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
        <?php echo $this->fetch('content'); ?>
        <footer class="row">
            <?php echo $this->Element('Layout/footer'); ?>
        </footer>
    </body>
</html>
