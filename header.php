<!doctype html>
<html lang="pt-BR">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics --> 
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-6314706-14"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-6314706-14');
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="<?php echo $color ?>">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="<?php echo $color ?>">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $color ?>">
    <!-- /CHANGING ADDRESS AND NAVIGATION BARS' COLORS -->
    <?php if ($body_class == "index"): ?>
        <title><?php echo $titulo ?></title>
    <?php else: ?>
        <title><?php echo $titulo ?> | UNITAR</title>
    <?php endif; ?>
    <meta name="description" content="<?php echo $descricao ?>">
    <meta name="robots" content="index, follow">

    <link href="/favicon.ico" rel="shortcut icon" />
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/estilo.css">

    <style>
        #loader {
            position: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 99999;
            background-color: #fff;
            transition: all 0.5s ease-in-out;
        }
        #loader svg {
            width: 30%;
            min-width: 260px;
            max-width: 300px;
            height: auto;
        }
        .pilar #loader svg path,
        .pilar #loader svg rect {
            fill: #fff;
        }
        #loader.hide {
            opacity: 0;
            visibility: hidden;
        }
    </style>

</head>
<?php if(!isset($page_class)){ $page_class=""; } ?>
<body class="<?php echo $body_class ?> bg-<?php echo $page_class ?>">
    <div id="loader" class="bg-<?php echo $page_class ?>">
        <?php include('assets/images/logo-unitar.svg'); ?>
    </div>
    <header class="header-main bg-white">
        <div class="container">
            <div class="row align-items-center">
            <a class="navbar" href="/"><img src="assets/images/logo-unitar.svg" alt="Unitar"></a>
                <nav class="navbar navbar-inverse bg-inverse navbar-expand-lg ml-auto" id="header-navbar">
                    
                    <button class="ml-auto navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link goto" href="/#foreword">Foreword</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link goto" href="/#primary-output">Primary Output</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link goto" href="/#partnerships">Partnerships</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pillars</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="nav-link" href="/peace">Peace</a></li>
                                    <li><a class="nav-link" href="/people">People</a></li>
                                    <li><a class="nav-link" href="/planet">Planet</a></li>
                                    <li><a class="nav-link" href="/prosperity">Prosperity</a></li>
                                    <li><a class="nav-link" href="/multilateral-diplomacy">Multilateral Diplomacy</a></li>
                                    <li><a class="nav-link" href="/2030-agenda">2030 Agenda</a></li>
                                    <li><a class="nav-link" href="/unosat">UNOSAT</a></li>
                                    <li><a class="nav-link" href="/ncd">The Defeat-NCD Partnership</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="navbar-spacer"></div>
                        <a class="btn" href="/download/unitar_results_report_2019.pdf" target="_blank"><i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48.462 48.462"><defs><style>.a{fill:#3e92cf;}</style></defs><path class="a" d="M0,0A24.231,24.231,0,0,0,0,48.462,24.258,24.258,0,0,0,24.231,24.231,24.258,24.258,0,0,0,0,0M-4.2,21.911a1.362,1.362,0,0,1,1.932.114l.846.949.011-7.27A1.406,1.406,0,0,1-.034,14.3a1.4,1.4,0,0,1,1.371,1.395l-.011,7.361.926-1.029a1.368,1.368,0,1,1,2.034,1.829L.994,27.511A.712.712,0,0,1,.9,27.6l-.034.034c-.035.023-.057.046-.092.068-.011.012-.034.023-.045.035s-.046.034-.069.045a.084.084,0,0,1-.046.023l-.068.035c-.012.011-.035.011-.046.022s-.057.023-.08.035-.034.011-.046.011-.057.012-.08.023-.034.011-.046.011a.268.268,0,0,1-.091.012c-.011,0-.023.023-.034.023C.08,27.98.034,28-.011,28S-.1,27.98-.149,27.98c-.011,0-.022-.012-.034-.012a.207.207,0,0,1-.091-.023c-.012,0-.035-.011-.046-.011-.034-.011-.057-.011-.091-.023-.012,0-.035-.011-.046-.011s-.057-.023-.08-.035-.034-.011-.046-.022l-.068-.035A.1.1,0,0,0-.7,27.785c-.023-.011-.046-.034-.069-.045S-.8,27.717-.811,27.7c-.035-.022-.058-.045-.092-.068-.011-.012-.023-.023-.034-.023a.666.666,0,0,1-.092-.092L-4.3,23.865a1.386,1.386,0,0,1,.1-1.954M15.773,34.175H-15.773V24h2.743v7.429H13.03V24h2.743Z" transform="translate(24.231)"/></svg></i></a>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main class="bg-white">