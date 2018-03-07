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
        <meta property="og:url" content="http://lu2cas.com.br">
        <meta property="og:locale" content="pt_BR">
        <meta property="og:title" content="Luccas Silveira">
        <meta property="og:site_name" content="Luccas Silveira">
        <meta property="og:description" content="Site pessoal de Luccas Carvalho Silveira, desenvolvedor de software full-stack do Rio Grande do Sul, Brasil">
        <meta property="og:image" content="http://lu2cas.com.br/assets/images/favicon.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">
        <meta property="og:type" content="website">
        <?php echo $this->Html->meta('favicon.png', 'img/favicon.png', ['type' => 'icon']); ?>
        <?php echo $this->Html->css('frontend.css'); ?>
        <?php echo $this->Html->css('fontawesome/svg-with-js/css/fa-svg-with-js.css'); ?>
        <?php echo $this->Html->script('../vendor/jquery/dist/jquery.min.js'); ?>
        <?php echo $this->Html->css('../vendor/components-font-awesome/css/fontawesome-all.min.css'); ?>
        <?php echo $this->Html->script('frontend.js'); ?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-74371832-1', 'auto');
            ga('send', 'pageview');
        </script>
    </head>
    <body id="home-content">
        <?php echo $this->fetch('content'); ?>
    </body>
</html>
