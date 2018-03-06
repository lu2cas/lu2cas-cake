<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Luccas Silveira – Desenvolvedor de software</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="author" content="Luccas Carvalho Silveira"/>
        <meta name="description" content="Site pessoal de Luccas Carvalho Silveira, desenvolvedor web do Rio Grande do Sul, Brasil"/>
        <meta name="keywords" content="Luccas, Carvalho, Silveira, Desenvolvedor, Software, PHP, Web, Sites, Sistemas, Informação"/>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=3"/>
        <meta name="robots" content="index, follow">
        <meta property="og:url" content="http://lu2cas.com.br">
        <meta property="og:locale" content="pt_BR">
        <meta property="og:title" content="Luccas Silveira">
        <meta property="og:site_name" content="Luccas Silveira">
        <meta property="og:description" content="Site pessoal de Luccas Carvalho Silveira, desenvolvedor web do Rio Grande do Sul, Brasil">
        <meta property="og:image" content="http://lu2cas.com.br/assets/images/favicon.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">
        <meta property="og:type" content="website">
        <link href="assets/images/favicon.png" type="image/x-icon" rel="shortcut icon"/>
        <link rel="stylesheet" type="text/css" href="assets/css/frontend.css"/>
        <link rel="stylesheet" type="text/css" href="assets/fontawesome/svg-with-js/css/fa-svg-with-js.css"/>
        <script src="assets/jquery/dist/jquery.min.js"></script>
        <script src="assets/fontawesome/svg-with-js/js/fontawesome-all.js"></script>
        <script src="assets/js/frontend.js"></script>
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
        <?= $this->fetch('content') ?>
    </body>
</html>
