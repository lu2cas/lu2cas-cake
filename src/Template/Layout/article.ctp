<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title><?php echo 'Luccas Silveira – ' . $article['title']; ?></title>
        <?php echo $this->Html->meta('author', $article['author']); ?>
        <?php echo $this->Html->meta('description', $article['excerpt']); ?>
        <?php echo $this->Html->meta('keywords', $article['keywords']); ?>
        <?php echo $this->Html->meta('viewport', 'width=device-width, height=device-height, initial-scale=1, maximum-scale=3'); ?>
        <?php echo $this->Html->meta('robots', 'index, follow'); ?>
        <?php echo $this->Html->meta('favicon.png', 'img/favicon.png', ['type' => 'icon']); ?>
        <meta property="og:url" content="https://lu2cas.com.br">
        <meta property="og:locale" content="pt_BR">
        <meta property="og:title" content="<?php echo $article['title']; ?>">
        <meta property="og:site_name" content="Luccas Silveira">
        <meta property="og:description" content="<?php echo $article['excerpt']; ?>">
        <meta property="og:image" content="https://lu2cas.com.br/img/favicon.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">
        <meta property="og:type" content="website">
        <?php echo $this->Html->css('../vendor/components-font-awesome/css/fontawesome-all.min.css'); ?>
        <?php echo $this->Html->css('../vendor/highlightjs/styles/atom-one-dark.css'); ?>
        <?php echo $this->Html->css('frontend.css'); ?>
        <?php echo $this->Html->css('article.css'); ?>
        <?php echo $this->Html->script('../vendor/jquery/dist/jquery.min.js'); ?>
        <?php echo $this->Html->script('../vendor/highlightjs/highlight.pack.min.js'); ?>
        <?php echo $this->Html->script('frontend.js'); ?>
        <?php echo $this->fetch('meta'); ?>
        <?php echo $this->fetch('css'); ?>
        <?php echo $this->fetch('script'); ?>
        <script>
            $(document).ready(function() {
                $('pre code').each(function(i, block) {
                    hljs.highlightBlock(block);
                });
            });
        </script>
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
            <div class="column column-12">
                <div id="top-bar" class="row">
                    <nav class="navigation-link section-wrapper column column-8">
                        <?php echo $this->Html->link('&#8636; página inicial', ['controller' => 'Home', 'action' => 'index'], ['escape' => false]); ?>
                    </nav>
                </div>
            </div>
        </header>
        <?php echo $this->fetch('content'); ?>
        <footer class="row">
            <?php echo $this->Element('Layout/footer'); ?>
        </footer>
    </body>
</html>
